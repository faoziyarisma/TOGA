{{-- <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(2, 80, 38, 0.52);">
    <div class="container isian-db">
      <a class="navbar-brand" href="/" style="font-weight: bold;">KWT GUPIT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : ''}}" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "kwt") ? 'active' : ''}}" href="/kwt">Tentang KWT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "toga") ? 'active' : ''}}" href="/toga">TOGA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "produksi_TOGA") ? 'active' : ''}}" href="/produksi_toga">Produksi TOGA</a>
          </li>
        </ul>

        
        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
                
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</a></button>
                  </form>
              </ul>
            </li>
          @else
            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : ''}}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav> --}}
  <nav class="navbar navbar-expand-lg navbar-light" id="navbar" style="background-color: rgba(2, 80, 38, 0.52);">
    <div class="container">
      <a class="navbar-brand" href="/" id="navCont">KWT Gupit</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          {{-- <a class="nav-link active" href="#jumbotron">Beranda</a>
          <a class="nav-link active" href="#about">Tentang KWT</a>
          <a class="nav-link active" href="#ingredients">TOGA</a>
          <a class="nav-link active" href="#produk">Produk TOGA</a>
          <a class="nav-link active" href="#kontak">Kontak</a>
          <a class="nav-link active" href="#">Login</a> --}}
          <a class="nav-link active" href="/">Beranda</a>
          <a class="nav-link active" href="/kwt">KWT</a>
          <a class="nav-link active" href="/toga">TOGA</a>
          <a class="nav-link active" href="/produksi_toga">Produk TOGA</a>
          <a class="nav-link active" href="#kontak">Kontak</a>
          <a class="nav-link active" href="/login">Login</a>
        </div>
      </div>
    </div>
</nav>