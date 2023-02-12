
@extends('layouts.main')

@section('container')
    <div class="mt-5 mb-4">
        <p style="color: white">Risma Manis</p>
    </div>
    <div class="container isian-db">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="text-center mb-3">Organisasi KWT Desa Gupit</h2>
                {{-- <h5>Nama Latin : {{ $item->latin_name }}</h5> --}}
                {{-- <h6>Kategori : <a href="/posts?category={{ $item->category->slug }}" class="text-decoration-none">{{ $item->category->name }}</a></h6> --}}
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($items)>0)
                            @foreach ($items as $item)
                                <tr>
                                    <td>
                                        @php
                                        $counter = $counter + 1;
                                        // $jabatan_name = App\Http\Controllers\DashboardOrganisasiKWTController::convert_jabatan_id($jabatan_id);
                                        echo $counter;
                                        @endphp
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        @php
                                        $jabatan_id = $item->jabatan_id;
                                        $jabatan_name = App\Http\Controllers\DashboardOrganisasiKWTController::convert_jabatan_id($jabatan_id);
                                        echo $jabatan_name;
                                        @endphp
                                    </td>
                                    <td>
                                        {{ $item->alamat }}
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td colspan="6" style="text-align:center">Data anggota tidak ditemukan.</td></tr>
                        @endif
                    </tbody>
                  </table>
                <a href="/kwt">Kembali</a>
            </div>
        </div>
    </div>
@endsection
