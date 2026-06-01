@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="row g-3 mb-4">
    <div class="col-lg-3 col-md-6">
        <div class="card shadow-sm">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 48px; height: 48px; background: rgba(79,70,229,0.1);">
                    <i class="bi bi-grid fs-4" style="color: var(--primary);"></i>
                </div>
                <div>
                    <div class="fs-4 fw-bold">{{ $services_count }}</div>
                    <small class="text-muted">Services</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card shadow-sm">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 48px; height: 48px; background: rgba(79,70,229,0.1);">
                    <i class="bi bi-briefcase fs-4" style="color: var(--primary);"></i>
                </div>
                <div>
                    <div class="fs-4 fw-bold">{{ $portfolios_count }}</div>
                    <small class="text-muted">Portfolios</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card shadow-sm">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 48px; height: 48px; background: rgba(79,70,229,0.1);">
                    <i class="bi bi-chat-quote fs-4" style="color: var(--primary);"></i>
                </div>
                <div>
                    <div class="fs-4 fw-bold">{{ $testimonials_count }}</div>
                    <small class="text-muted">Testimonials</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card shadow-sm">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 48px; height: 48px; background: rgba(79,70,229,0.1);">
                    <i class="bi bi-journal-text fs-4" style="color: var(--primary);"></i>
                </div>
                <div>
                    <div class="fs-4 fw-bold">{{ $blogs_count }}</div>
                    <small class="text-muted">Blog</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card shadow-sm">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 48px; height: 48px; background: rgba(79,70,229,0.1);">
                    <i class="bi bi-people fs-4" style="color: var(--primary);"></i>
                </div>
                <div>
                    <div class="fs-4 fw-bold">{{ $team_count }}</div>
                    <small class="text-muted">Team</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card shadow-sm">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 48px; height: 48px; background: rgba(79,70,229,0.1);">
                    <i class="bi bi-bar-chart fs-4" style="color: var(--primary);"></i>
                </div>
                <div>
                    <div class="fs-4 fw-bold">{{ $stats_count }}</div>
                    <small class="text-muted">Stats</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
