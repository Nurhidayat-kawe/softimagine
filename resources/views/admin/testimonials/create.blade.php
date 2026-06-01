@extends('admin.layouts.app')
@section('title', 'Tambah Testimonial')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">Tambah Testimonial</div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.testimonials.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Initials</label>
                    <input type="text" name="initials" class="form-control" placeholder="AP" maxlength="5" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Role/Jabatan</label>
                    <input type="text" name="role" class="form-control" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Perusahaan</label>
                    <input type="text" name="company" class="form-control" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Rating</label>
                    <select name="rating" class="form-select">
                        @for($i=1;$i<=5;$i++)<option value="{{ $i }}">{{ $i }} Bintang</option>@endfor
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Testimonial</label>
                <textarea name="quote" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
