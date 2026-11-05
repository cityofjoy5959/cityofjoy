<?php
// preloader.php - Minimal Tranquil Relaxation Preloader for City of Joy Therapy
?>
<style>
  #site-preloader {
    position: fixed;
    inset: 0;
    z-index: 99999;
    background-color: #FAF9F6;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    opacity: 1;
    visibility: visible;
  }

  #site-preloader.preloader-hidden {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
  }

  /* Gentle breathing lotus animation */
  @keyframes lotusBreathe {
    0%, 100% {
      transform: scale(0.96);
      filter: drop-shadow(0 4px 12px rgba(255, 84, 84, 0.15));
    }
    50% {
      transform: scale(1.05);
      filter: drop-shadow(0 8px 24px rgba(176, 156, 255, 0.25));
    }
  }

  /* Soothing concentric ripple pulse */
  @keyframes tranquilRipple {
    0% {
      transform: scale(0.85);
      opacity: 0.6;
    }
    50% {
      opacity: 0.3;
    }
    100% {
      transform: scale(1.6);
      opacity: 0;
    }
  }

  /* Delicate Progress Bar */
  @keyframes lineGlow {
    0% {
      transform: translateX(-100%);
    }
    50% {
      transform: translateX(0%);
    }
    100% {
      transform: translateX(100%);
    }
  }

  .lotus-pulse {
    animation: lotusBreathe 2.8s ease-in-out infinite;
  }

  .ripple-ring-1 {
    animation: tranquilRipple 3.2s cubic-bezier(0.25, 1, 0.5, 1) infinite;
  }

  .ripple-ring-2 {
    animation: tranquilRipple 3.2s cubic-bezier(0.25, 1, 0.5, 1) infinite 1.2s;
  }

  .progress-line-flow {
    animation: lineGlow 1.8s ease-in-out infinite;
  }
</style>

<div id="site-preloader" aria-hidden="true">
  <div class="relative flex items-center justify-center mb-6">
    <!-- Ripple Rings (Relaxation Waves) -->
    <div class="ripple-ring-1 absolute w-28 h-28 sm:w-32 sm:h-32 rounded-full border border-brand/20 pointer-events-none"></div>
    <div class="ripple-ring-2 absolute w-28 h-28 sm:w-32 sm:h-32 rounded-full border border-[#B09CFF]/25 pointer-events-none"></div>

    <!-- Soft Glow Ambient Circle -->
    <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-gradient-to-tr from-rose-100/60 via-white to-purple-100/40 shadow-sm flex items-center justify-center p-3 relative z-10 border border-stone-200/50">
      <!-- Lotus Emblem (First Image) -->
      <img 
        src="/assets/favicon.png" 
        alt="City of Joy Therapy Lotus" 
        class="w-12 h-12 sm:w-14 sm:h-14 object-contain lotus-pulse"
      />
    </div>
  </div>

  <!-- Calming Typography -->
  <div class="text-center space-y-1.5 px-4 z-10">
    <span class="block text-stone-900 font-extrabold text-base tracking-tight">
      City of Joy Therapy
    </span>
    <p class="font-accent text-xs sm:text-sm text-[#B09CFF] font-normal tracking-wide">
      A serene haven for body &amp; spirit
    </p>
  </div>

  <!-- Ultra-Minimal Progress Indicator -->
  <div class="mt-6 w-36 h-0.5 bg-stone-200/80 rounded-full overflow-hidden relative">
    <div class="progress-line-flow absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-brand to-transparent"></div>
  </div>
</div>

<script>
  (function() {
    let preloaderDismissed = false;

    function hidePreloader() {
      if (preloaderDismissed) return;
      preloaderDismissed = true;
      const loader = document.getElementById('site-preloader');
      if (loader) {
        loader.classList.add('preloader-hidden');
        setTimeout(function() {
          if (loader.parentNode) {
            loader.parentNode.removeChild(loader);
          }
        }, 650);
      }
    }

    // Dismiss when DOM is loaded or after brief peaceful delay
    if (document.readyState === 'complete') {
      setTimeout(hidePreloader, 400);
    } else {
      window.addEventListener('load', function() {
        setTimeout(hidePreloader, 400);
      });
    }

    // Safety fallback: maximum 2 seconds so user is NEVER stalled
    setTimeout(hidePreloader, 2000);
  })();
</script>

