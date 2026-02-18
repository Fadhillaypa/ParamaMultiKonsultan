<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $consultationCount = Consultation::where('user_id', auth()->id())->count();

        return view('client.dashboard', compact('consultationCount'));
    }
}
