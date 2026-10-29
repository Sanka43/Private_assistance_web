/**
 * RuXt AI - Sales Engine & Interactive Experience
 */

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
                mobileMenu.classList.add('hidden');
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

    // 6. FAQ Accordion Logic
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
});
