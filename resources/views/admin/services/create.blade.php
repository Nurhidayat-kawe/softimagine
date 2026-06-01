@extends('admin.layouts.app')
@section('title', 'Tambah Service')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">Tambah Service</div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.services.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Icon (Bootstrap Icons class)</label>
                <input type="text" name="icon" class="form-control" value="{{ old('icon', 'bi-globe') }}" required>
                <small class="text-muted">Contoh: bi-globe, bi-phone, bi-pc-display, bi-cloud</small>
            </div>
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi Singkat</label>
                <input type="text" name="short_desc" class="form-control" value="{{ old('short_desc') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Fitur (pisahkan dengan koma)</label>
                <input type="text" id="features-input" class="form-control mb-2" placeholder="Tambah fitur lalu klik Enter">
                <div id="features-list" class="d-flex flex-wrap gap-2 mb-2"></div>
                <input type="hidden" name="features" id="features-hidden">
                <small class="text-muted">Ketik fitur lalu tekan Enter untuk menambahkan</small>
            </div>
            <div class="mb-3">
                <label class="form-label">Urutan</label>
                <input type="number" name="sort_order" class="form-control" value="0" min="0">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
const featuresInput = document.getElementById('features-input');
const featuresList = document.getElementById('features-list');
const featuresHidden = document.getElementById('features-hidden');
let features = [];

featuresInput.addEventListener('keydown', function(e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        const val = this.value.trim();
        if (val && !features.includes(val)) {
            features.push(val);
            renderFeatures();
        }
        this.value = '';
    }
});

function renderFeatures() {
    featuresList.innerHTML = features.map(f => `<span class="badge bg-primary" style="cursor:pointer;" onclick="removeFeature('${f}')">${f} &times;</span>`).join('');
    featuresHidden.value = JSON.stringify(features);
}

function removeFeature(f) {
    features = features.filter(x => x !== f);
    renderFeatures();
}
</script>
@endpush
