@extends('admin.layouts.app')
@section('title', 'Stats')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">Statistik</div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.stats.update') }}">
            @csrf
            <div class="table-responsive">
                <table class="table">
                    <thead><tr><th>Label</th><th>Value</th></tr></thead>
                    <tbody>
                        @foreach ($stats as $stat)
                        <tr>
                            <td>{{ $stat->label }}</td>
                            <td>
                                <input type="hidden" name="stats[{{ $loop->index }}][id]" value="{{ $stat->id }}">
                                <input type="hidden" name="stats[{{ $loop->index }}][label]" value="{{ $stat->label }}">
                                <input type="text" name="stats[{{ $loop->index }}][value]" class="form-control" value="{{ $stat->value }}" style="max-width: 200px;" required>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection
