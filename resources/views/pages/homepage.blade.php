@extends('layouts.app')

@section('title', 'HillTops Home Interior | Custom Kitchen Cabinets, Fitted Wardrobes & Interior Solutions')

@section('content')

<!-- 1. HERO SECTION (Above-the-Fold) -->
<section class="relative min-h-[85vh] flex items-center justify-center bg-charcoal text-cream overflow-hidden pt-12 pb-20">
    <!-- Ambient Background Pattern -->
    <div class="absolute inset-0 opacity-20 pointer-events-none bg-[radial-gradient(#C5A059_1px,transparent_1px)] [background-size:24px_24px]"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Hero Left Text -->
            <div class="lg:col-span-7 space-y-8 animate-fade-in">

                <h1 class="font-serif text-4xl sm:text-6xl lg:text-7xl font-light tracking-tight leading-[1.08] text-cream">
                    Where Architectural <br>
                    <span class="italic font-normal text-gold">Precision</span> Meets Timeless Serenity.
                </h1>

                <p class="text-sand/80 text-base sm:text-lg font-light leading-relaxed max-w-2xl">
                    HillTops Home Interior is a trusted Nigerian interior design and furniture company specializing in the design, production, and installation of custom kitchen cabinets, fitted wardrobes, doors, TV units, office furniture, and bespoke interior solutions for residential and commercial spaces.
                </p>

                <!-- Dual CTAs -->
                <div class="pt-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                    <button class="trigger-booking-modal btn-gold flex items-center justify-center gap-2">
                        <i class="bi bi-calendar-check"></i> Book a Consultation
                    </button>
                    <a href="{{ route('portfolio') }}" class="btn-secondary-light flex items-center justify-center gap-2">
                        Explore Work Samples <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- Trust Micro-Proof -->
                <div class="pt-6 flex items-center gap-6 text-xs text-sand/60 border-t border-white/10">
                    <div class="flex items-center gap-2">
                        <i class="bi bi-star-fill text-gold"></i>
                        <span>Quality Craftsmanship & Attention to Detail</span>
                    </div>
                    <span>&bull;</span>
                    <div class="flex items-center gap-1.5">
                        <i class="bi bi-geo-alt text-gold"></i>
                        <span>Lagos State & Nationwide Service</span>
                    </div>
                </div>
            </div>

            <!-- Hero Right Editorial Showcase -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    <!-- Main Hero Image Frame -->
                    <div class="relative z-10 p-1.5 bg-charcoal/90 border border-gold/40 shadow-2xl">
                        <img src="/images/portfolio/project-3.jpg" alt="HillTops Custom Kitchen Cabinetry" class="w-full h-[450px] sm:h-[520px] object-cover filter brightness-[0.95] contrast-[1.05]">
                        <div class="absolute bottom-6 left-6 right-6 p-4 glass-card text-charcoal border border-white/40 shadow-lg">
                            <span class="text-[10px] uppercase tracking-widest text-gold font-bold block mb-1">Featured Work Sample</span>
                            <h4 class="font-serif text-lg font-semibold leading-snug">Custom Kitchen Cabinetry & Millwork</h4>
                            <p class="text-xs text-charcoal/70 mt-1">Design, production, and installation tailored to your space</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- 2. SOCIAL PROOF / TRUST STRIP -->
<section class="bg-sand border-y border-sand/80 py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="space-y-1">
                <i class="bi bi-patch-check-fill text-gold text-2xl"></i>
                <span class="font-serif text-2xl sm:text-3xl font-semibold text-charcoal block">Skilled Craftsmanship</span>
                <span class="text-xs uppercase tracking-wider text-taupe font-medium">Quality Materials & Durable Finishes</span>
            </div>
            <div class="space-y-1">
                <i class="bi bi-clock-history text-gold text-2xl"></i>
                <span class="font-serif text-2xl sm:text-3xl font-semibold text-charcoal block">Timely Delivery</span>
                <span class="text-xs uppercase tracking-wider text-taupe font-medium">Professional Project Management</span>
            </div>
            <div class="space-y-1">
                <i class="bi bi-shield-check text-gold text-2xl"></i>
                <span class="font-serif text-2xl sm:text-3xl font-semibold text-charcoal block">100% Reliable</span>
                <span class="text-xs uppercase tracking-wider text-taupe font-medium">Built on Integrity & Excellence</span>
            </div>
            <div class="space-y-1">
                <i class="bi bi-house-door-fill text-gold text-2xl"></i>
                <span class="font-serif text-2xl sm:text-3xl font-semibold text-charcoal block">Nationwide</span>
                <span class="text-xs uppercase tracking-wider text-taupe font-medium">Residential & Commercial Spaces</span>
            </div>
        </div>
    </div>
</section>


<!-- 3. THE EMPATHY & PROBLEM SECTION (Why Work With Us) -->
<section class="py-24 bg-cream">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center space-y-4 mb-16">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Our Commitment</span>
            <h2 class="font-serif text-3xl sm:text-5xl font-light text-charcoal leading-tight">
                Transforming Your Space With <br>
                <span class="italic font-normal text-gold">Functional, Durable & Elegant Solutions.</span>
            </h2>
            <p class="text-xs text-taupe max-w-2xl mx-auto font-light leading-relaxed">
                At HillTops Home Interior, we don't just build furniture; we create spaces that are elegant, practical, and designed to last.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 bg-sand/40 border border-sand space-y-4">
                <div class="w-10 h-10 bg-taupe/10 text-gold flex items-center justify-center font-serif text-xl font-bold">
                    <i class="bi bi-ear-fill text-lg"></i>
                </div>
                <h3 class="font-serif text-xl font-semibold text-charcoal">We Listen To Your Needs</h3>
                <p class="text-xs text-charcoal/70 leading-relaxed">
                    Every project begins by understanding your specific style, spatial requirements, and budget, delivering customized interior solutions designed around your lifestyle.
                </p>
            </div>

            <div class="p-8 bg-sand/40 border border-sand space-y-4">
                <div class="w-10 h-10 bg-taupe/10 text-gold flex items-center justify-center font-serif text-xl font-bold">
                    <i class="bi bi-hammer text-lg"></i>
                </div>
                <h3 class="font-serif text-xl font-semibold text-charcoal">Quality Materials & Craftsmanship</h3>
                <p class="text-xs text-charcoal/70 leading-relaxed">
                    We combine skilled craftsmanship with durable, high-grade materials to ensure your kitchen cabinets, wardrobes, and doors remain pristine for years.
                </p>
            </div>

            <div class="p-8 bg-sand/40 border border-sand space-y-4">
                <div class="w-10 h-10 bg-taupe/10 text-gold flex items-center justify-center font-serif text-xl font-bold">
                    <i class="bi bi-truck text-lg"></i>
                </div>
                <h3 class="font-serif text-xl font-semibold text-charcoal">Timely Delivery & Installation</h3>
                <p class="text-xs text-charcoal/70 leading-relaxed">
                    We value your time. From initial consultation to final professional installation, we work with discipline to deliver on schedule with zero compromise on finish.
                </p>
            </div>
        </div>

        <div class="mt-16 text-center">
            <p class="font-serif text-2xl text-charcoal italic max-w-3xl mx-auto leading-relaxed">
                "Our values are built on integrity, quality, reliability, and customer satisfaction. Clients enjoy working with us because we provide honest advice and create solutions that reflect their style, budget, and lifestyle."
            </p>
        </div>
    </div>
</section>


<!-- 4. THE SOLUTIONS & SERVICES OVERVIEW -->
<section class="py-24 bg-sand/50 border-y border-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Main Featured Offerings</span>
                <h2 class="font-serif text-3xl sm:text-5xl font-light text-charcoal mt-2">
                    Our Core Services & Products
                </h2>
            </div>
            <a href="{{ route('services') }}" class="btn-secondary py-3 px-6 text-xs self-start md:self-auto flex items-center gap-2">
                View Full Services List <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service Card 1 -->
            <div class="group bg-cream border border-sand overflow-hidden hover:shadow-xl transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img src="/images/portfolio/project-2.jpg" alt="Custom Kitchen Cabinet Design" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-charcoal/20 group-hover:bg-charcoal/10 transition"></div>
                </div>
                <div class="p-8 space-y-4">
                    <span class="text-[10px] uppercase tracking-widest text-gold font-bold">Kitchen Cabinetry</span>
                    <h3 class="font-serif text-2xl font-semibold text-charcoal">Custom Kitchen Cabinets</h3>
                    <p class="text-xs text-charcoal/70 leading-relaxed">
                        Custom kitchen cabinet design, manufacturing, and professional installation built for functionality, beauty, and long-lasting durability.
                    </p>
                    <button class="trigger-booking-modal inline-flex items-center gap-2 text-xs uppercase tracking-wider text-charcoal font-semibold hover:text-gold transition pt-2" data-service="Custom Kitchen Cabinets">
                        Request a Kitchen Quote <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="group bg-cream border border-sand overflow-hidden hover:shadow-xl transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img src="/images/portfolio/project-5.jpg" alt="Fitted Wardrobes & Walk-in Closets" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-charcoal/20 group-hover:bg-charcoal/10 transition"></div>
                </div>
                <div class="p-8 space-y-4">
                    <span class="text-[10px] uppercase tracking-widest text-gold font-bold">Bedroom Storage</span>
                    <h3 class="font-serif text-2xl font-semibold text-charcoal">Fitted Wardrobes & Closets</h3>
                    <p class="text-xs text-charcoal/70 leading-relaxed">
                        Bespoke fitted wardrobes and walk-in closet systems customized to maximize your bedroom storage with elegant finishes.
                    </p>
                    <button class="trigger-booking-modal inline-flex items-center gap-2 text-xs uppercase tracking-wider text-charcoal font-semibold hover:text-gold transition pt-2" data-service="Fitted Wardrobes & Closets">
                        Request a Wardrobe Quote <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Service Card 3 -->
            <div class="group bg-cream border border-sand overflow-hidden hover:shadow-xl transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img src="/images/portfolio/project-9.jpg" alt="Interior & Exterior Doors" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-charcoal/20 group-hover:bg-charcoal/10 transition"></div>
                </div>
                <div class="p-8 space-y-4">
                    <span class="text-[10px] uppercase tracking-widest text-gold font-bold">Bespoke Doors</span>
                    <h3 class="font-serif text-2xl font-semibold text-charcoal">Interior & Exterior Doors</h3>
                    <p class="text-xs text-charcoal/70 leading-relaxed">
                        High-quality interior and exterior doors engineered for security, sound insulation, and sophisticated architectural style.
                    </p>
                    <button class="trigger-booking-modal inline-flex items-center gap-2 text-xs uppercase tracking-wider text-charcoal font-semibold hover:text-gold transition pt-2" data-service="Interior & Exterior Doors">
                        Request a Doors Quote <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 5. THE SIGNATURE PROCESS (How We Work) -->
<section class="py-24 bg-charcoal text-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center space-y-3 mb-20 max-w-3xl mx-auto">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Simple & Transparent Workflow</span>
            <h2 class="font-serif text-3xl sm:text-5xl font-light leading-tight">
                How We Work With You
            </h2>
            <p class="text-xs text-sand/70">
                We make the process simple, organized, and stress-free from start to finish.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
            <!-- Process Step 1 -->
            <div class="space-y-6 relative z-10 border-l border-gold/30 pl-6 md:border-l-0 md:pl-0 md:pt-6 md:border-t">
                <span class="text-xs font-serif italic text-gold font-bold text-lg">Step 01</span>
                <h3 class="font-serif text-2xl font-semibold text-cream">Initial Consultation & Measurement</h3>
                <p class="text-xs text-sand/70 leading-relaxed">
                    We listen to your ideas, evaluate your space, take precise measurements, and provide honest design advice tailored to your goals.
                </p>
            </div>

            <!-- Process Step 2 -->
            <div class="space-y-6 relative z-10 border-l border-gold/30 pl-6 md:border-l-0 md:pl-0 md:pt-6 md:border-t">
                <span class="text-xs font-serif italic text-gold font-bold text-lgStep 02">Step 02</span>
                <h3 class="font-serif text-2xl font-semibold text-cream">Custom Production & Quality Craftsmanship</h3>
                <p class="text-xs text-sand/70 leading-relaxed">
                    Your kitchen cabinets, wardrobes, or furniture are manufactured using quality materials and attention to detail in our workshop.
                </p>
            </div>

            <!-- Process Step 3 -->
            <div class="space-y-6 relative z-10 border-l border-gold/30 pl-6 md:border-l-0 md:pl-0 md:pt-6 md:border-t">
                <span class="text-xs font-serif italic text-gold font-bold text-lg">Step 03</span>
                <h3 class="font-serif text-2xl font-semibold text-cream">Professional Delivery & Installation</h3>
                <p class="text-xs text-sand/70 leading-relaxed">
                    Our team delivers and professionally installs your fittings on time, ensuring an immaculate result that exceeds your expectations.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- 5.5 VIDEO WALKTHROUGHS & ON-SITE INSTALLATIONS (Live Proof) -->
<section class="py-24 bg-sand border-y border-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center space-y-4 mb-16">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Live Proof</span>
            <h2 class="font-serif text-3xl sm:text-5xl font-light text-charcoal">
                On-Site Video Walkthroughs
            </h2>
            <p class="text-xs text-taupe max-w-xl mx-auto font-light">
                Watch actual video walkthroughs of our completed kitchen cabinets, fitted wardrobes, and door installations across Lagos.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Video 1 -->
            <div class="bg-cream border border-sand p-2 shadow-lg space-y-3">
                <div class="relative h-72 bg-charcoal overflow-hidden group">
                    <video controls playsinline preload="metadata" class="w-full h-full object-cover">
                        <source src="/videos/portfolio/video-1.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="p-3 space-y-1">
                    <span class="text-[10px] uppercase tracking-widest text-gold font-bold">Kitchen Cabinetry</span>
                    <h4 class="font-serif text-lg font-semibold text-charcoal">Custom Kitchen Tour</h4>
                    <p class="text-[11px] text-taupe">Functional kitchen layout & soft-close joinery</p>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="bg-cream border border-sand p-2 shadow-lg space-y-3">
                <div class="relative h-72 bg-charcoal overflow-hidden group">
                    <video controls playsinline preload="metadata" class="w-full h-full object-cover">
                        <source src="/videos/portfolio/video-2.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="p-3 space-y-1">
                    <span class="text-[10px] uppercase tracking-widest text-gold font-bold">Fitted Wardrobes</span>
                    <h4 class="font-serif text-lg font-semibold text-charcoal">Walk-In Closet Tour</h4>
                    <p class="text-[11px] text-taupe">Custom bedroom wardrobe & closet system</p>
                </div>
            </div>

            <!-- Video 3 -->
            <div class="bg-cream border border-sand p-2 shadow-lg space-y-3">
                <div class="relative h-72 bg-charcoal overflow-hidden group">
                    <video controls playsinline preload="metadata" class="w-full h-full object-cover">
                        <source src="/videos/portfolio/video-3.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="p-3 space-y-1">
                    <span class="text-[10px] uppercase tracking-widest text-gold font-bold">Interior Doors</span>
                    <h4 class="font-serif text-lg font-semibold text-charcoal">Door Installation Walkthrough</h4>
                    <p class="text-[11px] text-taupe">Durable interior and exterior door fitting</p>
                </div>
            </div>

            <!-- Video 4 -->
            <div class="bg-cream border border-sand p-2 shadow-lg space-y-3">
                <div class="relative h-72 bg-charcoal overflow-hidden group">
                    <video controls playsinline preload="metadata" class="w-full h-full object-cover">
                        <source src="/videos/portfolio/video-4.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="p-3 space-y-1">
                    <span class="text-[10px] uppercase tracking-widest text-gold font-bold">Living Spaces</span>
                    <h4 class="font-serif text-lg font-semibold text-charcoal">TV Unit & Interior Solutions</h4>
                    <p class="text-[11px] text-taupe">Bespoke living room furniture fit-out</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 6. PORTFOLIO SHOWCASE GRID -->
<section class="py-24 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center space-y-4 mb-16">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Our Past Projects</span>
            <h2 class="font-serif text-3xl sm:text-5xl font-light text-charcoal">
                Featured Work Samples
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($featuredProjects as $project)
            <div class="group relative bg-sand/30 border border-sand overflow-hidden">
                <div class="relative h-80 sm:h-96 overflow-hidden">
                    <img src="{{ $project->cover_image }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/30 to-transparent"></div>

                    <div class="absolute bottom-6 left-6 right-6 text-cream space-y-2">
                        <div class="flex items-center gap-3 text-[10px] uppercase tracking-widest text-gold font-bold">
                            <span>{{ $project->category }}</span>
                            <span>&bull;</span>
                            <span>{{ $project->location }}</span>
                        </div>
                        <h3 class="font-serif text-2xl font-semibold">{{ $project->title }}</h3>
                        <p class="text-xs text-sand/80 line-clamp-2">{{ $project->tagline }}</p>
                        <a href="{{ route('portfolio.detail', $project->slug) }}" class="inline-flex items-center gap-2 text-xs uppercase tracking-widest text-gold hover:text-cream pt-2 transition font-medium">
                            View Work Sample Details <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-16 text-center">
            <a href="{{ route('portfolio') }}" class="btn-primary py-4 px-10 flex items-center justify-center gap-2 inline-flex">
                Explore Full Work Samples Gallery (39+ Photos) <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>


<!-- 7. WHO WE SERVE & ABOUT US -->
<section class="py-24 bg-sand border-t border-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Portrait -->
            <div class="lg:col-span-5">
                <div class="relative border border-gold/40 p-2 bg-cream shadow-xl">
                    <img src="/images/portfolio/project-18.jpg" alt="HillTops Home Interior Workshop & Projects" class="w-full h-[450px] object-cover filter contrast-[1.05]">
                    <div class="p-4 bg-charcoal text-cream text-center">
                        <span class="font-serif text-xl font-semibold block">HillTops Home Interior</span>
                        <span class="text-[10px] uppercase tracking-widest text-gold">Custom Interior Design & Furniture Solutions</span>
                    </div>
                </div>
            </div>

            <!-- Right Bio & Philosophy -->
            <div class="lg:col-span-7 space-y-6">
                <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">About Our Studio</span>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-light text-charcoal leading-tight">
                    "We Combine Skilled Craftsmanship, Quality Materials, and Attention to Detail."
                </h2>
                <p class="text-xs sm:text-sm text-charcoal/80 leading-relaxed font-light">
                    HillTops Home Interior is a trusted Nigerian interior design and furniture company dedicated to creating beautiful, functional, and durable spaces. We specialize in custom kitchen cabinets, fitted wardrobes, doors, TV units, office furniture, bathroom vanities, and wall panels for both residential and commercial projects.
                </p>

                <!-- Ideal Clients List -->
                <div class="space-y-3 pt-2">
                    <h4 class="font-serif text-lg font-semibold text-charcoal">Who We Serve:</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-charcoal/80 font-medium">
                        <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> Homeowners seeking custom furniture</p>
                        <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> Property Developers & Contractors</p>
                        <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> Architects & Interior Designers</p>
                        <p class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-gold"></i> Business Owners & Office Workspaces</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 8. FINAL CALL-TO-ACTION (Book Consultation / Request Quote) -->
<section class="py-24 bg-charcoal text-cream relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8 relative z-10">
        <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Get Started Today</span>
        
        <h2 class="font-serif text-3xl sm:text-5xl lg:text-6xl font-light leading-tight">
            Ready To Transform Your Space With <span class="italic font-normal text-gold">HillTops Home Interior?</span>
        </h2>

        <p class="text-sand/80 text-sm sm:text-base max-w-2xl mx-auto font-light leading-relaxed">
            Contact us today to discuss your project requirements, request a quote, or book a consultation with our team.
        </p>

        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
            <button class="trigger-booking-modal btn-gold py-4 px-10 text-xs flex items-center justify-center gap-2">
                <i class="bi bi-calendar-check"></i> Book a Consultation / Request Quote
            </button>
            <a href="https://wa.me/2347038015125" target="_blank" class="btn-secondary-light py-4 px-8 text-xs flex items-center justify-center gap-2">
                <i class="bi bi-whatsapp text-emerald-400"></i> Contact Us on WhatsApp
            </a>
        </div>

        <p class="text-[11px] text-sand/50 pt-4 flex items-center justify-center gap-1">
            <i class="bi bi-shield-check text-gold"></i> 100% Reliable Service &bull; Quality Workmanship &bull; Nationwide Delivery
        </p>
    </div>
</section>

@endsection
