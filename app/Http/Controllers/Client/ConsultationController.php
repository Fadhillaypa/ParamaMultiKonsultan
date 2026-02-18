<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    public function create()
    {
        return view('client.consultation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service' => 'required',
            'phone'   => 'required',
            'message' => 'required|min:10',
        ]);

        Consultation::create([
            'user_id' => auth()->id(),
            'service' => $request->service,
            'phone'   => $request->phone,
            'message' => $request->message,
        ]);

        return redirect()
            ->route('dashboard')
            ->with('success', 'Permintaan konsultasi berhasil dikirim.');
    }

    public function index()
    {
        $consultations = Consultation::where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('client.consultation.index', compact('consultations'));
    }

    public function show(Consultation $consultation)
    {
        abort_if($consultation->user_id !== Auth::id(), 403);

        return view('client.consultation.show', compact('consultation'));
    }
}
