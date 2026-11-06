<?php
// booking_modal.php - Classic Setup with Older Date/Time, Address After Date/Time & Always-Vibrant CTA Button
?>
<style>
  #booking-modal-card,
  #custom-hotel-menu {
    scrollbar-width: thin;
    scrollbar-color: #FF5454 transparent;
  }
  #booking-modal-card::-webkit-scrollbar,
  #custom-hotel-menu::-webkit-scrollbar {
    width: 5px;
  }
  #booking-modal-card::-webkit-scrollbar-track,
  #custom-hotel-menu::-webkit-scrollbar-track {
    background: transparent;
  }
  #booking-modal-card::-webkit-scrollbar-thumb,
  #custom-hotel-menu::-webkit-scrollbar-thumb {
    background-color: #FF5454;
    border-radius: 9999px;
  }
  #booking-modal-card::-webkit-scrollbar-button,
  #custom-hotel-menu::-webkit-scrollbar-button {
    display: none !important;
    width: 0 !important;
    height: 0 !important;
  }

  @keyframes gentleShake {
    0%, 100% { transform: translateX(0); }
    20%, 60% { transform: translateX(-4px); }
    40%, 80% { transform: translateX(4px); }
  }
  .input-error-shake {
    animation: gentleShake 0.35s ease-in-out;
  }
</style>
<div 
  id="booking-modal" 
  class="fixed inset-0 z-50 bg-black/50 backdrop-blur-xs flex items-center justify-center p-2.5 sm:p-4 transition-opacity duration-200 opacity-0 pointer-events-none"
  role="dialog" 
  aria-modal="true" 
  aria-labelledby="booking-modal-title"
>
  <div 
    id="booking-modal-card" 
    class="bg-white w-full max-w-lg rounded-2xl p-4 sm:p-5 shadow-xl border border-stone-200 transform scale-95 transition-all duration-200 flex flex-col gap-3 max-h-[92vh] overflow-y-auto"
  >
    <!-- Modal Header -->
    <div class="flex items-start justify-between gap-3 pb-2.5 border-b border-stone-100">
      <div>
        <h3 id="booking-modal-title" class="text-lg sm:text-xl font-bold text-stone-900 tracking-tight">
          Book Your Session
        </h3>
        <p id="booking-modal-subtitle" class="text-stone-500 text-xs mt-0.5">
          Select therapy, duration, date/time, and your location in Kolkata
        </p>
      </div>

      <!-- Close Button -->
      <button 
        id="close-booking-modal-btn" 
        type="button" 
        class="w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-stone-100 hover:bg-stone-200 text-stone-500 hover:text-stone-800 flex items-center justify-center transition-colors focus:outline-none cursor-pointer shrink-0"
        aria-label="Close dialog"
      >
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>

    <!-- 1. Select Service (Hidden if clicked directly from a specific service card) -->
    <div id="service-selection-section">
      <span class="block text-xs font-semibold text-stone-600 mb-1">
        Select Service
      </span>
      <div class="grid grid-cols-2 gap-2" id="service-options-container">
        
        <button 
          type="button" 
          data-service-select="Deep Tissue Massage" 
          class="service-select-btn text-left p-2.5 rounded-xl border transition-all cursor-pointer flex items-center justify-between border-stone-200 bg-white hover:border-stone-300"
        >
          <div>
            <span class="block text-xs sm:text-sm font-bold text-stone-900">Deep Tissue</span>
            <span class="text-[11px] text-stone-500">Muscle recovery</span>
          </div>
          <span class="service-indicator w-3.5 h-3.5 rounded-full border border-stone-300 flex items-center justify-center shrink-0"></span>
        </button>

        <button 
          type="button" 
          data-service-select="Head &amp; Foot Massage" 
          class="service-select-btn text-left p-2.5 rounded-xl border transition-all cursor-pointer flex items-center justify-between border-stone-200 bg-white hover:border-stone-300"
        >
          <div>
            <span class="block text-xs sm:text-sm font-bold text-stone-900">Head &amp; Foot</span>
            <span class="text-[11px] text-stone-500">Reflexology</span>
          </div>
          <span class="service-indicator w-3.5 h-3.5 rounded-full border border-stone-300 flex items-center justify-center shrink-0"></span>
        </button>

        <button 
          type="button" 
          data-service-select="Body Scrubbing" 
          class="service-select-btn text-left p-2.5 rounded-xl border transition-all cursor-pointer flex items-center justify-between border-stone-200 bg-white hover:border-stone-300"
        >
          <div>
            <span class="block text-xs sm:text-sm font-bold text-stone-900">Body Scrubbing</span>
            <span class="text-[11px] text-stone-500">Skin polish</span>
          </div>
          <span class="service-indicator w-3.5 h-3.5 rounded-full border border-stone-300 flex items-center justify-center shrink-0"></span>
        </button>

        <button 
          type="button" 
          data-service-select="Men's Wellness Therapy" 
          class="service-select-btn text-left p-2.5 rounded-xl border transition-all cursor-pointer flex items-center justify-between border-stone-200 bg-white hover:border-stone-300"
        >
          <div>
            <span class="block text-xs sm:text-sm font-bold text-stone-900">Men's Wellness</span>
            <span class="text-[11px] text-stone-500">Full relaxation</span>
          </div>
          <span class="service-indicator w-3.5 h-3.5 rounded-full border border-stone-300 flex items-center justify-center shrink-0"></span>
        </button>

      </div>
    </div>

    <!-- 2. Select Duration & Package -->
    <div>
      <span class="block text-xs font-semibold text-stone-600 mb-1">
        Select Package Duration
      </span>
      <div class="grid grid-cols-2 gap-2">
        
        <!-- 60 Min Option -->
        <button 
          type="button" 
          id="btn-duration-60" 
          data-duration-select="60" 
          class="duration-select-btn text-left p-2.5 sm:p-3 rounded-xl border transition-all cursor-pointer border-stone-200 bg-white hover:border-stone-300"
        >
          <div class="flex items-center justify-between mb-0.5">
            <span class="text-xs sm:text-sm font-bold text-stone-900">60 Min</span>
            <span class="text-[10px] text-stone-500 bg-stone-100 px-1.5 py-0.5 rounded">Standard</span>
          </div>
          <div class="text-base sm:text-lg font-bold text-stone-900">₹499</div>
        </button>

        <!-- 90 Min Option -->
        <button 
          type="button" 
          id="btn-duration-90" 
          data-duration-select="90" 
          class="duration-select-btn text-left p-2.5 sm:p-3 rounded-xl border transition-all cursor-pointer border-brand bg-rose-50/50 relative hover:border-brand"
        >
          <span class="absolute -top-2 right-2.5 text-[9px] font-bold uppercase tracking-wider text-white bg-brand px-1.5 py-0.5 rounded">
            Best Value
          </span>
          <div class="flex items-center justify-between mb-0.5">
            <span class="text-xs sm:text-sm font-bold text-stone-900">90 Min</span>
            <span class="text-[10px] text-brand bg-brand/10 px-1.5 py-0.5 rounded font-medium">Extended</span>
          </div>
          <div class="text-base sm:text-lg font-bold text-brand">₹699</div>
        </button>

      </div>
    </div>

    <!-- 3. Older Setup for Date & Preferred Time (BEFORE Location) -->
    <div>
      <div class="flex items-center justify-between mb-1">
        <span class="block text-xs font-semibold text-stone-600">
          Preferred Date &amp; Time
        </span>
        <!-- Perfectly Contrasted 'Now' Action Button -->
        <button 
          type="button" 
          id="btn-quick-now" 
          style="background-color: #fff1f2; color: #FF5454; border: 1px solid rgba(255, 84, 84, 0.35);"
          class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-full text-[11px] font-bold shadow-2xs transition-all cursor-pointer active:scale-95"
        >
          <span id="quick-now-btn-label">Book for Now (+60 min)</span>
        </button>
      </div>

      <div class="grid grid-cols-2 gap-2">
        <div>
          <input 
            type="date" 
            id="input-booking-date" 
            class="w-full px-3 py-2 rounded-xl border border-stone-200 focus:border-brand focus:ring-1 focus:ring-brand text-xs sm:text-sm bg-white text-stone-800 transition-all font-medium cursor-pointer"
            required
          />
        </div>
        <div>
          <input 
            type="time" 
            id="input-booking-time" 
            class="w-full px-3 py-2 rounded-xl border border-stone-200 focus:border-brand focus:ring-1 focus:ring-brand text-xs sm:text-sm bg-white text-stone-800 transition-all font-medium cursor-pointer"
            required
          />
        </div>
      </div>

      <p class="text-[11px] text-stone-400 mt-1 leading-tight">
        'Now' schedules therapist arrival 60 minutes from booking for travel &amp; setup.
      </p>
    </div>

    <!-- 4. Location & Address in Kolkata (AFTER Date & Time) -->
    <div>
      <span class="block text-xs font-semibold text-stone-600 mb-1">
        Location in Kolkata
      </span>
      
      <!-- Minimal Tab Selector -->
      <div class="grid grid-cols-2 p-1 bg-stone-100 rounded-xl gap-1 mb-2">
        <button 
          type="button" 
          id="btn-loc-home" 
          data-loc-select="Home" 
          class="location-select-btn py-1.5 px-3 rounded-lg text-xs sm:text-sm font-semibold transition-all cursor-pointer bg-white text-stone-900 shadow-2xs"
        >
          Home Doorstep
        </button>

        <button 
          type="button" 
          id="btn-loc-hotel" 
          data-loc-select="Hotel" 
          class="location-select-btn py-1.5 px-3 rounded-lg text-xs sm:text-sm font-semibold transition-all cursor-pointer text-stone-600 hover:text-stone-900"
        >
          Hotel Room
        </button>
      </div>

      <!-- Home Area Input -->
      <div id="home-detail-box" class="transition-all">
        <input 
          type="text" 
          id="input-home-address" 
          placeholder="Enter area or landmark (e.g. Salt Lake, Ballygunge, New Town...)" 
          class="w-full px-3.5 py-2 rounded-xl border border-stone-200 focus:border-brand focus:ring-1 focus:ring-brand text-xs sm:text-sm bg-white placeholder:text-stone-400 text-stone-800 transition-all font-medium"
        />
      </div>

      <!-- Hotel Dropdown UI -->
      <div id="hotel-detail-box" class="hidden transition-all">
        <button 
          type="button" 
          id="custom-hotel-trigger" 
          aria-haspopup="listbox" 
          aria-expanded="false"
          class="w-full px-3.5 py-2 rounded-xl border border-stone-200 bg-white text-stone-800 text-xs sm:text-sm font-medium flex items-center justify-between hover:border-stone-300 focus:outline-none transition-all cursor-pointer text-left"
        >
          <div class="flex items-center gap-2 min-w-0 pr-2">
            <span class="w-2 h-2 rounded-full bg-brand shrink-0"></span>
            <span id="selected-hotel-label" class="truncate font-semibold text-stone-900 text-xs sm:text-sm">Park Street / Camac Street / Elgin Road</span>
          </div>
          <svg id="hotel-chevron" class="w-4 h-4 text-stone-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>

        <input type="hidden" id="selected-hotel-value" value="Park Street / Camac Street / Elgin Road" />

        <div 
          id="custom-hotel-menu" 
          role="listbox" 
          class="hidden mt-1.5 bg-stone-50 rounded-xl border border-stone-200 p-1.5 max-h-40 overflow-y-auto space-y-1"
        >
          <button type="button" role="option" data-hotel-option="Park Street / Camac Street / Elgin Road" class="custom-hotel-item w-full text-left px-3 py-1.5 rounded-lg text-xs sm:text-sm transition-all flex items-center justify-between font-semibold cursor-pointer text-brand bg-white border border-brand/30 shadow-2xs">
            <span>Park Street / Camac Street / Elgin Road</span>
            <span class="hotel-check text-xs font-bold text-brand">✓</span>
          </button>
          <button type="button" role="option" data-hotel-option="Salt Lake (Sector I, II, III, V)" class="custom-hotel-item w-full text-left px-3 py-1.5 rounded-lg text-xs sm:text-sm transition-all flex items-center justify-between font-medium cursor-pointer text-stone-700 hover:bg-white hover:text-stone-900 border border-transparent">
            <span>Salt Lake (Sector I, II, III, V)</span>
            <span class="hotel-check text-xs font-bold text-brand hidden">✓</span>
          </button>
          <button type="button" role="option" data-hotel-option="New Town / Rajarhat Hub" class="custom-hotel-item w-full text-left px-3 py-1.5 rounded-lg text-xs sm:text-sm transition-all flex items-center justify-between font-medium cursor-pointer text-stone-700 hover:bg-white hover:text-stone-900 border border-transparent">
            <span>New Town / Rajarhat Hub</span>
            <span class="hotel-check text-xs font-bold text-brand hidden">✓</span>
          </button>
          <button type="button" role="option" data-hotel-option="Alipore / New Alipore" class="custom-hotel-item w-full text-left px-3 py-1.5 rounded-lg text-xs sm:text-sm transition-all flex items-center justify-between font-medium cursor-pointer text-stone-700 hover:bg-white hover:text-stone-900 border border-transparent">
            <span>Alipore / New Alipore</span>
            <span class="hotel-check text-xs font-bold text-brand hidden">✓</span>
          </button>
          <button type="button" role="option" data-hotel-option="Ballygunge / Southern Avenue" class="custom-hotel-item w-full text-left px-3 py-1.5 rounded-lg text-xs sm:text-sm transition-all flex items-center justify-between font-medium cursor-pointer text-stone-700 hover:bg-white hover:text-stone-900 border border-transparent">
            <span>Ballygunge / Southern Avenue</span>
            <span class="hotel-check text-xs font-bold text-brand hidden">✓</span>
          </button>
          <button type="button" role="option" data-hotel-option="Airport / VIP Road / Chinar Park Hotels" class="custom-hotel-item w-full text-left px-3 py-1.5 rounded-lg text-xs sm:text-sm transition-all flex items-center justify-between font-medium cursor-pointer text-stone-700 hover:bg-white hover:text-stone-900 border border-transparent">
            <span>Airport / VIP Road / Chinar Park Hotels</span>
            <span class="hotel-check text-xs font-bold text-brand hidden">✓</span>
          </button>
          <button type="button" role="option" data-hotel-option="EM Bypass / Ruby Corridor" class="custom-hotel-item w-full text-left px-3 py-1.5 rounded-lg text-xs sm:text-sm transition-all flex items-center justify-between font-medium cursor-pointer text-stone-700 hover:bg-white hover:text-stone-900 border border-transparent">
            <span>EM Bypass / Ruby Corridor</span>
            <span class="hotel-check text-xs font-bold text-brand hidden">✓</span>
          </button>
          <button type="button" role="option" data-hotel-option="Howrah / Station Area Hotels" class="custom-hotel-item w-full text-left px-3 py-1.5 rounded-lg text-xs sm:text-sm transition-all flex items-center justify-between font-medium cursor-pointer text-stone-700 hover:bg-white hover:text-stone-900 border border-transparent">
            <span>Howrah / Station Area Hotels</span>
            <span class="hotel-check text-xs font-bold text-brand hidden">✓</span>
          </button>
        </div>
      </div>
    </div>

    <!-- 5. Terms & Conditions Checkpoint -->
    <div>
      <label class="flex items-start gap-2.5 cursor-pointer select-none">
        <input 
          type="checkbox" 
          id="terms-agree-checkbox" 
          class="mt-0.5 w-4 h-4 rounded text-brand focus:ring-brand border-stone-300 cursor-pointer accent-[#FF5454] shrink-0"
        />
        <span class="text-xs text-stone-600 leading-snug">
          I agree to the <a href="/terms-and-conditions" target="_blank" class="text-brand font-semibold underline hover:text-brand-hover">Terms &amp; Conditions</a> for professional wellness &amp; therapy services.
        </span>
      </label>
    </div>

    <!-- 6. Vibrant Booking Action Button (NEVER Muted) -->
    <div class="pt-0.5">
      <button 
        id="confirm-whatsapp-booking-btn" 
        type="button" 
        class="w-full inline-flex items-center justify-center gap-2 py-3 px-5 rounded-full bg-brand text-white font-bold text-sm sm:text-base hover:bg-brand-hover shadow-xs hover:shadow-md transition-all active:scale-[0.99] group cursor-pointer"
      >
        <span id="confirm-btn-text">Book on WhatsApp (₹699)</span>
        <span class="group-hover:translate-x-0.5 transition-transform">→</span>
      </button>

      <!-- Dynamic Friendly Validation Prompt -->
      <p id="validation-hint" class="hidden text-center text-[11px] text-rose-600 bg-rose-50/80 py-1.5 px-3 rounded-lg mt-1.5 font-semibold border border-rose-200/60">
        Please enter your address &amp; agree to terms to proceed
      </p>

      <p class="text-center text-[11px] text-stone-400 mt-1 font-normal">
        No advance payment • Pay post-service via UPI or cash
      </p>
    </div>

  </div>
</div>

<script>
(function() {
  const modal = document.getElementById('booking-modal');
  const modalCard = document.getElementById('booking-modal-card');
  const modalTitle = document.getElementById('booking-modal-title');
  const modalSubtitle = document.getElementById('booking-modal-subtitle');
  const closeBtn = document.getElementById('close-booking-modal-btn');
  const confirmBtn = document.getElementById('confirm-whatsapp-booking-btn');
  const confirmBtnText = document.getElementById('confirm-btn-text');
  const validationHint = document.getElementById('validation-hint');

  const serviceSection = document.getElementById('service-selection-section');
  const serviceButtons = document.querySelectorAll('.service-select-btn');
  const durationButtons = document.querySelectorAll('.duration-select-btn');
  const locationButtons = document.querySelectorAll('.location-select-btn');

  const btnDuration60 = document.getElementById('btn-duration-60');
  const btnDuration90 = document.getElementById('btn-duration-90');
  const btnLocHome = document.getElementById('btn-loc-home');
  const btnLocHotel = document.getElementById('btn-loc-hotel');

  const homeDetailBox = document.getElementById('home-detail-box');
  const hotelDetailBox = document.getElementById('hotel-detail-box');
  const inputHomeAddress = document.getElementById('input-home-address');

  // Date, Time & Now Button (Older Setup)
  const inputBookingDate = document.getElementById('input-booking-date');
  const inputBookingTime = document.getElementById('input-booking-time');
  const btnQuickNow = document.getElementById('btn-quick-now');
  const quickNowBtnLabel = document.getElementById('quick-now-btn-label');
  const termsCheckbox = document.getElementById('terms-agree-checkbox');

  // Custom Hotel Dropdown elements
  const customHotelTrigger = document.getElementById('custom-hotel-trigger');
  const customHotelMenu = document.getElementById('custom-hotel-menu');
  const hotelChevron = document.getElementById('hotel-chevron');
  const selectedHotelLabel = document.getElementById('selected-hotel-label');
  const selectedHotelValue = document.getElementById('selected-hotel-value');
  const customHotelItems = document.querySelectorAll('.custom-hotel-item');

  let currentService = "Deep Tissue Massage";
  let currentDuration = "90";
  let currentLocation = "Home"; // "Home" or "Hotel"
  let isDirectServiceMode = false;
  let isNowBooking = false;
  const whatsappNumber = "919830414714";

  const packages = {
    "60": { price: "₹499", label: "60 Minutes Session (Standard)" },
    "90": { price: "₹699", label: "90 Minutes Session (Extended / Best Value)" }
  };

  // Helper: Format Date to YYYY-MM-DD
  function formatDateYYYYMMDD(d) {
    const year = d.getFullYear();
    const month = String(d.getMonth() + 1).padStart(2, '0');
    const day = String(d.getDate()).padStart(2, '0');
    return `${year}-${month}-${day}`;
  }

  // Helper: Format Time to HH:MM (24-hour)
  function formatTimeHHMM(d) {
    const hours = String(d.getHours()).padStart(2, '0');
    const minutes = String(d.getMinutes()).padStart(2, '0');
    return `${hours}:${minutes}`;
  }

  // Helper: Format Date to Readable String (e.g. Thu, 5 Nov 2026)
  function formatDateReadable(dateStr) {
    if (!dateStr) return '';
    const parts = dateStr.split('-');
    if (parts.length !== 3) return dateStr;
    const dateObj = new Date(parseInt(parts[0]), parseInt(parts[1]) - 1, parseInt(parts[2]));
    return dateObj.toLocaleDateString('en-IN', {
      weekday: 'short',
      day: 'numeric',
      month: 'short',
      year: 'numeric'
    });
  }

  // Helper: Format 24-hr Time to 12-hr (e.g. 04:30 PM)
  function formatTime12h(timeStr) {
    if (!timeStr) return '';
    const parts = timeStr.split(':');
    if (parts.length < 2) return timeStr;
    const h = parseInt(parts[0], 10);
    const m = parts[1];
    const period = h >= 12 ? 'PM' : 'AM';
    const h12 = h % 12 || 12;
    return `${h12}:${m} ${period}`;
  }

  // Set minimum date to today
  function setDateMinToday() {
    const today = new Date();
    inputBookingDate.min = formatDateYYYYMMDD(today);
  }

  // Set 'Now' button styling with 100% guaranteed high contrast
  function setNowVisual(active, timeString) {
    if (active) {
      btnQuickNow.style.backgroundColor = '#FF5454';
      btnQuickNow.style.color = '#ffffff';
      btnQuickNow.style.borderColor = '#FF5454';
      quickNowBtnLabel.textContent = `Now (${timeString})`;
    } else {
      btnQuickNow.style.backgroundColor = '#fff1f2';
      btnQuickNow.style.color = '#FF5454';
      btnQuickNow.style.borderColor = 'rgba(255, 84, 84, 0.35)';
      quickNowBtnLabel.textContent = "Book for Now (+60 min)";
    }
  }

  // Trigger 'Now (+60 Mins)'
  function applyNowBooking() {
    const targetTime = new Date(Date.now() + 60 * 60 * 1000);
    inputBookingDate.value = formatDateYYYYMMDD(targetTime);
    inputBookingTime.value = formatTimeHHMM(targetTime);
    isNowBooking = true;

    setNowVisual(true, formatTime12h(inputBookingTime.value));
    validationHint.classList.add('hidden');
  }

  // Reset 'Now' visual state
  function resetNowVisual() {
    isNowBooking = false;
    setNowVisual(false);
  }

  // Toggle Custom Hotel Dropdown
  function toggleHotelDropdown(open) {
    const shouldOpen = (open !== undefined) ? open : customHotelMenu.classList.contains('hidden');
    if (shouldOpen) {
      customHotelMenu.classList.remove('hidden');
      hotelChevron.classList.add('rotate-180');
      customHotelTrigger.classList.add('border-brand', 'ring-1', 'ring-brand/20');
      customHotelTrigger.setAttribute('aria-expanded', 'true');
    } else {
      customHotelMenu.classList.add('hidden');
      hotelChevron.classList.remove('rotate-180');
      customHotelTrigger.classList.remove('border-brand', 'ring-1', 'ring-brand/20');
      customHotelTrigger.setAttribute('aria-expanded', 'false');
    }
  }

  // Custom Hotel Item Clicks
  customHotelItems.forEach(item => {
    item.addEventListener('click', function(e) {
      e.stopPropagation();
      const val = this.getAttribute('data-hotel-option');
      selectedHotelValue.value = val;
      selectedHotelLabel.textContent = val;

      customHotelItems.forEach(opt => {
        const check = opt.querySelector('.hotel-check');
        if (opt === item) {
          opt.className = 'custom-hotel-item w-full text-left px-3 py-1.5 rounded-lg text-xs sm:text-sm transition-all flex items-center justify-between font-semibold cursor-pointer text-brand bg-white border border-brand/30 shadow-2xs';
          if (check) check.classList.remove('hidden');
        } else {
          opt.className = 'custom-hotel-item w-full text-left px-3 py-1.5 rounded-lg text-xs sm:text-sm transition-all flex items-center justify-between font-medium cursor-pointer text-stone-700 hover:bg-white hover:text-stone-900 border border-transparent';
          if (check) check.classList.add('hidden');
        }
      });

      toggleHotelDropdown(false);
      validationHint.classList.add('hidden');
    });
  });

  customHotelTrigger.addEventListener('click', function(e) {
    e.stopPropagation();
    toggleHotelDropdown();
  });

  // Close dropdown on outside click
  document.addEventListener('click', function(e) {
    if (!hotelDetailBox.contains(e.target)) {
      toggleHotelDropdown(false);
    }
  });

  // Update Visual States (Classic UI)
  function updateModalUI() {
    toggleHotelDropdown(false);

    // 1. Service Selection State (when visible)
    if (!isDirectServiceMode) {
      serviceSection.classList.remove('hidden');
      modalTitle.textContent = "Book Your Session";
      modalSubtitle.textContent = "Select therapy, duration, date/time, and your location in Kolkata";

      serviceButtons.forEach(btn => {
        const sName = btn.getAttribute('data-service-select');
        const indicator = btn.querySelector('.service-indicator');
        if (sName.toLowerCase().replace(/&amp;/g, '&') === currentService.toLowerCase().replace(/&amp;/g, '&')) {
          btn.classList.remove('border-stone-200', 'bg-white');
          btn.classList.add('border-brand', 'bg-rose-50/50');
          if (indicator) {
            indicator.className = 'service-indicator w-3.5 h-3.5 rounded-full border border-brand bg-brand flex items-center justify-center shrink-0';
            indicator.innerHTML = '<span class="w-1.5 h-1.5 rounded-full bg-white"></span>';
          }
        } else {
          btn.classList.remove('border-brand', 'bg-rose-50/50');
          btn.classList.add('border-stone-200', 'bg-white');
          if (indicator) {
            indicator.className = 'service-indicator w-3.5 h-3.5 rounded-full border border-stone-300 flex items-center justify-center shrink-0';
            indicator.innerHTML = '';
          }
        }
      });
    } else {
      // Direct Card Mode: Hide service selector, show Service Name in title
      serviceSection.classList.add('hidden');
      modalTitle.textContent = currentService;
      modalSubtitle.textContent = "Select package, date/time, and your location in Kolkata";
    }

    // 2. Duration Selection State
    if (currentDuration === "60") {
      btnDuration60.classList.remove('border-stone-200', 'bg-white');
      btnDuration60.classList.add('border-brand', 'bg-rose-50/50');
      btnDuration90.classList.remove('border-brand', 'bg-rose-50/50');
      btnDuration90.classList.add('border-stone-200', 'bg-white');
    } else {
      btnDuration90.classList.remove('border-stone-200', 'bg-white');
      btnDuration90.classList.add('border-brand', 'bg-rose-50/50');
      btnDuration60.classList.remove('border-brand', 'bg-rose-50/50');
      btnDuration60.classList.add('border-stone-200', 'bg-white');
    }

    // 3. Location Segmented Control State
    if (currentLocation === "Hotel") {
      btnLocHotel.classList.remove('text-stone-600');
      btnLocHotel.classList.add('bg-white', 'text-stone-900', 'shadow-2xs');
      btnLocHome.classList.remove('bg-white', 'text-stone-900', 'shadow-2xs');
      btnLocHome.classList.add('text-stone-600');

      homeDetailBox.classList.add('hidden');
      hotelDetailBox.classList.remove('hidden');
    } else {
      btnLocHome.classList.remove('text-stone-600');
      btnLocHome.classList.add('bg-white', 'text-stone-900', 'shadow-2xs');
      btnLocHotel.classList.remove('bg-white', 'text-stone-900', 'shadow-2xs');
      btnLocHotel.classList.add('text-stone-600');

      hotelDetailBox.classList.add('hidden');
      homeDetailBox.classList.remove('hidden');
    }

    // 4. Update CTA Button text
    const pkg = packages[currentDuration];
    confirmBtnText.textContent = `Book on WhatsApp (${pkg.price})`;
  }

  // Open Modal function
  window.openBookingModal = function(serviceTitle, preferredDuration = "90", directCard = false) {
    isDirectServiceMode = Boolean(directCard);
    
    if (serviceTitle && serviceTitle.trim()) {
      currentService = serviceTitle.trim();
    } else {
      currentService = "Deep Tissue Massage";
    }
    currentDuration = (preferredDuration === "60") ? "60" : "90";
    currentLocation = "Home"; // Reset to Home default

    setDateMinToday();
    
    // Auto-prefill today + 60 min if fields are empty
    if (!inputBookingDate.value || !inputBookingTime.value) {
      applyNowBooking();
    }

    validationHint.classList.add('hidden');
    inputHomeAddress.classList.remove('border-rose-400', 'ring-2', 'ring-rose-200');

    updateModalUI();

    modal.classList.remove('opacity-0', 'pointer-events-none');
    modal.classList.add('opacity-100', 'pointer-events-auto');
    modalCard.classList.remove('scale-95');
    modalCard.classList.add('scale-100');
    document.body.classList.add('overflow-hidden');
  };

  // Close Modal function
  function closeModal() {
    toggleHotelDropdown(false);
    modal.classList.remove('opacity-100', 'pointer-events-auto');
    modal.classList.add('opacity-0', 'pointer-events-none');
    modalCard.classList.remove('scale-100');
    modalCard.classList.add('scale-95');
    document.body.classList.remove('overflow-hidden');
  }

  // Event Listeners for Service clicks
  serviceButtons.forEach(btn => {
    btn.addEventListener('click', function() {
      currentService = this.getAttribute('data-service-select');
      updateModalUI();
    });
  });

  // Event Listeners for Duration clicks
  durationButtons.forEach(btn => {
    btn.addEventListener('click', function() {
      currentDuration = this.getAttribute('data-duration-select');
      updateModalUI();
    });
  });

  // Event Listeners for Location clicks
  locationButtons.forEach(btn => {
    btn.addEventListener('click', function() {
      currentLocation = this.getAttribute('data-loc-select');
      updateModalUI();
    });
  });

  // 'Now (+60 Mins)' Button Click
  btnQuickNow.addEventListener('click', function() {
    applyNowBooking();
  });

  // Live input change listeners
  inputBookingDate.addEventListener('change', function() {
    resetNowVisual();
    validationHint.classList.add('hidden');
  });

  inputBookingTime.addEventListener('change', function() {
    resetNowVisual();
    validationHint.classList.add('hidden');
  });

  inputHomeAddress.addEventListener('input', function() {
    this.classList.remove('border-rose-400', 'ring-2', 'ring-rose-200');
    validationHint.classList.add('hidden');
  });

  termsCheckbox.addEventListener('change', function() {
    validationHint.classList.add('hidden');
  });

  // Close handlers
  closeBtn.addEventListener('click', closeModal);
  modal.addEventListener('click', function(e) {
    if (e.target === modal) {
      closeModal();
    }
  });
  window.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && !modal.classList.contains('pointer-events-none')) {
      closeModal();
    }
  });

  // Confirm WhatsApp Booking - Button is ALWAYS vibrant & interactive
  confirmBtn.addEventListener('click', function() {
    const isTermsAccepted = termsCheckbox && termsCheckbox.checked;
    const hasDate = inputBookingDate.value.trim() !== '';
    const hasTime = inputBookingTime.value.trim() !== '';
    let hasLocation = false;
    let missingPrompt = "";

    if (!hasDate) {
      missingPrompt = "Please select appointment date.";
      inputBookingDate.focus();
    } else if (!hasTime) {
      missingPrompt = "Please select appointment time.";
      inputBookingTime.focus();
    } else if (currentLocation === "Home") {
      hasLocation = inputHomeAddress.value.trim().length > 0;
      if (!hasLocation) {
        missingPrompt = "Please enter your Kolkata area or landmark address.";
        inputHomeAddress.classList.add('border-rose-400', 'ring-2', 'ring-rose-200', 'input-error-shake');
        inputHomeAddress.focus();
        setTimeout(() => inputHomeAddress.classList.remove('input-error-shake'), 400);
      }
    } else {
      hasLocation = selectedHotelValue.value.trim().length > 0;
      if (!hasLocation) {
        missingPrompt = "Please select your Kolkata hotel zone.";
      }
    }

    if (!isTermsAccepted && hasDate && hasTime && (hasLocation || currentLocation === "Hotel")) {
      missingPrompt = "Please check the box to agree to the Terms & Conditions.";
      termsCheckbox.focus();
    }

    if (!hasDate || !hasTime || !hasLocation || !isTermsAccepted) {
      validationHint.textContent = missingPrompt;
      validationHint.classList.remove('hidden');
      return;
    }

    // All valid -> proceed to WhatsApp!
    const pkg = packages[currentDuration];
    let locationDetails = "";

    if (currentLocation === "Hotel") {
      const selectedHotelArea = selectedHotelValue.value;
      locationDetails = `• Location: Hotel Room\n• Hotel Zone: ${selectedHotelArea}`;
    } else {
      const homeAddress = inputHomeAddress.value.trim();
      locationDetails = `• Location: At Home (Doorstep)\n• Address / Area: ${homeAddress}`;
    }

    const readableDate = formatDateReadable(inputBookingDate.value);
    const readableTime = formatTime12h(inputBookingTime.value);
    const timeLabel = isNowBooking ? `${readableTime} (Now - within ~60 mins arrival)` : readableTime;

    // Draft clean structured WhatsApp message
    const message = 
`Hello City of Joy Therapy,

I would like to book a doorstep massage session:
• Service: ${currentService}
• Package: ${pkg.label}
• Preferred Date: ${readableDate}
• Preferred Time: ${timeLabel}
${locationDetails}
• Rate: ${pkg.price} (No Advance Payment)
• Terms Accepted: Yes (Professional Wellness Therapy)

Please share available therapist profiles and confirm my slot. Thank you!`;

    const encoded = encodeURIComponent(message);
    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encoded}`;

    window.open(whatsappUrl, '_blank', 'noopener,noreferrer');
    closeModal();
  });

  // Universal click listener:
  document.addEventListener('click', function(e) {
    // 1. Direct from a specific service card -> directCard = true
    const triggerService = e.target.closest('[data-book-service]');
    if (triggerService) {
      e.preventDefault();
      const sName = triggerService.getAttribute('data-book-service') || "Deep Tissue Massage";
      const sDur = triggerService.getAttribute('data-book-duration') || "90";
      window.openBookingModal(sName, sDur, true);
      return;
    }

    // 2. Generic "Book Your Session" / other buttons -> directCard = false
    const triggerSession = e.target.closest('[data-book-session]');
    if (triggerSession) {
      e.preventDefault();
      window.openBookingModal("Deep Tissue Massage", "90", false);
    }
  });

  // Initialize
  setDateMinToday();
  updateModalUI();

})();
</script>
