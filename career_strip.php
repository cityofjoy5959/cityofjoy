<?php
// career_strip.php - Minimal Responsive Career / Hiring Strip Section
?>
<section class="py-12 sm:py-16 bg-stone-50 font-sans border-b border-stone-200/80">
  <div class="w-[90%] max-w-7xl mx-auto">
    <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-stone-900 via-stone-850 to-stone-900 text-white p-6 sm:p-9 lg:p-12 border border-stone-800 shadow-xl">
      
      <!-- Ambient Decorative Warm Glows -->
      <div class="absolute -right-16 -top-16 w-64 h-64 bg-brand/15 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-16 -bottom-16 w-64 h-64 bg-purple-500/10 rounded-full blur-3xl pointer-events-none"></div>

      <div class="relative z-10 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 lg:gap-10">
        
        <!-- Left: Badge, Headline & Information -->
        <div class="max-w-2xl space-y-3.5">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md border border-white/15 text-rose-300 text-xs font-bold tracking-wider uppercase">
            <span class="w-2 h-2 rounded-full bg-brand animate-pulse"></span>
            <span>We're Hiring • Male Therapists</span>
          </div>

          <h3 class="text-2xl sm:text-3xl lg:text-[34px] font-bold tracking-tight text-white leading-tight">
            Looking for a Career Opportunity at Kolkata?
          </h3>

          <p class="text-stone-300 text-xs sm:text-sm sm:leading-relaxed">
            Join Kolkata's trusted doorstep male wellness team. We provide flexible booking schedules, high daily payouts, respectful clientele, and a 100% discreet, professional working environment.
          </p>

          <!-- Quick Highlight Pills -->
          <div class="flex flex-wrap items-center gap-2.5 sm:gap-4 pt-1 text-[11px] sm:text-xs font-medium text-stone-300">
            <span class="inline-flex items-center gap-1.5 bg-white/5 border border-white/10 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-brand shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span>Flexible Hours</span>
            </span>
            <span class="inline-flex items-center gap-1.5 bg-white/5 border border-white/10 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-brand shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span>Attractive Payouts</span>
            </span>
            <span class="inline-flex items-center gap-1.5 bg-white/5 border border-white/10 px-2.5 py-1 rounded-lg">
              <svg class="w-3.5 h-3.5 text-brand shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span>100% Privacy &amp; Dignity</span>
            </span>
          </div>
        </div>

        <!-- Right: Apply for Career WhatsApp Action Button -->
        <div class="shrink-0 pt-2 lg:pt-0">
          <a
            href="https://wa.me/919830414714?text=Hello%20City%20of%20Joy%20Therapy,%20I%20want%20to%20know%20about%20the%20career%20/%20job%20opportunity%20in%20Kolkata.%20I%20would%20like%20to%20know%20more%20details."
            target="_blank"
            rel="noopener noreferrer"
            class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-7 sm:px-8 py-3.5 sm:py-4 rounded-full bg-brand text-white font-bold text-sm sm:text-base hover:bg-brand-hover shadow-lg hover:shadow-brand/25 transition-all duration-300 active:scale-95 group text-center cursor-pointer">
            <svg class="w-5 h-5 fill-current text-white shrink-0" viewBox="0 0 24 24">
              <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
            </svg>
            <span>Apply for Career</span>
          </a>
        </div>

      </div>
    </div>
  </div>
</section>

