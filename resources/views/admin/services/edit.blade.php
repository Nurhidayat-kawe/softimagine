@extends('admin.layouts.app')
@section('title', 'Edit Service')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">Edit Service</div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.services.update', $service) }}">
            @csrf @method('PUT')
            <div class="mb-3">
                <label class="form-label">Icon (Bootstrap Icons class)</label>
                <input type="text" name="icon" class="form-control" value="{{ old('icon', $service->icon) }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $service->title) }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi Singkat</label>
                <input type="text" name="short_desc" class="form-control" value="{{ old('short_desc', $service->short_desc) }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" rows="4" required>{{ old('description', $service->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Fitur</label>
                <input type="text" id="features-input" class="form-control mb-2" placeholder="Tambah fitur lalu klik Enter">
                <div id="features-list" class="d-flex flex-wrap gap-2 mb-2"></div>
                <input type="hidden" name="features" id="features-hidden" value="{{ json_encode($service->features) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Urutan</label>
                <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $service->sort_order) }}" min="0">
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
let features = JSON.parse(featuresHidden.value || '[]');

function renderFeatures() {
    featuresList.innerHTML = features.map(f => `<span class="badge bg-primary" style="cursor:pointer;" onclick="removeFeature('${f}')">${f} &times;</span>`).join('');
    featuresHidden.value = JSON.stringify(features);
}

featuresInput.addEventListener('keydown', function(e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        const val = this.value.trim();
        if (val && !features.includes(val)) { features.push(val); renderFeatures(); }
        this.value = '';
    }
});

function removeFeature(f) { features = features.filter(x => x !== f); renderFeatures(); }
renderFeatures();
</script>
@endpush
