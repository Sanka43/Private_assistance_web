/**
 * RuXt AI - Sales Engine, Sign-In Gateway & Interactive Experience
 */

/**
 * External Tool Sign In & Introduction Video Configuration
 * - targetUrl: Destination URL of your SaaS/tool sign-in page (hosted on an external domain).
 *   Configured with '#' for development as requested.
 *   In production, replace with your live tool domain e.g., 'https://app.yourdomain.com/login'
 * - delaySeconds: Duration in seconds to show introduction video before skip button is shown/unlocked.
 * - videoSrc: Path to video file (or external stream).
 * - autoRouteAfterDelay: Set to false so the user can see the unlocked button and click to proceed.
 */
const SIGN_IN_CONFIG = {
    targetUrl: 'https://app.ruxt.org/',
    delaySeconds: 10,
    videoSrc: 'assets/video/intro.mp4',
    autoPlay: true,
    autoRouteAfterDelay: true
};

document.addEventListener('DOMContentLoaded', () => {
    // 1. Initialize Lucide Icons if available
    if (window.lucide) {
        window.lucide.createIcons();
    }

    // 2. Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const closeMobileMenuBtn = document.getElementById('closeMobileMenuBtn');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
        });
        if (closeMobileMenuBtn) {
            closeMobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        }
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                // If the link is not the sign-in trigger, hide the menu
                if (!link.classList.contains('sign-in-btn')) {
                    mobileMenu.classList.add('hidden');
                }
            });
        });
    }

    // 3. Interactive Product Simulator (Tabs)
    const demoTabs = document.querySelectorAll('.demo-tab-btn');
    const demoPanels = document.querySelectorAll('.demo-panel');

    demoTabs.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetTab = btn.getAttribute('data-tab');

            // Switch active styling on buttons
            demoTabs.forEach(t => {
                t.classList.remove('bg-[#173d34]', 'text-[#fcfaf5]', 'shadow-md');
                t.classList.add('text-[#68716d]', 'hover:text-[#173d34]', 'hover:bg-[#f0ede4]');
            });
            btn.classList.add('bg-[#173d34]', 'text-[#fcfaf5]', 'shadow-md');
            btn.classList.remove('text-[#68716d]', 'hover:text-[#173d34]', 'hover:bg-[#f0ede4]');

            // Switch panels
            demoPanels.forEach(p => {
                if (p.id === targetTab) {
                    p.classList.remove('hidden');
                } else {
                    p.classList.add('hidden');
                }
            });

            if (window.lucide) {
                window.lucide.createIcons();
            }
        });
    });

    // 4. FAQ Accordion Logic
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const questionBtn = item.querySelector('.faq-question');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('.faq-icon');

        if (questionBtn && content) {
            questionBtn.addEventListener('click', () => {
                const isOpen = content.classList.contains('open');

                // Close all other accordions
                document.querySelectorAll('.faq-content').forEach(c => c.classList.remove('open'));
                document.querySelectorAll('.faq-icon').forEach(i => i.classList.remove('rotate-180'));

                if (!isOpen) {
                    content.classList.add('open');
                    if (icon) icon.classList.add('rotate-180');
                }
            });
        }
    });

    // 5. Order & Deployment Modal Logic
    const orderModal = document.getElementById('orderModal');
    const closeOrderModalBtn = document.getElementById('closeOrderModalBtn');
    const orderPlanName = document.getElementById('orderPlanName');
    const orderPlanPrice = document.getElementById('orderPlanPrice');
    const selectedPlanInput = document.getElementById('selectedPlanInput');
    const openOrderButtons = document.querySelectorAll('.open-order-btn');

    let currentSelectedPlan = 'Founder Executive Suite';
    let currentSelectedPrice = 'Inquire';

    openOrderButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const plan = btn.getAttribute('data-plan') || 'Founder Executive Suite';
            const price = btn.getAttribute('data-price') || 'Inquire';

            currentSelectedPlan = plan;
            currentSelectedPrice = price;

            if (orderPlanName) orderPlanName.textContent = plan;
            if (orderPlanPrice) orderPlanPrice.textContent = 'Lifetime Private License';
            if (selectedPlanInput) selectedPlanInput.value = plan;

            if (orderModal) {
                orderModal.classList.remove('hidden');
            }
        });
    });

    if (closeOrderModalBtn && orderModal) {
        closeOrderModalBtn.addEventListener('click', () => {
            orderModal.classList.add('hidden');
        });
        orderModal.addEventListener('click', (e) => {
            if (e.target === orderModal) {
                orderModal.classList.add('hidden');
            }
        });
    }

    // Direct Form Submission via AJAX to api/inquiry.php
    const orderForm = document.getElementById('orderForm');
    const orderStatusMsg = document.getElementById('orderStatusMsg');
    const submitOrderBtn = document.getElementById('submitOrderBtn');

    if (orderForm) {
        orderForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            if (submitOrderBtn) {
                submitOrderBtn.disabled = true;
                submitOrderBtn.innerHTML = '<i data-lucide="loader-2" class="w-4 h-4 animate-spin"></i><span>Processing...</span>';
                if (window.lucide) window.lucide.createIcons();
            }

            const formData = {
                plan: currentSelectedPlan,
                price: currentSelectedPrice,
                name: document.getElementById('buyerName') ? document.getElementById('buyerName').value : '',
                email: document.getElementById('buyerEmail') ? document.getElementById('buyerEmail').value : '',
                phone: document.getElementById('buyerPhone') ? document.getElementById('buyerPhone').value : '',
                note: document.getElementById('buyerNote') ? document.getElementById('buyerNote').value : ''
            };

            // If hosted on GitHub Pages or static host without PHP backend, display confirmation directly
            const isStaticHost = window.location.hostname.endsWith('github.io') || window.location.protocol === 'file:';
            if (isStaticHost) {
                if (orderStatusMsg) {
                    orderStatusMsg.className = 'p-4 rounded-xl bg-emerald-50 text-emerald-800 border border-emerald-200 text-xs font-medium space-y-1';
                    orderStatusMsg.innerHTML = `
                        <div class="font-bold text-emerald-900 flex items-center gap-1.5">
                            <span>🎉 Deployment Request Received!</span>
                        </div>
                        <p>Thank you! Your deployment request for <strong>${formData.plan}</strong> has been logged. Our concierge will follow up via <strong>${formData.email || 'your email'}</strong>.</p>
                    `;
                    orderStatusMsg.classList.remove('hidden');
                }
                orderForm.reset();
                if (submitOrderBtn) {
                    submitOrderBtn.disabled = false;
                    submitOrderBtn.innerHTML = '<span>Submit Deployment Request</span><i data-lucide="arrow-right" class="w-4 h-4"></i>';
                    if (window.lucide) window.lucide.createIcons();
                }
                return;
            }

            try {
                const response = await fetch('api/inquiry.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(formData)
                });
                const result = await response.json();

                if (result.success) {
                    if (orderStatusMsg) {
                        orderStatusMsg.className = 'p-4 rounded-xl bg-emerald-50 text-emerald-800 border border-emerald-200 text-xs font-medium space-y-1';
                        orderStatusMsg.innerHTML = `
                            <div class="font-bold text-emerald-900 flex items-center gap-1.5">
                                <span>🎉 Request Submitted Successfully!</span>
                            </div>
                            <p>${result.message || 'We have received your deployment details. Our team will contact you shortly.'}</p>
                        `;
                        orderStatusMsg.classList.remove('hidden');
                    }
                    orderForm.reset();
                } else {
                    throw new Error(result.message || 'Failed to submit request.');
                }
            } catch (err) {
                if (orderStatusMsg) {
                    orderStatusMsg.className = 'p-3 rounded-xl bg-red-50 text-red-800 border border-red-200 text-xs font-medium';
                    orderStatusMsg.textContent = `Error: ${err.message}. Please check your connection or contact our team directly.`;
                    orderStatusMsg.classList.remove('hidden');
                }
            } finally {
                if (submitOrderBtn) {
                    submitOrderBtn.disabled = false;
                    submitOrderBtn.innerHTML = '<span>Submit Deployment Request</span><i data-lucide="arrow-right" class="w-4 h-4"></i>';
                    if (window.lucide) window.lucide.createIcons();
                }
            }
        });
    }

    // 6. Sign In Introduction Video Gateway Modal Logic (Light White Background Theme)
    const signInVideoModal = document.getElementById('signInVideoModal');
    const closeSignInModalBtn = document.getElementById('closeSignInModalBtn');
    const skipToSignInBtn = document.getElementById('skipToSignInBtn');
    const skipBtnLabel = document.getElementById('skipBtnLabel');
    const skipBtnCountdownText = document.getElementById('skipBtnCountdownText');
    const countdownProgressBar = document.getElementById('countdownProgressBar');
    const introVideoPlayer = document.getElementById('introVideoPlayer');
    const introVideoFallback = document.getElementById('introVideoFallback');

    // All buttons triggering Sign In flow
    const signInTriggers = document.querySelectorAll('.sign-in-btn, [data-action="signin"]');

    let countdownInterval = null;
    const totalDelayMs = (SIGN_IN_CONFIG.delaySeconds || 10) * 1000;
    let remainingMs = totalDelayMs;
    let isDelayCompleted = false;

    function updateTimerDisplay() {
        const secondsLeft = Math.ceil(remainingMs / 1000);
        const displaySec = secondsLeft > 0 ? secondsLeft : 0;

        if (countdownProgressBar) {
            const percentage = (remainingMs / totalDelayMs) * 100;
            countdownProgressBar.style.width = `${Math.max(0, Math.min(100, percentage))}%`;
        }
        if (skipBtnCountdownText && !isDelayCompleted) {
            skipBtnCountdownText.textContent = displaySec > 0 ? ` (${displaySec}s)` : '';
        }
    }

    function onDelayCompleted() {
        isDelayCompleted = true;
        clearInterval(countdownInterval);
        remainingMs = 0;
        updateTimerDisplay();

        // Unlock & Show Skip / Sign In Button strictly when delay ends
        if (skipToSignInBtn) {
            skipToSignInBtn.classList.remove('skip-btn-counting', 'skip-btn-locked');
            skipToSignInBtn.classList.add('skip-btn-active');
            skipToSignInBtn.removeAttribute('aria-disabled');
            if (skipBtnLabel) {
                skipBtnLabel.textContent = 'Proceed to Sign In';
            }
            if (skipBtnCountdownText) {
                skipBtnCountdownText.textContent = '';
            }
        }

        if (window.lucide) {
            window.lucide.createIcons();
        }

        // Optional auto-route after brief delay if enabled
        if (SIGN_IN_CONFIG.autoRouteAfterDelay) {
            setTimeout(() => {
                routeToSignIn('auto-timer-delayed');
            }, 1500);
        }
    }

    function startCountdown() {
        clearInterval(countdownInterval);
        isDelayCompleted = false;
        remainingMs = totalDelayMs;

        // Reset skip button to strictly locked state
        if (skipToSignInBtn) {
            skipToSignInBtn.classList.remove('skip-btn-active');
            skipToSignInBtn.classList.add('skip-btn-locked');
            skipToSignInBtn.setAttribute('aria-disabled', 'true');
            if (skipBtnLabel) skipBtnLabel.textContent = 'Skip & Sign In';
            if (skipBtnCountdownText) skipBtnCountdownText.textContent = ` (${Math.ceil(totalDelayMs / 1000)}s)`;
        }

        updateTimerDisplay();

        countdownInterval = setInterval(() => {
            if (!isDelayCompleted) {
                remainingMs -= 100;
                if (remainingMs <= 0) {
                    onDelayCompleted();
                } else {
                    updateTimerDisplay();
                }
            }
        }, 100);
    }

    function openSignInModal() {
        if (!signInVideoModal) return;

        // Hide mobile menu if open
        if (mobileMenu) mobileMenu.classList.add('hidden');

        signInVideoModal.classList.remove('hidden');

        // Attempt HTML5 video playback
        if (introVideoPlayer) {
            introVideoPlayer.currentTime = 0;
            const playPromise = introVideoPlayer.play();
            if (playPromise !== undefined) {
                playPromise.then(() => {
                    if (introVideoFallback) introVideoFallback.classList.add('hidden');
                }).catch(() => {
                    // Autoplay was blocked or file missing; keep animated telemetry fallback visible
                    if (introVideoFallback) introVideoFallback.classList.remove('hidden');
                });
            }
        }

        // Start countdown delay
        startCountdown();

        if (window.lucide) {
            window.lucide.createIcons();
        }
    }

    function closeSignInModal() {
        if (!signInVideoModal) return;
        clearInterval(countdownInterval);
        if (introVideoPlayer) {
            introVideoPlayer.pause();
        }
        signInVideoModal.classList.add('hidden');
    }

    function routeToSignIn(triggerSource = 'user') {
        clearInterval(countdownInterval);
        if (introVideoPlayer) {
            introVideoPlayer.pause();
        }

        const target = SIGN_IN_CONFIG.targetUrl;

        // If target URL is '#' (development mode as requested)
        if (!target || target === '#' || target.trim() === '') {
            if (window.location.hash !== '#signin') {
                try {
                    history.pushState(null, '', '#signin');
                } catch (e) {
                    window.location.hash = 'signin';
                }
            }
            closeSignInModal();
            return;
        }

        // In production: route to the external tool's sign-in page
        window.location.href = target;
    }

    // Attach click listeners to all Sign In buttons
    signInTriggers.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            openSignInModal();
        });
    });

    // Close button in modal
    if (closeSignInModalBtn) {
        closeSignInModalBtn.addEventListener('click', () => {
            closeSignInModal();
        });
    }

    // Backdrop click closes modal
    if (signInVideoModal) {
        signInVideoModal.addEventListener('click', (e) => {
            if (e.target === signInVideoModal) {
                closeSignInModal();
            }
        });
    }

    // Escape key closes modal
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && signInVideoModal && !signInVideoModal.classList.contains('hidden')) {
            closeSignInModal();
        }
    });

    // Skip & Sign In Button - strictly disabled until delay completes
    if (skipToSignInBtn) {
        skipToSignInBtn.addEventListener('click', (e) => {
            e.preventDefault();
            if (!isDelayCompleted) {
                return false;
            }
            routeToSignIn('skip-button');
        });
    }

    // Video ended event listener -> completes delay and reveals button
    if (introVideoPlayer) {
        introVideoPlayer.addEventListener('ended', () => {
            onDelayCompleted();
        });
    }

    // Check if initial URL has #signin hash to auto-open modal
    if (window.location.hash === '#signin') {
        openSignInModal();
    }
});
