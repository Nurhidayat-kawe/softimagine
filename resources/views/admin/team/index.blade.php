@extends('admin.layouts.app')
@section('title', 'Team')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Tim</span>
        <a href="{{ route('admin.team.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg me-1"></i>Tambah Anggota</a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead><tr><th>Nama</th><th>Role</th><th>Telepon</th><th>Urutan</th><th>Aksi</th></tr></thead>
                <tbody>
                    @forelse ($team as $m)
                    <tr>
                        <td>{{ $m->name }}</td>
                        <td>{{ $m->role }}</td>
                        <td>{{ $m->phone ?? '-' }}</td>
                        <td>{{ $m->sort_order }}</td>
                        <td>
                            <a href="{{ route('admin.team.edit', $m) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                            <form method="POST" action="{{ route('admin.team.destroy', $m) }}" class="d-inline" onsubmit="return confirm('Hapus?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="text-center text-muted py-4">Belum ada anggota tim.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
