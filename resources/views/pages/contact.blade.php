@extends('layouts.app')

@section('title', 'Contact Us & Request a Quote | HillTops Home Interior')
@section('meta_description', 'Contact HillTops Home Interior to request a quote or book a consultation for kitchen cabinets, fitted wardrobes, doors, or custom interior design.')

@section('content')

<!-- Header Banner -->
<section class="bg-charcoal text-cream py-16 border-b border-gold/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs uppercase tracking-[0.25em] font-semibold text-gold">Get In Touch</span>
        <h1 class="font-serif text-4xl sm:text-6xl font-light">Book a Consultation or Request a Quote</h1>
        <p class="text-sand/70 text-sm max-w-2xl mx-auto font-light leading-relaxed">
            Fill out the form below or contact us directly on WhatsApp to discuss your project requirements.
        </p>
    </div>
</section>

<!-- Contact Form & Info Grid -->
<section class="py-20 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left Info Panel -->
            <div class="lg:col-span-4 space-y-8 bg-sand/30 p-8 border border-sand">
                <div>
                    <span class="text-xs uppercase tracking-widest text-gold font-bold block mb-2">Direct Contact</span>
                    <h3 class="font-serif text-2xl font-semibold text-charcoal">Studio Contact Info</h3>
                    <p class="text-xs text-charcoal/70 mt-2 leading-relaxed">
                        We welcome enquiries for custom kitchen cabinets, wardrobes, doors, TV units, office furniture, and turnkey interior design across Lagos State and nationwide.
                    </p>
                </div>

                <div class="space-y-4 pt-4 border-t border-sand text-xs">
                    <div>
                        <span class="font-semibold text-charcoal block uppercase tracking-wider flex items-center gap-1.5">
                            <i class="bi bi-geo-alt text-gold"></i> Location:
                        </span>
                        <span class="text-charcoal/80">Lagos State, Nigeria</span>
                    </div>

                    <div>
                        <span class="font-semibold text-charcoal block uppercase tracking-wider flex items-center gap-1.5">
                            <i class="bi bi-whatsapp text-emerald-600"></i> WhatsApp Contact:
                        </span>
                        <a href="https://wa.me/2347038015125" target="_blank" class="text-gold font-medium hover:underline">+234 703 801 5125</a>
                    </div>

                    <div>
                        <span class="font-semibold text-charcoal block uppercase tracking-wider flex items-center gap-1.5">
                            <i class="bi bi-telephone text-gold"></i> Phone Contact:
                        </span>
                        <a href="tel:+2348159412483" class="text-charcoal/80 hover:text-gold transition">+234 815 941 2483</a>
                    </div>

                    <div>
                        <span class="font-semibold text-charcoal block uppercase tracking-wider flex items-center gap-1.5">
                            <i class="bi bi-envelope text-gold"></i> Email Address:
                        </span>
                        <a href="mailto:hilltopshomeinterior@gmail.com" class="text-charcoal/80 hover:text-gold transition">hilltopshomeinterior@gmail.com</a>
                    </div>

                    <div>
                        <span class="font-semibold text-charcoal block uppercase tracking-wider">Social Handles:</span>
                        <div class="space-y-1 pt-1 text-[11px] text-charcoal/80">
                            <p><i class="bi bi-instagram text-gold"></i> Instagram: <a href="https://instagram.com/hilltopshomeinterior" target="_blank" class="hover:text-gold">@hilltopshomeinterior</a></p>
                            <p><i class="bi bi-facebook text-gold"></i> Facebook: <a href="https://facebook.com/hilltopshomeinterior" target="_blank" class="hover:text-gold">@hilltopshomeinterior</a></p>
                            <p><i class="bi bi-tiktok text-gold"></i> TikTok: <a href="https://tiktok.com/@Hitophomeinterior" target="_blank" class="hover:text-gold">@Hitophomeinterior</a></p>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <a href="https://wa.me/2347038015125" target="_blank" class="w-full btn-gold py-3 text-center text-xs flex items-center justify-center gap-2">
                        <i class="bi bi-whatsapp text-emerald-900 text-base"></i>
                        Chat Directly on WhatsApp
                    </a>
                </div>
            </div>

            <!-- Right Qualification Form -->
            <div class="lg:col-span-8 bg-cream p-8 sm:p-12 border border-sand shadow-lg">
                @if(session('success'))
                <div class="p-6 mb-8 bg-emerald-900/10 border border-emerald-500/50 text-emerald-900 rounded space-y-3">
                    <h4 class="font-serif text-xl font-semibold flex items-center gap-2">
                        <i class="bi bi-check-circle-fill text-emerald-600"></i> Request Successfully Received!
                    </h4>
                    <p class="text-xs leading-relaxed">{{ session('success') }}</p>
                    @if(session('whatsapp_url'))
                    <a href="{{ session('whatsapp_url') }}" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 hover:bg-emerald-500 text-white font-medium rounded text-xs tracking-wider uppercase transition">
                        <i class="bi bi-whatsapp"></i> Continue on WhatsApp Now &rarr;
                    </a>
                    @endif
                </div>
                @endif

                <div class="mb-8">
                    <span class="text-xs uppercase tracking-widest text-gold font-bold block mb-1">Get In Touch</span>
                    <h3 class="font-serif text-3xl font-semibold text-charcoal">Project Intake Form</h3>
                    <p class="text-xs text-taupe mt-1">Please provide a few details about your project and we will follow up with you promptly.</p>
                </div>

                <form action="{{ route('consultation.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-2">Full Name *</label>
                            <input type="text" name="full_name" required placeholder="e.g. Alade Oloruntoba" class="w-full p-3.5 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold">
                        </div>
                        <div>
                            <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-2">Email Address *</label>
                            <input type="email" name="email" required placeholder="name@domain.com" class="w-full p-3.5 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-2">WhatsApp Phone Number *</label>
                            <input type="text" name="phone" required placeholder="+234 703 801 5125" class="w-full p-3.5 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold">
                        </div>
                        <div>
                            <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-2">Project Location (City / State) *</label>
                            <input type="text" name="location" placeholder="e.g. Lagos State" class="w-full p-3.5 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-2">Service / Product Needed *</label>
                            <select name="service_type" class="w-full p-3.5 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold">
                                <option value="Custom Kitchen Cabinets">Custom Kitchen Cabinets</option>
                                <option value="Fitted Wardrobes & Walk-in Closets">Fitted Wardrobes & Walk-in Closets</option>
                                <option value="Interior & Exterior Doors">Interior & Exterior Doors</option>
                                <option value="TV Units & Entertainment Centers">TV Units & Media Centers</option>
                                <option value="Office Furniture & Workspaces">Office Furniture & Workspaces</option>
                                <option value="Bathroom Vanities & Wall Panels">Bathroom Vanities & Wall Panels</option>
                                <option value="Home & Office Interior Design">Home & Office Interior Design Services</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-2">Pricing / Quote Preference *</label>
                            <select name="budget_tier" class="w-full p-3.5 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold">
                                <option value="Contact me for pricing">Contact me for pricing (Request Quote)</option>
                                <option value="Single Room / Kitchen Fit-out">Single Room / Kitchen Cabinet Fit-out</option>
                                <option value="Multi-Room / Full Home Solution">Multi-Room / Full Home Solution</option>
                                <option value="Commercial / Corporate Fit-out">Commercial / Corporate Office Fit-out</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-2">Completion Timeline</label>
                        <select name="timeline" class="w-full p-3.5 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold">
                            <option value="As soon as possible">As soon as possible</option>
                            <option value="1 – 3 Months">1 – 3 Months</option>
                            <option value="3 – 6 Months">3 – 6 Months</option>
                            <option value="Planning Phase / Building Construction">Planning Phase / Building Construction</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-widest font-semibold text-charcoal mb-2">Additional Project Information / Requirements</label>
                        <textarea name="project_details" rows="4" placeholder="Tell us about your project needs, design preferences, or space measurements..." class="w-full p-3.5 border border-sand bg-sand/20 text-xs focus:outline-none focus:border-gold"></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full btn-gold py-4 text-xs font-semibold uppercase tracking-widest flex items-center justify-center gap-2">
                            <i class="bi bi-send-fill"></i> Submit Request
                        </button>
                    </div>

                    <p class="text-[10px] text-center text-taupe pt-2 flex items-center justify-center gap-1">
                        <i class="bi bi-shield-check text-gold"></i> Reliable Service &bull; Quality Workmanship &bull; Customer Satisfaction
                    </p>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
