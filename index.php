<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php require_once 'seo_helper.php'; render_seo_tags('home'); ?>

  <!-- Favicon (Lotus Emblem) -->
  <link rel="icon" type="image/png" href="/assets/favicon.png">
  <link rel="shortcut icon" type="image/png" href="/assets/favicon.png">
  <link rel="apple-touch-icon" href="/assets/favicon.png">

  <!-- Google Fonts: Playwrite IT Trad & Quicksand -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+IT+Trad:wght@100..400&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/dist/output.css">
  <!-- Tailwind CSS CDN fallback -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-stone-50 text-stone-800 antialiased selection:bg-brand selection:text-white flex flex-col min-h-screen font-sans">

  <?php include_once 'preloader.php'; ?>
  <?php include 'navbar.php'; ?>

  <main class="flex-grow">

    <!-- Hero Section Component -->
    <?php include 'herosection.php'; ?>

    <!-- Four Feature Cards in Brand Gradient -->
    <section class="py-8 sm:py-10 bg-white font-sans">
      <div class="w-[90%] max-w-7xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">

          <!-- Card 1: 100% Trustable -->
          <div class="group bg-gradient-to-br from-[#FF5454] via-[#ff5f5f] to-[#ff9898] rounded-2xl p-6 text-white shadow-xs hover:shadow-md transition-all cursor-pointer">
            <div class="card-icon w-10 h-10 rounded-xl bg-white flex items-center justify-center mb-4 shadow-xs">
              <svg class="w-5 h-5 text-brand" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
            </div>
            <h3 class="text-base font-bold text-white mb-1.5">100% Trustable</h3>
            <p class="text-xs sm:text-[13px] text-white/90 leading-relaxed">
              Certified, verified male therapists ensuring utmost comfort and discretion.
            </p>
          </div>

          <!-- Card 2: 1-Click WhatsApp Booking -->
          <div class="group bg-gradient-to-br from-[#FF5454] via-[#ff5f5f] to-[#ff9898] rounded-2xl p-6 text-white shadow-xs hover:shadow-md transition-all cursor-pointer">
            <div class="card-icon w-10 h-10 rounded-xl bg-white flex items-center justify-center mb-4 shadow-xs">
              <svg class="w-5 h-5 text-brand fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
              </svg>
            </div>
            <h3 class="text-base font-bold text-white mb-1.5">1-Click WhatsApp Booking</h3>
            <p class="text-xs sm:text-[13px] text-white/90 leading-relaxed">
              Direct concierge coordination with instant scheduling and fast confirmation.
            </p>
          </div>

          <!-- Card 3: Doorstep Service (Home & Hotel) -->
          <div class="group bg-gradient-to-br from-[#FF5454] via-[#ff5f5f] to-[#ff9898] rounded-2xl p-6 text-white shadow-xs hover:shadow-md transition-all cursor-pointer">
            <div class="card-icon w-10 h-10 rounded-xl bg-white flex items-center justify-center mb-4 shadow-xs">
              <svg class="w-5 h-5 text-brand" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
              </svg>
            </div>
            <h3 class="text-base font-bold text-white mb-1.5">Doorstep Service</h3>
            <p class="text-xs sm:text-[13px] text-white/90 leading-relaxed">
              Delivered in the privacy of your home or luxury hotel room across Kolkata.
            </p>
          </div>

          <!-- Card 4: Online & Cash Payment -->
          <div class="group bg-gradient-to-br from-[#FF5454] via-[#ff5f5f] to-[#ff9898] rounded-2xl p-6 text-white shadow-xs hover:shadow-md transition-all cursor-pointer">
            <div class="card-icon w-10 h-10 rounded-xl bg-white flex items-center justify-center mb-4 shadow-xs">
              <svg class="w-5 h-5 text-brand" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
              </svg>
            </div>
            <h3 class="text-base font-bold text-white mb-1.5">Online &amp; Cash Accepted</h3>
            <p class="text-xs sm:text-[13px] text-white/90 leading-relaxed">
              Seamless UPI, card, and net banking options, or pay cash upon session arrival.
            </p>
          </div>

        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 sm:py-24 bg-white border-b border-stone-200/60 font-sans">
      <div class="w-[90%] max-w-7xl mx-auto">

        <!-- Section Header: Minimal Perfect Title & Subtitle -->
        <div class="text-center max-w-2xl mx-auto mb-16">
          <span class="inline-block text-xs uppercase tracking-widest text-brand font-bold bg-rose-50 px-3.5 py-1.5 rounded-full mb-3">
            Therapeutic Menu
          </span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
            Our Signature Services
          </h2>
          <p class="font-accent text-base sm:text-lg text-[#B09CFF] mt-1.5 mb-3 font-normal">
            curated bodywork &amp; rejuvenation at your doorstep
          </p>
          <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
            Personalized, discrete male-to-male massage therapy and skin rejuvenation delivered directly to your home or hotel suite across Kolkata.
          </p>
        </div>

        <!-- 2 Cards Each Row (4 Cards Total) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

          <!-- Card 1: Muscle Recovery - Deep Tissue Massage -->
          <div class="bg-white rounded-3xl border border-stone-200/80 hover:border-brand/40 shadow-xs hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group">
            <!-- Full-Bleed Card Image Frame (Clean 16:9 Display) -->
            <div class="relative aspect-[16/9] w-full overflow-hidden bg-stone-100">
              <img src="/assets/service_deep_tissue.jpg" alt="Male Deep Tissue Massage Therapy in Kolkata" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" loading="lazy" />
            </div>

            <!-- Content Area -->
            <div class="p-5 sm:p-7 md:p-8 flex flex-col justify-between flex-1">
              <div>
                <span class="inline-block bg-stone-100 text-stone-700 text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-3">
                  Muscle Recovery
                </span>
                <h3 class="text-2xl sm:text-[26px] font-bold text-slate-900 mb-2.5 group-hover:text-brand transition-colors tracking-tight">
                  Deep Tissue Massage
                </h3>

                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-5 min-h-[42px]">
                  Targeted deep pressure therapy engineered to relieve severe muscle tension, back knots, lower back stiffness, and physical fatigue.
                </p>

                <!-- Clean Highlight Capsule -->
                <div class="space-y-2 mb-6 py-3.5 px-4 rounded-xl bg-stone-50 border border-stone-200/60">
                  <div class="flex items-center gap-2.5 text-xs sm:text-[13px] text-slate-700 font-medium">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>
                    <span>Focus on back, shoulders &amp; leg muscles</span>
                  </div>
                  <div class="flex items-center gap-2.5 text-xs sm:text-[13px] text-slate-700 font-medium">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>
                    <span>Warm therapeutic essential oils</span>
                  </div>
                </div>
              </div>

              <!-- Refined Pricing & Booking -->
              <div class="pt-2">
                <div class="grid grid-cols-2 gap-2.5 sm:gap-3 mb-4">
                  <button type="button" data-book-service="Deep Tissue Massage" data-book-duration="60" class="py-2.5 px-2 sm:px-3 rounded-xl bg-stone-50 border border-stone-200/70 hover:border-brand/60 hover:bg-rose-50/20 text-center transition-all active:scale-95 cursor-pointer flex flex-col items-center justify-center">
                    <span class="text-xs font-bold text-slate-800 block">Standard</span>
                    <span class="text-lg sm:text-xl font-extrabold text-slate-900 block my-0.5 leading-tight">₹799</span>
                    <span class="text-[11px] font-medium text-slate-500 whitespace-nowrap block">(60 min)</span>
                  </button>
                  <button type="button" data-book-service="Deep Tissue Massage" data-book-duration="90" class="relative py-2.5 px-2 sm:px-3 rounded-xl bg-rose-50/50 border border-brand/20 hover:border-brand text-center transition-all active:scale-95 cursor-pointer flex flex-col items-center justify-center">
                    <span class="absolute -top-2 right-2.5 text-[9px] font-bold uppercase tracking-wider text-white bg-brand px-1.5 py-0.5 rounded-full shadow-2xs">Best Value</span>
                    <span class="text-xs font-bold text-brand block">Extended</span>
                    <span class="text-lg sm:text-xl font-extrabold text-brand block my-0.5 leading-tight">₹999</span>
                    <span class="text-[11px] font-medium text-brand/80 whitespace-nowrap block">(90 min)</span>
                  </button>
                </div>

                <button type="button"
                  data-book-service="Deep Tissue Massage"
                  data-book-duration="90"
                  class="w-full inline-flex items-center justify-center py-3.5 px-6 rounded-xl bg-brand text-white font-bold text-sm sm:text-base hover:bg-brand-hover shadow-xs hover:shadow-md transition-all active:scale-[0.99] cursor-pointer">
                  <span>Book Appointment</span>
                </button>
              </div>
            </div>
          </div>

          <!-- Card 2: Reflexology & Stress - Head & Foot Massage -->
          <div class="bg-white rounded-3xl border border-stone-200/80 hover:border-brand/40 shadow-xs hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group">
            <!-- Full-Bleed Card Image Frame (Clean 16:9 Display) -->
            <div class="relative aspect-[16/9] w-full overflow-hidden bg-stone-100">
              <img src="/assets/service_head_foot.jpg" alt="Head and Foot Reflexology Male Massage Kolkata" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" loading="lazy" />
            </div>

            <!-- Content Area -->
            <div class="p-5 sm:p-7 md:p-8 flex flex-col justify-between flex-1">
              <div>
                <span class="inline-block bg-stone-100 text-stone-700 text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-3">
                  Reflexology &amp; Stress
                </span>
                <h3 class="text-2xl sm:text-[26px] font-bold text-slate-900 mb-2.5 group-hover:text-brand transition-colors tracking-tight">
                  Head &amp; Foot Massage
                </h3>

                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-5 min-h-[42px]">
                  Scalp acupressure massage to soothe mental stress and headache, combined with deep foot reflexology to eliminate lower leg fatigue.
                </p>

                <!-- Clean Highlight Capsule -->
                <div class="space-y-2 mb-6 py-3.5 px-4 rounded-xl bg-stone-50 border border-stone-200/60">
                  <div class="flex items-center gap-2.5 text-xs sm:text-[13px] text-slate-700 font-medium">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>
                    <span>Scalp, temple &amp; neck tension release</span>
                  </div>
                  <div class="flex items-center gap-2.5 text-xs sm:text-[13px] text-slate-700 font-medium">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>
                    <span>Sole pressure point reflexology</span>
                  </div>
                </div>
              </div>

              <!-- Refined Pricing & Booking -->
              <div class="pt-2">
                <div class="grid grid-cols-2 gap-2.5 sm:gap-3 mb-4">
                  <button type="button" data-book-service="Head & Foot Massage" data-book-duration="60" class="py-2.5 px-2 sm:px-3 rounded-xl bg-stone-50 border border-stone-200/70 hover:border-brand/60 hover:bg-rose-50/20 text-center transition-all active:scale-95 cursor-pointer flex flex-col items-center justify-center">
                    <span class="text-xs font-bold text-slate-800 block">Standard</span>
                    <span class="text-lg sm:text-xl font-extrabold text-slate-900 block my-0.5 leading-tight">₹499</span>
                    <span class="text-[11px] font-medium text-slate-500 whitespace-nowrap block">(60 min)</span>
                  </button>
                  <button type="button" data-book-service="Head & Foot Massage" data-book-duration="90" class="relative py-2.5 px-2 sm:px-3 rounded-xl bg-rose-50/50 border border-brand/20 hover:border-brand text-center transition-all active:scale-95 cursor-pointer flex flex-col items-center justify-center">
                    <span class="absolute -top-2 right-2.5 text-[9px] font-bold uppercase tracking-wider text-white bg-brand px-1.5 py-0.5 rounded-full shadow-2xs">Best Value</span>
                    <span class="text-xs font-bold text-brand block">Extended</span>
                    <span class="text-lg sm:text-xl font-extrabold text-brand block my-0.5 leading-tight">₹699</span>
                    <span class="text-[11px] font-medium text-brand/80 whitespace-nowrap block">(90 min)</span>
                  </button>
                </div>

                <button type="button"
                  data-book-service="Head & Foot Massage"
                  data-book-duration="90"
                  class="w-full inline-flex items-center justify-center py-3.5 px-6 rounded-xl bg-brand text-white font-bold text-sm sm:text-base hover:bg-brand-hover shadow-xs hover:shadow-md transition-all active:scale-[0.99] cursor-pointer">
                  <span>Book Appointment</span>
                </button>
              </div>
            </div>
          </div>

          <!-- Card 3: Skin Cleansing & Polish - Body Scrubbing -->
          <div class="bg-white rounded-3xl border border-stone-200/80 hover:border-brand/40 shadow-xs hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group">
            <!-- Full-Bleed Card Image Frame (Clean 16:9 Display) -->
            <div class="relative aspect-[16/9] w-full overflow-hidden bg-stone-100">
              <img src="/assets/service_body_scrub.jpg" alt="Full Body Exfoliating Scrub Therapy in Kolkata" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" loading="lazy" />
            </div>

            <!-- Content Area -->
            <div class="p-5 sm:p-7 md:p-8 flex flex-col justify-between flex-1">
              <div>
                <span class="inline-block bg-stone-100 text-stone-700 text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-3">
                  Skin Cleansing &amp; Polish
                </span>
                <h3 class="text-2xl sm:text-[26px] font-bold text-slate-900 mb-2.5 group-hover:text-brand transition-colors tracking-tight">
                  Body Scrubbing
                </h3>

                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-5 min-h-[42px]">
                  Full-body exfoliating scrub therapy using botanical formulations. Removes dead skin, clears skin pores, and restores smooth skin vitality.
                </p>

                <!-- Clean Highlight Capsule -->
                <div class="space-y-2 mb-6 py-3.5 px-4 rounded-xl bg-stone-50 border border-stone-200/60">
                  <div class="flex items-center gap-2.5 text-xs sm:text-[13px] text-slate-700 font-medium">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>
                    <span>Organic botanical scrub formulation</span>
                  </div>
                  <div class="flex items-center gap-2.5 text-xs sm:text-[13px] text-slate-700 font-medium">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>
                    <span>Clears pore congestion &amp; tanning</span>
                  </div>
                </div>
              </div>

              <!-- Refined Pricing & Booking -->
              <div class="pt-2">
                <div class="grid grid-cols-2 gap-2.5 sm:gap-3 mb-4">
                  <button type="button" data-book-service="Body Scrubbing" data-book-duration="60" class="py-2.5 px-2 sm:px-3 rounded-xl bg-stone-50 border border-stone-200/70 hover:border-brand/60 hover:bg-rose-50/20 text-center transition-all active:scale-95 cursor-pointer flex flex-col items-center justify-center">
                    <span class="text-xs font-bold text-slate-800 block">Standard</span>
                    <span class="text-lg sm:text-xl font-extrabold text-slate-900 block my-0.5 leading-tight">₹799</span>
                    <span class="text-[11px] font-medium text-slate-500 whitespace-nowrap block">(60 min)</span>
                  </button>
                  <button type="button" data-book-service="Body Scrubbing" data-book-duration="90" class="relative py-2.5 px-2 sm:px-3 rounded-xl bg-rose-50/50 border border-brand/20 hover:border-brand text-center transition-all active:scale-95 cursor-pointer flex flex-col items-center justify-center">
                    <span class="absolute -top-2 right-2.5 text-[9px] font-bold uppercase tracking-wider text-white bg-brand px-1.5 py-0.5 rounded-full shadow-2xs">Best Value</span>
                    <span class="text-xs font-bold text-brand block">Extended</span>
                    <span class="text-lg sm:text-xl font-extrabold text-brand block my-0.5 leading-tight">₹999</span>
                    <span class="text-[11px] font-medium text-brand/80 whitespace-nowrap block">(90 min)</span>
                  </button>
                </div>

                <button type="button"
                  data-book-service="Body Scrubbing"
                  data-book-duration="90"
                  class="w-full inline-flex items-center justify-center py-3.5 px-6 rounded-xl bg-brand text-white font-bold text-sm sm:text-base hover:bg-brand-hover shadow-xs hover:shadow-md transition-all active:scale-[0.99] cursor-pointer">
                  <span>Book Appointment</span>
                </button>
              </div>
            </div>
          </div>

          <!-- Card 4: Full Body Relaxation - Men's Wellness Therapy -->
          <div class="bg-white rounded-3xl border border-stone-200/80 hover:border-brand/40 shadow-xs hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col justify-between group">
            <!-- Full-Bleed Card Image Frame (Clean 16:9 Display) -->
            <div class="relative aspect-[16/9] w-full overflow-hidden bg-stone-100">
              <img src="/assets/service_mens_wellness.jpg" alt="Men's Full Body Relaxation Massage in Kolkata" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" loading="lazy" />
            </div>

            <!-- Content Area -->
            <div class="p-5 sm:p-7 md:p-8 flex flex-col justify-between flex-1">
              <div>
                <span class="inline-block bg-stone-100 text-stone-700 text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-3">
                  Full Body Relaxation
                </span>
                <h3 class="text-2xl sm:text-[26px] font-bold text-slate-900 mb-2.5 group-hover:text-brand transition-colors tracking-tight">
                  Men's Wellness Therapy
                </h3>

                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-5 min-h-[42px]">
                  A harmonious blend of Swedish strokes and light oil body work crafted to improve blood circulation and soothe physical exhaustion.
                </p>

                <!-- Clean Highlight Capsule -->
                <div class="space-y-2 mb-6 py-3.5 px-4 rounded-xl bg-stone-50 border border-stone-200/60">
                  <div class="flex items-center gap-2.5 text-xs sm:text-[13px] text-slate-700 font-medium">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>
                    <span>Rhythmic full-body strokes</span>
                  </div>
                  <div class="flex items-center gap-2.5 text-xs sm:text-[13px] text-slate-700 font-medium">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>
                    <span>Warm aromatic oil infusion</span>
                  </div>
                </div>
              </div>

              <!-- Refined Pricing & Booking -->
              <div class="pt-2">
                <div class="grid grid-cols-2 gap-2.5 sm:gap-3 mb-4">
                  <button type="button" data-book-service="Men's Wellness Therapy" data-book-duration="60" class="py-2.5 px-2 sm:px-3 rounded-xl bg-stone-50 border border-stone-200/70 hover:border-brand/60 hover:bg-rose-50/20 text-center transition-all active:scale-95 cursor-pointer flex flex-col items-center justify-center">
                    <span class="text-xs font-bold text-slate-800 block">Standard</span>
                    <span class="text-lg sm:text-xl font-extrabold text-slate-900 block my-0.5 leading-tight">₹799</span>
                    <span class="text-[11px] font-medium text-slate-500 whitespace-nowrap block">(60 min)</span>
                  </button>
                  <button type="button" data-book-service="Men's Wellness Therapy" data-book-duration="90" class="relative py-2.5 px-2 sm:px-3 rounded-xl bg-rose-50/50 border border-brand/20 hover:border-brand text-center transition-all active:scale-95 cursor-pointer flex flex-col items-center justify-center">
                    <span class="absolute -top-2 right-2.5 text-[9px] font-bold uppercase tracking-wider text-white bg-brand px-1.5 py-0.5 rounded-full shadow-2xs">Best Value</span>
                    <span class="text-xs font-bold text-brand block">Extended</span>
                    <span class="text-lg sm:text-xl font-extrabold text-brand block my-0.5 leading-tight">₹999</span>
                    <span class="text-[11px] font-medium text-brand/80 whitespace-nowrap block">(90 min)</span>
                  </button>
                </div>

                <button type="button"
                  data-book-service="Men's Wellness Therapy"
                  data-book-duration="90"
                  class="w-full inline-flex items-center justify-center py-3.5 px-6 rounded-xl bg-brand text-white font-bold text-sm sm:text-base hover:bg-brand-hover shadow-xs hover:shadow-md transition-all active:scale-[0.99] cursor-pointer">
                  <span>Book Appointment</span>
                </button>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- User-Friendly Minimal About Section -->
    <section id="about" class="py-20 sm:py-24 bg-[#FCFBFA] border-b border-stone-200/60 font-sans">
      <div class="w-[90%] max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

          <!-- Left: Minimal Visual Frame with Trust Badges (5 cols) -->
          <div class="lg:col-span-5">
            <div class="relative rounded-3xl overflow-hidden shadow-lg border border-stone-200/80 bg-stone-100 aspect-[4/5] sm:aspect-[3/4] lg:h-[520px] w-full group">
              <img
                src="/assets/spa_time_banner.png"
                alt="City of Joy Therapy Ambience"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out"
                loading="lazy" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-black/20 pointer-events-none"></div>

              <!-- Floating Location Pill on Photo -->
              <div class="absolute top-3 left-3 sm:top-4 sm:left-4 bg-white/95 backdrop-blur-md px-3 sm:px-3.5 py-1.5 rounded-full shadow-xs flex items-center gap-1.5 border border-white/80">
                <svg class="w-3.5 h-3.5 text-brand shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-[11px] sm:text-xs font-bold text-slate-800 whitespace-nowrap">Home &amp; Hotel Service • Kolkata</span>
              </div>

              <!-- Pinned Reassuring Metrics Inside Photo Frame (Clean Frosted Minimal Card) -->
              <div class="absolute bottom-3 sm:bottom-5 left-3 sm:left-5 right-3 sm:right-5 p-3.5 sm:p-4 rounded-2xl bg-white/95 backdrop-blur-md border border-stone-200/90 text-stone-900 shadow-lg">
                <div class="flex items-center justify-between gap-2 border-b border-stone-100 pb-2">
                  <div class="flex items-center gap-1.5 min-w-0">
                    <span class="text-amber-500 text-sm shrink-0">★</span>
                    <span class="font-extrabold text-stone-900 text-xs sm:text-sm">4.9 / 5.0</span>
                    <span class="text-[10px] sm:text-[11px] text-stone-400 font-medium whitespace-nowrap">(1,200+ Sessions)</span>
                  </div>
                  <span class="text-[9px] sm:text-[10px] font-bold uppercase tracking-wider text-brand bg-rose-50 px-2 py-0.5 rounded-full border border-brand/20 shrink-0">
                    Client Trust
                  </span>
                </div>

                <div class="grid grid-cols-2 gap-2 pt-2.5 text-center">
                  <div class="p-2 rounded-xl bg-stone-50 border border-stone-200/60">
                    <span class="block text-xs sm:text-sm font-extrabold text-stone-900">100%</span>
                    <span class="text-[10px] text-stone-500 font-medium block mt-0.5 whitespace-nowrap">Discreet &amp; Private</span>
                  </div>
                  <div class="p-2 rounded-xl bg-rose-50/60 border border-brand/20">
                    <span class="block text-xs sm:text-sm font-extrabold text-brand">Certified</span>
                    <span class="text-[10px] text-stone-600 font-medium block mt-0.5 whitespace-nowrap">Male Therapists</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Right: User-Friendly Narrative & 3-Step Doorstep Process (7 cols) -->
          <div class="lg:col-span-7 space-y-6">
            <div>
              <span class="inline-block text-xs uppercase tracking-widest text-brand font-bold bg-rose-50 px-3.5 py-1.5 rounded-full mb-3">
                Effortless Relaxation
              </span>
              <h2 class="text-3xl sm:text-4xl lg:text-[38px] font-extrabold text-slate-900 tracking-tight leading-tight">
                Kolkata's Dedicated Doorstep Wellness For Men
              </h2>
            </div>

            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
              We eliminate the stress of traffic, parking, and crowded lobbies. Our certified male therapists bring the full luxury spa ritual—sterile linens, disposable hygienic covers, and warm organic botanicals—directly to your home or hotel suite across Kolkata.
            </p>

            <!-- User-Friendly: How It Works in 3 Simple Steps -->
            <div class="pt-2">
              <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3.5">
                How It Works • 3 Simple Steps
              </h4>

              <div class="space-y-3">
                <!-- Step 1 -->
                <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-white border border-stone-200/70 shadow-2xs">
                  <div class="w-8 h-8 rounded-xl bg-rose-50 text-brand flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">
                    1
                  </div>
                  <div>
                    <h5 class="font-bold text-slate-900 text-sm">Select &amp; Message on WhatsApp</h5>
                    <p class="text-xs text-slate-500 leading-relaxed mt-0.5">
                      Pick your massage treatment (60m or 90m) and message our concierge with your preferred timing and Kolkata address.
                    </p>
                  </div>
                </div>

                <!-- Step 2 -->
                <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-white border border-stone-200/70 shadow-2xs">
                  <div class="w-8 h-8 rounded-xl bg-purple-50 text-[#9b84fa] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">
                    2
                  </div>
                  <div>
                    <h5 class="font-bold text-slate-900 text-sm">Punctual &amp; Discreet Arrival</h5>
                    <p class="text-xs text-slate-500 leading-relaxed mt-0.5">
                      Your background-verified male therapist arrives in plain clothes with sealed sanitized linens and warm aromatherapy oils.
                    </p>
                  </div>
                </div>

                <!-- Step 3 -->
                <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-white border border-stone-200/70 shadow-2xs">
                  <div class="w-8 h-8 rounded-xl bg-rose-50 text-brand flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">
                    3
                  </div>
                  <div>
                    <h5 class="font-bold text-slate-900 text-sm">Relax Completely &amp; Pay Seamlessly</h5>
                    <p class="text-xs text-slate-500 leading-relaxed mt-0.5">
                      Enjoy restorative bodywork in total privacy. Pay smoothly via Cash, UPI, or Net Banking after your session is complete.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Quick Trust Badges -->
            <div class="pt-2 flex flex-wrap items-center gap-x-5 gap-y-2 text-xs font-medium text-slate-600">
              <span class="flex items-center gap-1.5">
                <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                <span>Verified Male Specialists</span>
              </span>
              <span class="flex items-center gap-1.5">
                <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                <span>Zero Advance Deposit Required</span>
              </span>
              <span class="flex items-center gap-1.5">
                <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                <span>Single-Use Sanitized Linens</span>
              </span>
            </div>

            <!-- User-Friendly Action Row -->
            <div class="pt-3 border-t border-stone-200/70 flex flex-wrap items-center gap-4">
              <a
                href="https://wa.me/919830414714?text=Hello%20City%20of%20Joy%20Therapy,%20I%20would%20like%20to%20inquire%20about%20a%20doorstep%20massage."
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-2.5 py-3 px-5 rounded-xl bg-brand text-white font-bold text-xs sm:text-sm hover:bg-brand-hover shadow-xs hover:shadow-md transition-all active:scale-[0.99]">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                  <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                </svg>
                <span>Chat on WhatsApp</span>
              </a>

              <a
                href="/about"
                class="inline-flex items-center text-xs sm:text-sm font-semibold text-slate-700 hover:text-brand transition-colors">
                <span>Learn More About Us</span>
              </a>
            </div>

          </div>

        </div>
      </div>
    </section>

    <?php include 'testimonials_section.php'; ?>

    <?php include 'faqs_section.php'; ?>

    <?php include 'career_strip.php'; ?>

  </main>

  <?php include 'footer.php'; ?>

</body>

</html>