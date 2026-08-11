import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileDrawer = document.getElementById('mobile-drawer');
    const closeDrawerBtn = document.getElementById('close-drawer-btn');

    if (mobileMenuBtn && mobileDrawer) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileDrawer.classList.remove('translate-x-full');
        });
    }

    if (closeDrawerBtn && mobileDrawer) {
        closeDrawerBtn.addEventListener('click', () => {
            mobileDrawer.classList.add('translate-x-full');
        });
    }

    // Booking Modal functionality
    const modal = document.getElementById('consultation-modal');
    const openModalBtns = document.querySelectorAll('.trigger-booking-modal');
    const closeModalBtn = document.getElementById('close-modal-btn');
    const modalBackdrop = document.getElementById('modal-backdrop');

    function openModal() {
        if (modal) {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeModal() {
        if (modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    }

    openModalBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const preferredService = btn.getAttribute('data-service');
            if (preferredService) {
                const serviceSelect = document.getElementById('modal_service_type');
                if (serviceSelect) serviceSelect.value = preferredService;
            }
            openModal();
        });
    });

    if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
    if (modalBackdrop) modalBackdrop.addEventListener('click', closeModal);

    // Multi-Step Modal Form Navigation
    let currentStep = 1;
    const totalSteps = 3;
    const step1 = document.getElementById('modal-step-1');
    const step2 = document.getElementById('modal-step-2');
    const step3 = document.getElementById('modal-step-3');
    const nextStep1Btn = document.getElementById('next-step-1');
    const nextStep2Btn = document.getElementById('next-step-2');
    const prevStep2Btn = document.getElementById('prev-step-2');
    const prevStep3Btn = document.getElementById('prev-step-3');
    const progressBar = document.getElementById('modal-progress-bar');
    const stepLabel = document.getElementById('modal-step-label');

    function updateStepView() {
        if (!step1 || !step2 || !step3) return;

        step1.classList.add('hidden');
        step2.classList.add('hidden');
        step3.classList.add('hidden');

        if (currentStep === 1) {
            step1.classList.remove('hidden');
            if (progressBar) progressBar.style.width = '33%';
            if (stepLabel) stepLabel.textContent = 'Step 1 of 3: Project Scope';
        } else if (currentStep === 2) {
            step2.classList.remove('hidden');
            if (progressBar) progressBar.style.width = '66%';
            if (stepLabel) stepLabel.textContent = 'Step 2 of 3: Budget & Timeline';
        } else if (currentStep === 3) {
            step3.classList.remove('hidden');
            if (progressBar) progressBar.style.width = '100%';
            if (stepLabel) stepLabel.textContent = 'Step 3 of 3: Contact & Book';
        }
    }

    if (nextStep1Btn) nextStep1Btn.addEventListener('click', () => { currentStep = 2; updateStepView(); });
    if (nextStep2Btn) nextStep2Btn.addEventListener('click', () => { currentStep = 3; updateStepView(); });
    if (prevStep2Btn) prevStep2Btn.addEventListener('click', () => { currentStep = 1; updateStepView(); });
    if (prevStep3Btn) prevStep3Btn.addEventListener('click', () => { currentStep = 2; updateStepView(); });

    // Consultation Form AJAX Submission
    const bookingForm = document.getElementById('consultation-booking-form');
    const formFeedback = document.getElementById('form-feedback');

    if (bookingForm) {
        bookingForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = bookingForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;

            submitBtn.disabled = true;
            submitBtn.innerHTML = `<span>Processing...</span>`;

            const formData = new FormData(bookingForm);

            try {
                const response = await fetch('/book-consultation', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json'
                    },
                    body: formData
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    if (formFeedback) {
                        formFeedback.className = 'p-4 my-4 bg-emerald-900/30 border border-emerald-500/50 text-emerald-200 text-sm font-medium rounded';
                        formFeedback.innerHTML = `
                            <p class="font-semibold text-base mb-1">Request Confirmed!</p>
                            <p>${data.message}</p>
                            <a href="${data.whatsapp_url}" target="_blank" class="inline-flex items-center gap-2 mt-3 px-4 py-2 bg-emerald-600 hover:bg-emerald-500 text-white font-medium rounded text-xs tracking-wider uppercase transition">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                                Fast-Track via WhatsApp
                            </a>
                        `;
                        formFeedback.classList.remove('hidden');
                    }
                    bookingForm.reset();
                    submitBtn.innerHTML = `Submitted Successfully`;
                    setTimeout(() => {
                        window.open(data.whatsapp_url, '_blank');
                    }, 1200);
                } else {
                    throw new Error(data.message || 'Error submitting request. Please try again.');
                }
            } catch (err) {
                if (formFeedback) {
                    formFeedback.className = 'p-4 my-4 bg-rose-900/30 border border-rose-500/50 text-rose-200 text-sm rounded';
                    formFeedback.textContent = err.message;
                    formFeedback.classList.remove('hidden');
                }
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            }
        });
    }
});
