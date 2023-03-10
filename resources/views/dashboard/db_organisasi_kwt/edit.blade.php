@extends('dashboard.layouts.main')

@section('container')
    {{-- content --}}

    <div class="container-fluid isian-db table-style">
        {{-- heading --}}
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-3 border-bottom">
            <h4>Edit Anggota KWT</h4>
        </div>

        {{-- deskripsi --}}
        <p class="mb-3">Mengedit Data Anggota KWT Desa Gupit.</p>

        {{-- form --}}
        <div class="card shadow my-4 w-75">
            <div class="card-header py-2">
                <h6 class="my-2 bg-light table-name">Form Edit Anggota</h6>
            </div>
            <div class="card-body px-lg-5 mt-4">
                <form action="/dashboard/kwt_organisasi/{{ $items->id }}" enctype="multipart/form-data" method="post">
                    @method('put')
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0 mx-3">Nama</p>
                            <p class="small text-danger mb-2 mx-3">*required</p>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <input class="form-control form-control-user" type="text" id="name" name="name"
                                value="{{ old('name', $items->name) }}" required autofocus>
                            @error('name')
                                <div class="small text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0 mx-3">Jabatan</p>
                            <p class="small text-danger mb-2 mx-3">*required</p>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <select class="form-select" name="jabatan_id" >
                                <option value="" disabled selected>-- Pilih Jabatan --</option>
                                @foreach ($jabatans as $jabatan)
                                    @if (old('jabatan_id', $items->jabatan_id) == $jabatan->id)
                                        <option value="{{ $jabatan->id }}" selected>{{ $jabatan->name }}</option>
                                    @else
                                        <option value="{{ $jabatan->id }}">{{ $jabatan->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('jabatan_id')
                                <div class="small text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-sm-12">
                            <p class="my-0 mx-3">Alamat</p>
                            <p class="small text-danger mb-2 mx-3">*required</p>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <textarea class="form-control" id="alamat" name="alamat" style="height: 100px" value="{{ old('alamat') }}">{{ $items->alamat }}</textarea>
                            @error('alamat')
                                <div class="small text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
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
        <a href="/dashboard/kwt_organisasi" class="btn btn-outline-success border-2 py-2 px-2 rounded mb-4 collapsible"
        id="tombol2">Kembali</a>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

