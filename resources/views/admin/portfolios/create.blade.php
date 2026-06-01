@extends('admin.layouts.app')
@section('title', 'Tambah Portfolio')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">Tambah Portfolio</div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.portfolios.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="category" class="form-select" required>
                        <option value="web">Web</option>
                        <option value="android">Android</option>
                        <option value="desktop">Desktop</option>
                        <option value="saas">SaaS</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Tahun</label>
                    <input type="text" name="year" class="form-control" placeholder="2025" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Icon (Bootstrap Icons)</label>
                    <input type="text" name="icon" class="form-control" value="bi-building" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Klien</label>
                    <input type="text" name="client" class="form-control" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Teknologi (Enter untuk menambah)</label>
                <input type="text" id="tech-input" class="form-control mb-2" placeholder="Tambah teknologi">
                <div id="tech-list" class="d-flex flex-wrap gap-2 mb-2"></div>
                <input type="hidden" name="tech" id="tech-hidden">
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar (bisa pilih banyak)</label>
                <input type="file" name="images[]" class="form-control" multiple accept="image/*">
            </div>
            <div class="mb-3">
                <label class="form-label">Urutan</label>
                <input type="number" name="sort_order" class="form-control" value="0" min="0">
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
let items = [];
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
</script>
@endpush
