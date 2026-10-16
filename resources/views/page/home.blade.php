@extends('layouts.app')
@section('content')
<div class="py-5" style="background: linear-gradient(135deg, #e8738a, #f8b4c0);">
    <div class="container text-center text-white py-5">
        <h1 class="fw-bold">Selamat Datang di Mie Ayam & Pangsit Gemoy</h1>
        <p class="lead">Mie ayam kenyal, aroma pangsit sangat wangi, harga terjangkau.</p>
        <a href="{{ route('menu.index') }}" class="btn btn-light btn-lg mt-3 fw-bold" style="color: #e8738a;">Lihat Menu</a>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4 text-center">
        <div class="col-md-4">
            <div class="fs-1 mb-2">🥢</div>
            <h5 class="fw-bold">Resep Rumahan</h5>
            <p class="text-muted">Dibuat segar setiap hari dengan rasa yang lezat.</p>
        </div>
        <div class="col-md-4">
            <div class="fs-1 mb-2">💰</div>
            <h5 class="fw-bold">Harga Terjangkau</h5>
            <p class="text-muted">Kenyang tanpa bikin kantong bolong.</p>
        </div>
        <div class="col-md-4">
            <div class="fs-1 mb-2">⭐</div>
            <h5 class="fw-bold">Rasa Juara</h5>
            <p class="text-muted">Favorit pelanggan setia di area Tegal Alur.</p>
        </div>
    </div>
</div>
@endsection