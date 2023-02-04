@extends('dashboard.layouts.main')

@section('container')
    {{-- content --}}

    <div class="container-fluid isian-db table-style">
        {{-- heading --}}
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-3 border-bottom">
            <h4>Data Anggota KWT</h4>
        </div>

        {{-- deskripsi --}}
        <p class="mb-3">Menampilkan Data Anggota KWT Desa Gupit.</p>

        {{-- form --}}
        <div class="card shadow my-4 w-75">
            <div class="card-header py-2">
                <h6 class="my-2 bg-light table-name">Anggota KWT Desa Gupit</h6>
            </div>
            <div class="card-body px-lg-5 mt-3">
                <div class="row mb-3">
                    <div class="col-md-3 col-sm-12">
                        <p class="my-0 mx-3">Nama :</p>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <p class="my-0 mx-3">{{ $items -> name }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 col-sm-12">
                        <p class="my-0 mx-3">Jabatan :</p>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <p class="my-0 mx-3">
                            @php
                                $jabatan_id = $items->jabatan_id;
                                $jabatan_name = App\Http\Controllers\DashboardOrganisasiKWTController::convert_jabatan_id($jabatan_id);
                                echo $jabatan_name;
                            @endphp
                        </p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 col-sm-12">
                        <p class="my-0 mx-3">Alamat :</p>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <p class="my-0 mx-3">{{ $items -> alamat }}</p>
                    </div>
                </div>
                {{-- <form action="/dashboard/kwt_organisasi" enctype="multipart/form-data" method="post">
                    @csrf
                    
                </form> --}}
            </div>
        </div>
    </div>
    <div class="mt-2 mb-5 mx-4 isian-db">
        <a href="/dashboard/kwt_organisasi" class="btn btn-outline-success mt-3 mb-5 small border-2 text-dark rounded"
        id="tombol2">Kembali</a>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

