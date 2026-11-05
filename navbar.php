<?php
// navbar.php
?>
<style>
  html {
    scrollbar-width: thin;
    scrollbar-color: #FF5454 transparent;
  }

  ::-webkit-scrollbar {
    width: 6px;
    height: 6px;
  }

  ::-webkit-scrollbar-track {
    background: transparent;
  }

  ::-webkit-scrollbar-thumb {
    background-color: #FF5454;
    border-radius: 9999px;
    transition: background-color 0.2s ease;
  }

  ::-webkit-scrollbar-thumb:hover {
    background-color: #e04545;
  }

  ::-webkit-scrollbar-thumb:active {
    background-color: #cc3939;
  }
</style>
<style>
  header.nav-sticky-header {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 50;
  }
</style>
<header class="nav-sticky-header sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-stone-200/80 shadow-xs transition-all" style="position: -webkit-sticky; position: sticky; top: 0; z-index: 50;">
  <!-- Nav container at 90% page width with comfortable, balanced padding -->
  <div class="w-[90%] mx-auto py-1.5 sm:py-2">
    <div class="flex items-center justify-between h-16">

      <!-- Left: Sleek & Crisp Logo Image -->
      <a href="/" class="flex items-center group focus:outline-none py-0.5" aria-label="City of Joy Therapy Home">
        <img
          src="/assets/city_of_joy_therapy_logo_full.png"
          alt="City of Joy Therapy - Male Doorstep Massage Kolkata"
          class="h-14 sm:h-16 lg:h-18 w-auto object-contain group-hover:scale-105 transition-transform border-0 outline-none"
          id="navbar-logo-img" />
      </a>

      <!-- Right: Desktop Navigation Links + Book Button (Shown on Desktop >= 1024px) -->
      <div class="hidden lg:flex items-center gap-6 xl:gap-8">
        <nav class="flex items-center gap-5 xl:gap-7 font-semibold text-stone-700 text-sm xl:text-[15px]">
          <a href="/" class="hover:text-brand transition-colors py-1 hover:border-b-2 hover:border-brand">Home</a>
          <a href="/about" class="hover:text-brand transition-colors py-1 hover:border-b-2 hover:border-brand">About</a>
          <a href="/services" class="hover:text-brand transition-colors py-1 hover:border-b-2 hover:border-brand">Services</a>
          <a href="/#testimonials" class="hover:text-brand transition-colors py-1 hover:border-b-2 hover:border-brand">Reviews</a>
          <a href="/#faqs" class="hover:text-brand transition-colors py-1 hover:border-b-2 hover:border-brand">FAQs</a>
        </nav>

        <!-- Prominent Book Session Button -->
        <button
          type="button"
          data-book-session
          class="inline-flex items-center justify-center px-6.5 py-2.5 rounded-full bg-brand text-white text-sm sm:text-base font-bold hover:bg-brand-hover shadow-md hover:shadow-lg hover:shadow-brand/20 transition-all duration-200 active:scale-95 cursor-pointer">
          Book Session
        </button>
      </div>

      <!-- Mobile & Tablet Right: Hamburger Menu Only (< 1024px) -->
      <div class="flex items-center lg:hidden">
        <button id="mobile-menu-btn" type="button" class="p-2 sm:p-2.5 rounded-xl text-stone-700 hover:text-stone-900 hover:bg-stone-100 focus:outline-none focus:ring-2 focus:ring-brand cursor-pointer" aria-label="Toggle Navigation Menu">
          <svg id="menu-icon-open" class="w-6 h-6 block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

    </div>
  </div>

  <!-- Mobile & Tablet Dropdown Menu -->
  <div id="mobile-menu" class="hidden lg:hidden border-t border-stone-200 bg-stone-50 px-4 sm:px-6 pt-4 pb-6 space-y-2 sm:space-y-3">
    <a href="/" class="block px-3 py-2.5 rounded-xl text-base sm:text-lg font-semibold text-stone-800 hover:bg-rose-50 hover:text-brand transition-colors">Home</a>
    <a href="/about" class="block px-3 py-2.5 rounded-xl text-base sm:text-lg font-semibold text-stone-800 hover:bg-rose-50 hover:text-brand transition-colors">About</a>
    <a href="/services" class="block px-3 py-2.5 rounded-xl text-base sm:text-lg font-semibold text-stone-800 hover:bg-rose-50 hover:text-brand transition-colors">Services</a>
    <a href="/#testimonials" class="block px-3 py-2.5 rounded-xl text-base sm:text-lg font-semibold text-stone-800 hover:bg-rose-50 hover:text-brand transition-colors">Reviews</a>
    <a href="/#faqs" class="block px-3 py-2.5 rounded-xl text-base sm:text-lg font-semibold text-stone-800 hover:bg-rose-50 hover:text-brand transition-colors">FAQs</a>

    <div class="pt-3">
      <button
        type="button"
        data-book-session
        class="w-full inline-flex items-center justify-center py-3 px-5 rounded-full bg-brand text-white text-sm sm:text-base font-bold hover:bg-brand-hover shadow-2xs transition-all active:scale-95 cursor-pointer">
        Book Session
      </button>
    </div>
  </div>
</header>

<script>
  // Mobile menu toggle logic
  const menuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const openIcon = document.getElementById('menu-icon-open');
  const closeIcon = document.getElementById('menu-icon-close');

  if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', () => {
      const isHidden = mobileMenu.classList.contains('hidden');
      if (isHidden) {
        mobileMenu.classList.remove('hidden');
        openIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
      } else {
        mobileMenu.classList.add('hidden');
        openIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
      }
    });

    // Close mobile menu if a booking button or link is clicked inside it
    mobileMenu.querySelectorAll('a, button').forEach(el => {
      el.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        openIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
      });
    });
  }
</script>