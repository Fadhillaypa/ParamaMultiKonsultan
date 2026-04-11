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
        
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        // ✅ VALIDASI
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // ✅ BENEFITS → ARRAY
        $benefits = array_filter(array_map('trim', explode("\n", $request->benefits)));

        // ✅ SLUG UNIQUE
        $base = Str::slug($request->title);
        $slug = $base;
        $i = 1;

        while (Service::where('slug', $slug)->exists()) {
            $slug = $base . '-' . $i;
            $i++;
        }

        // ✅ SIMPAN DATA (INI KUNCI UTAMA)
        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'long_description' => $request->long_description,
            'benefits' => $benefits,
            'slug' => $slug,
            'icon' => $request->icon,
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

        $benefits = array_filter(array_map('trim', explode("\n", $request->benefits)));
        $base = Str::slug($request->title);
        $slug = $base;
        $i = 1;

        while (\App\Models\Service::where('slug', $slug)->exists()) {
            $slug = $base . '-' . $i;
            $i++;
        }

        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'long_description' => $request->long_description,
            'benefits' => $benefits,
            'icon' => $request->icon,
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
