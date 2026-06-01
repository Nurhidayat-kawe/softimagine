@extends('layouts.guest')
@section('title', 'Konfirmasi Password - ' . config('app.name'))

@section('content')
    <p style="color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 1rem;">
        Ini adalah area aman. Harap konfirmasi password Anda sebelum melanjutkan.
    </p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" name="password" class="form-control" required autofocus>
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn" style="background: var(--primary); color: white; padding: 0.5rem 1.5rem; border-radius: var(--radius); font-weight: 600;">
                Konfirmasi
            </button>
        </div>
    </form>
@endsection