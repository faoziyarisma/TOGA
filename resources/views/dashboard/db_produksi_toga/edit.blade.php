@extends('dashboard.layouts.main')

@section('container')
    {{-- content --}}

    <div class="container-fluid isian-db table-style">
        {{-- heading --}}
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-3 border-bottom">
            <h4>Mengedit Data Produksi TOGA</h4>
        </div>

        {{-- deskripsi --}}
        <p class="mb-3">Mengedit data produksi TOGA yang dihasilkan dari kreatifitas KWT Desa Gupit.</p>

        {{-- form --}}
        <div class="card shadow my-4 w-75">
            <div class="card-header py-2">
                <h6 class="my-2 bg-light table-name">Form Edit Data Produksi TOGA</h6>
            </div>
            <div class="card-body px-lg-5 mt-4">
                <form action="/dashboard/produksi_toga/{{ $items->id }}" enctype="multipart/form-data" method="post">
                    @method('put')
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0 mx-3">Nama</p>
                            <p class="small text-danger mb-2 mx-3">*required</p>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <input class="form-control form-control-user" type="text" id="name" name="name"
                                value="{{ old('name',$items->name) }}" required autofocus>
                            @error('name')
                                <div class="small text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0 mx-3">Gambar</p>
                            <p class="small text-danger mb-2 mx-3">*required</p>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <input type="hidden" name="oldImage" value="{{ $items->image }}">
                            <img src="{{ asset('storage/'.$items->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block"> 
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" value="{{ old('image',$items->image) }}" onchange="previewImage()">
                            @error('image')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0 mx-3">Deskripsi</p>
                            <p class="small text-danger mb-2 mx-3">*required</p>
                        </div>
                        <div class="mx-3">
                            @error('deskripsi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi',$items->deskripsi) }}">
                            <trix-editor input="deskripsi"></trix-editor>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0 mx-3">Alat Bahan</p>
                            {{-- <p class="small text-danger mb-2 mx-3">*required</p> --}}
                        </div>
                        <div class="mx-3">
                            @error('alat_bahan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="alat_bahan" type="hidden" name="alat_bahan" value="{{ old('alat_bahan',$items->alat_bahan) }}">
                            <trix-editor input="alat_bahan"></trix-editor>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5 col-sm-12">
                            <p class="my-0 mx-3">Proses Pembuatan</p>
                            {{-- <p class="small text-danger mb-2 mx-3">*required</p> --}}
                        </div>
                        <div class="mx-3">
                            @error('proses')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="proses" type="hidden" name="proses" value="{{ old('proses',$items->proses) }}">
                            <trix-editor input="proses"></trix-editor>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0 mx-3">Reaksi Kimia</p>
                            {{-- <p class="small text-danger mb-2 mx-3">*required</p> --}}
                        </div>
                        <div class="mx-3">
                            @error('reaksi_kimia')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="reaksi_kimia" type="hidden" name="reaksi_kimia" value="{{ old('reaksi_kimia',$items->reaksi_kimia) }}">
                            <trix-editor input="reaksi_kimia"></trix-editor>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0 mx-3">Potensi</p>
                            {{-- <p class="small text-danger mb-2 mx-3">*required</p> --}}
                        </div>
                        <div  class="mx-3">
                            @error('potensi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="potensi" type="hidden" name="potensi" value="{{ old('potensi',$items->potensi) }}">
                            <trix-editor input="potensi"></trix-editor>
                        </div>
                    </div>

                    
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary text-white me-md-6 my-3" type="submit">Simpan Data</button>
                    </div>
                </form>
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

