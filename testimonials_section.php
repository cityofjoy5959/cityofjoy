<?php
// testimonials_section.php - 12 Moving Cards • Kolkata Doorstep Reviews
$kolkata_testimonials = [
  [
    'initial' => 'S',
    'name' => 'Subhashis Mukherjee',
    'location' => 'Salt Lake, Kolkata',
    'text' => 'After long hours at Sector V, my lower back was seized. The therapist reached my flat in Salt Lake on time with clean disposable linens. The Deep Tissue pressure was spot on. Highly recommended for busy IT folks.'
  ],
  [
    'initial' => 'A',
    'name' => 'Anirban Chatterjee',
    'location' => 'Ballygunge, Kolkata',
    'text' => 'Total privacy and no awkwardness. The male therapist was polite, disciplined, and brought warm herbal oil. Booking Men\'s Wellness at my apartment in Ballygunge saved me Kolkata traffic hassle.'
  ],
  [
    'initial' => 'D',
    'name' => 'Debashis Sen',
    'location' => 'New Town, Kolkata',
    'text' => 'Tried their body scrubbing & massage package over the weekend in New Town. My skin felt thoroughly rejuvenated and fresh. Really appreciated that no advance deposit was demanded before arrival.'
  ],
  [
    'initial' => 'R',
    'name' => 'Rohan Banerjee',
    'location' => 'Park Street, Kolkata',
    'text' => 'Staying at a boutique hotel near Park Street on business and needed quick stress relief. The therapist arrived within 45 mins. Genuine head and foot reflexology that relieved my chronic travel headache.'
  ],
  [
    'initial' => 'S',
    'name' => 'Soumitra Das',
    'location' => 'Alipore, Kolkata',
    'text' => 'Top-notch professionalism and respect for client personal space. The full body recovery strokes relieved my chronic shoulder stiffness effortlessly. A genuinely reliable doorstep service.'
  ],
  [
    'initial' => 'A',
    'name' => 'Arindam Roy',
    'location' => 'Gariahat, Kolkata',
    'text' => 'Punctual, discreet, and very skilled therapist. Bringing sanitized equipment and warming the herbal oil right in front of me gave me complete peace of mind. Excellent experience.'
  ],
  [
    'initial' => 'P',
    'name' => 'Prasenjit Bhattacharya',
    'location' => 'Jadavpur, Kolkata',
    'text' => 'Being a university professor with persistent neck pain, this was exactly what I needed. Booking directly on WhatsApp took just 2 minutes with zero advance payment. Highly recommend.'
  ],
  [
    'initial' => 'K',
    'name' => 'Kaushik Sen',
    'location' => 'Behala, Kolkata',
    'text' => 'Relieved heavy fatigue after days of travel and site inspections. The pressure techniques on the legs and lower back were therapeutic and authentic. Will definitely book again.'
  ],
  [
    'initial' => 'I',
    'name' => 'Indranil Dutta',
    'location' => 'Rajarhat, Kolkata',
    'text' => 'The botanical body scrub and relaxation therapy left me feeling revitalized. The therapist was courteous, soft-spoken, and well trained. Best home massage service in Kolkata.'
  ],
  [
    'initial' => 'A',
    'name' => 'Amitava Ghosh',
    'location' => 'Howrah, Kolkata',
    'text' => 'Booked head and foot acupressure for severe migraine issues. The rhythmic temple and scalp massage eliminated the headache within the hour. Extremely grateful.'
  ],
  [
    'initial' => 'S',
    'name' => 'Sagnik Majumdar',
    'location' => 'Bowbazar, Kolkata',
    'text' => 'Cleanliness was 10/10 with single-use towels and premium oils. As someone cautious about hygiene, I was thoroughly impressed by their high professional standard.'
  ],
  [
    'initial' => 'T',
    'name' => 'Tamal Mukherjee',
    'location' => 'Dum Dum, Kolkata',
    'text' => 'Smooth WhatsApp booking after landing at Kolkata airport. The therapist arrived on schedule at my home, completely easing my flight exhaustion. 5-star therapy.'
  ],
];
?>

<!-- Client Testimonials Section (12 Moving Cards • Kolkata Doorstep Reviews) -->
<section id="testimonials" class="py-20 bg-stone-50/70 border-b border-stone-200/70 font-sans overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10">

    <!-- Section Header -->
    <div class="text-center max-w-2xl mx-auto">
      <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-rose-50 border border-brand/20 text-brand text-xs font-semibold uppercase tracking-wider mb-3">
        <span>Client Experiences</span>
      </div>
      <h2 class="text-3xl sm:text-4xl font-bold text-stone-900 tracking-tight">
        Trusted by Men Across Kolkata
      </h2>
      <p class="mt-3 text-stone-600 text-sm sm:text-base leading-relaxed">
        Real experiences from professionals, travelers, and residents enjoying therapeutic doorstep care in their personal space.
      </p>
    </div>

  </div>

  <!-- Infinite Marquee / Carousel Track (3 Cards Visible on Screen, Swapping Smoothly Right to Left) -->
  <div class="relative w-full overflow-hidden py-2">
    <!-- Edge Gradient Fades for Premium Ambient Effect (Subtle on Mobile so Cards Remain 100% Legible) -->
    <div class="pointer-events-none absolute top-0 bottom-0 left-0 w-6 sm:w-16 md:w-24 bg-gradient-to-r from-stone-50 via-stone-50/70 to-transparent z-20"></div>
    <div class="pointer-events-none absolute top-0 bottom-0 right-0 w-6 sm:w-16 md:w-24 bg-gradient-to-l from-stone-50 via-stone-50/70 to-transparent z-20"></div>

    <!-- Inner Container Matching 7xl Layout for Precise 3-Card Sizing -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div id="testimonial-track" class="flex items-center gap-4 sm:gap-6 overflow-x-auto py-6 sm:py-8 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden snap-x snap-mandatory cursor-grab active:cursor-grabbing select-none scroll-smooth">
        <?php foreach (array_merge($kolkata_testimonials, $kolkata_testimonials, $kolkata_testimonials) as $idx => $item): ?>
          <div 
            data-card-index="<?= $idx ?>"
            class="testimonial-card flex-[0_0_88vw] sm:flex-[0_0_calc(50%-12px)] lg:flex-[0_0_calc((100%-48px)/3)] snap-center rounded-2xl p-5 sm:p-7 border flex flex-col justify-between transition-all duration-500 ease-out min-h-[250px] sm:min-h-[260px] bg-white border-stone-200/80 scale-95 opacity-80 cursor-pointer">
            <div>
              <div class="flex text-amber-400 space-x-1 text-lg sm:text-xl mb-4 tracking-wide" aria-label="5 out of 5 stars">
                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
              </div>
              <p class="text-stone-700 text-sm leading-relaxed mb-6">
                “<?= htmlspecialchars($item['text']) ?>”
              </p>
            </div>

            <div class="pt-4 border-t border-stone-100 flex items-center gap-3">
              <!-- User Initial Icon (Uniform Color Across All Cards) -->
              <div class="w-11 h-11 rounded-full bg-brand text-white font-bold text-base flex items-center justify-center shrink-0 shadow-xs">
                <?= htmlspecialchars($item['initial']) ?>
              </div>
              <div class="min-w-0">
                <div class="font-bold text-stone-900 text-sm truncate"><?= htmlspecialchars($item['name']) ?></div>
                <div class="text-xs text-stone-500 flex items-center gap-1 truncate">
                  <svg class="w-3 h-3 text-brand shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                  <span><?= htmlspecialchars($item['location']) ?></span>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <!-- Testimonial Count Dots & Swapping Navigation -->
  <div class="flex items-center justify-center gap-3 mt-2 mb-6">
    <!-- Prev Button -->
    <button 
      id="prev-testimonial-btn" 
      type="button" 
      class="w-8 h-8 rounded-full bg-white border border-stone-200 text-stone-600 hover:text-brand hover:border-brand flex items-center justify-center shadow-xs transition-all active:scale-90"
      aria-label="Previous Testimonial">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
    </button>

    <!-- 12 Pagination Count Dots -->
    <div id="testimonial-dots" class="flex items-center gap-2" role="tablist" aria-label="Review page navigation">
      <?php for ($i = 0; $i < count($kolkata_testimonials); $i++): ?>
        <button 
          type="button" 
          data-dot-index="<?= $i ?>"
          aria-label="Go to testimonial <?= $i + 1 ?>"
          class="testimonial-dot h-2 rounded-full transition-all duration-300 <?= $i === 0 ? 'w-7 bg-brand shadow-xs' : 'w-2 bg-stone-300 hover:bg-stone-400' ?>">
        </button>
      <?php endfor; ?>
    </div>

    <!-- Next Button -->
    <button 
      id="next-testimonial-btn" 
      type="button" 
      class="w-8 h-8 rounded-full bg-white border border-stone-200 text-stone-600 hover:text-brand hover:border-brand flex items-center justify-center shadow-xs transition-all active:scale-90"
      aria-label="Next Testimonial">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
    </button>
  </div>

  <!-- Trust Metric Banner Below Moving Cards -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-2">
    <div class="bg-white rounded-2xl border border-stone-200/70 p-6 flex flex-wrap items-center justify-between gap-4 text-center sm:text-left">
      <div class="flex items-center gap-3 mx-auto sm:mx-0">
        <div class="flex -space-x-2">
          <span class="w-9 h-9 rounded-full bg-brand text-white text-xs font-bold flex items-center justify-center border-2 border-white shadow-xs">S</span>
          <span class="w-9 h-9 rounded-full bg-brand text-white text-xs font-bold flex items-center justify-center border-2 border-white shadow-xs">A</span>
          <span class="w-9 h-9 rounded-full bg-brand text-white text-xs font-bold flex items-center justify-center border-2 border-white shadow-xs">D</span>
          <span class="w-9 h-9 rounded-full bg-brand text-white text-xs font-bold flex items-center justify-center border-2 border-white shadow-xs">R</span>
        </div>
        <div>
          <p class="text-stone-900 font-bold text-sm">4.9 / 5.0 Average Rating</p>
          <p class="text-stone-500 text-xs">Based on 120+ doorstep sessions across Kolkata</p>
        </div>
      </div>

      <button 
        type="button"
        data-book-session
        class="mx-auto sm:mx-0 inline-flex items-center justify-center px-7 py-3 rounded-full bg-brand text-white font-bold text-sm hover:bg-brand-hover shadow-md shadow-brand/20 transition-all active:scale-95 cursor-pointer">
        <span>Book Your Session</span>
      </button>
    </div>
  </div>

  <!-- Seamless Card Swapping, Center Card Highlighting & Dot Sync Script -->
  <script>
    (function() {
      const track = document.getElementById('testimonial-track');
      const dots = Array.from(document.querySelectorAll('.testimonial-dot'));
      const prevBtn = document.getElementById('prev-testimonial-btn');
      const nextBtn = document.getElementById('next-testimonial-btn');
      if (!track) return;

      const cards = Array.from(track.querySelectorAll('.testimonial-card'));
      const totalOriginal = 12; // 12 authentic Kolkata testimonials
      let activeIndex = totalOriginal; // start at beginning of middle set (index 12)
      let isPaused = false;
      let isUserDragging = false;
      let startX = 0;
      let startScrollLeft = 0;
      let autoSwapTimer = null;

      function getTargetScroll(idx) {
        if (!cards[idx]) return 0;
        const card = cards[idx];
        const cardCenter = card.offsetLeft + card.offsetWidth / 2;
        return cardCenter - (track.clientWidth / 2);
      }

      function updateStyles(targetIdx) {
        const normalizedDot = targetIdx % totalOriginal;

        // Highlight active centered card
        cards.forEach((card, i) => {
          if (i === targetIdx) {
            card.classList.add('bg-rose-50/80', 'border-brand/40', 'scale-105', 'shadow-lg', 'shadow-brand/10', 'opacity-100', 'z-10');
            card.classList.remove('bg-white', 'border-stone-200/80', 'scale-95', 'opacity-80', 'z-0');
          } else {
            card.classList.remove('bg-rose-50/80', 'border-brand/40', 'scale-105', 'shadow-lg', 'shadow-brand/10', 'opacity-100', 'z-10');
            card.classList.add('bg-white', 'border-stone-200/80', 'scale-95', 'opacity-80', 'z-0');
          }
        });

        // Update 12 Count Dots
        dots.forEach((dot, k) => {
          if (k === normalizedDot) {
            dot.classList.add('w-7', 'bg-brand', 'shadow-xs');
            dot.classList.remove('w-2', 'bg-stone-300', 'hover:bg-stone-400');
          } else {
            dot.classList.remove('w-7', 'bg-brand', 'shadow-xs');
            dot.classList.add('w-2', 'bg-stone-300', 'hover:bg-stone-400');
          }
        });
      }

      function scrollToIndex(idx, smooth = true) {
        activeIndex = idx;
        const targetLeft = getTargetScroll(idx);
        
        if (smooth) {
          track.scrollTo({ left: targetLeft, behavior: 'smooth' });
        } else {
          track.scrollLeft = targetLeft;
        }
        updateStyles(activeIndex);

        // Silent wrap-around reset after smooth transition
        if (smooth) {
          setTimeout(() => {
            checkBoundsAndNormalize();
          }, 520);
        }
      }

      function checkBoundsAndNormalize() {
        // Keep activeIndex within middle set (12..23) for seamless infinite cycling
        if (activeIndex >= totalOriginal * 2) {
          activeIndex -= totalOriginal;
          track.scrollLeft = getTargetScroll(activeIndex);
          updateStyles(activeIndex);
        } else if (activeIndex < totalOriginal) {
          activeIndex += totalOriginal;
          track.scrollLeft = getTargetScroll(activeIndex);
          updateStyles(activeIndex);
        }
      }

      function nextCard() {
        scrollToIndex(activeIndex + 1, true);
      }

      function prevCard() {
        scrollToIndex(activeIndex - 1, true);
      }

      // Dot click navigation
      dots.forEach((dot) => {
        dot.addEventListener('click', (e) => {
          const dotIdx = parseInt(e.currentTarget.getAttribute('data-dot-index'), 10);
          scrollToIndex(totalOriginal + dotIdx, true);
          restartTimer();
        });
      });

      // Card click to center
      cards.forEach((card, i) => {
        card.addEventListener('click', () => {
          if (!isUserDragging) {
            scrollToIndex(i, true);
            restartTimer();
          }
        });
      });

      if (prevBtn) prevBtn.addEventListener('click', () => { prevCard(); restartTimer(); });
      if (nextBtn) nextBtn.addEventListener('click', () => { nextCard(); restartTimer(); });

      // Mouse Drag & Touch Swiping Mechanics
      track.addEventListener('mousedown', (e) => {
        isPaused = true;
        isUserDragging = false;
        startX = e.pageX - track.offsetLeft;
        startScrollLeft = track.scrollLeft;
        track.classList.remove('scroll-smooth');
      });

      track.addEventListener('mousemove', (e) => {
        if (startX === 0) return;
        const x = e.pageX - track.offsetLeft;
        const walk = (x - startX);
        if (Math.abs(walk) > 5) isUserDragging = true;
        track.scrollLeft = startScrollLeft - walk;
      });

      function handleDragEnd(e) {
        if (startX === 0) return;
        track.classList.add('scroll-smooth');
        const walk = (e.pageX || 0) - track.offsetLeft - startX;
        startX = 0;
        isPaused = false;

        if (walk < -50) {
          nextCard();
        } else if (walk > 50) {
          prevCard();
        } else {
          // Snap to closest card
          snapToNearest();
        }
        restartTimer();
      }

      track.addEventListener('mouseup', handleDragEnd);
      track.addEventListener('mouseleave', () => {
        if (startX !== 0) handleDragEnd({ pageX: 0 });
        isPaused = false;
      });

      track.addEventListener('touchstart', () => { isPaused = true; }, { passive: true });
      track.addEventListener('touchend', () => {
        isPaused = false;
        setTimeout(() => { snapToNearest(); restartTimer(); }, 100);
      });

      function snapToNearest() {
        const trackCenter = track.getBoundingClientRect().left + track.clientWidth / 2;
        let closestIdx = activeIndex;
        let minDistance = Infinity;

        cards.forEach((card, i) => {
          const cardCenter = card.getBoundingClientRect().left + card.offsetWidth / 2;
          const dist = Math.abs(cardCenter - trackCenter);
          if (dist < minDistance) {
            minDistance = dist;
            closestIdx = i;
          }
        });

        scrollToIndex(closestIdx, true);
      }

      // Auto-swap right to left every 3.5 seconds
      function startTimer() {
        if (autoSwapTimer) clearInterval(autoSwapTimer);
        autoSwapTimer = setInterval(() => {
          if (!isPaused) {
            nextCard();
          }
        }, 3500);
      }

      function restartTimer() {
        startTimer();
      }

      // Initialize on load
      window.addEventListener('load', () => {
        scrollToIndex(totalOriginal, false);
        startTimer();
      });
      window.addEventListener('resize', () => {
        track.scrollLeft = getTargetScroll(activeIndex);
      });

      setTimeout(() => {
        scrollToIndex(totalOriginal, false);
        startTimer();
      }, 100);
    })();
  </script>
</section>
