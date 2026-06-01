@extends('admin.layouts.app')
@section('title', 'Tambah Anggota Tim')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">Tambah Anggota Tim</div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.team.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Initials</label>
                    <input type="text" name="initials" class="form-control" placeholder="AP" maxlength="5" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Role</label>
                    <input type="text" name="role" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">No. Telepon (WhatsApp)</label>
                    <input type="text" name="phone" class="form-control" placeholder="62812xxxx">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Urutan</label>
                    <input type="number" name="sort_order" class="form-control" value="0" min="0">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Skill (Enter untuk menambah)</label>
                <input type="text" id="skills-input" class="form-control mb-2" placeholder="Tambah skill">
                <div id="skills-list" class="d-flex flex-wrap gap-2 mb-2"></div>
                <input type="hidden" name="skills" id="skills-hidden">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.team.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
const input = document.getElementById('skills-input');
const list = document.getElementById('skills-list');
const hidden = document.getElementById('skills-hidden');
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
