<?php
$country = @geoip_country_code_by_name($_SERVER['REMOTE_ADDR']);
if ($country && $country !== 'IN') {
    header('HTTP/1.1 403 Forbidden');
    exit('Access restricted — available only in India.');
}
?>
