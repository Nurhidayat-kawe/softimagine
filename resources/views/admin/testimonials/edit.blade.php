@extends('admin.layouts.app')
@section('title', 'Edit Testimonial')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">Edit Testimonial</div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.testimonials.update', $testimonial) }}">
            @csrf @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $testimonial->name) }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Initials</label>
                    <input type="text" name="initials" class="form-control" value="{{ old('initials', $testimonial->initials) }}" maxlength="5" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Role</label>
                    <input type="text" name="role" class="form-control" value="{{ old('role', $testimonial->role) }}" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Perusahaan</label>
                    <input type="text" name="company" class="form-control" value="{{ old('company', $testimonial->company) }}" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Rating</label>
                    <select name="rating" class="form-select">
                        @for($i=1;$i<=5;$i++)
                        <option value="{{ $i }}" {{ $testimonial->rating == $i ? 'selected' : '' }}>{{ $i }} Bintang</option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Testimonial</label>
                <textarea name="quote" class="form-control" rows="4" required>{{ old('quote', $testimonial->quote) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
