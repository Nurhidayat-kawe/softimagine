@extends('admin.layouts.app')
@section('title', 'Edit Artikel')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">Edit Artikel</div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.blogs.update', $blog) }}" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row">
                <div class="col-md-8 mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Kategori</label>
                    <input type="text" name="category" class="form-control" value="{{ old('category', $blog->category) }}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Penulis</label>
                    <input type="text" name="author" class="form-control" value="{{ old('author', $blog->author) }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Waktu Baca</label>
                    <input type="text" name="read_time" class="form-control" value="{{ old('read_time', $blog->read_time) }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="date" class="form-control" value="{{ old('date', $blog->date) }}" required>
                </div>
            </div>
            @if($blog->image)
            <div class="mb-3">
                <label class="form-label">Gambar Saat Ini</label><br>
                <img src="{{ asset('storage/' . $blog->image) }}" style="height: 100px; border-radius: 0.5rem;">
            </div>
            @endif
            <div class="mb-3">
                <label class="form-label">Gambar Baru</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>
            <div class="mb-3">
                <label class="form-label">Excerpt</label>
                <textarea name="excerpt" class="form-control" rows="3" required>{{ old('excerpt', $blog->excerpt) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Konten (HTML)</label>
                <textarea name="content" class="form-control" rows="10" required>{{ old('content', $blog->content) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
