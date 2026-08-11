@extends('layouts.app')

@section('title', 'Portfolio & Work Samples | HillTops Home Interior')
@section('meta_description', 'Browse our gallery of completed custom kitchen cabinets, fitted wardrobes, doors, TV units, and interior projects by HillTops Home Interior.')

@section('content')

<!-- Header Banner -->
<section class="bg-charcoal text-cream py-20 border-b border-gold/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Our Past Work</span>
        <h1 class="font-serif text-4xl sm:text-6xl font-light">Completed Projects & Work Samples</h1>
        <p class="text-sand/70 text-sm max-w-2xl mx-auto font-light leading-relaxed">
            Explore photos and video walkthroughs of our finished custom furniture and interior installations across Lagos and nationwide.
        </p>
    </div>
</section>

<!-- Filter Tabs & Grid -->
<section class="py-20 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Category Filter Tabs -->
        <div class="flex flex-wrap justify-center gap-3 mb-16">
            @foreach($categories as $cat)
            <a href="{{ route('portfolio', ['category' => $cat]) }}" 
               class="px-5 py-2.5 text-xs uppercase tracking-widest transition border {{ ($category == $cat || (!$category && $cat == 'All')) ? 'bg-charcoal text-cream border-charcoal font-semibold' : 'bg-sand/40 text-charcoal border-sand hover:border-gold' }}">
                {{ $cat }}
            </a>
            @endforeach
        </div>

        <!-- Portfolio Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects as $project)
            <div class="group bg-sand/30 border border-sand overflow-hidden flex flex-col justify-between hover:shadow-xl transition-all duration-300">
                <div>
                    <div class="relative h-72 overflow-hidden">
                        <img src="{{ $project->cover_image }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute top-4 left-4 bg-charcoal/80 text-gold px-3 py-1 text-[10px] uppercase tracking-widest font-semibold backdrop-blur-sm">
                            {{ $project->category }}
                        </div>
                        <div class="absolute top-4 right-4 bg-cream/90 text-charcoal px-3 py-1 text-[10px] uppercase tracking-widest font-bold backdrop-blur-sm">
                            {{ $project->location }}
                        </div>
                    </div>
                    <div class="p-6 space-y-3">
                        <h3 class="font-serif text-2xl font-semibold text-charcoal group-hover:text-gold transition">
                            {{ $project->title }}
                        </h3>
                        <p class="text-xs text-charcoal/70 line-clamp-3 leading-relaxed font-light">
                            {{ $project->tagline }}
                        </p>
                    </div>
                </div>

                <div class="p-6 pt-0">
                    <a href="{{ route('portfolio.detail', $project->slug) }}" class="btn-secondary w-full text-center text-xs py-3 flex items-center justify-center gap-2">
                        View Details <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-16 bg-sand/20 border border-sand">
                <p class="font-serif text-2xl text-charcoal">No projects found in this category.</p>
                <a href="{{ route('portfolio') }}" class="btn-primary mt-4 inline-block text-xs">View All Projects</a>
            </div>
            @endforelse
        </div>

    </div>
</section>

<!-- ON-SITE VIDEO WALKTHROUGHS SECTION -->
<section class="py-20 bg-sand border-y border-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center space-y-4 mb-16">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Live Proof</span>
            <h2 class="font-serif text-3xl sm:text-5xl font-light text-charcoal">
                Project Video Walkthroughs
            </h2>
            <p class="text-xs text-taupe max-w-xl mx-auto font-light">
                Watch real on-site video walkthroughs showcasing the finish quality, smooth hardware motion, and sound dampening of our millwork.
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
                    <h4 class="font-serif text-lg font-semibold text-charcoal">Gourmet Kitchen Tour</h4>
                    <p class="text-[11px] text-taupe">French door glass units & HDF drawers</p>
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
                    <p class="text-[11px] text-taupe">Smoked glass doors & LED sensor lighting</p>
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
                    <p class="text-[11px] text-taupe">Solid core doors & magnetic hardware</p>
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
                    <h4 class="font-serif text-lg font-semibold text-charcoal">TV Unit & Interior Fit-out</h4>
                    <p class="text-[11px] text-taupe">Living room media wall & custom furniture</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="py-20 bg-sand border-t border-sand text-center">
    <div class="max-w-3xl mx-auto px-4 space-y-6">
        <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-charcoal">Have a Project in Mind?</h2>
        <p class="text-xs text-taupe">Let's discuss how we can bring custom kitchen cabinets, fitted wardrobes, and elegant interior fittings to your space.</p>
        <button class="trigger-booking-modal btn-primary py-4 px-10 flex items-center justify-center gap-2 inline-flex">
            <i class="bi bi-calendar-check"></i> Book a Consultation / Request Quote
        </button>
    </div>
</section>

@endsection
