@extends('admin.layouts.app')
@section('title', 'Tambah Artikel')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">Tambah Artikel</div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8 mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Kategori</label>
                    <input type="text" name="category" class="form-control" placeholder="Web Development" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Penulis</label>
                    <input type="text" name="author" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Waktu Baca</label>
                    <input type="text" name="read_time" class="form-control" placeholder="5 min read" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="date" class="form-control" value="{{ date('Y-m-d') }}" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>
            <div class="mb-3">
                <label class="form-label">Excerpt (Ringkasan)</label>
                <textarea name="excerpt" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Konten (HTML)</label>
                <textarea name="content" class="form-control" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
