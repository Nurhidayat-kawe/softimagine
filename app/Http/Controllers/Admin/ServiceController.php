<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('sort_order')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'required|string|max:100',
            'title' => 'required|string|max:100',
            'short_desc' => 'required|string|max:200',
            'description' => 'required|string',
            'features' => 'required|string',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $validated['features'] = json_decode($validated['features'], true) ?? [];
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        Service::create($validated);

        return redirect()->route('admin.services.index')->with('success', 'Service berhasil ditambahkan.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'icon' => 'required|string|max:100',
            'title' => 'required|string|max:100',
            'short_desc' => 'required|string|max:200',
            'description' => 'required|string',
            'features' => 'required|string',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $validated['features'] = json_decode($validated['features'], true) ?? [];
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        $service->update($validated);

        return redirect()->route('admin.services.index')->with('success', 'Service berhasil diperbarui.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service berhasil dihapus.');
    }
}
