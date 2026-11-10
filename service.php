<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php require_once 'seo_helper.php'; render_seo_tags('services'); ?>
  
  <!-- Favicon (Lotus Emblem) -->
  <link rel="icon" type="image/png" href="/assets/favicon.png">
  <link rel="shortcut icon" type="image/png" href="/assets/favicon.png">
  <link rel="apple-touch-icon" href="/assets/favicon.png">

  <!-- Google Fonts: Playwrite IT Trad & Quicksand -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+IT+Trad:wght@100..400&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="/dist/output.css">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-stone-50 text-stone-800 antialiased selection:bg-brand selection:text-white flex flex-col min-h-screen font-sans">

  <?php include 'navbar.php'; ?>

  <main class="flex-grow">

    <!-- Minimal Heading Section -->
    <section class="py-8 sm:py-16 bg-gradient-to-b from-stone-100 via-rose-50/20 to-stone-50 border-b border-stone-200">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Top Badge -->
        <span class="inline-block text-[11px] sm:text-xs uppercase tracking-wider text-brand font-bold bg-rose-50 border border-brand/20 px-3 py-1 rounded-full mb-2.5 shadow-2xs">
          Doorstep &amp; Hotel Service Across Kolkata
        </span>

        <!-- Main Title -->
        <h1 class="text-2xl sm:text-4xl md:text-5xl font-extrabold text-stone-900 tracking-tight leading-tight">
          Our Massage Services
        </h1>

        <!-- Subtitle -->
        <p class="font-accent text-xs sm:text-base text-[#8D75EA] mt-1 mb-2.5 font-normal tracking-wide">
          curated bodywork &amp; rejuvenation at your doorstep
        </p>

        <!-- Paragraph Description -->
        <p class="text-stone-600 text-xs sm:text-sm md:text-base leading-relaxed max-w-xl mx-auto">
          Polite, trained male therapists arrive discretely at your home or hotel room anywhere in Kolkata with fresh linens, organic oils, and complete professional care.
        </p>
      </div>
    </section>

    <!-- All Service Cards Section -->
    <section class="py-14 sm:py-20 bg-white border-b border-stone-200/60 font-sans">
      <div class="w-[90%] max-w-7xl mx-auto">

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
                <h2 class="text-2xl sm:text-[26px] font-bold text-slate-900 mb-2.5 group-hover:text-brand transition-colors tracking-tight">
                  Deep Tissue Massage
                </h2>

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
                <h2 class="text-2xl sm:text-[26px] font-bold text-slate-900 mb-2.5 group-hover:text-brand transition-colors tracking-tight">
                  Head &amp; Foot Massage
                </h2>

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
                <h2 class="text-2xl sm:text-[26px] font-bold text-slate-900 mb-2.5 group-hover:text-brand transition-colors tracking-tight">
                  Body Scrubbing
                </h2>

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
                <h2 class="text-2xl sm:text-[26px] font-bold text-slate-900 mb-2.5 group-hover:text-brand transition-colors tracking-tight">
                  Men's Wellness Therapy
                </h2>

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

    <!-- Frequently Asked Questions -->
    <?php include 'faqs_section.php'; ?>

  </main>

  <?php include 'footer.php'; ?>

</body>
</html>

