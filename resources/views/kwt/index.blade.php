@extends('layouts.main')

@section('container')
    <div class="mt-5 mb-4">
        <p style="color: white">Risma Manis</p>
    </div>
    <h1 class="mt-3 mb-4 text-center isian-db">KWT - Kelompok Wanita Tani</h1>

    <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img" data-aos="fade-up" data-aos-delay="150">
              <img class="img-fluid" src="img/about/4.jpg">
          </div>
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <div class="tentang ps-0 ps-lg-4">
                  <p class="fst-italic">
                      
                      Kelompok tani Wanita Tani Desa Gupit adalah merupakan 
                      wadah tempat berkumpulnya segenap petani yang memiliki lahan pertanian / perkebunan 
                      terutama kaum ibu tani Desa Gupit yang pemanfaatan lahannya belum maksimal, sehingga belum dapat mencapai 
                      hasil produksi seperti yang diharapkan untuk dapat memenuhi kebutuhan hidup dengan 
                      melaksanakan kegiatan budidaya tanaman sayur, buah, toga, ternak seperti ayam, enthok, dan lele.
                      Terdapat beberapa produk yang telah dibuat berbahan dasar tanaman TOGA dari kekreatifan KWT.
                      Adapun produk kreasi KWT adalah sambel sereh, puding kulit pisang, jamu kunyit asem dan pemanfaatan
                      sampah yang dijadikan kerajinan tangan, seperti tas dan baju. 
                      <br>
                      KWT Desa Gupit dibentuk pada hari Senin, tanggal 4 Januari 2021 jam 13.00 WIB 
                      bertempat pada di Rumah Bapak Sugiyanto dan Ibu Sutiyem RT.01/RW.03 Tumpaksari.
                      Berikut lebih detail terkait <a href="/organisasi_kwt">Organisasi KWT Desa Gupit</a>.
                  </p>
                  {{-- <ul>
                      <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                      <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                      <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                  </ul> --}}
                  
              </div>
          </div>
        </div>
      </div>

    <div class="row justify-content-center mb-3 mt-5">
        <div class="col-md-6">
            <form action="/kwt">
                <div class="input-group mb-3">
                    <input type="text" class="form-control isian-db" placeholder="Cari Kegiatan KWT..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-success isian-db" type="submit" id="button-search">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container mb-5 isian-db1">
        <div class="row">
            @foreach ($items as $item)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="{{ asset('storage/'.$item->image) }}" alt="" class="card-img-top img-fluid" width="350" height="200">
                        <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        {{-- <h6>Nama Latin: {{ $item->latin_name }}</h6> --}}
                        <p class="card-text">
                            <article>
                                {!! $item->excerpt !!}
                            </article>
                        </p>
                        <a href="/kwt_event/{{ $item->id }}" class="btn btn-primary">Lebih Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-center">
        {{ $items->links() }}
    </div>

@endsection