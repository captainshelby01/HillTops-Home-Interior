<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::truncate();

        $projects = [
            [
                'title' => 'The Ikoyi Minimalist Gourmet Kitchen',
                'slug' => 'ikoyi-gourmet-kitchen',
                'category' => 'Kitchens',
                'location' => 'Ikoyi, Lagos',
                'year' => '2026',
                'cover_image' => '/images/portfolio/project-1.jpg',
                'tagline' => 'A masterclass in modern European cabinetry with French door glass display units and seamless HDF joinery.',
                'client_challenge' => 'The client acquired a 600sqm penthouse with an outdated kitchen layout that lacked architectural flow and storage integration. They required an ultra-premium culinary sanctuary suitable for both family living and intimate entertaining.',
                'design_vision' => 'Fusing Modern Minimalist principles with refined Japandi warmth, we specified custom acoustic slat paneling, handleless matte champagne HDF doors, quartz quartz waterfall islands, and integrated mood backlighting.',
                'transformation_outcome' => 'Delivered a turnkey, high-performance gourmet kitchen featuring concealed breakfast pantries, soft-close Blum hardware, and architectural French door wine displays that elevated the home market valuation by 18%.',
                'gallery_images' => [
                    '/images/portfolio/project-1.jpg',
                    '/images/portfolio/project-2.jpg',
                    '/images/portfolio/project-3.jpg',
                    '/images/portfolio/project-4.jpg',
                ],
                'specifications' => [
                    'Cabinet Finish' => 'High-Density Hardcore HDF with Anti-Fingerprint Matte Coating',
                    'Hardware' => 'Blumotion Soft-Close Concealed Hinges & Push-to-Open Systems',
                    'Special Features' => 'French Door Fluted Glass Cabinets & Concealed Appliance Garage',
                    'Countertops' => 'Calacatta Luxe Engineered Quartz',
                ],
                'is_featured' => true,
            ],
            [
                'title' => 'Banana Island Executive Walk-In Sanctuary',
                'slug' => 'banana-island-walk-in-sanctuary',
                'category' => 'Wardrobes',
                'location' => 'Banana Island, Lagos',
                'year' => '2026',
                'cover_image' => '/images/portfolio/project-5.jpg',
                'tagline' => 'Bespoke master suite wardrobe system combining warm oak grain, smoked bronze glass, and integrated leather accessories.',
                'client_challenge' => 'The homeowner struggled with cluttered wardrobe storage in their primary suite, desiring a luxury boutique retail experience within their private dressing space.',
                'design_vision' => 'We designed an expansive island-center walk-in wardrobe with floor-to-ceiling smoked glass doors, automated LED sensor lighting, watch display cases, and velvet-lined accessory drawers.',
                'transformation_outcome' => 'Transformed a standard master bedroom annex into a tranquil 45sqm luxury dressing salon where every garment and timepiece is showcased as artwork.',
                'gallery_images' => [
                    '/images/portfolio/project-5.jpg',
                    '/images/portfolio/project-6.jpg',
                    '/images/portfolio/project-7.jpg',
                    '/images/portfolio/project-8.jpg',
                ],
                'specifications' => [
                    'Joinery' => 'Bespoke European White Oak & Smoked Tempered Glass',
                    'Lighting' => 'Recessed 2700K Warm Architectural Strip LEDs with Motion Sensors',
                    'Accessories' => 'Custom Leather Watch Winder Drawers & Velvet Jewelry Trays',
                ],
                'is_featured' => true,
            ],
            [
                'title' => 'Victoria Island Modern Architectural Portal Doors',
                'slug' => 'victoria-island-portal-doors',
                'category' => 'Doors',
                'location' => 'Victoria Island, Lagos',
                'year' => '2025',
                'cover_image' => '/images/portfolio/project-9.jpg',
                'tagline' => 'Floor-to-ceiling pivot entrance portal and flush internal doors crafted from solid core timber and acoustic seals.',
                'client_challenge' => 'Standard commercial doors ruined the tactile, serene experience of a newly constructed private gallery residence.',
                'design_vision' => 'We engineered custom 3-meter oversized pivot doors with concealed magnetic latches, fluted wood texture, and integrated brass hardware accents.',
                'transformation_outcome' => 'Achieved sound-dampened acoustic privacy between reception rooms while establishing an immediate sense of monumental luxury upon entry.',
                'gallery_images' => [
                    '/images/portfolio/project-9.jpg',
                    '/images/portfolio/project-10.jpg',
                    '/images/portfolio/project-11.jpg',
                ],
                'specifications' => [
                    'Door Construction' => 'Solid Core Acoustic HDF with Natural Hardwood Veneer',
                    'Hinges' => 'FritsJurgens Concealed Pivot System',
                    'Finish' => 'Matte Polyurethane Protective Seal',
                ],
                'is_featured' => true,
            ],
            [
                'title' => 'Eko Atlantic Monolithic TV & Media Suite',
                'slug' => 'eko-atlantic-tv-media-suite',
                'category' => 'Living',
                'location' => 'Eko Atlantic, Lagos',
                'year' => '2026',
                'cover_image' => '/images/portfolio/project-12.jpg',
                'tagline' => 'Floating media wall with sintered stone backing, slatted wood paneling, and hidden audio-visual housing.',
                'client_challenge' => 'A sprawling open-plan living room felt empty and disrupted by unsightly cables and heavy electronic equipment.',
                'design_vision' => 'Created an architectural focal point combining book-matched porcelain slabs, warm oak slats, and cantilevered floating cabinetry.',
                'transformation_outcome' => 'Created an immersive home entertainment atmosphere that effortlessly hides all wiring, receiver units, and consoles behind sound-perforated millwork.',
                'gallery_images' => [
                    '/images/portfolio/project-12.jpg',
                    '/images/portfolio/project-13.jpg',
                    '/images/portfolio/project-14.jpg',
                ],
                'specifications' => [
                    'Wall Finish' => '12mm Noir Laurent Sintered Porcelain Slabs & Oak Slats',
                    'Cabinetry' => 'Push-Latch Matte Graphite Joinery',
                    'Features' => 'Concealed Cable Pass-Throughs & Acoustic Venting',
                ],
                'is_featured' => true,
            ],
            [
                'title' => 'Lekki Phase 1 Luxury Master Bathroom Vanity',
                'slug' => 'lekki-master-vanity',
                'category' => 'Bathrooms',
                'location' => 'Lekki Phase 1, Lagos',
                'year' => '2025',
                'cover_image' => '/images/portfolio/project-15.jpg',
                'tagline' => 'Double floating vanity with fluted oak drawers, integrated LED backlit mirrors, and brushed brass fixtures.',
                'client_challenge' => 'Standard builder-grade bathroom cabinetry deteriorating due to high humidity and poor moisture resistance.',
                'design_vision' => 'Selected marine-grade waterproof HDF coated with moisture-sealed polyurethane, paired with vessel sinks and integrated backlit mirrors.',
                'transformation_outcome' => 'Delivered a spa-like daily ritual space built to withstand humid coastal climates with zero compromise on luxury aesthetics.',
                'gallery_images' => [
                    '/images/portfolio/project-15.jpg',
                    '/images/portfolio/project-16.jpg',
                    '/images/portfolio/project-17.jpg',
                ],
                'specifications' => [
                    'Material' => '100% Water-Resistant Hardcore Marine HDF',
                    'Fixtures' => 'Brushed Champagne Gold Deck-Mounted Faucets',
                    'Mirrors' => 'Anti-Fog Touch Sensor Perimeter LED Mirrors',
                ],
                'is_featured' => false,
            ],
            [
                'title' => 'Ikeja GRA Corporate Executive Boardroom',
                'slug' => 'ikeja-gra-corporate-suite',
                'category' => 'Commercial',
                'location' => 'Ikeja GRA, Lagos',
                'year' => '2026',
                'cover_image' => '/images/portfolio/project-18.jpg',
                'tagline' => 'Turnkey executive office suite featuring custom 14-seater boardroom table, acoustic wall cladding, and credenzas.',
                'client_challenge' => 'A leading financial firm required a boardroom that communicated prestige and corporate authority during international investor meetings.',
                'design_vision' => 'We designed a bespoke walnut boardroom table with integrated pop-up connectivity ports, surrounded by acoustic fabric-and-wood wall panels.',
                'transformation_outcome' => 'Completed the full corporate fit-out in under 4 weeks, creating a world-class environment for executive decisions.',
                'gallery_images' => [
                    '/images/portfolio/project-18.jpg',
                    '/images/portfolio/project-19.jpg',
                    '/images/portfolio/project-20.jpg',
                ],
                'specifications' => [
                    'Table' => '5.2 Meter Solid Walnut Boardroom Table with Leather Inlays',
                    'Panels' => 'PET Felt & Timber Slat Sound Absorption Cladding',
                    'Technology' => 'Concealed Motorized AV Connections',
                ],
                'is_featured' => false,
            ],
        ];

        foreach ($projects as $project) {
            Portfolio::create($project);
        }
    }
}
