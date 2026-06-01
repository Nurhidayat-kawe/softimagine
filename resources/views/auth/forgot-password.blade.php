@extends('layouts.guest')
@section('title', 'Lupa Password - ' . config('app.name'))

@section('content')
    <p style="color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 1rem;">
        Lupa password? Masukkan email Anda dan kami akan kirim link reset password.
    </p>

    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" required autofocus>
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn" style="background: var(--primary); color: white; padding: 0.5rem 1.5rem; border-radius: var(--radius); font-weight: 600;">
                Kirim Link Reset
            </button>
        </div>
    </form>
@endsection