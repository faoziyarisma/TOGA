@extends('dashboard.layouts.main')

@section('container')
    {{-- content --}}

    <div class="container-fluid isian-db table-style">
        {{-- heading --}}
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-3 border-bottom">
            <h4>Detail Data Produksi TOGA</h4>
        </div>

        {{-- deskripsi --}}
        <p class="mb-3">Menampilkan detail data produksi TOGA yang dihasilkan dari kreatifitas KWT Desa Gupit.</p>

        {{-- form --}}
        <div class="card shadow my-4 w-75">
            <div class="card-header py-2">
                <h6 class="my-2 bg-light table-name">Data Produksi TOGA</h6>
            </div>
            <div class="card-body px-lg-5 mt-4">
                <div class="row mb-3">
                    <div class="col-md-4 col-sm-12">
                        <p class="my-0 mx-3">Nama</p>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <p class="my-0">{{ $items -> name }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 col-sm-12">
                        <p class="my-0 mx-3">Gambar</p>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <img src="{{ asset('storage/'.$items->image) }}" class="img-fluid mt-3">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 col-sm-12">
                        <p class="my-0 mx-3">Deskripsi</p>
                    </div>
                    <div class="col-md-7 col-sm-12"> 
                        <article>
                            {!! $items->deskripsi !!}
                        </article>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 col-sm-12">
                        <p class="my-0 mx-3">Alat dan Bahan</p>
                    </div>
                    <div class="col-md-7 col-sm-12"> 
                        <article>
                            {!! $items->alat_bahan !!}
                        </article>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 col-sm-12">
                        <p class="my-0 mx-3">Proses Pembuatan</p>
                    </div>
                    <div class="col-md-7 col-sm-12"> 
                        <article>
                            {!! $items->proses !!}
                        </article>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 col-sm-12">
                        <p class="my-0 mx-3">Reaksi Kimia</p>
                    </div>
                    <div class="col-md-7 col-sm-12"> 
                        <article>
                            {!! $items->reaksi_kimia !!}
                        </article>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 col-sm-12">
                        <p class="my-0 mx-3">Potensi</p>
                    </div>
                    <div class="col-md-7 col-sm-12"> 
                        <article>
                            {!! $items->potensi !!}
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-2 mb-5 mx-4 isian-db">
        <a href="/dashboard/produksi_toga" class="btn btn-outline-success border-2 py-2 px-2 rounded mb-4 collapsible"
        id="tombol2">Kembali</a>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader(); //perintah untuk mengambil data gambar
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>


