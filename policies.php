<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetwebUP - Best Web Hosting Company in India</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <!--<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">-->
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gray-50 text-gray-800">

   <?php include 'header.php'; ?>


<main style="max-width:900px;margin:30px auto;padding:25px;background:#ffffff;box-shadow:0 4px 12px rgba(0,0,0,0.05);font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:#333;line-height:1.7;font-size:16px;">
  
  <h1 style="color:#0b5ed7;font-size:28px;margin-bottom:20px;">Privacy Policy</h1>

  <p style="margin-bottom:15px;">Welcome to GetWebUp!</p>

  <p style="margin-bottom:20px;">At GetWebUp, we take your privacy seriously. This Privacy Policy outlines how we collect, use, and protect your personal information as you navigate our website and use our hosting services.</p>

  <h2 style="color:#0b5ed7;font-size:22px;margin-top:30px;margin-bottom:15px;">Information We Collect</h2>
  <p style="margin-bottom:10px;">We collect both personal and non-personal information when you interact with our website and services. This information may include, but is not limited to:</p>
  <ul style="padding-left:20px;margin-bottom:20px;">
    <li style="margin-bottom:8px;">Your name</li>
    <li style="margin-bottom:8px;">Contact information (e.g., email address, phone number)</li>
    <li style="margin-bottom:8px;">Payment information</li>
    <li style="margin-bottom:8px;">Usage data, including IP addresses and cookies</li>
  </ul>

  <h2 style="color:#0b5ed7;font-size:22px;margin-top:30px;margin-bottom:15px;">How We Use Your Information</h2>
  <p style="margin-bottom:10px;">We use the information we collect for various purposes, including:</p>
  <ul style="padding-left:20px;margin-bottom:20px;">
    <li style="margin-bottom:8px;">Providing and maintaining our hosting services</li>
    <li style="margin-bottom:8px;">Responding to customer inquiries and support requests</li>
    <li style="margin-bottom:8px;">Improving our website and services</li>
    <li style="margin-bottom:8px;">Sending promotional and informational emails</li>
  </ul>

  <h2 style="color:#0b5ed7;font-size:22px;margin-top:30px;margin-bottom:15px;">Data Security</h2>
  <p style="margin-bottom:20px;">We take measures to protect your data, including encryption, firewalls, and regular security assessments. However, no method of transmission over the internet or electronic storage is completely secure, and we cannot guarantee the absolute security of your data.</p>

  <h2 style="color:#0b5ed7;font-size:22px;margin-top:30px;margin-bottom:15px;">Disclosure to Third Parties</h2>
  <p style="margin-bottom:20px;">We do not sell, trade, or otherwise transfer your personal information to outside parties. This does not include trusted third parties who assist us in operating our website or providing services, provided that they agree to keep your information confidential.</p>

  <h2 style="color:#0b5ed7;font-size:22px;margin-top:30px;margin-bottom:15px;">Your Choices</h2>
  <p style="margin-bottom:20px;">You can manage your personal information, including email preferences, by logging into your account. If you wish to delete your account, please contact our support team.</p>

  <h2 style="color:#0b5ed7;font-size:22px;margin-top:30px;margin-bottom:15px;">Changes to this Privacy Policy</h2>
  <p style="margin-bottom:20px;">We may update this Privacy Policy to reflect changes to our information practices. We encourage you to periodically review this page for the latest information on our privacy practices.</p>

  <h2 style="color:#0b5ed7;font-size:22px;margin-top:30px;margin-bottom:15px;">Contact Us</h2>
  <div style="background-color:#f8f9fa;padding:15px 20px;border-left:4px solid #0b5ed7;border-radius:6px;margin-bottom:30px;">
    <p style="margin:0 0 8px 0;">If you have any questions or need further assistance regarding our privacy policy, please contact our support team:</p>
    <p style="margin:4px 0;"><strong>Email:</strong> support@getwebup.com | support@getwebup.in</p>
    <p style="margin:4px 0;"><strong>Phone:</strong> +91 7579545488</p>
    <p style="margin:4px 0;"><strong>Address:</strong> Flat 22C GetWebUp</p>
    <p style="margin:4px 0;"><strong>Website:</strong> <a href="https://getwebup.in" style="color:#0b5ed7;text-decoration:none;">https://getwebup.in</a></p>
  </div>

  <p style="font-size:14px;color:#888;margin-bottom:0;">Last Updated: 11/10/2023</p>

</main>



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