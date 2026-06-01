@extends('layouts.guest')
@section('title', 'Verifikasi Email - ' . config('app.name'))

@section('content')
    <p style="color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 1rem;">
        Terima kasih telah mendaftar! Sebelum memulai, verifikasi email Anda dengan klik link yang sudah kami kirim.
    </p>

    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success">Link verifikasi baru telah dikirim ke email Anda.</div>
    @endif

    <div class="d-flex align-items-center justify-content-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn" style="background: var(--primary); color: white; padding: 0.5rem 1.5rem; border-radius: var(--radius); font-weight: 600;">
                Kirim Ulang Email Verifikasi
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" style="background: none; border: none; color: var(--primary); font-size: 0.9rem; text-decoration: underline; cursor: pointer;">
                Logout
            </button>
        </form>
    </div>
@endsection