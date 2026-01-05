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
    
    
    
     <!-- Main Content Area - Home Page Specific Sections -->
    <main>
       
        <!--MAIN DOMAIN CONTENT-->

      

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Domain Search & AI Generator</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      animation: fadeIn 0.4s ease-out;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }
  </style>

  <!-- Domain Search Section - Clean and intuitive search bar -->
  <section class="py-12 px-4">
    <div class="max-w-3xl mx-auto text-center">

      <!-- Heading -->
      <h2 class="text-3xl md:text-4xl font-bold mb-3">Find Your Perfect Domain</h2>
      <p class="text-gray-600 mb-8">Search available domains or let AI suggest magical names for your brand.</p>

      <!-- Toggle Tabs -->
   <!-- Toggle Tabs -->
<div class="inline-flex bg-[#e7edff] rounded-full p-1 mb-8 shadow-sm">
  <button id="tabSearch"
    class="tab-button px-5 py-2 text-sm md:text-base font-semibold rounded-full transition bg-[#1d3b8b] text-white">
    Domain search
  </button>
  <button id="tabAI"
    class="tab-button px-5 py-2 text-sm md:text-base font-semibold rounded-full transition text-[#1d3b8b]">
    ✨ AI domain generator
  </button>
</div>

<script>
  const buttons = document.querySelectorAll('.tab-button');

  buttons.forEach(button => {
    button.addEventListener('click', () => {
      buttons.forEach(btn => {
        btn.classList.remove('bg-[#1d3b8b]', 'text-white');
        btn.classList.add('text-[#1d3b8b]');
      });

      button.classList.add('bg-[#1d3b8b]', 'text-white');
      button.classList.remove('text-[#1d3b8b]');
    });
  });
</script>


      <!-- Domain Search Styled -->
<!--     <div id="domainSearchSection" class="fade-in">-->
<!--  <form id="domainForm"-->
<!--    class="bg-white border border-blue-200 shadow-md rounded-xl px-6 py-6 flex flex-col md:flex-row items-center gap-3 flex-wrap justify-center"-->
<!--    onsubmit="checkDomain(event)">-->
    
    <!-- Search Input with Icon -->
<!--    <div class="flex items-center border border-blue-300 rounded-md px-4 py-2 bg-white w-full md:w-auto flex-grow">-->
<!--      <i class="fas fa-search text-blue-600 text-lg mr-2"></i>-->
<!--      <input id="domainInput" type="text" placeholder="Enter domain name (e.g., mywebsite)"-->
<!--        class="w-full text-base placeholder-gray-400 text-gray-700 focus:outline-none bg-transparent" required />-->
<!--    </div>-->

    <!-- Search Button -->
<!--    <button type="submit"-->
<!--      class="bg-blue-600 hover:bg-blue-700 text-white font-semibold text-sm px-6 py-3 rounded-md transition w-full md:w-auto">-->
<!--      Search Domains-->
<!--    </button>-->
<!--  </form>-->

  <!-- Result Display -->
<!--  <div id="resultMessage" class="mt-4 text-center text-lg font-medium"></div>-->
<!--</div>-->

<!-- Wrapper -->
<div id="domainSearchWrapper">
  <!-- Full Search Form (Default View) -->
  <div id="domainSearchSection" class="fade-in">
    <form id="domainForm"
      class="bg-white border border-blue-200 shadow-md rounded-xl px-6 py-6 flex flex-col md:flex-row items-center gap-3 flex-wrap justify-center"
      onsubmit="checkDomain(event)">

      <!-- Input -->
      <div class="flex items-center border border-blue-300 rounded-md px-4 py-2 bg-white w-full md:w-auto flex-grow">
        <i class="fas fa-search text-blue-600 text-lg mr-2"></i>
        <input id="domainInput" type="text" placeholder="Enter domain name (e.g., mywebsite)"
          class="w-full text-base placeholder-gray-400 text-gray-700 focus:outline-none bg-transparent" required />
      </div>

      <!-- Button -->
      <button type="submit" id="searchBtn"
        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold text-sm px-6 py-3 rounded-md transition w-full md:w-auto flex items-center justify-center">
        Search Domains
      </button>
    </form>

    <!-- Result -->
    <div id="resultMessage" class="mt-4 text-center text-lg font-medium"></div>
  </div>

  <!-- Sticky Mini Search (Scroll View Only) -->
  <div id="stickyMiniSearch" style="display: none;">
    <form id="miniSearchForm" onsubmit="checkDomain(event)"
      class="fixed top-0 left-0 w-full z-50 bg-white border-b border-blue-200 shadow-md px-4 py-2 flex items-center animate-slideDown">
      <div class="relative w-full sticky-input-wrapper">
        <input id="miniDomainInput" type="text" placeholder="Search domain..."
          class="w-full text-gray-800 placeholder-gray-400 bg-white border border-blue-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 pr-12 transition-all duration-200" required />
        <button type="submit"
          class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-blue-600 hover:bg-blue-700 text-white rounded-full flex items-center justify-center search-icon-button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </form>
  </div>
</div>

<!-- CSS -->
<style>
  @keyframes slideDown {
    from {
      transform: translateY(-100%);
    }

    to {
      transform: translateY(0);
    }
  }

  .animate-slideDown {
    animation: slideDown 0.3s ease-in-out;
  }

  #stickyMiniSearch input::placeholder {
    color: #a0aec0;
  }

  /* Default Mobile Sticky Styles */
  .sticky-input-wrapper {
    margin-top: 22px;
  }

  #stickyMiniSearch input {
    padding: 10px 16px;
    font-size: 16px; /* Prevent zoom on mobile */
  }

  .search-icon-button {
    width: 40px;
    height: 40px;
    font-size: 16px;
  }

  /* Desktop Enhancements */
  @media (min-width: 768px) {
    .sticky-input-wrapper {
      margin-top: 30px; /* More margin for PC */
      max-width: 700px;  /* Wider input on PC */
      margin-left: auto;
      margin-right: auto;
    }

    #stickyMiniSearch form {
      padding: 16px 60px;
    }

    #stickyMiniSearch input {
      padding: 14px 20px;
      font-size: 16px;
    }

    .search-icon-button {
      width: 44px;
      height: 44px;
      font-size: 18px;
    }
  }
</style>

<!-- JavaScript -->
<script>
  const domainSection = document.getElementById("domainSearchSection");
  const stickyMini = document.getElementById("stickyMiniSearch");
  const offsetTop = domainSection.offsetTop;

  window.addEventListener("scroll", () => {
    if (window.scrollY > offsetTop + 20) {
      domainSection.style.display = "none";
      stickyMini.style.display = "block";
    } else {
      domainSection.style.display = "block";
      stickyMini.style.display = "none";
    }
  });

  function checkDomain(e) {
    e.preventDefault();
    const input = document.getElementById("domainInput") || document.getElementById("miniDomainInput");
    const result = document.getElementById("resultMessage");
    const domain = input.value.trim();
    result.innerText = domain ? `Checking domain: ${domain}.com...` : '';
  }
</script>


<script>
  async function checkDomain(event) {
    event.preventDefault();

    const input = document.getElementById('domainInput').value.trim();
    const resultBox = document.getElementById('resultMessage');
    const domain = input.includes('.') ? input : input + ".com"; // default .com

    resultBox.textContent = "Checking availability...";

    try {
      const response = await fetch(`https://api.api-ninjas.com/v1/domainlookup?domain=${domain}`, {
        headers: {
          'X-Api-Key': 'YOUR_API_KEY_HERE' // 🔑 Replace with your real key
        }
      });

      const data = await response.json();

      if (data.is_registered === false) {
        resultBox.textContent = `✅ ${domain} is available!`;
        resultBox.className = "mt-4 text-center text-green-600 text-lg font-semibold";
      } else {
        resultBox.textContent = `❌ ${domain} is already taken.`;
        resultBox.className = "mt-4 text-center text-red-600 text-lg font-semibold";
      }
    } catch (error) {
      console.error(error);
      resultBox.textContent = "⚠️ Error checking domain. Please try again.";
      resultBox.className = "mt-4 text-center text-yellow-600 text-lg font-semibold";
    }
  }
</script>


      <!-- AI Generator Section -->
      <div id="aiGeneratorSection" class="hidden fade-in mt-6">
        <form class="bg-white border border-blue-200 shadow-md rounded-xl px-6 py-6">
          <input type="text" id="keywordsInput" placeholder="e.g., tech, blog, fast hosting"
            class="w-full px-4 py-3 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-400 text-gray-800 mb-4" />
          <button type="button" id="generateDomainIdeas"
            class="w-full bg-blue-600 text-white py-3 rounded-md font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2">
            <span id="generateButtonText">Generate Ideas</span>
            <div id="loadingSpinner"
              style="display: none; width: 16px; height: 16px; border: 2px solid #f3f3f3; border-top: 2px solid #fff; border-radius: 50%; animation: spin 0.6s linear infinite;">
            </div>
          </button>
          <div id="domainIdeasOutput"
            class="text-left text-sm mt-4 p-3 bg-gray-100 rounded-md border border-gray-300 min-h-[100px] font-mono whitespace-pre-line text-gray-700">
            Your domain name suggestions will appear here.
          </div>
          <div id="errorMessage" class="text-red-600 text-sm mt-2 hidden text-left"></div>
        </form>
      </div>

    </div>
  </section>

<section class="pt-0 px-4 pb-8 bg-gray-50">
 <div class="max-w-6xl mx-auto">
   <!--<h3 class="text-2xl md:text-3xl font-bold text-center mb-6 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">Domain Pricing</h3>-->
   
   <div class="flex flex-wrap lg:flex-nowrap justify-center items-center gap-x-6 gap-y-1 px-2 max-w-full mx-auto">

  <!-- .com Domain -->
  <div class="bg-white rounded-xl w-32 h-32 flex-shrink-0 flex flex-col items-center justify-center text-center shadow-md border border-gray-200 hover:shadow-lg hover:scale-105 transition-all duration-300">
    <img src="images/com-dom.png" alt=".com" class="h-10 mb-1">
    <div class="text-xs text-gray-500 line-through mb-0.5">₹1,499</div>
    <div class="text-sm font-bold text-black">₹199</div>
  </div>

  <!-- .in Domain -->
  <div class="bg-white rounded-xl w-32 h-32 flex-shrink-0 flex flex-col items-center justify-center text-center shadow-md border border-gray-200 hover:shadow-lg hover:scale-105 transition-all duration-300">
    <img src="images/in-dom.png" alt=".in" class="h-10 mb-1">
    <div class="text-xs text-gray-500 line-through mb-0.5">₹799</div>
    <div class="text-sm font-bold text-black">₹189</div>
  </div>
  
  
   <!-- .in Domain -->
  <div class="bg-white rounded-xl w-32 h-32 flex-shrink-0 flex flex-col items-center justify-center text-center shadow-md border border-gray-200 hover:shadow-lg hover:scale-105 transition-all duration-300">
    <img src="images/shop-dom.png" alt=".in" class="h-10 mb-1">
    <div class="text-xs text-gray-500 line-through mb-0.5">₹799</div>
    <div class="text-sm font-bold text-black">₹456</div>
  </div>
  
   <!-- .in Domain -->
  <div class="bg-white rounded-xl w-32 h-32 flex-shrink-0 flex flex-col items-center justify-center text-center shadow-md border border-gray-200 hover:shadow-lg hover:scale-105 transition-all duration-300">
    <img src="images/org-dom.png" alt=".in" class="h-10 mb-1">
    <div class="text-xs text-gray-500 line-through mb-0.5">₹799</div>
    <div class="text-sm font-bold text-black">₹254</div>
  </div>
  
   <!-- .in Domain -->
  <div class="bg-white rounded-xl w-32 h-32 flex-shrink-0 flex flex-col items-center justify-center text-center shadow-md border border-gray-200 hover:shadow-lg hover:scale-105 transition-all duration-300">
    <img src="images/info-dom.png" alt=".in" class="h-10 mb-1">
    <div class="text-xs text-gray-500 line-through mb-0.5">₹799</div>
    <div class="text-sm font-bold text-black">₹896</div>
  </div>
  
   <!-- .in Domain -->
  <div class="bg-white rounded-xl w-32 h-32 flex-shrink-0 flex flex-col items-center justify-center text-center shadow-md border border-gray-200 hover:shadow-lg hover:scale-105 transition-all duration-300">
    <img src="images/com-dom.png" alt=".in" class="h-10 mb-1">
    <div class="text-xs text-gray-500 line-through mb-0.5">₹799</div>
    <div class="text-sm font-bold text-black">₹785</div>
  </div>

  <!-- Repeat more domain cards here -->

</div>

   <div class="text-center mt-6">
     <p class="text-gray-600 text-sm">*Prices shown are for the first year. Renewal prices may vary.</p>
   </div>
 </div>
</section>


  <!-- JS -->
  <script>
    const tabSearch = document.getElementById('tabSearch');
    const tabAI = document.getElementById('tabAI');
    const domainSearchSection = document.getElementById('domainSearchSection');
    const aiGeneratorSection = document.getElementById('aiGeneratorSection');

    tabSearch.addEventListener('click', () => {
      domainSearchSection.classList.remove('hidden');
      aiGeneratorSection.classList.add('hidden');
      tabSearch.classList.add('bg-[#1d3b8b]', 'text-white');
      tabAI.classList.remove('bg-[#1d3b8b]', 'text-white');
      tabAI.classList.add('text-[#1d3b8b]');
    });

    tabAI.addEventListener('click', () => {
      aiGeneratorSection.classList.remove('hidden');
      domainSearchSection.classList.add('hidden');
      tabAI.classList.add('bg-[#1d3b8b]', 'text-white');
      tabSearch.classList.remove('bg-[#1d3b8b]', 'text-white');
      tabSearch.classList.add('text-[#1d3b8b]');
    });

    document.getElementById('generateDomainIdeas').addEventListener('click', function () {
      const input = document.getElementById('keywordsInput').value.trim();
      const output = document.getElementById('domainIdeasOutput');
      const error = document.getElementById('errorMessage');
      const buttonText = document.getElementById('generateButtonText');
      const spinner = document.getElementById('loadingSpinner');

      output.innerHTML = '';
      error.style.display = 'none';

      if (!input) {
        error.textContent = 'Please enter some keywords.';
        error.style.display = 'block';
        return;
      }

      spinner.style.display = 'inline-block';
      buttonText.textContent = 'Generating...';

      const keywords = input.toLowerCase().split(/[\s,]+/).filter(k => k);
      const extensions = ['.com', '.net', '.co', '.io', '.app'];
      let suggestions = [];

      keywords.forEach(word => {
        extensions.forEach(ext => {
          const base = word.replace(/\s+/g, '');
          suggestions.push(`${base}${ext}`);
          suggestions.push(`get${base}${ext}`);
          suggestions.push(`${base}hub${ext}`);
        });
      });

      suggestions = [...new Set(suggestions)].slice(0, 8);

      let index = 0;
      const magicPrefix = "✨ AI is generating magical ideas...\n\n";
      const text = suggestions.map(s => `🔹 ${s}`).join('\n');
      output.innerHTML = '';

      function typeNextChar() {
        if (index <= magicPrefix.length + text.length) {
          const current = magicPrefix + text.slice(0, index - magicPrefix.length);
          output.innerText = current + (index % 2 === 0 ? '|' : '');
          index++;
          setTimeout(typeNextChar, 30);
        } else {
          output.innerText = magicPrefix + text;
          spinner.style.display = 'none';
          buttonText.textContent = 'Generate Ideas';
        }
      }

      setTimeout(typeNextChar, 400);
    });
  </script>


 <!-- Trust Logos/Badges Section - New section based on image_bbda00.png -->
        <section class="trust-logos-section py-16 md:py-20 fade-in-section">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-gray-900">Trusted by Industry Leaders</h2>
                <div class="mb-12 flex flex-col items-center justify-center text-xl text-gray-800 font-semibold">
                    <img src="images/wordpress-websites.svg" alt="WordPress Logo" class="h-8 mb-2">
                    WordPress - Users' First Choice!
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- goole Review -->
                    <div class="trust-logo-item">
                        <img src="images/google.png" alt="Trustpilot Logo"
                            class="h-10 mb-3 hover:grayscale-0 transition-all duration-300">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="review-text">TrustScore 4.9 | 12,158 reviews</p>
                    </div>

                    <!-- HostAdvice Review -->
                    <div class="trust-logo-item">
                        <img src="images/hostadvice.png" alt="HostAdvice Logo Placeholder"
                            class="h-10 mb-3 hover:grayscale-0 transition-all duration-300">

                        <div class="rating-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="review-text">Rating: 4.6/5 | 1,601 Reviews</p>
                    </div>

                    <!-- trustpilot Reviews -->
                    <div class="trust-logo-item">
                        <img src="images/trustpilot.png" alt="Google Logo"
                            class="h-10 mb-3 hover:grayscale-0 transition-all duration-300">

                        <div class="rating-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="review-text">Rating: 4.5/5 | 5,285 Reviews</p>
                    </div>

                </div>
            </div>
        </section>
        
        <section class="py-12 px-4 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Find the ideal domain name for your business
            </h2>
        </div>
    </div>


<div style="max-width: 1200px; margin: 0 auto; padding: 20px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 30px;">
    
<!-- Responsive 3-Column Grid -->
<div style="
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  padding: 20px;
  background: #f9fafb;
  font-family: sans-serif;
">

  <!-- CARD 1 - .com -->
  <div style="background: #ffffff; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.06); padding: 24px 20px; position: relative; text-align: left; border: 1px solid #e5e7eb;">
    <div style="position: absolute; top: 12px; right: 12px; background-color: #ccfbf1; color: #0f766e; font-size: 11px; font-weight: bold; padding: 3px 10px; border-radius: 12px;">8% OFF</div>
    <div style="font-size: 24px; font-weight: bold; color: #111827; margin-top: 12px;">.com</div>
    <div style="font-size: 14px; color: #6b7280;">Get instant online credibility</div>
    <div style="font-size: 14px; color: #9ca3af; text-decoration: line-through; margin-top: 16px;">$9.66/yr</div>
    <div style="font-size: 22px; font-weight: bold; color: #1f2937;">$8.88<span style="font-size: 15px; font-weight: normal;">/yr</span></div>
    <div style="font-size: 13px; color: #6b7280;">Renew for $9.98 year</div>
    <button style="margin-top: 20px; width: 100%; padding: 10px 0; background: #f3f4f6; border: none; border-radius: 999px; font-size: 14px; font-weight: 600; color: #3b82f6; cursor: pointer;">Discover your .com</button>
  </div>

  <!-- CARD 2 - .net -->
  <div style="background: #ffffff; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.06); padding: 24px 20px; position: relative; text-align: left; border: 1px solid #e5e7eb;">
    <div style="font-size: 24px; font-weight: bold; color: #111827; margin-top: 12px;">.net</div>
    <div style="font-size: 14px; color: #6b7280;">Capture a timeless original</div>
    <div style="margin-top: 36px;"></div>
    <div style="font-size: 22px; font-weight: bold; color: #1f2937;">$11.20<span style="font-size: 15px; font-weight: normal;">/yr</span></div>
    <div style="font-size: 13px; color: #6b7280;">Renew for $11.20 year</div>
    <button style="margin-top: 20px; width: 100%; padding: 10px 0; background: #f3f4f6; border: none; border-radius: 999px; font-size: 14px; font-weight: 600; color: #3b82f6; cursor: pointer;">Discover your .net</button>
  </div>

  <!-- CARD 3 - .org -->
  <div style="background: #ffffff; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.06); padding: 24px 20px; position: relative; text-align: left; border: 1px solid #e5e7eb;">
    <div style="position: absolute; top: 12px; right: 12px; background-color: #fef9c3; color: #92400e; font-size: 11px; font-weight: bold; padding: 3px 10px; border-radius: 12px;">42% OFF</div>
    <div style="font-size: 24px; font-weight: bold; color: #111827; margin-top: 12px;">.org</div>
    <div style="font-size: 14px; color: #6b7280;">Make a difference</div>
    <div style="font-size: 14px; color: #9ca3af; text-decoration: line-through; margin-top: 16px;">$9.80/yr</div>
    <div style="font-size: 22px; font-weight: bold; color: #1f2937;">$5.62<span style="font-size: 15px; font-weight: normal;">/yr</span></div>
    <div style="font-size: 13px; color: #6b7280;">Renew for $9.80 year</div>
    <button style="margin-top: 20px; width: 100%; padding: 10px 0; background: #f3f4f6; border: none; border-radius: 999px; font-size: 14px; font-weight: 600; color: #3b82f6; cursor: pointer;">Discover your .org</button>
  </div>

  <!-- CARD 4 - .xyz -->
  <div style="background: #ffffff; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.06); padding: 24px 20px; position: relative; text-align: left; border: 1px solid #e5e7eb;">
    <div style="position: absolute; top: 12px; right: 12px; background-color: #bbf7d0; color: #15803d; font-size: 11px; font-weight: bold; padding: 3px 10px; border-radius: 12px;">90% OFF</div>
    <div style="font-size: 24px; font-weight: bold; color: #111827; margin-top: 12px;">.xyz</div>
    <div style="font-size: 14px; color: #6b7280;">Go next-generation</div>
    <div style="font-size: 14px; color: #9ca3af; text-decoration: line-through; margin-top: 16px;">$11.39/yr</div>
    <div style="font-size: 22px; font-weight: bold; color: #1f2937;">$1.00<span style="font-size: 15px; font-weight: normal;">/yr</span></div>
    <div style="font-size: 13px; color: #6b7280;">Renew for $11.39 year</div>
    <button style="margin-top: 20px; width: 100%; padding: 10px 0; background: #f3f4f6; border: none; border-radius: 999px; font-size: 14px; font-weight: 600; color: #3b82f6; cursor: pointer;">Discover your .xyz</button>
  </div>

  <!-- CARD 5 - .online -->
  <div style="background: #ffffff; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.06); padding: 24px 20px; position: relative; text-align: left; border: 1px solid #e5e7eb;">
    <div style="position: absolute; top: 12px; right: 12px; background-color: #dbeafe; color: #1d4ed8; font-size: 11px; font-weight: bold; padding: 3px 10px; border-radius: 12px;">96% OFF</div>
    <div style="font-size: 24px; font-weight: bold; color: #111827; margin-top: 12px;">.online</div>
    <div style="font-size: 14px; color: #6b7280;">Secure a modern classic</div>
    <div style="font-size: 14px; color: #9ca3af; text-decoration: line-through; margin-top: 16px;">$25.80/yr</div>
    <div style="font-size: 22px; font-weight: bold; color: #1f2937;">$0.98<span style="font-size: 15px; font-weight: normal;">/yr</span></div>
    <div style="font-size: 13px; color: #6b7280;">Renew for $25.80 year</div>
    <button style="margin-top: 20px; width: 100%; padding: 10px 0; background: #f3f4f6; border: none; border-radius: 999px; font-size: 14px; font-weight: 600; color: #3b82f6; cursor: pointer;">Discover your .online</button>
  </div>

  <!-- CARD 6 - .io -->
  <div style="background: #ffffff; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.06); padding: 24px 20px; position: relative; text-align: left; border: 1px solid #e5e7eb;">
    <div style="position: absolute; top: 12px; right: 12px; background-color: #fcd34d; color: #78350f; font-size: 11px; font-weight: bold; padding: 3px 10px; border-radius: 12px;">33% OFF</div>
    <div style="font-size: 24px; font-weight: bold; color: #111827; margin-top: 12px;">.io</div>
    <div style="font-size: 14px; color: #6b7280;">Develop your digital edge</div>
    <div style="font-size: 14px; color: #9ca3af; text-decoration: line-through; margin-top: 16px;">$46.58/yr</div>
    <div style="font-size: 22px; font-weight: bold; color: #1f2937;">$31.05<span style="font-size: 15px; font-weight: normal;">/yr</span></div>
    <div style="font-size: 13px; color: #6b7280;">Renew for $46.58 year</div>
    <button style="margin-top: 20px; width: 100%; padding: 10px 0; background: #f3f4f6; border: none; border-radius: 999px; font-size: 14px; font-weight: 600; color: #3b82f6; cursor: pointer;">Discover your .io</button>
  </div>
</div>

<!-- Responsive behavior -->
<style>
  @media (max-width: 1024px) {
    div[style*='grid-template-columns'] {
      grid-template-columns: repeat(2, 1fr) !important;
    }
  }

  @media (max-width: 640px) {
    div[style*='grid-template-columns'] {
      grid-template-columns: 1fr !important;
    }
  }
</style>

  </div>
  
  <div style="text-align: center;">
    <button style="background: #1d4ed8; color: white; border: none; padding: 12px 24px; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background-color 0.2s; min-width: 200px;" 
            onmouseover="this.style.backgroundColor='#1e40af'" 
            onmouseout="this.style.backgroundColor='#1d4ed8'">
      View all domain prices
    </button>
  </div>
</div>

<!-- Mobile responsive styles -->
<style>
  @media (max-width: 768px) {
    [style*="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr))"] {
      grid-template-columns: 1fr !important;
    }
    
    [style*="padding: 20px"] {
      padding: 10px !important;
    }
    
    [style*="padding: 16px 12px"] {
      padding: 12px 8px !important;
      font-size: 13px !important;
    }
    
    [style*="font-size: 15px"] {
      font-size: 14px !important;
    }
    
    [style*="font-size: 14px"] {
      font-size: 13px !important;
    }
    
    [style*="min-width: 200px"] {
      min-width: 100% !important;
      padding: 14px 20px !important;
    }
  }
  
  @media (max-width: 480px) {
    [style*="grid-template-columns: 1fr 1fr 1fr 1fr"] {
      grid-template-columns: 1fr 1fr 1fr 1fr !important;
    }
    
    [style*="padding: 12px 8px"] {
      padding: 10px 6px !important;
      font-size: 12px !important;
    }
    
    [style*="font-size: 14px"] {
      font-size: 12px !important;
    }
    
    [style*="font-size: 13px"] {
      font-size: 11px !important;
    }
  }
</style>


        <!-- Money Back Guarantee Section - Enhanced -->
        <section class="guarantee-section fade-in-section">
            <div class="content-wrapper">
                <div class="guarantee-text text-xl md:text-2xl font-semibold leading-relaxed">
                    <h3 class="text-2xl md:text-3xl font-extrabold mb-4">30-day money back guarantee</h3>
                    <p>
                        Fully explore the features, performance, and assess our customer support. If we do not
                        meet your expectations, ask for a refund & we will process it promptly with no
                        questions asked.
                    </p>
                </div>
                <div class="">
                    <img src="images/money-back.png" alt="Money-Back Guarantee"
                        class="w-28 sm:w-32 md:w-40 lg:w-48 h-auto mx-auto">
                </div>


            </div>
        </section>

        <!-- Proactive Support Section - New Section -->
        <section class="proactive-support-section py-16 md:py-20 fade-in-section">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">Stress-free hosting and proactive customer
                    support</h2>
                <p class="text-gray-700 mb-12 max-w-xl mx-auto support-intro">
                    We have an expert team of technical specialists to tackle all your queries with prompt assistance.
                </p>
                <div class="support-grid max-w-4xl mx-auto">
                    <div class="support-graphic-container">
                        <img src="https://placehold.co/200x200/dbeafe/1A2B68?text=Support+Chat"
                            alt="Support Chat Graphic" class="support-graphic">
                        <div class="chat-bubble top-left">
                            <p>I want to migrate my website to your hosting.</p>
                            <div class="flex items-center text-xs mt-1">
                                <img src="https://placehold.co/20x20/3b82f6/ffffff?text=U"
                                    class="w-5 h-5 rounded-full mr-1" alt="User Avatar">
                                You
                            </div>
                        </div>
                        <div class="chat-bubble bottom-right">
                            <p>Yes, we'll handle the full migration for free — no downtime.</p>
                            <div class="flex items-center text-xs mt-1 justify-end">
                                <img src="https://placehold.co/20x20/28A745/ffffff?text=N"
                                    class="w-5 h-5 rounded-full mr-1" alt="Agent Avatar">
                                Nikhil is typing...
                            </div>
                        </div>
                    </div>
                    <div class="support-features">
                        <div class="support-feature-item flex items-start">
                            <i class="fas fa-comments text-3xl"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-1">24/7 Support in English & Hindi
                                </h3>
                                <p class="text-gray-700 text-sm">Live chat, email and phone support</p>
                            </div>
                        </div>
                        <div class="support-feature-item flex items-start">
                            <i class="fas fa-handshake text-3xl"></i>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-1">Prompt and friendly response</h3>
                                <p class="text-gray-700 text-sm">Get all technical queries solved</p>
                            </div>
                        </div>
                        <div class="happiness-score">
                            <span class="score-number">94<span class="text-xl">%</span></span>
                            <span class="score-label">Happiness Score</span>
                            <p class="score-source">based on 10,966 ratings from our customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Free Website Migration Section - New Section -->
        <section class="migration-section py-16 md:py-20 fade-in-section">
            <div class="container mx-auto px-4">
                <div class="content-grid">
                    <div class="flex justify-center items-center">
                        <img src="images/website-migration.png" alt="Website Migration" class="migration-image">
                    </div>
                    <div class="migration-text">
                        <h2>Free website migration, fully managed by Us</h2>
                        <p>
                            Our experts handle the technical aspects of moving your website,
                            with data security at the utmost priority. Sit back and enjoy a
                            stress-free transition to our platform without any additional costs.
                        </p>
                        <a href="#" class="migrate-btn btn-hover-shadow">Migrate now</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stay ahead with high-speed hosting Section - New Section -->

        <section class="migration-section py-16 md:py-20 fade-in-section" style="background-color: #e6f9e6;">
            <div class="container mx-auto px-4">
                <div class="flex flex-col-reverse lg:flex-row items-center gap-10">
                    <!-- Text on the Left -->
                    <div class="lg:w-1/2 text-center lg:text-left">
                        <h2 class="text-2xl md:text-3xl font-bold text-green-900 mb-4">
                            Stay ahead with our high-speed hosting
                        </h2>
                        <p class="text-green-800 mb-6">
                            Faster servers, better business. Outpace the competition with our
                            lightning-fast web hosting speeds tailored for varied business
                            needs. Watch your site dominate search and boost SEO effortlessly.
                        </p>
                        <a href="#"
                            class="migrate-btn bg-green-600 hover:bg-green-700 text-white py-2 px-6 rounded-lg shadow-md transition duration-300 ease-in-out">
                            Get started
                        </a>
                    </div>

                    <!-- Image on the Right -->
                    <div class="lg:w-1/2 flex justify-center">
                        <img src="images/speedy-web-hosting-services.png" alt="Website Migration"
                            class="migration-image max-w-full h-auto">
                    </div>
                </div>
            </div>
        </section>




        <section class="high-speed-hosting-section py-16 md:py-20 fade-in-section bg-white">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <!-- Image on Top (Mobile) / Left (Desktop) -->
                    <div class="flex justify-center items-center">
                        <img src="images/blazing_image.png" alt="Fast Hosting"
                            class="hosting-image rounded-xl shadow-lg w-full max-w-md md:max-w-full">
                    </div>

                    <!-- Text on Bottom (Mobile) / Right (Desktop) -->
                    <div class="hosting-text text-center md:text-left">
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                            Blazing Fast Hosting for Modern Websites
                        </h2>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Supercharge your online presence with ultra-low latency and 99.99% uptime.
                            Whether you're running an e-commerce store or a growing blog, our infrastructure
                            is optimized to keep your site fast, reliable, and secure—24/7.
                        </p>
                        <ul class="text-left text-gray-600 mb-6 space-y-2 px-4 md:px-0">
                            <li>⚡ SSD-powered servers for maximum speed</li>
                            <li>🔒 Free SSL & advanced security protocols</li>
                            <li>📈 Seamless scalability for growing traffic</li>
                            <li>🌍 Global CDN for ultra-fast load times everywhere</li>
                        </ul>
                        <a href="#"
                            class="get-started-btn inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 shadow-md">
                            Get Started Now
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Company Reputation Section - New Section -->
        <section class="company-reputation-section py-16 md:py-20 fade-in-section">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">Best web hosting company dominating for
                    decades</h2>
                <p class="text-gray-700 max-w-2xl mx-auto">
                    We are the leading web hosting provider, focused on offering reliable, premium, and ultra-fast web
                    hosting services to customers globally.
                </p>
                <div class="reputation-features-grid max-w-6xl mx-auto">
                    <div class="reputation-item">
                        <i class="fas fa-award icon"></i>
                        <h3>Renowned hosting company</h3>
                        <p>
                            A leading and customer-centric India web hosting
                            provider. Rated in 2023 awards for providing
                            global clients. At our core is a commitment to
                            offering the best web hosting services.
                        </p>
                    </div>
                    <div class="reputation-item">
                        <i class="fas fa-chart-line icon"></i>
                        <h3>Smooth scalability</h3>
                        <p>
                            Our web hosting plans are designed to
                            accommodate your ever-increasing needs. Adapt to
                            increased traffic and evolving needs with a
                            superior user experience.
                        </p>
                    </div>
                    <div class="reputation-item">
                        <i class="fas fa-star-half-alt icon"></i>
                        <h3>Credible reputation</h3>
                        <p>
                            <img src="https://www.svgrepo.com/show/305886/trustpilot.svg" alt="Trustpilot icon"
                                class="inline-block h-6 mr-2">
                            Trustpilot, Google and HostAdvice verified reviews reflect our commitment to excellence.
                        </p>
                    </div>
                    <div class="reputation-item">
                        <i class="fas fa-shield-alt icon"></i>
                        <h3>Server security</h3>
                        <p>
                            Be assured your server is secured with our
                            state-of-art security and Tier-4 data
                            centers architected for resilience. Cyber
                            threats and viruses? Always at bay!
                        </p>
                    </div>
                    <div class="reputation-item">
                        <i class="fas fa-dollar-sign icon"></i>
                        <h3>Most affordable prices</h3>
                        <p>
                            Experience premium hosting features without the
                            premium price tag. Our plans are crafted to
                            deliver maximum value.
                        </p>
                    </div>
                    <div class="reputation-item">
                        <i class="fas fa-rocket icon"></i>
                        <h3>Latest technologies</h3>
                        <p>
                            At GetWebUp, we strive to enhance website speed
                            by providing latest technology. Our servers
                            get the latest PHP versions, cutting-edge
                            performance, compression algorithms like Brotli,
                            HTTP/2 and HTTP/3.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients Call to Action Section (60,000+ Clients) - New Section -->
        <section class="clients-cta-section py-16 md:py-20 fade-in-section">
            <div class="container mx-auto px-4 relative z-10">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-2">Hosting <span class="text-yellow-300">60,000+
                        Clients'</span></h2>
                <h2 class="text-3xl md:text-4xl font-extrabold mb-4">websites and apps</h2>
                <p class="subtitle">We're only missing yours!</p>
                <div class="cta-buttons">
                    <a href="tel:+918069220400" class="cta-button outline">
                        <i class="fas fa-phone-alt"></i> 080 6922 0400
                    </a>
                </div>
            </div>
        </section>

       


        <!-- Hosting Features Section - Visually appealing grid of benefits -->
        <section id="features" class="py-16 md:py-20 bg-gray-50 fade-in-section">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-gray-900">Why Choose GetwebUP?</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Feature Card 1 -->
                    <div
                        class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-2 flex flex-col items-center border border-gray-100 feature-card">
                        <div class="bg-blue-100 rounded-full w-20 h-20 mb-4 flex items-center justify-center">
                            <i class="fas fa-bolt text-3xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900">Blazing Fast Speed</h3>
                        <p class="text-gray-700 text-center">
                            Our NVMe SSD servers ensure your website loads at lightning-fast speeds, keeping your
                            visitors engaged.
                        </p>
                    </div>

                    <!-- Feature Card 2 -->
                    <div
                        class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-2 flex flex-col items-center border border-gray-100 feature-card">
                        <div class="bg-blue-100 rounded-full w-20 h-20 mb-4 flex items-center justify-center">
                            <i class="fas fa-cloud-upload-alt text-3xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900">99.95% Uptime Guarantee</h3>
                        <p class="text-gray-700 text-center">
                            We guarantee maximum uptime for your website, ensuring it's always accessible to your
                            audience.
                        </p>
                    </div>

                    <!-- Feature Card 3 -->
                    <div
                        class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-2 flex flex-col items-center border border-gray-100 feature-card">
                        <div class="bg-blue-100 rounded-full w-20 h-20 mb-4 flex items-center justify-center">
                            <i class="fas fa-headset text-3xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900">24/7 Expert Support</h3>
                        <p class="text-gray-700 text-center">
                            Our dedicated support team is available round the clock to assist you with any
                            hosting-related queries.
                        </p>
                    </div>

                    <!-- Feature Card 4 -->
                    <div
                        class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-2 flex flex-col items-center border border-gray-100 feature-card">
                        <div class="bg-blue-100 rounded-full w-20 h-20 mb-4 flex items-center justify-center">
                            <i class="fas fa-shield-alt text-3xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900">Advanced Security</h3>
                        <p class="text-gray-700 text-center">
                            Protect your website with free SSL, malware scanning, and other robust security features.
                        </p>
                    </div>

                    <!-- Feature Card 5 -->
                    <div
                        class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-2 flex flex-col items-center border border-gray-100 feature-card">
                        <div class="bg-blue-100 rounded-full w-20 h-20 mb-4 flex items-center justify-center">
                            <i class="fas fa-database text-3xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900">Daily Backups</h3>
                        <p class="text-gray-700 text-center">
                            Automated daily backups ensure your data is always safe and can be restored easily.
                        </p>
                    </div>

                    <!-- Feature Card 6 -->
                    <div
                        class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-2 flex flex-col items-center border border-gray-100 feature-card">
                        <div class="bg-blue-100 rounded-full w-20 h-20 mb-4 flex items-center justify-center">
                            <i class="fas fa-chart-line text-3xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900">Scalable Solutions</h3>
                        <p class="text-gray-700 text-center">
                            Easily upgrade or downgrade your hosting plan as your website grows and demands change.
                        </p>
                    </div>

                </div>
            </div>
        </section>


        <!-- Testimonials/Reviews Section - Engaging social proof -->


        <!--      <section class="py-16 md:py-20 bg-white fade-in-section">-->
        <!--  <div class="container mx-auto px-4 text-center">-->
        <!--    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">Hear what our valued customers have to say</h2>-->
        <!--    <p class="text-gray-700 mb-12 max-w-xl mx-auto">-->
        <!--      We highly appreciate the kind and stellar feedback from our customers immensely.-->
        <!--    </p>-->

        <!-- Carousel Wrapper -->
        <!--    <div class="relative max-w-6xl mx-auto">-->
        <!-- Scroll Buttons -->
        <!--      <button id="scrollLeft" class="absolute top-1/2 left-2 transform -translate-y-1/2 z-20 bg-white/80 backdrop-blur-lg shadow-lg w-10 h-10 flex items-center justify-center rounded-full hover:bg-blue-500 hover:text-white transition">-->
        <!--        <i class="fas fa-chevron-left text-xl"></i>-->
        <!--      </button>-->
        <!--      <button id="scrollRight" class="absolute top-1/2 right-2 transform -translate-y-1/2 z-20 bg-white/80 backdrop-blur-lg shadow-lg w-10 h-10 flex items-center justify-center rounded-full hover:bg-blue-500 hover:text-white transition">-->
        <!--        <i class="fas fa-chevron-right text-xl"></i>-->
        <!--      </button>-->

        <!-- Scrollable Container -->
        <!--      <div id="testimonials-scroll" class="flex gap-6 overflow-x-auto scroll-smooth px-4 py-4 no-scrollbar">-->



        <!-- Testimonial Cards -->
        <!--<div class="testimonial-card flex-shrink-0 w-80 bg-gray-50 p-6 rounded-xl shadow text-center">-->
        <!--  <img src="images/firos-k.png" alt="Vineet B" class="w-20 h-20 rounded-full mb-4 mx-auto object-cover">-->
        <!--  <div class="stars text-yellow-500 mb-2">-->
        <!--    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>-->
        <!--  </div>-->
        <!--  <h4 class="font-bold text-gray-900 text-lg mb-1">Vineet B</h4>-->
        <!--  <p class="text-blue-700 font-semibold mb-2">Exceptional hosting service</p>-->
        <!--  <p class="text-gray-700 italic text-sm">"GetWebUp constantly delivers on their promises of uptime and excellent service."</p>-->
        <!--</div>-->

        <!--<div class="testimonial-card flex-shrink-0 w-80 bg-gray-50 p-6 rounded-xl shadow text-center">-->
        <!--  <img src="images/swagatika-s.png" alt="Swagatika S" class="w-20 h-20 rounded-full mb-4 mx-auto object-cover">-->
        <!--  <div class="stars text-yellow-500 mb-2">-->
        <!--    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>-->
        <!--  </div>-->
        <!--  <h4 class="font-bold text-gray-900 text-lg mb-1">Swagatika S</h4>-->
        <!--  <p class="text-blue-700 font-semibold mb-2">Great value for the price</p>-->
        <!--  <p class="text-gray-700 italic text-sm">"GetWebUp is a super-fast and reliable host. Highly recommended."</p>-->
        <!--</div>-->

        <!-- <div class="testimonial-card flex-shrink-0 w-80 bg-gray-50 p-6 rounded-xl shadow text-center">-->
        <!--  <img src="images/sbio-s.png" alt="Swagatika S" class="w-20 h-20 rounded-full mb-4 mx-auto object-cover">-->
        <!--  <div class="stars text-yellow-500 mb-2">-->
        <!--    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>-->
        <!--  </div>-->
        <!--  <h4 class="font-bold text-gray-900 text-lg mb-1">Sbio S</h4>-->
        <!--  <p class="text-blue-700 font-semibold mb-2">Very great service</p>-->
        <!--  <p class="text-gray-700 italic text-sm">"GetWebUp is a super-fast server and fully Secure."</p>-->
        <!--</div>-->

        <!--<div class="testimonial-card flex-shrink-0 w-80 bg-gray-50 p-6 rounded-xl shadow text-center">-->
        <!--  <img src="images/vineet-b.png" alt="Firos K" class="w-20 h-20 rounded-full mb-4 mx-auto object-cover">-->
        <!--  <div class="stars text-yellow-500 mb-2">-->
        <!--    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>-->
        <!--  </div>-->
        <!--  <h4 class="font-bold text-gray-900 text-lg mb-1">Firo K</h4>-->
        <!--  <p class="text-blue-700 font-semibold mb-2">Ideal for business owners</p>-->
        <!--  <p class="text-gray-700 italic text-sm">"LiteSpeed servers and control panel made it easy to scale my business."</p>-->
        <!--</div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</section>-->



        <!-- Call to Action Section - Strong closing statement -->
        <section class="gradient-bg text-white py-16 md:py-20 text-center fade-in-section">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Get Started?</h2>
                <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto opacity-90">
                    Join thousands of satisfied customers and launch your website with GetwebUP today!
                </p>
                <a href="shared-hosting.html"
                    class="bg-white text-blue-800 px-8 py-3.5 rounded-full font-bold hover:bg-gray-100 transition duration-300 shadow-lg btn-hover-shadow">
                    Choose Your Plan
                </a>
            </div>
        </section>




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