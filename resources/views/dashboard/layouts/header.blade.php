<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow header"  style="background-color: rgba(2, 80, 38, 0.52);">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">KWT GUPIT</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
    <div class="navbar-nav">
      <div class="nav-item">
        {{-- <a class="nav-link px-3" href="#">Logout</a> --}}
        <form action="/logout" method="post">
          @csrf
          {{-- <button type="submit" class="isian nav-link px-3 border-0"  style="background-color: rgba(2, 80, 38, 0.52);">Logout <span data-feather="log-out"></span></a></button> --}}
          <button type="submit" class="nav-link px-3 text-dark border border-2 blue rounded ms-auto me-3 isian-db">Logout <i class="bi bi-box-arrow-in-right"></i></button>
        </form>
      </div>
    </div>
  </header>