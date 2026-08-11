@extends('layouts.app')

@section('title', $project->title . ' | HillTops Work Sample')
@section('meta_description', $project->tagline)

@section('content')

<!-- Case Study Hero Header -->
<section class="bg-charcoal text-cream py-20 border-b border-gold/20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('portfolio') }}" class="text-xs uppercase tracking-widest text-gold hover:text-cream transition inline-flex items-center gap-2 mb-8">
            <i class="bi bi-arrow-left"></i> Back To All Work Samples
        </a>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end">
            <div class="lg:col-span-8 space-y-4">
                <div class="flex items-center gap-3 text-xs uppercase tracking-widest text-gold font-bold">
                    <span>{{ $project->category }}</span>
                    <span>&bull;</span>
                    <span>{{ $project->location }}</span>
                    <span>&bull;</span>
                    <span>Completed {{ $project->year }}</span>
                </div>
                <h1 class="font-serif text-4xl sm:text-6xl font-light text-cream leading-tight">
                    {{ $project->title }}
                </h1>
                <p class="text-sand/80 text-base font-light italic font-serif max-w-2xl">
                    "{{ $project->tagline }}"
                </p>
            </div>
            <div class="lg:col-span-4 flex lg:justify-end">
                <button class="trigger-booking-modal btn-gold py-3 px-8 text-xs flex items-center gap-2" data-service="{{ $project->category }}">
                    <i class="bi bi-calendar-check"></i> Request Similar Project Quote
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Main Cover Image -->
<section class="bg-cream py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="border border-sand p-2 bg-sand/30 shadow-2xl">
            <img src="{{ $project->cover_image }}" alt="{{ $project->title }}" class="w-full h-[500px] sm:h-[650px] object-cover">
        </div>
    </div>
</section>

<!-- NARRATIVE FORMAT SECTION: Brief, Vision, Outcome -->
<section class="py-16 bg-cream border-b border-sand">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            
            <!-- 1. The Brief -->
            <div class="space-y-4 bg-sand/30 p-8 border border-sand">
                <span class="text-xs uppercase tracking-widest text-gold font-bold block">Phase 01</span>
                <h3 class="font-serif text-2xl font-semibold text-charcoal">The Client Challenge</h3>
                <p class="text-xs text-charcoal/80 leading-relaxed font-light">
                    {{ $project->client_challenge }}
                </p>
            </div>

            <!-- 2. Design Vision -->
            <div class="space-y-4 bg-sand/30 p-8 border border-sand">
                <span class="text-xs uppercase tracking-widest text-gold font-bold block">Phase 02</span>
                <h3 class="font-serif text-2xl font-semibold text-charcoal">The Design Vision</h3>
                <p class="text-xs text-charcoal/80 leading-relaxed font-light">
                    {{ $project->design_vision }}
                </p>
            </div>

            <!-- 3. Transformation Outcome -->
            <div class="space-y-4 bg-sand/30 p-8 border border-sand">
                <span class="text-xs uppercase tracking-widest text-gold font-bold block">Phase 03</span>
                <h3 class="font-serif text-2xl font-semibold text-charcoal">Transformation Outcome</h3>
                <p class="text-xs text-charcoal/80 leading-relaxed font-light">
                    {{ $project->transformation_outcome }}
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Project Gallery Showcase -->
@if(!empty($project->gallery_images))
<section class="py-20 bg-sand/40 border-b border-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center space-y-3 mb-12">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Project Perspectives</span>
            <h2 class="font-serif text-3xl font-semibold text-charcoal">Craftsmanship & Detail Gallery</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($project->gallery_images as $img)
            <div class="border border-sand p-2 bg-cream shadow-md overflow-hidden group">
                <img src="{{ $img }}" alt="{{ $project->title }} gallery image" class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Specifications Table -->
@if(!empty($project->specifications))
<section class="py-16 bg-cream border-b border-sand">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Technical Breakdown</span>
            <h3 class="font-serif text-2xl font-semibold text-charcoal mt-1">Material & Joinery Specifications</h3>
        </div>

        <div class="border border-sand bg-sand/20 divide-y divide-sand">
            @foreach($project->specifications as $key => $val)
            <div class="p-4 flex flex-col sm:flex-row justify-between gap-2 text-xs">
                <span class="font-semibold text-charcoal uppercase tracking-wider">{{ $key }}:</span>
                <span class="text-charcoal/80 text-right sm:text-left">{{ $val }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Call-To-Action -->
<section class="py-24 bg-charcoal text-cream text-center">
    <div class="max-w-3xl mx-auto px-4 space-y-6">
        <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Inspired By This Project?</span>
        <h2 class="font-serif text-3xl sm:text-5xl font-light">
            Bring Quality Craftsmanship To Your Home.
        </h2>
        <p class="text-sand/70 text-xs sm:text-sm font-light">
            Contact us today to discuss your project requirements, request a quote, or book a consultation.
        </p>
        <div class="pt-4 flex flex-col sm:flex-row justify-center gap-4">
            <button class="trigger-booking-modal btn-gold py-4 px-8 text-xs flex items-center justify-center gap-2" data-service="{{ $project->category }}">
                <i class="bi bi-calendar-check"></i> Book a Consultation / Request Quote
            </button>
            <a href="https://wa.me/2347038015125" target="_blank" class="btn-secondary-light py-4 px-8 text-xs flex items-center justify-center gap-2">
                <i class="bi bi-whatsapp text-emerald-400"></i> Contact Us on WhatsApp
            </a>
        </div>
    </div>
</section>

@endsection
