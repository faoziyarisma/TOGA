<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #30704d;">
    <div class="container isian-db">
      <a class="navbar-brand" href="/" style="font-weight: bold;">TOGA GUPIT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        {{-- <ul class="navbar-nav">
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
        </ul> --}}

        
        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
                {{-- Welcome Back, Admin --}}
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
  </nav>