<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        $team = TeamMember::orderBy('sort_order')->get();
        return view('admin.team.index', compact('team'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    protected function decodeJsonField(Request $request, string $field): array
    {
        $value = $request->input($field, '[]');
        return is_array($value) ? $value : json_decode($value, true) ?? [];
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'role' => 'required|string|max:100',
            'initials' => 'required|string|max:5',
            'phone' => 'nullable|string|max:20',
            'skills' => 'required|string',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $validated['skills'] = $this->decodeJsonField($request, 'skills');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        TeamMember::create($validated);

        return redirect()->route('admin.team.index')->with('success', 'Anggota tim berhasil ditambahkan.');
    }

    public function edit(TeamMember $teamMember)
    {
        return view('admin.team.edit', compact('teamMember'));
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'role' => 'required|string|max:100',
            'initials' => 'required|string|max:5',
            'phone' => 'nullable|string|max:20',
            'skills' => 'required|string',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $validated['skills'] = $this->decodeJsonField($request, 'skills');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        $teamMember->update($validated);

        return redirect()->route('admin.team.index')->with('success', 'Anggota tim berhasil diperbarui.');
    }

    public function destroy(TeamMember $teamMember)
    {
        $teamMember->delete();
        return redirect()->route('admin.team.index')->with('success', 'Anggota tim berhasil dihapus.');
    }
}
