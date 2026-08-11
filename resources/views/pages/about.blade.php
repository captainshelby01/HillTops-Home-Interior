@extends('layouts.app')

@section('title', 'About Us | HillTops Home Interior')
@section('meta_description', 'Learn about HillTops Home Interior, a trusted Nigerian interior design and furniture company specializing in custom kitchen cabinets, wardrobes, doors, and interior solutions.')

@section('content')

<!-- Header Banner -->
<section class="bg-charcoal text-cream py-20 border-b border-gold/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">About Our Studio</span>
        <h1 class="font-serif text-4xl sm:text-6xl font-light">Dedicated to Excellence & Quality Craftsmanship</h1>
        <p class="text-sand/70 text-sm max-w-2xl mx-auto font-light leading-relaxed">
            We don't just build furniture. We create spaces that are elegant, practical, and designed to last.
        </p>
    </div>
</section>

<!-- SECTION 1: Brand Story & Bio -->
<section class="py-24 bg-cream">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
            <div class="md:col-span-6 space-y-6">
                <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Who We Are</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-charcoal leading-tight">
                    A Trusted Nigerian Interior Design & Furniture Company.
                </h2>
                <p class="text-xs sm:text-sm text-charcoal/80 leading-relaxed font-light">
                    HillTops Home Interior is dedicated to creating beautiful, functional, and durable spaces. We specialize in the design, production, and installation of custom kitchen cabinets, wardrobes, doors, TV units, office furniture, and bespoke interior solutions for both residential and commercial projects.
                </p>
                <p class="text-xs sm:text-sm text-charcoal/80 leading-relaxed font-light">
                    With years of hands-on experience, we combine skilled craftsmanship, quality materials, and attention to detail to deliver results that exceed our clients' expectations. Every project is approached with professionalism, creativity, and a commitment to excellence from initial consultation through installation.
                </p>
            </div>
            <div class="md:col-span-6 border border-sand p-2 bg-sand/30 shadow-xl">
                <img src="/images/portfolio/project-4.jpg" alt="HillTops Home Interior Workshop & Projects" class="w-full h-[400px] object-cover">
            </div>
        </div>

    </div>
</section>

<!-- SECTION 2: Core Values -->
<section class="py-24 bg-sand border-y border-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center space-y-4 mb-16">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Built On Trust</span>
            <h2 class="font-serif text-3xl sm:text-5xl font-light text-charcoal">
                Our Core Values
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
            <div class="bg-cream p-8 border border-sand space-y-3">
                <i class="bi bi-shield-lock-fill text-gold text-3xl"></i>
                <h3 class="font-serif text-xl font-semibold text-charcoal">Integrity</h3>
                <p class="text-xs text-charcoal/70 leading-relaxed">
                    Honest advice, clear communication, and transparent pricing on every project.
                </p>
            </div>

            <div class="bg-cream p-8 border border-sand space-y-3">
                <i class="bi bi-gem text-gold text-3xl"></i>
                <h3 class="font-serif text-xl font-semibold text-charcoal">Quality</h3>
                <p class="text-xs text-charcoal/70 leading-relaxed">
                    Durable materials, skilled craftsmanship, and meticulous attention to detail.
                </p>
            </div>

            <div class="bg-cream p-8 border border-sand space-y-3">
                <i class="bi bi-[#C5A059] bi-clock-history text-gold text-3xl"></i>
                <h3 class="font-serif text-xl font-semibold text-charcoal">Reliability</h3>
                <p class="text-xs text-charcoal/70 leading-relaxed">
                    Delivering on schedule and fulfilling our commitments to every client.
                </p>
            </div>

            <div class="bg-cream p-8 border border-sand space-y-3">
                <i class="bi bi-emoji-smile-fill text-gold text-3xl"></i>
                <h3 class="font-serif text-xl font-semibold text-charcoal">Satisfaction</h3>
                <p class="text-xs text-charcoal/70 leading-relaxed">
                    Customized solutions that reflect your personal style, budget, and lifestyle.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: Commitment -->
<section class="py-24 bg-cream">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8">
        <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Get In Touch</span>
        <h2 class="font-serif text-3xl sm:text-4xl font-light text-charcoal leading-tight">
            "Clients enjoy working with us because we listen to their needs, provide honest advice, deliver on time, and create customized solutions that last."
        </h2>
        <p class="text-xs sm:text-sm text-taupe leading-relaxed font-light">
            HillTops Home Interior Team
        </p>

        <div class="pt-6">
            <button class="trigger-booking-modal btn-primary py-4 px-10 flex items-center justify-center gap-2 inline-flex">
                <i class="bi bi-calendar-check"></i> Book a Consultation / Request Quote
            </button>
        </div>
    </div>
</section>

@endsection
