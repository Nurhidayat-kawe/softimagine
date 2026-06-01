<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteStat;
use Illuminate\Http\Request;

class SiteStatController extends Controller
{
    public function index()
    {
        $stats = SiteStat::all();
        return view('admin.stats.index', compact('stats'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'stats' => 'required|array',
            'stats.*.id' => 'required|exists:site_stats,id',
            'stats.*.value' => 'required|string|max:50',
            'stats.*.label' => 'required|string|max:100',
        ]);

        foreach ($request->stats as $item) {
            SiteStat::find($item['id'])->update($item);
        }

        return redirect()->route('admin.stats.index')->with('success', 'Statistik berhasil diperbarui.');
    }
}
