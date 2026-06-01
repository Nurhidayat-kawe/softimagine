@extends('admin.layouts.app')
@section('title', 'Portfolios')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Portfolios</span>
        <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg me-1"></i>Tambah Portfolio</a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead><tr><th>Judul</th><th>Kategori</th><th>Klien</th><th>Tahun</th><th>Aksi</th></tr></thead>
                <tbody>
                    @forelse ($portfolios as $p)
                    <tr>
                        <td>{{ $p->title }}</td>
                        <td><span class="badge bg-secondary">{{ $p->category }}</span></td>
                        <td>{{ $p->client }}</td>
                        <td>{{ $p->year }}</td>
                        <td>
                            <a href="{{ route('admin.portfolios.edit', $p) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                            <form method="POST" action="{{ route('admin.portfolios.destroy', $p) }}" class="d-inline" onsubmit="return confirm('Hapus?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="text-center text-muted py-4">Belum ada portfolio.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
