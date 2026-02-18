<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use Illuminate\Http\Request;
use App\Notifications\ConsultationStatusUpdated;
use Barryvdh\DomPDF\Facade\Pdf;


class AdminConsultationController extends Controller
{
    public function index(Request $request)
    {
        $consultations = Consultation::with('user')
        ->when($request->filled('status'), fn ($q) =>
            $q->where('status', $request->status)
        )
        ->when($request->from && $request->to, fn ($q) =>
            $q->whereBetween('created_at', [
                $request->from . ' 00:00:00',
                $request->to . ' 23:59:59'
            ])
        )
        ->when($request->search, fn ($q) =>
            $q->where(function ($query) use ($request) {
                $query->where('subject', 'like', "%{$request->search}%")
                      ->orWhereHas('user', fn ($u) =>
                          $u->where('name', 'like', "%{$request->search}%")
                            ->orWhere('email', 'like', "%{$request->search}%")
                      );
            })
        )
        ->latest()
        ->paginate(10)
        ->withQueryString();

        return view('admin.consultation.index', compact('consultations'));
    }

    public function update(Request $request, $id)
    {
        Consultation::findOrFail($id)->update([
            'status' => $request->status
        ]);

        return back()->with('success', 'Status berhasil diperbarui');
    }

    public function show(Consultation $consultation)
    {
        return view('admin.consultation.show', compact('consultation'));
    }

    public function updateStatus(Request $request, Consultation $consultation)
    {
        $request->validate([
            'status' => 'required|in:pending,process,done'
        ]);

        $consultation->update([
            'status' => $request->status
        ]);

        $consultation->activities()->create([
            'action' => 'status_updated',
            'description' => "Status diubah ke {$request->status}",
            'admin_id' => auth()->id(),
        ]);

        // kirim notifikasi ke client
        $client = $consultation->user;

        if ($client && $client->role === 'client') {
            $client->notify(
                new ConsultationStatusUpdated($consultation)
            );
        }
        return back()->with('success', 'Status konsultasi diperbarui');
    }

    public function export(Consultation $consultation)
    {
        $pdf = app('dompdf.wrapper')
        ->loadView('admin.consultation.pdf', compact('consultation'))
        ->setPaper('a4', 'portrait');

        return $pdf->stream(
            'Konsultasi-'.$consultation->id.'.pdf'
        );
    }
}
