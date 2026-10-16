@extends('layouts.app')
@section('content')
<div class="container py-5">
    <a href="{{ route('menu.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    <div class="row g-4">
        <div class="col-md-6">
            <img src="{{ asset('images/' . $menu->gambar) }}" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h3 class="fw-bold">{{ $menu->nama_menu }}</h3>
            <p class="text-muted">{{ $menu->kategori }}</p>
            <h5>Rp {{ number_format($menu->harga, 0, ',', '.') }}</h5>
            <span class="badge {{ $menu->status == 'Tersedia' ? 'bg-success' : 'bg-danger' }} mb-3">{{ $menu->status }}</span>
            <p>{{ $menu->deskripsi }}</p>
        </div>
    </div>
</div>
@endsection