@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Daftar Menu</h2>
        <p class="text-muted">Pilihan mie ayam, pangsit, dan minuman kami</p>
    </div>
    <div class="row g-4">
        @foreach ($menus as $menu)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/' . $menu->gambar) }}" class="card-img-top" style="height:200px;object-fit:cover;" alt="">
                <div class="card-body">
                    <span class="badge bg-secondary mb-2">{{ $menu->kategori }}</span>
                    <h5 class="card-title">{{ $menu->nama_menu }}</h5>
                    <p class="card-text">Rp {{ number_format($menu->harga, 0, ',', '.') }}</p>
                    <span class="badge {{ $menu->status == 'Tersedia' ? 'bg-success' : 'bg-danger' }}">{{ $menu->status }}</span>
                </div>
                <div class="card-footer bg-white border-0 pb-3">
                    <a href="{{ route('menu.show', $menu->id) }}" class="btn btn-pink w-100">Detail Menu</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $menus->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection