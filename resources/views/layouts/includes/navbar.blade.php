<nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Mini ERP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'home' ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'pelanggan' ? 'active' : '' }}" href="{{ route('pelanggan') }}">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'tagihan' ? 'active' : '' }}" href="#">Tagihan</a>
                </li>
            </ul>
            <a href="{{ route('logout') }}" class="btn btn-sm btn-warning">Logout</a>
        </div>
    </div>
</nav>