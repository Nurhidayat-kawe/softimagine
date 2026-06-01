<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('sort_order')->get();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'category' => 'required|string|max:50',
            'description' => 'required|string',
            'icon' => 'required|string|max:100',
            'client' => 'required|string|max:200',
            'year' => 'required|string|max:10',
            'tech' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $imagePaths[] = $img->store('portfolio', 'public');
            }
        }
        $validated['images'] = $imagePaths;
        $validated['tech'] = json_decode($validated['tech'], true) ?? [];
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        Portfolio::create($validated);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio berhasil ditambahkan.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'category' => 'required|string|max:50',
            'description' => 'required|string',
            'icon' => 'required|string|max:100',
            'client' => 'required|string|max:200',
            'year' => 'required|string|max:10',
            'tech' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $validated['tech'] = json_decode($validated['tech'], true) ?? [];
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        if ($request->hasFile('images')) {
            if ($portfolio->images) {
                foreach ($portfolio->images as $oldImg) {
                    Storage::disk('public')->delete($oldImg);
                }
            }
            $imagePaths = [];
            foreach ($request->file('images') as $img) {
                $imagePaths[] = $img->store('portfolio', 'public');
            }
            $validated['images'] = $imagePaths;
        }

        $portfolio->update($validated);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio berhasil diperbarui.');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->images) {
            foreach ($portfolio->images as $img) {
                Storage::disk('public')->delete($img);
            }
        }
        $portfolio->delete();
        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio berhasil dihapus.');
    }
}
