<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php require_once 'seo_helper.php'; render_seo_tags('privacy'); ?>
  
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
        <span class="text-xs uppercase tracking-widest text-brand font-bold">Privacy &amp; Data Governance</span>
        <h1 class="text-3xl sm:text-4xl font-bold text-stone-900 mt-2 mb-2">Privacy Policy</h1>
        <p class="font-accent text-sm text-[#B09CFF] font-normal mb-1">your privacy is sacred</p>
        <p class="text-xs text-stone-500">Effective Date: January 1, 2026</p>
      </div>

      <!-- Content Sections -->
      <article class="prose prose-stone max-w-none space-y-8 text-stone-700 leading-relaxed text-sm sm:text-base">
        
        <section class="space-y-3">
          <h2 class="text-xl font-bold text-stone-900 border-l-4 border-brand pl-3">1. Commitment to Client Confidentiality</h2>
          <p>
            At City of Joy Therapy, we honor the sanctity of your personal data and health information. This Privacy Policy details how we collect, utilize, store, and safeguard your personal details when you interact with our website or book doorstep and hotel sessions in Kolkata.
          </p>
        </section>

        <section class="space-y-3">
          <h2 class="text-xl font-bold text-stone-900 border-l-4 border-[#B09CFF] pl-3">2. Information We Collect</h2>
          <p>We may collect information in the following categories:</p>
          <ul class="list-disc pl-5 space-y-2">
            <li><strong>Identification &amp; Contact Data:</strong> Full name, telephone number, residential address, and email address.</li>
            <li><strong>Appointment Preferences:</strong> Selected treatments, preferred therapist, requested session duration, and date/time reservations.</li>
            <li><strong>Confidential Health &amp; Intake Records:</strong> Physical condition disclosures, areas of tension, contraindications, allergies to topical botanicals, or pressure sensitivity preferences.</li>
            <li><strong>Payment Information:</strong> Transaction amounts and payment tokens processed through encrypted, PCI-DSS compliant third-party gateways. We never store raw credit card numbers on our local servers.</li>
          </ul>
        </section>

        <section class="space-y-3">
          <h2 class="text-xl font-bold text-stone-900 border-l-4 border-brand pl-3">3. How Your Information Is Used</h2>
          <p>Your details are used strictly to deliver compassionate, safe, and personalized care:</p>
          <ul class="list-disc pl-5 space-y-2">
            <li>To customize massage modalities to your specific health tolerances and contraindications.</li>
            <li>To deliver appointment confirmations, reminders via SMS/email, and essential studio updates.</li>
            <li>To process secure billing and manage gift certificate redemptions.</li>
            <li>To improve our studio offerings and maintain sanitary and legal compliance standards.</li>
          </ul>
        </section>

        <section class="space-y-3">
          <h2 class="text-xl font-bold text-stone-900 border-l-4 border-[#B09CFF] pl-3">4. Security of Health Intake Information</h2>
          <p>
            Health intake records are accessible solely to licensed massage practitioners assigned to your session. All digital intake forms are encrypted using industry-standard TLS 1.3 and stored in secure, access-restricted databases. We do not sell, rent, or trade your personal or health data to third-party marketers under any circumstance.
          </p>
        </section>

        <section class="space-y-3">
          <h2 class="text-xl font-bold text-stone-900 border-l-4 border-brand pl-3">5. Cookies &amp; Tracking Technologies</h2>
          <p>
            Our website uses minimal, privacy-preserving session cookies to facilitate page navigation and store anonymous analytics regarding site traffic. You may disable cookies within your web browser settings at any time without impacting your booking capability.
          </p>
        </section>

        <section class="space-y-3">
          <h2 class="text-xl font-bold text-stone-900 border-l-4 border-[#B09CFF] pl-3">6. Your Rights and Data Choices</h2>
          <p>Depending on your jurisdiction, you possess the right to:</p>
          <ul class="list-disc pl-5 space-y-2">
            <li>Request a copy of the personal and intake data we maintain about you.</li>
            <li>Request corrections to any inaccurate health or contact details.</li>
            <li>Request the deletion of your customer profile, subject to statutory healthcare record retention mandates.</li>
            <li>Opt out of marketing correspondence or newsletters at any time.</li>
          </ul>
        </section>

        <section class="space-y-3">
          <h2 class="text-xl font-bold text-stone-900 border-l-4 border-brand pl-3">7. Privacy Officer Contact</h2>
          <p>
            For questions or requests concerning your privacy, please direct inquiries to:
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
