@extends('admin.layouts.app')
@section('title', 'Pengaturan')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">Pengaturan Website</div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.settings.update') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email Utama</label>
                <input type="email" name="settings[email]" class="form-control" value="{{ $settings['email'] ?? '' }}">
            </div>
            <div class="mb-3">
                <label class="form-label">WhatsApp Marketing</label>
                <input type="text" name="settings[wa_marketing]" class="form-control" value="{{ $settings['wa_marketing'] ?? '' }}">
            </div>
            <div class="mb-3">
                <label class="form-label">WhatsApp Programmer</label>
                <input type="text" name="settings[wa_programmer]" class="form-control" value="{{ $settings['wa_programmer'] ?? '' }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="settings[address]" class="form-control" rows="2">{{ $settings['address'] ?? '' }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Jam Operasional</label>
                <input type="text" name="settings[hours]" class="form-control" value="{{ $settings['hours'] ?? '' }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection
