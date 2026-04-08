<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        $service->slug = Str::slug($request->title);
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $benefits = explode("\n", $request->benefits);
        $base = Str::slug($request->title);
        $slug = $base;
        $i = 1;

        while (\App\Models\Service::where('slug', $slug)->exists()) {
            $slug = $base . '-' . $i;
            $i++;
        }

        $service->slug = $slug;

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'long_description' => $request->long_description,
            'benefits' => $benefits,
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service berhasil ditambahkan');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $benefits = explode("\n", $request->benefits);
        $base = Str::slug($request->title);
        $slug = $base;
        $i = 1;

        while (\App\Models\Service::where('slug', $slug)->exists()) {
            $slug = $base . '-' . $i;
            $i++;
        }

        $service->slug = $slug;

        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'long_description' => $request->long_description,
            'benefits' => $benefits,
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service berhasil diupdate');
    }

    public function destroy($id)
    {
        Service::destroy($id);
        return back()->with('success', 'Service dihapus');
    }

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            if (!auth()->user()->is_admin) {
                abort(403);
            }

            return $next($request);
        });
    }
}
