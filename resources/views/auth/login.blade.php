@extends('layouts.guest')
@section('title', 'Login - ' . config('app.name'))

@section('content')
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" required autofocus>
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" name="password" class="form-control" required>
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="remember" id="remember_me" class="form-check-input">
            <label class="form-check-label" for="remember_me">Ingat saya</label>
        </div>

        <div class="d-flex align-items-center justify-content-between">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" style="color: var(--primary); font-size: 0.9rem;">Lupa password?</a>
            @endif
            <button type="submit" class="btn" style="background: var(--primary); color: white; padding: 0.5rem 1.5rem; border-radius: var(--radius); font-weight: 600;">
                Login
            </button>
        </div>
    </form>
@endsection