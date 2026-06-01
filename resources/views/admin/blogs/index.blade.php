@extends('admin.layouts.app')
@section('title', 'Blog')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Blog</span>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg me-1"></i>Tambah Artikel</a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead><tr><th>Judul</th><th>Kategori</th><th>Penulis</th><th>Tanggal</th><th>Aksi</th></tr></thead>
                <tbody>
                    @forelse ($blogs as $b)
                    <tr>
                        <td>{{ $b->title }}</td>
                        <td><span class="badge bg-secondary">{{ $b->category }}</span></td>
                        <td>{{ $b->author }}</td>
                        <td>{{ \Carbon\Carbon::parse($b->date)->format('d M Y') }}</td>
                        <td>
                            <a href="{{ route('admin.blogs.edit', $b) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                            <form method="POST" action="{{ route('admin.blogs.destroy', $b) }}" class="d-inline" onsubmit="return confirm('Hapus?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="text-center text-muted py-4">Belum ada artikel.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
