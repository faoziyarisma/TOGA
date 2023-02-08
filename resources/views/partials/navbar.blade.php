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
  
<!--BERANDA-->
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
  <div class="container">
    <a class="navbar-brand" href="#jumbotron" id="navCont">KWT Gupit</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="#jumbotron">Beranda</a>
        <a class="nav-link active" href="#about">KWT</a>
        <a class="nav-link active" href="#ingredients">TOGA</a>
        <a class="nav-link active" href="#produk">Produk TOGA</a>
        <a class="nav-link active" href="#kontak">Kontak</a>
        <a class="nav-link active" href="/login">Login</a>
      </div>
    </div>
  </div>
</nav>
<!-- END NAVBAR -->

<!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid" id="jumbotron">
  <div class="container">
    <h2 class="main">Selamat Datang</h2>
  </div>
</div>
<!-- END JUMBOTRON -->
<div id='nav-bg'></div>
<!-- CAROUSEL EVENTS-->
<section class="beranda pt-3 pb-3">
    <div class="container-fluid">
        <div class="row">
            <div class="carousel-title">
                <p class="events">Events</p>
            </div>
            <div class="carousel">
                <div id="carouselEvent" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-wrapper">
                                <div class="card-events" data-bs-toggle="modal" data-bs-target="#cardEvent">
                                    <img class="img-events img-fluid" alt="" src="img/event/panen-terong.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">Panen Terong KWT</h6>
                                        <a href="#" class="btn btn-outline-success btn-sm" >Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="card-events">
                                    <img class="img-events img-fluid" alt="" src="img/event/pohon-kelapa.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">Penanaman Pohon Kelapa</h6>
                                        <a href="#" class="btn btn-outline-success btn-sm" >Lihat Detail</a>
                                    </div>
                                </div>
                                <div class="card-events">
                                    <img class="img-events img-fluid" alt="" src="img/event/perawatan-kebun.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">Perawatan Kebun KWT</h6>
                                        <a href="#" class="btn btn-outline-success btn-sm" >Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-wrapper">
                                <div class="card-events">
                                    <img class="img-events img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                    <div class="card-body">
                                        <h6 class="card-title">Menanam Kelapa Genjah</h6>
                                    </div>
                                </div>
                                <div class="card-events">
                                    <img class="img-events img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                    <div class="card-body">
                                        <h6 class="card-title">Arisan Rutin</h6>
                                    </div>
                                </div>
                                <div class="card-events">
                                    <img class="img-events img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                    <div class="card-body">
                                        <h6 class="card-title">Memproduksi Sambal Sereh</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-wrapper">
                                <div class="card-events">
                                    <img class="img-events img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                    <div class="card-body">
                                        <h6 class="card-title">Menanam Kelapa Genjah</h6>
                                    </div>
                                </div>
                                <div class="card-events">
                                    <img class="img-events img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                    <div class="card-body">
                                        <h6 class="card-title">Arisan Rutin</h6>
                                    </div>
                                </div>
                                <div class="card-events">
                                    <img class="img-events img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                    <div class="card-body">
                                        <h6 class="card-title">Memproduksi Sambal Sereh</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" data-bs-target="#carouselEvent" type="button" data-bs-slide="prev">
                        <i class="bi bi-chevron-double-left"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                          </svg></i>
                    </button>
                    <button class="carousel-control-next" data-bs-target="#carouselEvent" type="button" data-bs-slide="next">
                        <i class="bi bi-chevron-double-right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section><br><br><br><br><br><br><br>
<!-- END CAROUSEL EVENTS -->
<!-- ======= END BERANDA ======= -->
<!-- MODAL Event -->
<div class="modal fade" id="cardEvent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel">Panen Terong KWT</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-event img-fluid" alt="" src="img/event/panen-terong.jpg">
                <p class="text-center">
                    Tanggal Pelaksanaan : <br> 10 September 2021<br>
                    Deskripsi : <br>Pada hari Jumat, 10 September 2021 seluruh anggota KWT memanen hasil budidaya terung mereka.
                    Hasil panen terung akan dibagikan kepada seluruh angggota KWT.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-12 text-center section-header">
            <div class="section-title">
                <p>Tentang <span>KWT</span></p>
            </div>
        </div>
        <div class="col-lg-6 about-img" data-aos="fade-up" data-aos-delay="150">
            <img class="img-fluid" src="img/about/4.jpg">
        </div>
        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
            <div class="tentang ps-0 ps-lg-4">
                <p class="fst-italic">
                    Desa Gupit memiliki beragam potensi yang menjadikan desa ini desa binaan.
                    Salah satu potensi desa yang ada adalah tanaman TOGA.
                    Beragam tanaman TOGA telah dikembangkan oleh KWT dan ada beberapa produk yang telah dibuat berbahan dasar tanaman TOGA.
                    Adapun produk kreasi KWT adalah sambel sereh, puding kulit pisang, dan pemanfaatan
                    sampah yang dijadikan kerajinan tangan, seperti tas dan baju. Namun, produk KWT tersebut belum sempat diperkenalkan.
                </p>
                {{-- <ul>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul> --}}
                <button class="more btn bg-transparent">
                    Lebih banyak . .  <i class="bi bi-arrow-right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg></i>
                </button>
            </div>
        </div>
      </div>
    </div>
</section><br><br><br><br><br><br><br><br><br><br>
<!-- End About Section -->

<!-- TOGA Section -->
<section id="ingredients" class="ingredients">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 text-center section-header">
            <div class="section-title">
                <p>Tanaman Obat Keluarga</p>
            </div>
        </div>
        <div class="carousel">
            <div id="carouselToga" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-wrapper">
                            <div class="card-ingr" data-bs-toggle="modal" data-bs-target="#cardToga">
                                <img class="img-fluid" alt="" src="img/toga/jahe.jpg">
                                <div class="card-body center-block">
                                    <h6 class="card-title">JAHE</h6>
                                    <p class="card-text">Jahe merupakan salah satu jenis tanaman obat keluarga yang memiliki batang semu dan berakar tinggal. Jahe beraroma khas dan berasa pedas jika dimakan. </p>
                                    <a href="#" class="btn btn-outline-success btn-sm" >Selengkapnya</a>
                                </div>
                            </div>
                            <div class="card-ingr">
                                <img class="img-fluid" alt="" src="img/toga/sereh.jpg">
                                <div class="card-body">
                                    <h6 class="card-title">SEREH</h6>
                                    <p class="card-text">Serai atau Sereh merupakan tanaman yang sering digunakan sebagai bumbu dapur. Batang ini begitu khas sehingga sering juga dimanfaatkan sebagai bahan alami pengusir nyamuk.</p>
                                    <a href="#" class="btn btn-outline-success btn-sm" >Selengkapnya</a>
                                </div>
                            </div>
                            <div class="card-ingr">
                                <img class="img-fluid" alt="" src="img/toga/tomat.jpg">
                                <div class="card-body">
                                    <h6 class="card-title">TOMAT</h6>
                                    <p class="card-text">Tomat merupakan tumbuhan yang pertama kali ditemukan di Amerika Selatan, nasih berkerabat dengan terung, kentang dan paprika.Tomat termasuk buah karena strukturnya mempunyai daging dan biji yang aman apabila tertelan.</p>
                                    <a href="#" class="btn btn-outline-success btn-sm" >Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-wrapper">
                            <div class="card-ingr">
                                <img class="img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                <div class="card-body">
                                    <h6 class="card-title">Menanam Kelapa Genjah</h6>
                                </div>
                            </div>
                            <div class="card-ingr">
                                <img class="img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                <div class="card-body">
                                    <h6 class="card-title">Arisan Rutin</h6>
                                </div>
                            </div>
                            <div class="card-ingr">
                                <img class="img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                <div class="card-body">
                                    <h6 class="card-title">Memproduksi Sambal Sereh</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-wrapper">
                            <div class="card-ingr">
                                <img class="img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                <div class="card-body">
                                    <h6 class="card-title">Menanam Kelapa Genjah</h6>
                                </div>
                            </div>
                            <div class="card-ingr">
                                <img class="img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                <div class="card-body">
                                    <h6 class="card-title">Arisan Rutin</h6>
                                </div>
                            </div>
                            <div class="card-ingr">
                                <img class="img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                <div class="card-body">
                                    <h6 class="card-title">Memproduksi Sambal Sereh</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" data-bs-target="#carouselToga" type="button" data-bs-slide="prev">
                    <i class="bi bi-chevron-double-left"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                      </svg></i>
                </button>
                <button class="carousel-control-next" data-bs-target="#carouselToga" type="button" data-bs-slide="next">
                    <i class="bi bi-chevron-double-right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                        <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg></i>
                </button>
            </div>
        </div>

      </div>
    </div>
</section><br><br><br><br><br><br><br>
<!-- End TOGA Section -->

<!-- Modal TOGA -->
<div class="modal fade" id="cardToga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel">JAHE</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-toga img-fluid" alt="" src="img/toga/jahe.jpg">
                <p>
                    Jahe merupakan salah satu jenis tanaman obat keluarga yang memiliki batang semu dan berakar tinggal.
                    Jahe beraroma khas dan berasa pedas jika dimakan.
                    Biasanya tanaman ini ditanam di pekarangan rumah ataupun di kebun dengan ketinggian tanaman mencapai 1000 m/dpl.<br><br>
                    <span>Manfaat dan khasiat Jahe:</span><br>
                    Jahe sudah banyak dijadikan sebagai bahan pembuat permen, puding, bolu dan permen.
                    Selain itu, jahe juga memiliki beragam manfaat untuk kesehatan, diantaranya adalah menghilangkan bekas luka,
                    meremajakan kulit, menumbuhkan rambut, mengurangi ketombe, mengurangi selulit, meredakan rasa mual, meringankan gejala flu
                    dan pilek, mengurangi nyeri, meredakan peradangan, menurunkan gula darah, melancarkan masalah pencernaan, menurunkan kadar
                    kolesterol, membantu melawan infeksi, meredakan vertiogo dan menurunkan berat badan.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- PRODUK Section -->
<section id="produk" class="produk">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 text-center section-header">
            <div class="section-title-produksi">
                <p>Produk TOGA</p>
            </div>
        </div>
        <div class="carousel">
            <div id="carouselProduk" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-wrapper">
                            <div class="card-produk" data-bs-toggle="modal" data-bs-target="#cardProduk">
                                <img class="img-produk img-fluid" alt="" src="img/produk/sambal.jpg">
                                <div class="card-body-produk">
                                    <h6 class="card-title">Sambal Sereh</h6>
                                    <a href="#" class="btn btn-outline-success btn-sm" >Selengkapnya</a>
                                </div>
                            </div>
                            <div class="card-produk">
                                <img class="img-produk img-fluid" alt="" src="img/produk/puding.jpg">
                                <div class="card-body-produk">
                                    <h6 class="card-title">Puding Kulit Pisang</h6>
                                    <a href="#" class="btn btn-outline-success btn-sm" >Selengkapnya</a>
                                </div>
                            </div>
                            <div class="card-produk">
                                <img class="img-produk img-fluid" alt="" src="img/produk/sabuns.jpg">
                                <div class="card-body-produk">
                                    <h6 class="card-title">Sabun Sereh</h6>
                                    <a href="#" class="btn btn-outline-success btn-sm" >Selengkapnya</a>
                                </div>
                            </div>
                            <div class="card-produk">
                                <img class="img-produk img-fluid" alt="" src="img/produk/jamu.jpg">
                                <div class="card-body-produk">
                                    <h6 class="card-title">Jamu Kunyit Asam</h6>
                                    <a href="#" class="btn btn-outline-success btn-sm" >Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-wrapper">
                            <div class="card-produk">
                                <img class="img-produk img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                <div class="card-body-produk">
                                    <h6 class="card-title">Menanam Kelapa Genjah</h6>
                                </div>
                            </div>
                            <div class="card-produk">
                                <img class="img-produk img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                <div class="card-body-produk">
                                    <h6 class="card-title">Arisan Rutin</h6>
                                </div>
                            </div>
                            <div class="card-produk">
                                <img class="img-produk img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                <div class="card-body-produk">
                                    <h6 class="card-title">Memproduksi Sambal Sereh</h6>
                                </div>
                            </div>
                            <div class="card-produk">
                                <img class="img-produk img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                <div class="card-body-produk">
                                    <h6 class="card-title">Memproduksi Sambal Sereh</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-wrapper">
                            <div class="card-produk">
                                <img class="img-produk img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                <div class="card-body-produk">
                                    <h6 class="card-title">Menanam Kelapa Genjah</h6>
                                </div>
                            </div>
                            <div class="card-produk">
                                <img class="img-produk img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                <div class="card-body-produk">
                                    <h6 class="card-title">Arisan Rutin</h6>
                                </div>
                            </div>
                            <div class="card-produk">
                                <img class="img-produk img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                <div class="card-body-produk">
                                    <h6 class="card-title">Memproduksi Sambal Sereh</h6>
                                </div>
                            </div>
                            <div class="card-produk">
                                <img class="img-produk img-fluid" alt="" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                <div class="card-body-produk">
                                    <h6 class="card-title">Memproduksi Sambal Sereh</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" data-bs-target="#carouselProduk" type="button" data-bs-slide="prev">
                    <i class="bi bi-chevron-double-left"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                      </svg></i>
                </button>
                <button class="carousel-control-next" data-bs-target="#carouselProduk" type="button" data-bs-slide="next">
                    <i class="bi bi-chevron-double-right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                        <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg></i>
                </button>
            </div>
        </div>

      </div>
    </div>
</section><br><br><br><br><br>
<!-- End PRODUK Section -->

<!-- Modal PRODUK -->
<div class="modal fade" id="cardProduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel">SAMBAL SEREH</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-produk img-fluid" alt="" src="img/produk/sambal.jpg">
                <p>
                    Sambal yang dibuat dengan bahan TOGA yaitu sereh yang memberikan cita rasa yang khas dari tanaman sereh dan segar.
                </p><br>
                <p>
                    Alat - Bahan:
                </p>
                <ul>
                    <li><i class="bi bi-check2-all"></i>Sereh</li>
                    <li><i class="bi bi-check2-all"></i>Bawang merah</li>
                    <li><i class="bi bi-check2-all"></i>Bawang Putih</li>
                    <li><i class="bi bi-check2-all"></i>Cabai Besar</li>
                    <li><i class="bi bi-check2-all"></i>Cabai Kecil</li>
                    <li><i class="bi bi-check2-all"></i>Limau</li>
                    <li><i class="bi bi-check2-all"></i>Terasi</li>
                    <li><i class="bi bi-check2-all"></i>Garam</li>
                    <li><i class="bi bi-check2-all"></i>Gula</li>
                </ul>
                <p>
                    Proses :<br>
                    1. Kupas bawang, kemudian potong lalu digoreng seperti yang digunakan untuk bumbu bakso<br>
                    2. Kemudian, sesuaikan jumlah cabai<br>
                    3. Sereh ambil yg dalam yg muda dicincang halus, remas dengan garam hingga sereh halus, lalu dicuci<br>
                    4. Potong cabai potong hingga halus<br>
                    5. Panaskan minyak goreng<br>
                    6. Goreng cabai besar dan kecil hingga setengah matang<br>
                    7. Kemudian tambahkan sereh hingga setengah matang<br>
                    8. Untuk selanjutnya, ditambahkan gula dan terasi<br>
                    9. Yang terakhir, masukkan bawang merah dan bawang putih, kemudian aduk.<br>
                    10. Setelah tercampur dan matang, sambal siap dikonsumsi.<br>
                </p>
            </div>
        </div>
    </div>
</div>

<footer class="text-white text-center text-lg-start" style="background-color: #30704d;" id="kontak">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Alamat</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
            voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Contact Person:</h5>

            <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
            aliquam voluptatem veniam, est atque cumque eum delectus sint!
            </p>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
</footer>






