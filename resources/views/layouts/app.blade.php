<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'HillTops Home Interior - Custom Kitchen Cabinets, Fitted Wardrobes & Interior Solutions')</title>
    <meta name="description" content="@yield('meta_description', 'HillTops Home Interior is a trusted Nigerian interior design and furniture company specializing in custom kitchen cabinets, fitted wardrobes, doors, TV units, office furniture, and bespoke interior solutions in Lagos and nationwide.')">

    <!-- Fonts & Bootstrap Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Scripts & CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cream text-charcoal antialiased selection:bg-gold selection:text-charcoal flex flex-col min-h-screen">

    <!-- 1. HEADER / NAVIGATION (Glassmorphism Sticky Bar) -->
    <header class="sticky top-0 z-40 w-full glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-6">
            
            <!-- Brand Monogram & Name -->
            <a href="{{ route('home') }}" class="group flex items-center gap-3 shrink-0 py-2">
                <div class="w-10 h-10 bg-charcoal text-cream flex items-center justify-center font-serif text-xl font-bold tracking-widest transition group-hover:bg-gold group-hover:text-charcoal shrink-0">
                    HT
                </div>
                <div class="flex flex-col justify-center">
                    <span class="font-serif text-xl font-semibold tracking-wide text-charcoal group-hover:text-gold transition leading-tight">
                        HillTops
                    </span>
                    <span class="text-[9px] uppercase tracking-[0.2em] text-taupe font-medium leading-none mt-0.5">
                        Home Interior
                    </span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden lg:flex items-center gap-6 xl:gap-8 text-xs uppercase tracking-[0.15em] font-medium text-charcoal/80">
                <a href="{{ route('home') }}" class="hover:text-gold transition py-1 whitespace-nowrap {{ request()->routeIs('home') ? 'text-gold font-semibold' : '' }}">
                    Home
                </a>
                <a href="{{ route('services') }}" class="hover:text-gold transition py-1 whitespace-nowrap {{ request()->routeIs('services') ? 'text-gold font-semibold' : '' }}">
                    Services & Products
                </a>
                <a href="{{ route('portfolio') }}" class="hover:text-gold transition py-1 whitespace-nowrap {{ request()->routeIs('portfolio*') ? 'text-gold font-semibold' : '' }}">
                    Portfolio & Projects
                </a>
                <a href="{{ route('about') }}" class="hover:text-gold transition py-1 whitespace-nowrap {{ request()->routeIs('about') ? 'text-gold font-semibold' : '' }}">
                    About Us
                </a>
                <a href="{{ route('contact') }}" class="hover:text-gold transition py-1 whitespace-nowrap {{ request()->routeIs('contact') ? 'text-gold font-semibold' : '' }}">
                    Contact Us
                </a>
            </nav>

            <!-- Desktop Action CTA -->
            <div class="hidden xl:flex items-center gap-4 shrink-0">
                <a href="https://wa.me/2347038015125" target="_blank" class="text-xs uppercase tracking-widest text-taupe hover:text-charcoal transition flex items-center gap-1.5 font-medium whitespace-nowrap px-2 py-1">
                    <i class="bi bi-whatsapp text-emerald-600 text-base"></i>
                    WhatsApp
                </a>
                <button class="trigger-booking-modal btn-primary text-xs py-3 px-6 whitespace-nowrap">
                    Book Consultation
                </button>
            </div>

            <!-- Mobile Hamburger Button -->
            <button id="mobile-menu-btn" class="lg:hidden p-2 text-charcoal hover:text-gold focus:outline-none" aria-label="Open Navigation Menu">
                <i class="bi bi-list text-2xl"></i>
            </button>
        </div>
    </header>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-drawer" class="fixed inset-0 z-50 transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden bg-charcoal text-cream flex flex-col justify-between p-8">
        <div>
            <div class="flex items-center justify-between pb-6 border-b border-white/10">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gold text-charcoal font-serif font-bold flex items-center justify-center">HT</div>
                    <span class="font-serif text-xl font-medium tracking-wide">HillTops Home Interior</span>
                </div>
                <button id="close-drawer-btn" class="p-2 text-cream/70 hover:text-cream">
                    <i class="bi bi-x-lg text-xl"></i>
                </button>
            </div>

            <nav class="mt-8 flex flex-col gap-6 font-serif text-2xl tracking-wide">
                <a href="{{ route('home') }}" class="hover:text-gold transition">Home</a>
                <a href="{{ route('services') }}" class="hover:text-gold transition">Services & Products</a>
                <a href="{{ route('portfolio') }}" class="hover:text-gold transition">Portfolio & Projects</a>
                <a href="{{ route('about') }}" class="hover:text-gold transition">About Us</a>
                <a href="{{ route('contact') }}" class="hover:text-gold transition">Contact & Booking</a>
            </nav>
        </div>

        <div class="pt-8 border-t border-white/10 space-y-4">
            <button class="trigger-booking-modal w-full btn-gold py-3 text-center">
                Book Consultation
            </button>
            <a href="https://wa.me/2347038015125" target="_blank" class="block w-full text-center py-3 border border-white/20 text-cream text-xs uppercase tracking-widest font-medium hover:bg-white/5 transition flex items-center justify-center gap-2">
                <i class="bi bi-whatsapp text-emerald-400"></i>
                Chat via WhatsApp (+234 703 801 5125)
            </a>
        </div>
    </div>

    <!-- MAIN CONTENT SLOT -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-charcoal text-cream pt-20 pb-12 border-t border-charcoal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 pb-16 border-b border-white/10">
                <!-- Col 1: Brand Intro -->
                <div class="md:col-span-5 space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gold text-charcoal font-serif font-bold text-xl flex items-center justify-center">HT</div>
                        <span class="font-serif text-2xl font-semibold tracking-wide text-cream">HillTops Home Interior</span>
                    </div>
                    <p class="text-sand/70 text-sm leading-relaxed max-w-md">
                        A trusted Nigerian interior design and furniture company. We specialize in the design, production, and installation of custom kitchen cabinets, fitted wardrobes, doors, TV units, office furniture, bathroom vanities, and bespoke interior solutions for residential and commercial projects.
                    </p>
                    <div class="pt-2 flex items-center gap-4">
                        <a href="https://instagram.com/hilltopshomeinterior" target="_blank" class="w-9 h-9 rounded-full bg-white/5 hover:bg-gold hover:text-charcoal transition flex items-center justify-center text-sm" title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://facebook.com/hilltopshomeinterior" target="_blank" class="w-9 h-9 rounded-full bg-white/5 hover:bg-gold hover:text-charcoal transition flex items-center justify-center text-sm" title="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://tiktok.com/@Hitophomeinterior" target="_blank" class="w-9 h-9 rounded-full bg-white/5 hover:bg-gold hover:text-charcoal transition flex items-center justify-center text-sm" title="TikTok">
                            <i class="bi bi-tiktok"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Navigation -->
                <div class="md:col-span-3 space-y-4">
                    <h4 class="font-serif text-lg font-semibold text-gold tracking-wide">Quick Links</h4>
                    <ul class="space-y-2 text-xs uppercase tracking-widest text-sand/70">
                        <li><a href="{{ route('home') }}" class="hover:text-cream transition">Home</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-cream transition">Services & Products</a></li>
                        <li><a href="{{ route('portfolio') }}" class="hover:text-cream transition">Completed Projects</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-cream transition">About Us</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-cream transition">Request a Quote</a></li>
                    </ul>
                </div>

                <!-- Col 3: Direct Contact -->
                <div class="md:col-span-4 space-y-4">
                    <h4 class="font-serif text-lg font-semibold text-gold tracking-wide">Direct Contact</h4>
                    <p class="text-xs text-sand/70 leading-relaxed flex items-start gap-2">
                        <i class="bi bi-geo-alt text-gold"></i>
                        <span>Lagos State, Nigeria <br>(Serving clients locally & nationwide)</span>
                    </p>
                    <div class="space-y-2 text-xs text-sand/90 pt-2">
                        <p class="flex items-center gap-2">
                            <i class="bi bi-whatsapp text-emerald-400"></i>
                            <span class="text-gold font-medium">WhatsApp:</span> 
                            <a href="https://wa.me/2347038015125" target="_blank" class="hover:text-gold transition">+234 703 801 5125</a>
                        </p>
                        <p class="flex items-center gap-2">
                            <i class="bi bi-telephone text-gold"></i>
                            <span class="text-gold font-medium">Phone:</span> 
                            <a href="tel:+2348159412483" class="hover:text-gold transition">+234 815 941 2483</a>
                        </p>
                        <p class="flex items-center gap-2">
                            <i class="bi bi-envelope text-gold"></i>
                            <span class="text-gold font-medium">Email:</span> 
                            <a href="mailto:hilltopshomeinterior@gmail.com" class="hover:text-gold transition">hilltopshomeinterior@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="pt-8 flex flex-col md:flex-row items-center justify-between text-xs text-sand/50 gap-4">
                <p>&copy; {{ date('Y') }} HillTops Home Interior. All rights reserved.</p>
                <p class="tracking-widest uppercase text-[10px]">Quality Craftsmanship &bull; Custom Interior Solutions</p>
            </div>
        </div>
    </footer>

    <!-- INTERACTIVE CONSULTATION & QUOTE MODAL -->
    <div id="consultation-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 overflow-y-auto">
        <!-- Backdrop -->
        <div id="modal-backdrop" class="fixed inset-0 bg-charcoal/80 backdrop-blur-md"></div>

        <!-- Modal Container -->
        <div class="relative bg-cream w-full max-w-2xl border border-sand shadow-2xl p-6 sm:p-10 z-10 animate-fade-in my-8 max-h-[90vh] overflow-y-auto">
            <!-- Close Button -->
            <button id="close-modal-btn" class="absolute top-6 right-6 text-charcoal/60 hover:text-charcoal p-2 transition">
                <i class="bi bi-x-lg text-lg"></i>
            </button>

            <!-- Header -->
            <div class="mb-6 pb-4 border-b border-sand">
                <span class="text-[10px] uppercase tracking-[0.2em] font-semibold text-gold block mb-1">Get Started Today</span>
                <h3 class="font-serif text-2xl sm:text-3xl font-semibold text-charcoal">Book a Consultation or Request a Quote</h3>
                <p class="text-xs text-taupe mt-1">Tell us about your project requirements and our team will provide expert advice and a custom proposal.</p>

                <!-- Progress Bar -->
                <div class="w-full bg-sand h-1.5 mt-4 rounded-full overflow-hidden">
                    <div id="modal-progress-bar" class="bg-gold h-full transition-all duration-300" style="width: 33%;"></div>
                </div>
                <div id="modal-step-label" class="text-[11px] uppercase tracking-wider text-taupe font-medium mt-1">
                    Step 1 of 3: Project Scope
                </div>
            </div>

            <!-- Form -->
            <form id="consultation-booking-form">
                @csrf
                <div id="form-feedback" class="hidden"></div>

                <!-- STEP 1: Project Scope -->
                <div id="modal-step-1" class="space-y-4">
                    <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-2">What service or product do you require? *</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <label class="p-3 border border-sand bg-sand/30 hover:border-gold cursor-pointer transition flex items-center gap-3">
                            <input type="radio" name="service_type" value="Custom Kitchen Cabinets" class="accent-gold" checked>
                            <span class="text-xs font-medium">Custom Kitchen Cabinets</span>
                        </label>
                        <label class="p-3 border border-sand bg-sand/30 hover:border-gold cursor-pointer transition flex items-center gap-3">
                            <input type="radio" name="service_type" value="Fitted Wardrobes & Walk-in Closets" class="accent-gold">
                            <span class="text-xs font-medium">Fitted Wardrobes & Walk-in Closets</span>
                        </label>
                        <label class="p-3 border border-sand bg-sand/30 hover:border-gold cursor-pointer transition flex items-center gap-3">
                            <input type="radio" name="service_type" value="Interior & Exterior Doors" class="accent-gold">
                            <span class="text-xs font-medium">Interior & Exterior Doors</span>
                        </label>
                        <label class="p-3 border border-sand bg-sand/30 hover:border-gold cursor-pointer transition flex items-center gap-3">
                            <input type="radio" name="service_type" value="TV Units & Entertainment Centers" class="accent-gold">
                            <span class="text-xs font-medium">TV Units & Media Centers</span>
                        </label>
                        <label class="p-3 border border-sand bg-sand/30 hover:border-gold cursor-pointer transition flex items-center gap-3">
                            <input type="radio" name="service_type" value="Office Furniture & Workspaces" class="accent-gold">
                            <span class="text-xs font-medium">Office Furniture & Workspaces</span>
                        </label>
                        <label class="p-3 border border-sand bg-sand/30 hover:border-gold cursor-pointer transition flex items-center gap-3">
                            <input type="radio" name="service_type" value="Bathroom Vanities & Wall Panels" class="accent-gold">
                            <span class="text-xs font-medium">Bathroom Vanities & Wall Panels</span>
                        </label>
                    </div>

                    <div class="pt-6 flex justify-end">
                        <button type="button" id="next-step-1" class="btn-primary text-xs py-2.5 px-6 flex items-center gap-2">
                            Next: Project Details <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- STEP 2: Budget & Timeline -->
                <div id="modal-step-2" class="space-y-4 hidden">
                    <div>
                        <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-2">Pricing Preference *</label>
                        <select name="budget_tier" class="w-full p-3 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold">
                            <option value="Contact me for pricing / Quote required">Contact me for pricing (Request Custom Quote)</option>
                            <option value="Starting from ₦5,000,000">Single Room / Kitchen Cabinetry Fit-out</option>
                            <option value="Starting from ₦15,000,000">Multi-Room / Full Home Interior Solution</option>
                            <option value="Commercial / Corporate Fit-out">Commercial / Corporate Office Fit-out</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-2">Desired Timeline</label>
                        <select name="timeline" class="w-full p-3 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold">
                            <option value="As soon as possible">As soon as possible</option>
                            <option value="1 – 3 Months">1 – 3 Months</option>
                            <option value="3 – 6 Months">3 – 6 Months</option>
                            <option value="Planning Phase / Building Construction">Planning Phase / Building Construction</option>
                        </select>
                    </div>

                    <div class="pt-6 flex justify-between">
                        <button type="button" id="prev-step-2" class="btn-secondary text-xs py-2.5 px-4 flex items-center gap-2">
                            <i class="bi bi-arrow-left"></i> Back
                        </button>
                        <button type="button" id="next-step-2" class="btn-primary text-xs py-2.5 px-6 flex items-center gap-2">
                            Next: Contact Info <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- STEP 3: Contact Info & Submission -->
                <div id="modal-step-3" class="space-y-4 hidden">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-1">Full Name *</label>
                            <input type="text" name="full_name" required placeholder="e.g. Alade Oloruntoba" class="w-full p-3 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold">
                        </div>
                        <div>
                            <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-1">Email Address *</label>
                            <input type="email" name="email" required placeholder="name@domain.com" class="w-full p-3 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-1">WhatsApp Phone Number *</label>
                            <input type="text" name="phone" required placeholder="+234 703 801 5125" class="w-full p-3 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold">
                        </div>
                        <div>
                            <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-1">Project Location (City/State) *</label>
                            <input type="text" name="location" placeholder="e.g. Lagos State" class="w-full p-3 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-1">Project Details / Additional Information</label>
                        <textarea name="project_details" rows="2" placeholder="Tell us about your project needs, design preferences, or space measurements..." class="w-full p-3 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold"></textarea>
                    </div>

                    <div class="pt-4 flex justify-between items-center">
                        <button type="button" id="prev-step-3" class="btn-secondary text-xs py-2.5 px-4 flex items-center gap-2">
                            <i class="bi bi-arrow-left"></i> Back
                        </button>
                        <button type="submit" class="btn-gold text-xs py-3 px-8 flex items-center gap-2">
                            <i class="bi bi-send"></i> Submit Request
                        </button>
                    </div>

                    <p class="text-[10px] text-center text-taupe mt-3 flex items-center justify-center gap-1">
                        <i class="bi bi-shield-check text-gold"></i>
                        Fast Response Guaranteed &bull; Quality Workmanship &bull; No Obligation
                    </p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
