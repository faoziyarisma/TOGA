@extends('dashboard.layouts.main')

@section('container')
    {{-- content --}}
    <div class="container-fluid isian-db">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-3 border-bottom">
            <h4>Produksi TOGA</h4>
        </div>
        
        {{-- deskripsi --}}
        <p class="mb-3">Daftar Produksi TOGA Desa Gupit</p>

        @if (session()->has('success'))
            <div class="alert alert-success py-2" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <a href="/dashboard/produksi_toga/create" class="btn btn-outline-success border-2 py-2 px-2 rounded mb-4 collapsible">+ Tambah Produksi TOGA</a>

        {{-- Daftar TOGA terdaftar --}}
        <div class="card shadow mb-4">
            <div class="card-header py-2">
                <h6 class="my-2 table-name">Produksi TOGA Gupit</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5 ms-auto">
                        <form action="/dashboard/produksi_toga">
                            <div class="input-group my-2">
                                <input type="text" class="form-control border-2 collapsible1" placeholder="Nama Produksi TOGA" name="search" value="{{ request('search') }}">
                                <button class="btn btn-success" type="submit" id="button-addon2">Cari Produksi TOGA</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="table-responsive mt-3">
                    <table class="table table bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>produksi_togaId</th>
                                <th>Nama</th>
                                {{-- <th>Nama Latin</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($items)>0)
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        {{-- <td>{{ $item->latin_name }}</td> --}}
                                        <td>
                                            <a href="/dashboard/produksi_toga/{{ $item->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                                            <a href="/dashboard/produksi_toga/{{ $item->id }}/edit" class="badge bg-warning"><span data-feather="edit-2"></span></a>  
                                            <form action="/dashboard/produksi_toga/{{ $item->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span data-feather="trash-2"></span></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr><td colspan="6" style="text-align:center">Data produksi TOGA tidak ditemukan.</td></tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="pagination-block d-flex justify-content-end">
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- end of daftar TOGA --}} 
    </div> 
    
@endsection