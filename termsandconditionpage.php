<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php require_once 'seo_helper.php'; render_seo_tags('terms'); ?>
  
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

  <main class="flex-grow py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Page Header -->
      <div class="border-b border-stone-200 pb-8 mb-10">
        <span class="text-xs uppercase tracking-widest text-brand font-bold">Legal Agreement</span>
        <h1 class="text-3xl sm:text-4xl font-bold text-stone-900 mt-2 mb-2">Terms and Conditions</h1>
        <p class="font-accent text-sm text-[#B09CFF] font-normal mb-1">clarity, comfort, respect</p>
        <p class="text-xs text-stone-500">Last updated: January 2026</p>
      </div>

      <!-- Content Sections -->
      <article class="prose prose-stone max-w-none space-y-8 text-stone-700 leading-relaxed text-sm sm:text-base">
        
        <section class="space-y-3">
          <h2 class="text-xl font-bold text-stone-900 border-l-4 border-brand pl-3">1. Scope and Agreement</h2>
          <p>
            Welcome to City of Joy Therapy ("we", "our", or "us"). By booking an appointment, utilizing our website, or receiving doorstep/hotel services in Kolkata, you ("Client", "Guest", or "User") agree to be bound by these Terms and Conditions. Please review them thoroughly before booking.
          </p>
        </section>

        <section class="space-y-3">
          <h2 class="text-xl font-bold text-stone-900 border-l-4 border-[#B09CFF] pl-3">2. Strictly Professional Therapeutic Care</h2>
          <p>
            All massage and bodywork services provided by City of Joy Therapy are strictly therapeutic, non-medical, and non-sexual in nature. 
          </p>
          <ul class="list-disc pl-5 space-y-2">
            <li>Any inappropriate remarks, suggestive behavior, or misconduct will lead to immediate termination of the treatment without refund.</li>
            <li>Therapists reserve the absolute right to refuse service to any individual exhibiting intoxication, erratic behavior, or disrespect toward staff or other guests.</li>
          </ul>
        </section>

        <section class="space-y-3">
          <h2 class="text-xl font-bold text-stone-900 border-l-4 border-brand pl-3">3. Medical Intake &amp; Health Disclosures</h2>
          <p>
            It is the responsibility of the client to provide accurate health information prior to treatment. You agree to complete our health intake form and disclose any:
          </p>
          <ul class="list-disc pl-5 space-y-2">
            <li>Current pregnancies or suspected pregnancies</li>
            <li>Recent surgeries, fractures, or open wounds</li>
            <li>Cardiovascular conditions, high blood pressure, or thrombosis/blood clots</li>
            <li>Skin allergies, communicable dermatological infections, or sensitivities to essential oils</li>
          </ul>
          <p class="text-xs bg-stone-100 p-4 rounded-xl border border-stone-200 text-stone-600">
            <strong>Disclaimer:</strong> Massage therapy does not replace clinical diagnosis, physical therapy, or orthopedic medical treatments. Consult your physician regarding any pre-existing health condition.
          </p>
        </section>

        <section class="space-y-3">
          <h2 class="text-xl font-bold text-stone-900 border-l-4 border-[#B09CFF] pl-3">4. Appointments, Cancellations &amp; Rescheduling</h2>
          <p>
            To honor our therapists' reserved time and maintain a serene schedule for all guests:
          </p>
          <ul class="list-disc pl-5 space-y-2">
            <li><strong>24-Hour Notice:</strong> We require at least 24 hours advance notice to cancel or reschedule appointments without penalty.</li>
            <li><strong>Late Cancellations:</strong> Cancellations made within less than 24 hours will incur a 50% service charge.</li>
            <li><strong>No-Shows:</strong> Failure to arrive without notification will be billed at 100% of the scheduled session fee.</li>
            <li><strong>Late Arrivals:</strong> If you arrive late, your session may be shortened to maintain subsequent appointments, with full service price charged.</li>
          </ul>
        </section>

        <section class="space-y-3">
          <h2 class="text-xl font-bold text-stone-900 border-l-4 border-brand pl-3">5. Gift Cards &amp; Package Policies</h2>
          <p>
            Gift cards and bundled wellness treatment packages are non-refundable and cannot be redeemed for cash, except where required by law. Gift cards remain valid for 24 months from the date of issue.
          </p>
        </section>

        <section class="space-y-3">
          <h2 class="text-xl font-bold text-stone-900 border-l-4 border-[#B09CFF] pl-3">6. Limitation of Liability</h2>
          <p>
            City of Joy Therapy and its therapists shall not be held liable for personal belongings left unattended or injuries resulting from undisclosed medical conditions.
          </p>
        </section>

        <section class="space-y-3">
          <h2 class="text-xl font-bold text-stone-900 border-l-4 border-brand pl-3">7. Contact Information</h2>
          <p>
            For questions or concerns regarding these terms, please contact our administration:
          </p>
          <div class="bg-stone-100 p-4 rounded-xl text-sm space-y-1 border border-stone-200">
            <p><strong>City of Joy Therapy</strong></p>
            <p>WhatsApp / Call: +91 9830414714</p>
            <p>Location: Kolkata, West Bengal, India</p>
          </div>
        </section>

      </article>

    </div>
  </main>

  <?php include 'footer.php'; ?>

</body>
</html>
