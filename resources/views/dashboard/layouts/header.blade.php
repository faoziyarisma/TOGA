<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow"  style="background-color: #30704d;">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">TOGA GUPIT</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
    <div class="navbar-nav">
      <div class="nav-item">
        {{-- <a class="nav-link px-3" href="#">Logout</a> --}}
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="isian nav-link px-3 border-0"  style="background-color: #30704d;">Logout <span data-feather="log-out"></span></a></button>
        </form>
      </div>
    </div>
  </header>