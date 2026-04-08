<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Consultation;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $consultationsPerMonth = DB::table('consultations')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->groupBy('month')
            ->pluck('total', 'month');

        $statusStats = [
            'pending' => \App\Models\Consultation::where('status','pending')->count(),
            'process' => \App\Models\Consultation::where('status','process')->count(),
            'done' => \App\Models\Consultation::where('status','done')->count(),
        ];

        return view('admin.dashboard', [
            'totalUsers' => \App\Models\User::count(),
            'totalConsultations' => \App\Models\Consultation::count(),
            'pending' => $statusStats['pending'],
            'done' => $statusStats['done'],
            'latestConsultations' => \App\Models\Consultation::latest()->take(5)->get(),

            // 🔥 chart data
            'consultationsPerMonth' => $consultationsPerMonth,
            'statusStats' => $statusStats,
        ]);
    }
}
