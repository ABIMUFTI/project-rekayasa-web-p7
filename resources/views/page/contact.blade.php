@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Kontak Kami</h2>
        <p class="text-muted">Hubungi kami untuk pemesanan atau pertanyaan</p>
    </div>

    <div class="row g-4 justify-content-center">
        <div class="col-md-4">
            <div class="card h-100 text-center shadow-sm border-0 p-3">
                <div class="fs-1 mb-2">📍</div>
                <h5 class="fw-bold">Alamat</h5>
                <p class="text-muted mb-0">Jl. Lingkungan III, RT.8/RW.3, Tegal Alur, Kec. Kalideres, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11820</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 text-center shadow-sm border-0 p-3">
                <div class="fs-1 mb-2">💬</div>
                <h5 class="fw-bold">WhatsApp</h5>
                <p class="text-muted mb-3">0831-3355-7704</p>
                <a href="https://wa.me/6283133557704" target="_blank" class="btn btn-pink btn-sm">Chat Sekarang</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 text-center shadow-sm border-0 p-3">
                <div class="fs-1 mb-2">🕒</div>
                <h5 class="fw-bold">Jam Buka</h5>
                <p class="text-muted mb-0">Setiap Hari<br>09.30 - 22.00 WIB</p>
            </div>
        </div>
    </div>
</div>
@endsection