<header class=" shadow-md py-2  sticky top-0 z-50 transition-all duration-300">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Left Side - Logo and Navigation -->
            <div class="flex items-center space-x-8">
                <!-- Logo -->
                <a href="index.php" class="flex items-center transform hover:scale-105 transition-transform duration-200">
                    <img src="images/getwebup-logo.webp" alt="Getwebup Logo" class="h-10 w-auto">
                </a>

                <!-- Desktop Navigation -->
                <nav  class="hidden lg:flex items-center space-x-1">
                    <!-- Hosting Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center gap-2.5 px-4 py-2 text-sm font-medium text-gray-700 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200">
                            <i class="fas fa-server text-white text-base"></i>
                            <span>Hosting</span>
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 top-full mt-1 w-64 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-300 overflow-hidden">
                            <div class="py-2">
                                <a href="shared-hosting.php" class="flex items-center justify-between px-4 py-3 hover:bg-blue-50 transition-colors duration-200 group/item">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-users text-white text-sm"></i>
                                        <span class="text-sm font-medium text-gray-700 group-hover/item:text-white">Shared Hosting</span>
                                    </div>
                                    <span class="bg-red-100 text-red-600 text-xs font-semibold px-2 py-0.5 rounded-full">80% OFF</span>
                                </a>
                                <a href="wordpress-hosting.php" class="flex items-center justify-between px-4 py-3 hover:bg-blue-50 transition-colors duration-200 group/item">
                                    <div class="flex items-center gap-3">
                                        <i class="fab fa-wordpress text-white text-sm"></i>
                                        <span class="text-sm font-medium text-gray-700 group-hover/item:text-white">WordPress Hosting</span>
                                    </div>
                                    <span class="bg-green-100 text-green-600 text-xs font-semibold px-2 py-0.5 rounded-full">Popular</span>
                                </a>
                                <a href="cloud-hosting.php" class="flex items-center justify-between px-4 py-3 hover:bg-blue-50 transition-colors duration-200 group/item">
                                    <div class="flex items-center gap-3">
                                        <i class="fas fa-cloud text-white text-sm"></i>
                                        <span class="text-sm font-medium text-gray-700 group-hover/item:text-white">Cloud Hosting</span>
                                    </div>
                                    <span class="bg-blue-100 text-white text-xs font-semibold px-2 py-0.5 rounded-full">71% OFF</span>
                                </a>
                                <a href="reseller-hosting.php" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors duration-200 group/item">
                                    <i class="fas fa-handshake text-white text-sm mr-3"></i>
                                    <span class="text-sm font-medium text-gray-700 group-hover/item:text-white">Reseller Hosting</span>
                                </a>
                                <a href="vps-hosting.php" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors duration-200 group/item">
                                    <i class="fas fa-server text-white text-sm mr-3"></i>
                                    <span class="text-sm font-medium text-gray-700 group-hover/item:text-white">VPS Hosting</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Domains Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center gap-1.5 px-4 py-2 text-sm font-medium text-gray-700 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200">
                            <i class="fas fa-globe text-white text-base"></i>
                            <span>Domains</span>
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 top-full mt-1 w-56 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-300 overflow-hidden">
                            <div class="py-2">
                                <a href="domain-search.php" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors duration-200 group/item">
                                    <i class="fas fa-search text-white text-sm mr-3"></i>
                                    <span class="text-sm font-medium text-gray-700 group-hover/item:text-white">Domain Search</span>
                                </a>
                                <a href="transfer-domain.php" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors duration-200 group/item">
                                    <i class="fas fa-exchange-alt text-white text-sm mr-3"></i>
                                    <span class="text-sm font-medium text-gray-700 group-hover/item:text-white">Transfer Domain</span>
                                </a>
                                <a href="domain-pricing.php" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors duration-200 group/item">
                                    <i class="fas fa-tags text-white text-sm mr-3"></i>
                                    <span class="text-sm font-medium text-gray-700 group-hover/item:text-white">Domain Pricing</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- About Us Link -->
                    <a href="about-us.php" class="flex items-center gap-1.5 px-4 py-2 text-sm font-medium text-gray-700 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200">
                        <i class="fas fa-info-circle text-white text-base"></i>
                        <span>About Us</span>
                    </a>

                    <!-- Policies Link -->
                    <a href="policies.php" class="flex items-center gap-1.5 px-4 py-2 text-sm font-medium text-gray-700 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200">
                        <i class="fas fa-shield-alt text-white text-base"></i>
                        <span>Policies</span>
                    </a>
                </nav>
            </div>

            <!-- Right Side - Login Button -->
            <div class="flex items-center gap-3">
                <!-- Desktop Login Button -->
                <a href="#" class="hidden lg:flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white px-5 py-2 rounded-lg font-semibold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-md hover:shadow-lg transform hover:scale-105">
                    <i class="fas fa-sign-in-alt text-sm"></i>
                    <span>Login</span>
                </a>

                <!-- Mobile Login Button -->
                <a href="#" class="lg:hidden flex items-center gap-1.5 bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-md">
                    <i class="fas fa-sign-in-alt text-xs"></i>
                    <span>Login</span>
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="lg:hidden text-gray-700 hover:text-white focus:outline-none p-2 rounded-lg hover:bg-gray-100 transition-all duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden fixed top-0 right-0 h-full w-80 bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out" style="z-index: 9999;">
        <div class="flex flex-col h-full">
            <!-- Mobile Menu Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <img src="images/getwebup-logo.webp" alt="Getwebup Logo" class="h-8">
                <button id="close-mobile-menu" class="text-gray-700 hover:text-white p-2 rounded-lg hover:bg-gray-100 transition-all duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu Navigation -->
            <nav class="flex-1 overflow-y-auto p-4">
                <div class="space-y-1">
                    <!-- Hosting Section -->
                    <div class="border-b border-gray-100 pb-3 mb-3">
                        <button onclick="toggleSubMenu(this, 'mobile-hosting-menu')" class="w-full flex items-center justify-between px-3 py-2.5 text-gray-700 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200 font-medium">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-server text-white"></i>
                                <span>Hosting</span>
                            </div>
                            <svg class="w-4 h-4 transform transition-transform duration-300" data-arrow-icon fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="mobile-hosting-menu" class="hidden mt-2 ml-6 space-y-1">
                            <a href="shared-hosting.php" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200">
                                <i class="fas fa-users text-white text-xs"></i>
                                <span>Shared Hosting</span>
                            </a>
                            <a href="wordpress-hosting.php" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200">
                                <i class="fab fa-wordpress text-white text-xs"></i>
                                <span>WordPress Hosting</span>
                            </a>
                            <a href="cloud-hosting.php" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200">
                                <i class="fas fa-cloud text-white text-xs"></i>
                                <span>Cloud Hosting</span>
                            </a>
                            <a href="reseller-hosting.php" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200">
                                <i class="fas fa-handshake text-white text-xs"></i>
                                <span>Reseller Hosting</span>
                            </a>
                            <a href="vps-hosting.php" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200">
                                <i class="fas fa-server text-white text-xs"></i>
                                <span>VPS Hosting</span>
                            </a>
                        </div>
                    </div>

                    <!-- Domains Section -->
                    <div class="border-b border-gray-100 pb-3 mb-3">
                        <button onclick="toggleSubMenu(this, 'mobile-domains-menu')" class="w-full flex items-center justify-between px-3 py-2.5 text-gray-700 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200 font-medium">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-globe text-white"></i>
                                <span>Domains</span>
                            </div>
                            <svg class="w-4 h-4 transform transition-transform duration-300" data-arrow-icon fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="mobile-domains-menu" class="hidden mt-2 ml-6 space-y-1">
                            <a href="domain-search.php" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200">
                                <i class="fas fa-search text-white text-xs"></i>
                                <span>Domain Search</span>
                            </a>
                            <a href="transfer-domain.php" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200">
                                <i class="fas fa-exchange-alt text-white text-xs"></i>
                                <span>Transfer Domain</span>
                            </a>
                            <a href="domain-pricing.php" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200">
                                <i class="fas fa-tags text-white text-xs"></i>
                                <span>Domain Pricing</span>
                            </a>
                        </div>
                    </div>

                    <!-- About Us -->
                    <a href="about-us.php" class="flex items-center gap-3 px-3 py-2.5 text-gray-700 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200 font-medium">
                        <i class="fas fa-info-circle text-white"></i>
                        <span>About Us</span>
                    </a>

                    <!-- Policies -->
                    <a href="policies.php" class="flex items-center gap-3 px-3 py-2.5 text-gray-700 hover:text-white hover:bg-blue-50 rounded-lg transition-all duration-200 font-medium">
                        <i class="fas fa-shield-alt text-white"></i>
                        <span>Policies</span>
                    </a>
                </div>
            </nav>

            <div class="p-4 border-t border-gray-200">
                <a href="#" class="flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-lg font-semibold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-md w-full">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Login to Account</span>
                </a>
            </div>
        </div>
    </div>

    <div id="mobile-menu-overlay" class="lg:hidden fixed inset-0 bg-black bg-opacity-50 hidden transition-opacity duration-300" style="z-index: 9998;"></div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const header = document.querySelector("header");

        // Ensure header starts as transparent
        header.classList.add("bg-transparent");
        header.classList.remove("bg-white", "shadow-md");

        window.addEventListener("scroll", function () {
            if (window.scrollY > 50) {
                header.classList.add("bg-white", "shadow-md");
                header.classList.remove("bg-transparent");
            } else {
                header.classList.remove("bg-white", "shadow-md");
                header.classList.add("bg-transparent");
            }
        });
    });
</script>