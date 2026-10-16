<nav class="navbar navbar-expand-lg navbar-dark bg-pink shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Mie Ayam & Pangsit Gemoy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('menu.index') }}">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>