@extends('admin.layouts.app')
@section('title', 'Testimonials')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Testimonials</span>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg me-1"></i>Tambah Testimonial</a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead><tr><th>Nama</th><th>Role</th><th>Perusahaan</th><th>Rating</th><th>Aksi</th></tr></thead>
                <tbody>
                    @forelse ($testimonials as $t)
                    <tr>
                        <td>{{ $t->name }}</td>
                        <td>{{ $t->role }}</td>
                        <td>{{ $t->company }}</td>
                        <td>{!! str_repeat('<i class="bi bi-star-fill text-warning small"></i>', $t->rating) !!}</td>
                        <td>
                            <a href="{{ route('admin.testimonials.edit', $t) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                            <form method="POST" action="{{ route('admin.testimonials.destroy', $t) }}" class="d-inline" onsubmit="return confirm('Hapus?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="text-center text-muted py-4">Belum ada testimonial.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
