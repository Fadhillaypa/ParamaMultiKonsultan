<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function show(Service $service)
    {
        return view('pages.services.show', compact('service'));
    }
}
