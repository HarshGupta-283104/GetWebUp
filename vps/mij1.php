<?php
session_start();

class ProxmoxAPI {
    private $host;
    private $tokenId;
    private $tokenSecret;
    
    public function __construct($host, $tokenId, $tokenSecret) {
        $this->host = $host;
        $this->tokenId = $tokenId;
        $this->tokenSecret = $tokenSecret;
    }
    
    private function apiRequest($endpoint) {
        $url = "https://{$this->host}:8006{$endpoint}";
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: PVEAPIToken={$this->tokenId}={$this->tokenSecret}"
        ]);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($error) {
            throw new Exception("cURL Error: $error");
        }
        
        if ($httpCode !== 200) {
            throw new Exception("API request failed with HTTP code: $httpCode");
        }
        
        return json_decode($response, true);
    }
    
    public function getVMStatus($node, $vmid, $type = 'qemu') {
        $endpoint = "/api2/json/nodes/{$node}/{$type}/{$vmid}/status/current";
        return $this->apiRequest($endpoint);
    }
    
    public function getVMConfig($node, $vmid, $type = 'qemu') {
        $endpoint = "/api2/json/nodes/{$node}/{$type}/{$vmid}/config";
        return $this->apiRequest($endpoint);
    }
    
    public function reboot($node, $vmid, $type = 'qemu') {
        $url = "https://{$this->host}:8006/api2/json/nodes/{$node}/{$type}/{$vmid}/status/reboot";
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: PVEAPIToken={$this->tokenId}={$this->tokenSecret}",
            "Content-Length: 0"
        ]);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($error) {
            throw new Exception("cURL Error: $error");
        }
        
        if ($httpCode !== 200) {
            throw new Exception("Reboot failed with HTTP code: $httpCode");
        }
        
        return true;
    }
}

class WhatsAppOTP {
    private $apiUrl = 'https://waclient.com/api/send';
    private $instanceId;
    private $accessToken;
    private $phoneNumber;
    
    public function __construct($instanceId, $accessToken, $phoneNumber) {
        $this->instanceId = $instanceId;
        $this->accessToken = $accessToken;
        $this->phoneNumber = $phoneNumber;
    }
    
    public function generateOTP() {
        return str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
    }
    
    public function sendOTP($otp) {
        $message = "Your OTP for Server Monitor access is: {$otp}\n\nThis code will expire in 5 minutes.\n\nDo not share this code with anyone.";
        
        $url = $this->apiUrl . '?' . http_build_query([
            'number' => $this->phoneNumber,
            'type' => 'text',
            'message' => $message,
            'instance_id' => $this->instanceId,
            'access_token' => $this->accessToken
        ]);
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($error) {
            throw new Exception("WhatsApp API Error: $error");
        }
        
        if ($httpCode !== 200) {
            throw new Exception("Failed to send OTP. HTTP Code: $httpCode");
        }
        
        $result = json_decode($response, true);
        
        if (!isset($result['status']) || $result['status'] !== 'success') {
            throw new Exception("Failed to send OTP via WhatsApp");
        }
        
        return true;
    }
}

$host = '161.248.163.18';
$tokenId = 'root@pam!getwebup';
$tokenSecret = '8c9f497d-3ef3-4c92-9006-d0f38e79e77c';
$node = 'c11';
$vmid = 1034;
$type = 'qemu';

$whatsappInstanceId = '665367808FA8E';
$whatsappAccessToken = '65716e84b1c85';
$whatsappPhoneNumber = '917047020239';

$message = '';
$otpError = '';

if (isset($_POST['generate_otp'])) {
    try {
        $whatsapp = new WhatsAppOTP($whatsappInstanceId, $whatsappAccessToken, $whatsappPhoneNumber);
        $otp = $whatsapp->generateOTP();
        
        $_SESSION['otp'] = $otp;
        $_SESSION['otp_time'] = time();
        $_SESSION['otp_attempts'] = 0;
        
        $whatsapp->sendOTP($otp);
        $message = 'OTP sent successfully to WhatsApp!';
    } catch (Exception $e) {
        $otpError = 'Error: ' . $e->getMessage();
    }
}

if (isset($_POST['verify_otp'])) {
    $enteredOTP = $_POST['otp'] ?? '';
    
    if (!isset($_SESSION['otp'])) {
        $otpError = 'No OTP generated. Please request a new OTP.';
    } elseif (time() - $_SESSION['otp_time'] > 300) {
        $otpError = 'OTP expired. Please request a new OTP.';
        unset($_SESSION['otp']);
        unset($_SESSION['otp_time']);
    } elseif ($_SESSION['otp_attempts'] >= 3) {
        $otpError = 'Too many failed attempts. Please request a new OTP.';
        unset($_SESSION['otp']);
        unset($_SESSION['otp_time']);
        unset($_SESSION['otp_attempts']);
    } elseif ($enteredOTP === $_SESSION['otp']) {
        $_SESSION['authenticated'] = true;
        unset($_SESSION['otp']);
        unset($_SESSION['otp_time']);
        unset($_SESSION['otp_attempts']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $_SESSION['otp_attempts']++;
        $remainingAttempts = 3 - $_SESSION['otp_attempts'];
        $otpError = "Invalid OTP. {$remainingAttempts} attempts remaining.";
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

$isAuthenticated = isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true;

if ($isAuthenticated && isset($_GET['action']) && $_GET['action'] === 'getstats') {
    header('Content-Type: application/json');
    try {
        $proxmox = new ProxmoxAPI($host, $tokenId, $tokenSecret);
        $status = $proxmox->getVMStatus($node, $vmid, $type);
        $config = $proxmox->getVMConfig($node, $vmid, $type);
        
        $combinedData = [
            'status' => $status,
            'config' => $config
        ];
        
        echo json_encode($combinedData);
    } catch (Exception $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
    exit;
}

if ($isAuthenticated && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reboot'])) {
    try {
        $proxmox = new ProxmoxAPI($host, $tokenId, $tokenSecret);
        $proxmox->reboot($node, $vmid, $type);
        $message = 'Server Reboot Started';
    } catch (Exception $e) {
        $message = 'Error: ' . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Monitor & Reboot</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
        }
        
        .container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            max-width: 800px;
            width: 100%;
        }
        
        .otp-container {
            max-width: 450px;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
        }
        
        .otp-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .otp-input {
            width: 100%;
            padding: 15px;
            font-size: 24px;
            text-align: center;
            border: 2px solid #ddd;
            border-radius: 10px;
            letter-spacing: 10px;
            transition: border-color 0.3s;
        }
        
        .otp-input:focus {
            outline: none;
            border-color: #667eea;
        }
        
        .otp-info {
            text-align: center;
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-label {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .stat-value {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
            line-height: 1.2;
        }
        
        .stat-subtext {
            font-size: 12px;
            color: #888;
        }
        
        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e0e0e0;
            border-radius: 4px;
            margin-top: 10px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            transition: width 0.5s ease;
        }
        
        .cpu-bar .progress-fill { background: linear-gradient(90deg, #36d1dc 0%, #5b86e5 100%); }
        .ram-bar .progress-fill { background: linear-gradient(90deg, #f093fb 0%, #f5576c 100%); }
        .disk-bar .progress-fill { background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%); }
        .net-bar .progress-fill { background: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%); }
        
        .button-container {
            text-align: center;
            margin-top: 30px;
        }
        
        button {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 15px 40px;
            font-size: 16px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
            width: 100%;
        }
        
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }
        
        button:active {
            transform: translateY(0);
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: #333;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-secondary:hover {
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }
        
        .logout-btn {
            padding: 10px 20px;
            font-size: 14px;
            width: auto;
            float: right;
        }
        
        .message {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            font-weight: bold;
            text-align: center;
        }
        
        .success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        .loading {
            text-align: center;
            color: #666;
            padding: 20px;
        }
        
        .status-indicator {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-left: 10px;
            animation: pulse 2s infinite;
        }
        
        .status-running {
            background: #28a745;
        }
        
        .status-stopped {
            background: #dc3545;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        .timer {
            text-align: center;
            color: #666;
            font-size: 14px;
            margin-top: 15px;
        }
        
        .resend-link {
            display: inline-block;
            color: #667eea;
            text-decoration: none;
            margin-top: 10px;
            font-weight: 500;
        }
        
        .resend-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php if (!$isAuthenticated): ?>
        <div class="container otp-container">
            <h1>🔐 Secure Access</h1>
            
            <?php if (!isset($_SESSION['otp'])): ?>
                <form method="POST" class="otp-form">
                    <div class="otp-info">
                        <p>To access the Server Monitor, you need to verify your identity.</p>
                        <p>A 4-digit OTP will be sent to your WhatsApp number.</p>
                    </div>
                    <button type="submit" name="generate_otp">Send OTP to WhatsApp</button>
                </form>
            <?php else: ?>
                <form method="POST" class="otp-form">
                    <div class="otp-info">
                        <p>Enter the 4-digit OTP sent to your WhatsApp</p>
                        <p><strong>+91 70470</strong></p>
                    </div>
                    <input 
                        type="text" 
                        name="otp" 
                        class="otp-input" 
                        maxlength="4" 
                        pattern="[0-9]{4}" 
                        placeholder="0000"
                        required
                        autofocus
                        inputmode="numeric"
                    >
                    <button type="submit" name="verify_otp">Verify OTP</button>
                    <div class="timer" id="timer">OTP expires in <span id="countdown">5:00</span></div>
                    <div style="text-align: center;">
                        <form method="POST" style="display: inline;">
                            <button type="submit" name="generate_otp" class="resend-link" style="background: none; box-shadow: none; padding: 0; width: auto;">Resend OTP</button>
                        </form>
                    </div>
                </form>
            <?php endif; ?>
            
            <?php if ($message): ?>
                <div class="message success">
                    <?php echo htmlspecialchars($message); ?>
                </div>
            <?php endif; ?>
            
            <?php if ($otpError): ?>
                <div class="message error">
                    <?php echo htmlspecialchars($otpError); ?>
                </div>
            <?php endif; ?>
        </div>
        
        <?php if (isset($_SESSION['otp'])): ?>
        <script>
            let timeLeft = <?php echo 300 - (time() - $_SESSION['otp_time']); ?>;
            
            function updateTimer() {
                if (timeLeft <= 0) {
                    document.getElementById('countdown').textContent = 'EXPIRED';
                    document.getElementById('timer').style.color = '#dc3545';
                    return;
                }
                
                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;
                document.getElementById('countdown').textContent = 
                    minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
                
                timeLeft--;
                setTimeout(updateTimer, 1000);
            }
            
            updateTimer();
            
            const otpInput = document.querySelector('.otp-input');
            otpInput.addEventListener('input', function(e) {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        </script>
        <?php endif; ?>
        
    <?php else: ?>
        <div class="container">
            <div style="overflow: hidden; margin-bottom: 20px;">
                <h1 style="float: left; margin: 0;">Server Monitor <span class="status-indicator status-running" id="statusIndicator"></span></h1>
                <a href="?logout=1"><button class="logout-btn btn-secondary">Logout</button></a>
            </div>
            
            <div id="statsContainer" class="stats-grid">
                <div class="loading">Loading server statistics...</div>
            </div>
            
            <form method="POST" class="button-container">
                <button type="submit" name="reboot">Reboot Server</button>
            </form>
            
            <?php if ($message): ?>
                <div class="message <?php echo strpos($message, 'Error') === false ? 'success' : 'error'; ?>">
                    <?php echo htmlspecialchars($message); ?>
                </div>
            <?php endif; ?>
        </div>

        <script>
            let previousNetIn = 0;
            let previousNetOut = 0;
            let previousTime = Date.now();
            let previousDiskRead = 0;
            let previousDiskWrite = 0;
            
            function formatBytes(bytes) {
                if (bytes === 0) return '0 B';
                const k = 1024;
                const sizes = ['B', 'KB', 'MB', 'GB', 'TB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return (bytes / Math.pow(k, i)).toFixed(2) + ' ' + sizes[i];
            }
            
            function formatBps(bps) {
                if (bps === 0) return '0 B/s';
                const k = 1024;
                const sizes = ['B/s', 'KB/s', 'MB/s', 'GB/s'];
                const i = Math.floor(Math.log(bps) / Math.log(k));
                return (bps / Math.pow(k, i)).toFixed(2) + ' ' + sizes[i];
            }
            
            function updateStats() {
                fetch('?action=getstats')
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            document.getElementById('statsContainer').innerHTML = 
                                '<div class="error" style="grid-column: 1/-1;">Error: ' + data.error + '</div>';
                            return;
                        }
                        
                        const stats = data.status.data;
                        const config = data.config.data;
                        
                        const cpuPercent = (stats.cpu * 100).toFixed(1);
                        
                        const ramPercent = ((stats.mem / stats.maxmem) * 100).toFixed(1);
                        
                        let diskUsed = 0;
                        let diskTotal = 0;
                        let diskPercent = 0;
                        let diskReadBytes = 0;
                        let diskWriteBytes = 0;
                        
                        if (stats.blockstat) {
                            const diskKeys = Object.keys(stats.blockstat);
                            if (diskKeys.length > 0) {
                                const firstDisk = diskKeys[0];
                                const diskStats = stats.blockstat[firstDisk];
                                
                                diskReadBytes = diskStats.rd_bytes || 0;
                                diskWriteBytes = diskStats.wr_bytes || 0;
                                
                                if (config[firstDisk]) {
                                    const diskConfig = config[firstDisk];
                                    const sizeMatch = diskConfig.match(/size=(\d+)([KMGT])?/i);
                                    if (sizeMatch) {
                                        let size = parseInt(sizeMatch[1]);
                                        const unit = sizeMatch[2] ? sizeMatch[2].toUpperCase() : 'G';
                                        
                                        const multipliers = { 'K': 1024, 'M': 1024*1024, 'G': 1024*1024*1024, 'T': 1024*1024*1024*1024 };
                                        diskTotal = size * (multipliers[unit] || 1024*1024*1024);
                                        
                                        diskUsed = Math.min(diskTotal * 0.4, diskTotal);
                                        diskPercent = ((diskUsed / diskTotal) * 100).toFixed(1);
                                    }
                                }
                            }
                        }
                        
                        if (diskTotal === 0 && stats.maxdisk) {
                            diskTotal = stats.maxdisk;
                            diskUsed = stats.disk || 0;
                            diskPercent = diskTotal > 0 ? ((diskUsed / diskTotal) * 100).toFixed(1) : 0;
                        }
                        
                        const currentTime = Date.now();
                        const timeDiff = (currentTime - previousTime) / 1000;
                        
                        const netIn = stats.netin || 0;
                        const netOut = stats.netout || 0;
                        
                        let speedIn = 0;
                        let speedOut = 0;
                        
                        if (previousNetIn > 0 && previousNetOut > 0 && timeDiff > 0) {
                            speedIn = (netIn - previousNetIn) / timeDiff;
                            speedOut = (netOut - previousNetOut) / timeDiff;
                            
                            speedIn = Math.max(0, speedIn);
                            speedOut = Math.max(0, speedOut);
                        }
                        
                        previousNetIn = netIn;
                        previousNetOut = netOut;
                        previousTime = currentTime;
                        
                        document.getElementById('statsContainer').innerHTML = `
                            <div class="stat-card">
                                <div class="stat-label">CPU Usage</div>
                                <div class="stat-value">${cpuPercent}%</div>
                                <div class="stat-subtext">${stats.cpus || 'N/A'} Core(s)</div>
                                <div class="progress-bar cpu-bar">
                                    <div class="progress-fill" style="width: ${cpuPercent}%"></div>
                                </div>
                            </div>
                            
                            <div class="stat-card">
                                <div class="stat-label">RAM Usage</div>
                                <div class="stat-value">${ramPercent}%</div>
                                <div class="stat-subtext">${formatBytes(stats.mem)} / ${formatBytes(stats.maxmem)}</div>
                                <div class="progress-bar ram-bar">
                                    <div class="progress-fill" style="width: ${ramPercent}%"></div>
                                </div>
                            </div>
                            
                            <div class="stat-card">
                                <div class="stat-label">Disk I/O</div>
                                <div class="stat-value" style="font-size: 18px;">
                                    ${diskTotal > 0 ? formatBytes(diskTotal) : 'N/A'}
                                </div>
                                <div class="stat-subtext">
                                    Read: ${formatBytes(diskReadBytes)}<br>
                                    Write: ${formatBytes(diskWriteBytes)}
                                </div>
                                <div class="progress-bar disk-bar">
                                    <div class="progress-fill" style="width: ${diskPercent || 0}%"></div>
                                </div>
                            </div>
                            
                            <div class="stat-card">
                                <div class="stat-label">Network Speed</div>
                                <div class="stat-value" style="font-size: 18px;">
                                    ↓ ${formatBps(speedIn)}<br>
                                    ↑ ${formatBps(speedOut)}
                                </div>
                                <div class="stat-subtext">
                                    Total: ↓ ${formatBytes(netIn)} | ↑ ${formatBytes(netOut)}
                                </div>
                                <div class="progress-bar net-bar">
                                    <div class="progress-fill" style="width: 50%"></div>
                                </div>
                            </div>
                        `;
                        
                        const indicator = document.getElementById('statusIndicator');
                        if (stats.status === 'running') {
                            indicator.className = 'status-indicator status-running';
                        } else {
                            indicator.className = 'status-indicator status-stopped';
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching stats:', error);
                        document.getElementById('statsContainer').innerHTML = 
                            '<div class="error" style="grid-column: 1/-1;">Failed to load statistics</div>';
                    });
            }
            
            updateStats();
            setInterval(updateStats, 3000);
        </script>
    <?php endif; ?>
</body>
</html>