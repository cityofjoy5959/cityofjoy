<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php require_once 'seo_helper.php'; render_seo_tags('about'); ?>
  
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
    
    <!-- Hero Banner for About -->
    <section class="py-16 sm:py-24 bg-gradient-to-b from-stone-100 via-rose-50/20 to-stone-50 border-b border-stone-200">
      <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-xs uppercase tracking-widest text-brand font-bold">Our Heritage &amp; Calling</span>
        <h1 class="text-4xl sm:text-5xl font-bold text-stone-900 mt-3 mb-2">Restoring Balance in an Unquiet World</h1>
        <p class="font-accent text-sm sm:text-base text-[#B09CFF] font-normal mb-6">healing hands &amp; botanical care</p>
        <p class="text-lg text-stone-600 leading-relaxed max-w-3xl mx-auto font-normal">
          City of Joy Therapy is Kolkata's premier doorstep and hotel male-to-male massage therapy and rejuvenating body care service. We bring therapeutic excellence, warm natural oils, and complete discretion directly to you.
        </p>
      </div>
    </section>

    <!-- Sanctuary Story & Philosophy -->
    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          
          <div class="space-y-6">
            <span class="text-xs uppercase tracking-widest text-brand font-bold">The City of Joy Therapy Story</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-stone-900 leading-tight">Authentic Healing Brought to Your Comfort</h2>
            <p class="text-stone-600 leading-relaxed">
              We started with a simple conviction: wellness therapy should be accessible, private, and unhurried. In the vibrant pulse of Kolkata, navigating traffic after a long day or hectic business trip makes visiting traditional spas exhausting.
            </p>
            <p class="text-stone-600 leading-relaxed">
              City of Joy Therapy eliminates the stress. Our polite, trained male therapists arrive at your doorstep or hotel room across Kolkata equipped with freshly laundered sheets, warming herbal oils, and holistic techniques tailored to your body.
            </p>

            <div class="grid grid-cols-2 gap-6 pt-4 border-t border-stone-100">
              <div>
                <h4 class="text-3xl font-bold text-brand">8+ Years</h4>
                <p class="text-xs text-stone-500 uppercase tracking-wider mt-1 font-semibold">Holistic Care Legacy</p>
              </div>
              <div>
                <h4 class="text-3xl font-bold text-[#B09CFF]">100%</h4>
                <p class="text-xs text-stone-500 uppercase tracking-wider mt-1 font-semibold">Clean Botanicals</p>
              </div>
            </div>
          </div>

          <div class="relative">
            <div class="absolute -inset-2 rounded-3xl bg-gradient-to-tr from-[#FF5454]/20 to-[#B09CFF]/20 blur-xl"></div>
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-stone-200">
              <img 
                src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?auto=format&fit=crop&w=900&q=80" 
                alt="Therapist preparing herbal essential oils and massage setting" 
                class="w-full h-[450px] object-cover"
                loading="lazy"
              />
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Pillars of our Practice -->
    <section class="py-20 bg-stone-100/70 border-y border-stone-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-16">
          <span class="text-xs uppercase tracking-widest text-brand font-bold">Our Philosophy</span>
          <h2 class="text-3xl font-bold text-stone-900 mt-2 mb-2">The Three Pillars of City of Joy Therapy</h2>
          <p class="font-accent text-sm text-[#B09CFF]">mind, body, atmosphere</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
          
          <div class="bg-white p-6 sm:p-7 lg:p-8 rounded-2xl border border-stone-200 hover:border-brand/30 shadow-sm transition-all">
            <div class="w-12 h-12 rounded-xl bg-rose-50 text-brand flex items-center justify-center font-bold text-lg mb-6">
              01
            </div>
            <h3 class="text-xl font-bold text-stone-900 mb-3">Anatomical Mindfulness</h3>
            <p class="text-stone-600 text-sm leading-relaxed">
              We never apply generic routines. Pressure, tempo, and technique are calibrated to your posture, activity level, and recovery objectives.
            </p>
          </div>

          <div class="bg-white p-6 sm:p-7 lg:p-8 rounded-2xl border border-stone-200 hover:border-[#B09CFF]/50 shadow-sm transition-all">
            <div class="w-12 h-12 rounded-xl bg-purple-50 text-[#9b84fa] flex items-center justify-center font-bold text-lg mb-6">
              02
            </div>
            <h3 class="text-xl font-bold text-stone-900 mb-3">Purity of Ingredients</h3>
            <p class="text-stone-600 text-sm leading-relaxed">
              We use cold-pressed carrier oils free of parabens, phthalates, synthetic perfumes, and mineral distillates to nourish skin without pore congestion.
            </p>
          </div>

          <div class="bg-white p-6 sm:p-7 lg:p-8 rounded-2xl border border-stone-200 hover:border-brand/30 shadow-sm transition-all">
            <div class="w-12 h-12 rounded-xl bg-rose-50 text-brand flex items-center justify-center font-bold text-lg mb-6">
              03
            </div>
            <h3 class="text-xl font-bold text-stone-900 mb-3">Doorstep &amp; Hotel Discretion</h3>
            <p class="text-stone-600 text-sm leading-relaxed">
              Trained male therapists arrive with fresh linens and warm oils directly to your home or hotel room across Kolkata, ensuring privacy and calm.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- Client Testimonials -->
    <?php include 'testimonials_section.php'; ?>

    <!-- Frequently Asked Questions -->
    <?php include 'faqs_section.php'; ?>

  </main>

  <?php include 'footer.php'; ?>

</body>
</html>
