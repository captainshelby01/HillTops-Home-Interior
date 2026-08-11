<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Store a new consultation booking enquiry.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'service_type' => 'nullable|string|max:255',
            'budget_tier' => 'nullable|string|max:255',
            'timeline' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'project_details' => 'nullable|string',
        ]);

        $consultation = Consultation::create($validated);

        // Pre-fill WhatsApp message for direct conversion
        $whatsappNumber = '2347038015125';
        $messageText = "Hello HillTops Home Interior,\n\n"
            . "I have just submitted a consultation request for my interior project.\n"
            . "• Name: " . $consultation->full_name . "\n"
            . "• Service: " . ($consultation->service_type ?? 'Full Interior Solutions') . "\n"
            . "• Budget: " . ($consultation->budget_tier ?? 'Custom Quote') . "\n"
            . "• Location: " . ($consultation->location ?? 'Lagos / Nationwide') . "\n"
            . "• Timeline: " . ($consultation->timeline ?? 'Immediate') . "\n\n"
            . "Please let me know the next steps. Thank you!";

        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text=" . urlencode($messageText);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Your discovery consultation request has been received. Our senior design strategist will reach out within 24 hours.',
                'whatsapp_url' => $whatsappUrl,
                'consultation_id' => $consultation->id
            ]);
        }

        return redirect()->back()->with([
            'success' => 'Your discovery consultation request has been successfully submitted! We look forward to transforming your space.',
            'whatsapp_url' => $whatsappUrl
        ]);
    }
}
