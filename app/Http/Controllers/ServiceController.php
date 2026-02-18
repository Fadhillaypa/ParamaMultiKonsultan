<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function show($id)
{
    $service = Service::findOrFail($id);
    return view('pages.services.show', compact('service'));
}
}
