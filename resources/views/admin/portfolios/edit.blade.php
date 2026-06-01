@extends('admin.layouts.app')
@section('title', 'Edit Portfolio')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">Edit Portfolio</div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.portfolios.update', $portfolio) }}" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $portfolio->title) }}" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="category" class="form-select" required>
                        @foreach(['web','android','desktop','saas'] as $cat)
                        <option value="{{ $cat }}" {{ $portfolio->category == $cat ? 'selected' : '' }}>{{ ucfirst($cat) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Tahun</label>
                    <input type="text" name="year" class="form-control" value="{{ old('year', $portfolio->year) }}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Icon</label>
                    <input type="text" name="icon" class="form-control" value="{{ old('icon', $portfolio->icon) }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Klien</label>
                    <input type="text" name="client" class="form-control" value="{{ old('client', $portfolio->client) }}" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" rows="3" required>{{ old('description', $portfolio->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Teknologi</label>
                <input type="text" id="tech-input" class="form-control mb-2" placeholder="Tambah teknologi">
                <div id="tech-list" class="d-flex flex-wrap gap-2 mb-2"></div>
                <input type="hidden" name="tech" id="tech-hidden" value="{{ json_encode($portfolio->tech) }}">
            </div>
            @if($portfolio->images)
            <div class="mb-3">
                <label class="form-label">Gambar Saat Ini</label>
                <div class="d-flex gap-2">
                    @foreach($portfolio->images as $img)
                    <img src="{{ asset('storage/' . $img) }}" style="height: 80px; border-radius: 0.5rem; border: 1px solid #dee2e6;">
                    @endforeach
                </div>
            </div>
            @endif
            <div class="mb-3">
                <label class="form-label">Gambar Baru (kosongkan jika tidak ganti)</label>
                <input type="file" name="images[]" class="form-control" multiple accept="image/*">
            </div>
            <div class="mb-3">
                <label class="form-label">Urutan</label>
                <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $portfolio->sort_order) }}" min="0">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.portfolios.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
const input = document.getElementById('tech-input');
const list = document.getElementById('tech-list');
const hidden = document.getElementById('tech-hidden');
let items = JSON.parse(hidden.value || '[]');
input.addEventListener('keydown', function(e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        const val = this.value.trim();
        if (val && !items.includes(val)) { items.push(val); render(); }
        this.value = '';
    }
});
function render() {
    list.innerHTML = items.map(x => `<span class="badge bg-primary" style="cursor:pointer;" onclick="removeItem('${x}')">${x} &times;</span>`).join('');
    hidden.value = JSON.stringify(items);
}
function removeItem(x) { items = items.filter(i => i !== x); render(); }
render();
</script>
@endpush
