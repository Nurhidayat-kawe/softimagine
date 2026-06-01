@extends('layouts.guest')
@section('title', 'Register - ' . config('app.name'))

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control" required autofocus>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" required>
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" name="password" class="form-control" required>
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('login') }}" style="color: var(--primary); font-size: 0.9rem;">Sudah punya akun?</a>
            <button type="submit" class="btn" style="background: var(--primary); color: white; padding: 0.5rem 1.5rem; border-radius: var(--radius); font-weight: 600;">
                Register
            </button>
        </div>
    </form>
@endsection