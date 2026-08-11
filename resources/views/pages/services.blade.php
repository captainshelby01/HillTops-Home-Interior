@extends('layouts.app')

@section('title', 'Services & Products | HillTops Home Interior')
@section('meta_description', 'Explore custom kitchen cabinets, fitted wardrobes, doors, TV units, office furniture, bathroom vanities, and interior design services by HillTops Home Interior.')

@section('content')

<!-- Header Banner -->
<section class="bg-charcoal text-cream py-20 border-b border-gold/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">What We Do</span>
        <h1 class="font-serif text-4xl sm:text-6xl font-light">Main Services & Product Categories</h1>
        <p class="text-sand/70 text-sm max-w-2xl mx-auto font-light leading-relaxed">
            We offer end-to-end design, manufacturing, delivery, and professional installation of bespoke furniture and interior solutions for homes, offices, and commercial spaces.
        </p>
    </div>
</section>


<!-- SECTION 1: Full Client Service Categories -->
<section class="py-24 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">
        
        <!-- Service 1: Kitchens -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 space-y-6">
                <span class="text-xs uppercase tracking-widest text-gold font-bold">Category 01</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-charcoal">
                    Custom Kitchen Cabinet Design & Installation
                </h2>
                <p class="text-xs sm:text-sm text-charcoal/80 leading-relaxed font-light">
                    Custom kitchen cabinets designed, manufactured, and professionally installed to transform your kitchen into a functional, durable, and beautifully crafted space.
                </p>
                <div class="space-y-2 text-xs text-charcoal/80 font-medium pt-2">
                    <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> French Door & Glass Display Cabinets</p>
                    <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> Concealed Breakfast Pantries & Storage Units</p>
                    <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> Quality Countertops & Under-Cabinet Lighting</p>
                    <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> Soft-Close Hinges & Push-to-Open Hardware</p>
                </div>
                <button class="trigger-booking-modal btn-primary text-xs py-3 px-6 flex items-center gap-2" data-service="Custom Kitchen Cabinets">
                    Request a Kitchen Quote <i class="bi bi-arrow-right"></i>
                </button>
            </div>
            <div class="lg:col-span-6 border border-sand p-2 bg-sand/30">
                <img src="/images/portfolio/project-3.jpg" alt="Custom Kitchen Cabinetry" class="w-full h-[400px] object-cover">
            </div>
        </div>

        <!-- Service 2: Wardrobes -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 order-2 lg:order-1 border border-sand p-2 bg-sand/30">
                <img src="/images/portfolio/project-6.jpg" alt="Fitted Wardrobes and Walk-in Closets" class="w-full h-[400px] object-cover">
            </div>
            <div class="lg:col-span-6 order-1 lg:order-2 space-y-6">
                <span class="text-xs uppercase tracking-widest text-gold font-bold">Category 02</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-charcoal">
                    Fitted Wardrobes & Walk-In Closets
                </h2>
                <p class="text-xs sm:text-sm text-charcoal/80 leading-relaxed font-light">
                    Tailored fitted wardrobes and walk-in closet systems designed to optimize bedroom storage space while adding warmth and elegance to your room.
                </p>
                <div class="space-y-2 text-xs text-charcoal/80 font-medium pt-2">
                    <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> Floor-to-Ceiling Smoked Glass & Timber Doors</p>
                    <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> Custom Shoe Drawers & Accessory Organizers</p>
                    <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> Integrated LED Illumination</p>
                </div>
                <button class="trigger-booking-modal btn-primary text-xs py-3 px-6 flex items-center gap-2" data-service="Fitted Wardrobes & Closets">
                    Request a Wardrobe Quote <i class="bi bi-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- Service 3: Doors, TV Units & Furniture -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 space-y-6">
                <span class="text-xs uppercase tracking-widest text-gold font-bold">Category 03</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-charcoal">
                    Doors, TV Units, Office & Commercial Furniture
                </h2>
                <p class="text-xs sm:text-sm text-charcoal/80 leading-relaxed font-light">
                    Comprehensive interior solutions including solid interior and exterior doors, TV units, office furniture, bathroom vanities, and decorative wall panel finishes.
                </p>
                <div class="space-y-2 text-xs text-charcoal/80 font-medium pt-2">
                    <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> Interior & Exterior Doors (Solid & Flush Doors)</p>
                    <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> TV Units & Media Wall Panels</p>
                    <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> Office Desks, Boardroom Tables & Workspace Furniture</p>
                    <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> Bathroom Vanities & Decorative Wall Panels</p>
                </div>
                <button class="trigger-booking-modal btn-primary text-xs py-3 px-6 flex items-center gap-2" data-service="Interior & Exterior Doors">
                    Request a Custom Quote <i class="bi bi-arrow-right"></i>
                </button>
            </div>
            <div class="lg:col-span-6 border border-sand p-2 bg-sand/30">
                <img src="/images/portfolio/project-10.jpg" alt="Interior Doors and Office Solutions" class="w-full h-[400px] object-cover">
            </div>
        </div>

    </div>
</section>


<!-- SECTION 2: WHAT WE DELIVER (Integrity, Quality, Delivery) -->
<section class="py-24 bg-sand border-y border-sand">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center space-y-4 mb-16">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Why Clients Trust Us</span>
            <h2 class="font-serif text-3xl sm:text-5xl font-light text-charcoal">
                Our Workmanship Standards
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- What We Do -->
            <div class="bg-cream p-8 border border-emerald-500/30 space-y-6">
                <div class="flex items-center justify-between border-b border-sand pb-4">
                    <h3 class="font-serif text-2xl font-semibold text-charcoal">What We Deliver</h3>
                    <span class="text-[10px] uppercase tracking-widest px-2.5 py-1 bg-emerald-100 text-emerald-800 font-bold flex items-center gap-1">
                        <i class="bi bi-check-circle"></i> High Quality
                    </span>
                </div>
                <ul class="space-y-4 text-xs text-charcoal/80 leading-relaxed font-light">
                    <li class="flex items-start gap-3">
                        <i class="bi bi-check-lg text-emerald-600 font-bold text-base"></i>
                        <span><strong class="font-semibold text-charcoal">Customized Solutions</strong>: Every piece is tailored to reflect your personal style, spatial layout, and budget requirements.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="bi bi-check-lg text-emerald-600 font-bold text-base"></i>
                        <span><strong class="font-semibold text-charcoal">Skilled Craftsmanship</strong>: Durable, quality materials assembled by experienced craftsmen.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="bi bi-check-lg text-emerald-600 font-bold text-base"></i>
                        <span><strong class="font-semibold text-charcoal">Timely Delivery</strong>: Disciplined project management to ensure installation is completed on time.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="bi bi-check-lg text-emerald-600 font-bold text-base"></i>
                        <span><strong class="font-semibold text-charcoal">Honest Advice</strong>: We listen to your goals and provide practical, expert advice throughout the project.</span>
                    </li>
                </ul>
            </div>

            <!-- Our Process -->
            <div class="bg-cream p-8 border border-gold/40 space-y-6">
                <div class="flex items-center justify-between border-b border-sand pb-4">
                    <h3 class="font-serif text-2xl font-semibold text-charcoal">Full Project Support</h3>
                    <span class="text-[10px] uppercase tracking-widest px-2.5 py-1 bg-gold/20 text-charcoal font-bold flex items-center gap-1">
                        <i class="bi bi-gear-fill"></i> Turnkey Service
                    </span>
                </div>
                <ul class="space-y-4 text-xs text-charcoal/80 leading-relaxed font-light">
                    <li class="flex items-start gap-3">
                        <i class="bi bi-check-lg text-gold font-bold text-base"></i>
                        <span><strong class="font-semibold text-charcoal">Project Consultation</strong>: Initial discussions to understand your needs and spatial dimensions.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="bi bi-check-lg text-gold font-bold text-base"></i>
                        <span><strong class="font-semibold text-charcoal">Measurement & Design</strong>: Millimeter-accurate laser measurements and customized designs.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="bi bi-check-lg text-gold font-bold text-base"></i>
                        <span><strong class="font-semibold text-charcoal">Manufacturing & Delivery</strong>: Controlled production in our workshop followed by safe transport.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="bi bi-check-lg text-gold font-bold text-base"></i>
                        <span><strong class="font-semibold text-charcoal">Professional Installation</strong>: Clean, precise installation on-site by our experienced team.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: CTA -->
<section class="py-20 bg-charcoal text-cream text-center">
    <div class="max-w-3xl mx-auto px-4 space-y-6">
        <h2 class="font-serif text-3xl sm:text-4xl font-light">Ready to Start Your Interior Project?</h2>
        <p class="text-xs text-sand/70">Contact HillTops Home Interior to request a quote or book a consultation today.</p>
        <div class="pt-4 flex flex-col sm:flex-row justify-center gap-4">
            <button class="trigger-booking-modal btn-gold py-4 px-10 text-xs flex items-center justify-center gap-2">
                <i class="bi bi-calendar-check"></i> Book a Consultation / Request Quote
            </button>
            <a href="https://wa.me/2347038015125" target="_blank" class="btn-secondary-light py-4 px-8 text-xs flex items-center justify-center gap-2">
                <i class="bi bi-whatsapp text-emerald-400"></i> Contact Us on WhatsApp
            </a>
        </div>
    </div>
</section>

@endsection
