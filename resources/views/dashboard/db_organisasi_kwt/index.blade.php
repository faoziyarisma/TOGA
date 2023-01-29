@extends('dashboard.layouts.main')

@section('container')
    {{-- content --}}
    <div class="container-fluid isian-db">
        <div class="d-flex isian-db-2 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-3 border-bottom">
            <h4>Daftar Anggota KWT</h4>
        </div>
        
        {{-- deskripsi --}}
        <p class="mb-3">Daftar data Anggota KWT Desa Gupit</p>

        @if (session()->has('success'))
            <div class="alert alert-success py-2" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <a href="/dashboard/kwt_organisasi/create" class="btn btn-info text-dark py-2 px-2 rounded mb-4">+ Tambah Anggota</a>

        {{-- Daftar kwt_organisasi terdaftar --}}
        <div class="card shadow mb-4">
            <div class="isian-db-2 card-header py-2">
                <h6 class="my-2 table-name">Anggota KWT Gupit</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 ms-auto">
                        <form action="/dashboard/kwt_organisasi">
                            <div class="input-group my-2">
                                <input type="text" class="form-control" placeholder="Nama Anggota" name="search" value="{{ request('search') }}">
                                <button class="btn btn-info text-dark" type="submit" id="button-addon2">Cari Anggota</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="table-responsive mt-3">
                    <table class="table table bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>AnggotaId</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($items)>0)
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            @php
                                            $jabatan_id = $item->jabatan_id;
                                            $jabatan_name = App\Http\Controllers\DashboardOrganisasiKWTController::convert_jabatan_id($jabatan_id);
                                            echo $jabatan_name;
                                            @endphp
                                        </td>
                                        <td>
                                            <a href="/dashboard/kwt_organisasi/{{ $item->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                                            <a href="/dashboard/kwt_organisasi/{{ $item->id }}/edit" class="badge bg-warning"><span data-feather="edit-2"></span></a>  
                                            <form action="/dashboard/kwt_organisasi/{{ $item->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span data-feather="trash-2"></span></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr><td colspan="6" style="text-align:center">Data anggota tidak ditemukan!</td></tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="pagination-block d-flex justify-content-end">
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- end of daftar kwt_organisasi --}} 
    </div> 
    
@endsection