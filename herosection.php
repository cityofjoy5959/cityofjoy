<?php
// herosection.php - Clean Minimal Hero (No Shadows)
?>
<section class="relative min-h-[600px] lg:min-h-[660px] flex items-center justify-center overflow-hidden font-sans py-16 lg:py-24">
  
  <!-- Background Video: Cinematic Male Massage Process (16s Ambient Loop, Faceless & Professional) -->
  <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
    <video 
      autoplay 
      muted 
      loop 
      playsinline 
      preload="auto"
      poster="/assets/hero_spa_male_massage.jpg" 
      class="w-full h-full object-cover object-center"
    >
      <source src="/assets/hero_background.mp4" type="video/mp4">
      <!-- High-res fallback image if video is unsupported or in low-power mode -->
      <img 
        src="/assets/hero_spa_male_massage.jpg" 
        alt="Professional Male Massage Therapy Process in Kolkata" 
        class="w-full h-full object-cover object-center"
      />
    </video>
    <!-- Elegant serene veil maintaining text contrast & high readability -->
    <div class="absolute inset-0 bg-stone-900/30"></div>
    <div class="absolute inset-0 bg-white/60"></div>
  </div>

  <!-- Content Container (Center Aligned over clean background) -->
  <div class="w-[90%] max-w-4xl mx-auto relative z-10 text-center space-y-6">
    
    <!-- Minimal Flat Badge -->
    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-stone-200 text-stone-700 text-xs font-semibold tracking-wider uppercase">
      <span>City of Joy Therapy</span>
      <span class="text-stone-300">•</span>
      <span class="inline-flex items-center gap-1 text-stone-800">
        <svg class="w-3.5 h-3.5 text-brand" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
        </svg>
        <span>Kolkata</span>
      </span>
    </div>

    <!-- Center Aligned Main Headline -->
    <div class="space-y-3">
      <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-stone-900 tracking-tight leading-tight sm:leading-[1.15]">
        Rejuvenation at Your Doorstep
      </h1>
      <p class="font-accent text-brand text-lg sm:text-2xl lg:text-3xl font-normal">
        A Serene Haven for Body &amp; Spirit
      </p>
    </div>

    <!-- Center Aligned Subtitle (Clean & Flat) -->
    <p class="text-sm sm:text-base lg:text-lg text-stone-700 leading-relaxed font-normal max-w-2xl mx-auto px-1 sm:px-0">
      Experience professional male-to-male massage therapy and rejuvenating body exfoliation in the comfort of your home or hotel. Our skilled male therapists deliver personalized wellness treatments with the utmost care, comfort, and discretion across Kolkata.
    </p>

    <!-- Center Aligned Action Buttons: Primary (Explore Services) & Secondary (WhatsApp) -->
    <div class="flex flex-col sm:flex-row items-center justify-center gap-3 pt-2">
      <!-- Primary Button: Explore Services in Brand Color -->
      <a 
        href="#services" 
        class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-brand hover:bg-brand-hover text-white font-semibold text-sm transition-all duration-200 inline-flex items-center justify-center gap-2"
      >
        <span>Explore Services</span>
        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
      </a>

      <!-- Secondary Button: WhatsApp with White BG, Brand Secondary Border & Text -->
      <a 
        href="https://wa.me/919830414714?text=Hello%20City%20of%20Joy%20Therapy,%20I%20would%20like%20to%20inquire%20about%20booking%20a%20session." 
        target="_blank" 
        rel="noopener noreferrer" 
        class="w-full sm:w-auto px-7 py-3.5 rounded-full bg-white hover:bg-stone-50 border-2 border-[#B09CFF] text-[#8266eb] font-semibold text-sm transition-all duration-200 inline-flex items-center justify-center gap-2"
        aria-label="Chat on WhatsApp"
      >
        <svg class="w-4 h-4 fill-current text-[#8266eb]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
        </svg>
        <span>WhatsApp Inquiry</span>
      </a>
    </div>

    <!-- Center Aligned 3 Stats of Trust (Fluidly Responsive on Mobile & Tablet) -->
    <div class="pt-8 border-t border-stone-200 max-w-lg mx-auto grid grid-cols-3 gap-2 sm:gap-4 md:gap-6 text-center">
      <div class="bg-white/80 py-2.5 sm:py-3 px-1.5 sm:px-3 rounded-2xl border border-stone-200 shadow-2xs">
        <div class="text-xl sm:text-2xl md:text-3xl font-bold text-stone-900 tracking-tight">4.9 <span class="text-brand">★</span></div>
        <div class="text-[10px] sm:text-xs text-stone-600 font-medium uppercase tracking-wider mt-0.5">500+ Reviews</div>
      </div>
      <div class="bg-white/80 py-2.5 sm:py-3 px-1.5 sm:px-3 rounded-2xl border border-stone-200 shadow-2xs">
        <div class="text-xl sm:text-2xl md:text-3xl font-bold text-brand tracking-tight">100%</div>
        <div class="text-[10px] sm:text-xs text-stone-600 font-medium uppercase tracking-wider mt-0.5">Organic Oils</div>
      </div>
      <div class="bg-white/80 py-2.5 sm:py-3 px-1.5 sm:px-3 rounded-2xl border border-stone-200 shadow-2xs">
        <div class="text-xl sm:text-2xl md:text-3xl font-bold text-[#9b84fa] tracking-tight">15+</div>
        <div class="text-[10px] sm:text-xs text-stone-600 font-medium uppercase tracking-wider mt-0.5">Specialists</div>
      </div>
    </div>

  </div>
</section>
