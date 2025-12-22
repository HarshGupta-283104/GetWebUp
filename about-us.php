<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetwebUP - Best Web Hosting Company in India</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter for a modern, professional look -->
    <!--<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">-->
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Header Section - Reusable across all pages -->
 <?php include 'header.php'; ?>

<main style="max-width:900px;margin:30px auto;padding:25px;background:#ffffff;box-shadow:0 4px 12px rgba(0,0,0,0.05);font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:#333;line-height:1.7;font-size:16px;">

  <h1 style="color:#0b5ed7;font-size:28px;margin-bottom:20px;">About Us</h1>

  <p style="margin-bottom:20px;">Welcome to <strong>Getwebup</strong> – your trusted partner in affordable, reliable web hosting solutions. We’re dedicated to empowering individuals and businesses with cutting-edge hosting services, including free cPanel accounts, lifetime SSL certificates, and user-friendly tools that make managing your website effortless. Whether you're building a blog or scaling an online business, we ensure your site is secure, fast, and always available.</p>

  <h2 style="color:#0b5ed7;font-size:22px;margin-top:30px;margin-bottom:15px;">Our Mission</h2>
  <p style="margin-bottom:20px;">Our mission is simple: to provide high-performance hosting with no compromises. We believe in a seamless online experience for everyone, combining robust security, lightning-fast speed, and exceptional customer support to help you grow your digital presence. We aim to offer hosting solutions that are not just accessible but also easy to use, allowing you to focus on your business, creativity, and passion.</p>

  <h2 style="color:#0b5ed7;font-size:22px;margin-top:30px;margin-bottom:15px;">Why Choose Us?</h2>
  <ul style="padding-left:20px;margin-bottom:20px;">
    <li style="margin-bottom:8px;"><strong>User-Friendly cPanel:</strong> Manage your website with ease using our intuitive cPanel.</li>
    <li style="margin-bottom:8px;"><strong>Lifetime Free SSL:</strong> Security is our priority. Get SSL for free—forever.</li>
    <li style="margin-bottom:8px;"><strong>Fast and Reliable:</strong> Experience high-speed hosting with 99.9% uptime.</li>
    <li style="margin-bottom:8px;"><strong>Dedicated Support:</strong> Our team is always ready to assist you, ensuring your website stays up and running smoothly.</li>
  </ul>

  <h2 style="color:#0b5ed7;font-size:22px;margin-top:30px;margin-bottom:15px;">Meet the Founder</h2>
  <p style="margin-bottom:20px;">I’m <strong>Dev Varshney</strong>, the founder of Getwebup. As a passionate web developer and cloud management enthusiast, I started this platform to make web hosting simple and accessible for everyone. I understand the challenges of creating and managing websites, so my goal is to provide hosting services that are fast, secure, and easy to use, backed by personalized support to help you succeed online.</p>

  <h2 style="color:#0b5ed7;font-size:22px;margin-top:30px;margin-bottom:15px;">Legal Address of Owner</h2>
  <p style="margin-bottom:30px;">Teacher Colony, Hathras Junction,<br>Hathras – 204102,<br>Uttar Pradesh, India.</p>

</main>


  <!-- Footer Section - Reusable across all pages, detailed and informative -->
    <?php include 'footer.php'; ?>

    <!-- JavaScript for Mobile Menu Toggle, Countdown Timer, Section Fade-In, and Gemini API Call -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // --- Mobile Menu Toggle Logic ---
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const closeMobileMenuButton = document.getElementById('close-mobile-menu');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.add('open');
            });

            closeMobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
            });

            // Close mobile menu when a link is clicked inside it
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.remove('open');
                });
            });

            // Function to toggle sub-menus in mobile navigation
            function toggleSubMenu(button, subMenuId) {
                const subMenu = document.getElementById(subMenuId);
                const arrowIcon = button.querySelector('[data-arrow-icon]');

                if (subMenu.classList.contains('hidden')) {
                    subMenu.classList.remove('hidden');
                    subMenu.classList.add('flex');
                    arrowIcon.classList.add('rotate-180');
                } else {
                    subMenu.classList.add('hidden');
                    subMenu.classList.remove('flex');
                    arrowIcon.classList.remove('rotate-180');
                }
            }
            window.toggleSubMenu = toggleSubMenu; // Make it globally accessible for inline onclick


            // --- Hero Section Countdown Timer Logic ---
            const countdownElement = document.getElementById('hero-countdown');
            if (countdownElement) {
                const hoursSpan = document.getElementById('hours');
                const minutesSpan = document.getElementById('minutes');
                const secondsSpan = document.getElementById('seconds');

                // Set the end time to 24 hours from now for demonstration
                const endTime = new Date().getTime() + (24 * 60 * 60 * 1000);

                function updateCountdown() {
                    const now = new Date().getTime();
                    const timeLeft = endTime - now;

                    if (timeLeft < 0) {
                        countdownElement.innerHTML = '<span class="text-lg">Deal Ended!</span>';
                        clearInterval(countdownInterval);
                        return;
                    }

                    const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                    hoursSpan.innerHTML = `${String(hours).padStart(2, '0')}<span class="label">HRS</span>`;
                    minutesSpan.innerHTML = `${String(minutes).padStart(2, '0')}<span class="label">MIN</span>`;
                    secondsSpan.innerHTML = `${String(seconds).padStart(2, '0')}<span class="label">SEC</span>`;
                }

                updateCountdown(); // Initial call
                const countdownInterval = setInterval(updateCountdown, 1000);
            }

            // --- Section Fade-In on Scroll Logic ---
            const fadeSections = document.querySelectorAll('.fade-in-section');

            const observerOptions = {
                root: null, // relative to the viewport
                rootMargin: '0px',
                threshold: 0.1 // 10% of the section must be visible
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target); // Stop observing once visible
                    }
                });
            }, observerOptions);

            fadeSections.forEach(section => {
                observer.observe(section);
            });


            // --- Gemini API Integration for Domain Name Generator ---
            const generateDomainIdeasButton = document.getElementById('generateDomainIdeas');
            const keywordsInput = document.getElementById('keywordsInput');
            const domainIdeasOutput = document.getElementById('domainIdeasOutput');
            const loadingSpinner = document.getElementById('loadingSpinner');
            const generateButtonText = document.getElementById('generateButtonText');
            const errorMessageDiv = document.getElementById('errorMessage');

            generateDomainIdeasButton.addEventListener('click', async () => {
                const keywords = keywordsInput.value.trim();
                if (!keywords) {
                    errorMessageDiv.textContent = 'Please enter some keywords to generate domain ideas.';
                    errorMessageDiv.classList.remove('hidden');
                    return;
                } else {
                    errorMessageDiv.classList.add('hidden'); // Hide error if previously shown
                }

                domainIdeasOutput.textContent = ''; // Clear previous results
                loadingSpinner.classList.remove('hidden'); // Show loading spinner
                generateButtonText.textContent = 'Generating...'; // Update button text
                generateDomainIdeasButton.disabled = true; // Disable button to prevent multiple clicks

                try {
                    let chatHistory = [];
                    // Crafting a concise prompt for domain name ideas
                    const prompt = `Generate 5 creative, professional, and memorable domain name ideas based on the following keywords. Exclude TLDs (e.g., .com, .in). Provide only the domain names, one per line. Examples: techsavvy, fastcloud, creativeblog. Keywords: "${keywords}"`;
                    chatHistory.push({ role: "user", parts: [{ text: prompt }] });
                    const payload = { contents: chatHistory };
                    const apiKey = ""; // This will be automatically provided by the Canvas environment

                    const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=${apiKey}`;

                    const response = await fetch(apiUrl, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(payload)
                    });

                    const result = await response.json();

                    if (result.candidates && result.candidates.length > 0 &&
                        result.candidates[0].content && result.candidates[0].content.parts &&
                        result.candidates[0].content.parts.length > 0) {
                        const text = result.candidates[0].content.parts[0].text;
                        // Clean and format the ideas for display
                        const ideas = text.split('\n')
                            .map(line => line.trim())
                            .filter(line => line !== '')
                            .map(idea => {
                                // Basic sanitization: convert to lowercase and remove non-alphanumeric chars (except hyphens)
                                // Further complex domain validation would be backend-side
                                return idea.toLowerCase().replace(/[^a-z0-9-]/g, '');
                            });

                        if (ideas.length > 0) {
                            domainIdeasOutput.innerHTML = '<ul class="list-disc list-inside space-y-1">' + ideas.map(idea => `<li>${idea}</li>`).join('') + '</ul>';
                        } else {
                            domainIdeasOutput.textContent = 'No domain ideas could be generated. Please try different keywords.';
                        }
                    } else {
                        // Handle cases where the API response structure is unexpected
                        domainIdeasOutput.textContent = 'Failed to retrieve domain ideas. The AI response was empty or malformed.';
                    }

                } catch (error) {
                    // Catch and display any network or API errors
                    console.error('Error generating domain ideas:', error);
                    errorMessageDiv.textContent = 'An error occurred while generating ideas. Please check your network and try again.';
                    errorMessageDiv.classList.remove('hidden');
                    domainIdeasOutput.textContent = ''; // Clear output on error
                } finally {
                    // Always reset UI elements after the API call finishes
                    loadingSpinner.classList.add('hidden'); // Hide spinner
                    generateButtonText.textContent = 'Generate Ideas'; // Reset button text
                    generateDomainIdeasButton.disabled = false; // Re-enable button
                }
            });

            // --- Scroll Container Navigation Logic ---
            document.querySelectorAll('.scroll-nav-button').forEach(button => {
                button.addEventListener('click', () => {
                    const targetId = button.dataset.scrollTarget;
                    const direction = button.dataset.scrollDirection;
                    const scrollContainer = document.getElementById(targetId);

                    if (scrollContainer) {
                        const firstItem = scrollContainer.querySelector('.scroll-item');
                        if (firstItem) {
                            // Calculate scroll amount based on item width + gap
                            const itemWidth = firstItem.offsetWidth;
                            const computedStyle = getComputedStyle(scrollContainer);
                            const gap = parseFloat(computedStyle.getPropertyValue('gap'));
                            const scrollAmount = itemWidth + gap;

                            if (direction === 'left') {
                                scrollContainer.scrollBy({
                                    left: -scrollAmount,
                                    behavior: 'smooth'
                                });
                            } else if (direction === 'right') {
                                scrollContainer.scrollBy({
                                    left: scrollAmount,
                                    behavior: 'smooth'
                                });
                            }
                        }
                    }
                });
            });

            // --- Auto-Scrolling for Pricing Plans and Testimonials on Mobile/Small Tablets ---
            function setupAutoScroll(containerId) {
                const scrollContainer = document.getElementById(containerId);
                let autoScrollInterval;
                let scrollDirection = 1; // 1 for right, -1 for left

                function performScroll() {
                    if (!scrollContainer) return;

                    const items = scrollContainer.querySelectorAll('.scroll-item');
                    if (items.length === 0) return;

                    const firstItem = items[0];
                    const itemWidth = firstItem.offsetWidth;
                    const computedStyle = getComputedStyle(scrollContainer);
                    const gap = parseFloat(computedStyle.getPropertyValue('gap'));
                    const scrollAmount = itemWidth + gap;

                    // Calculate next scroll position
                    let nextScrollPosition = scrollContainer.scrollLeft + (scrollDirection * scrollAmount);

                    // Handle direction change at ends
                    if (scrollDirection === 1) { // Moving right
                        // If near or at the end
                        if (scrollContainer.scrollLeft + scrollContainer.clientWidth >= scrollContainer.scrollWidth - (gap / 2)) {
                            scrollDirection = -1; // Change to left
                            nextScrollPosition = scrollContainer.scrollWidth - scrollContainer.clientWidth; // Snap to end
                        }
                    } else { // Moving left
                        // If near or at the beginning
                        if (scrollContainer.scrollLeft <= (gap / 2)) {
                            scrollDirection = 1; // Change to right
                            nextScrollPosition = 0; // Snap to start
                        }
                    }

                    scrollContainer.scrollTo({
                        left: nextScrollPosition,
                        behavior: 'smooth'
                    });
                }

                function startAutoScrollInternal() {
                    // Only enable auto-scroll on screens where the carousel layout is active (i.e., not the grid layout)
                    if (window.innerWidth < 1024 && scrollContainer) { // lg breakpoint is 1024px
                        if (autoScrollInterval) {
                            clearInterval(autoScrollInterval);
                        }
                        autoScrollInterval = setInterval(performScroll, 3000); // Scroll every 3 seconds
                    } else {
                        // If window is resized to desktop, stop auto-scroll
                        if (autoScrollInterval) {
                            clearInterval(autoScrollInterval);
                            autoScrollInterval = null;
                        }
                    }
                }

                // Initial start
                startAutoScrollInternal();

                // Re-evaluate auto-scroll on window resize
                window.addEventListener('resize', startAutoScrollInternal);

                // Stop auto-scroll on manual user interaction (touch or scroll)
                scrollContainer.addEventListener('touchstart', () => {
                    clearInterval(autoScrollInterval);
                    autoScrollInterval = null;
                }, { passive: true }); // Use passive listener for better scroll performance

                scrollContainer.addEventListener('touchend', () => {
                    // Re-enable auto-scroll after a short delay, or if user stops interaction
                    setTimeout(startAutoScrollInternal, 5000); // Wait 5 seconds after touch to resume
                });

                scrollContainer.addEventListener('scroll', () => {
                    // Ensure that programmatic scrolls do not clear the interval
                    // This flag can be set when programmatic scroll is initiated
                    // For simplicity, we'll assume any scroll is user-initiated for now
                    clearInterval(autoScrollInterval);
                    autoScrollInterval = null;
                    // Optionally restart after a delay if desired for continuous auto-play
                    setTimeout(startAutoScrollInternal, 5000);
                });
            }

            // Setup auto-scrolling for both pricing plans and testimonials
            setupAutoScroll('pricing-plans-scroll');
            setupAutoScroll('testimonials-scroll');

        });
    </script>
</body>

</html>