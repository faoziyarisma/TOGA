@extends('layouts.main')

@section('container')
    <div class="mt-5 mb-4">
        <p style="color: white">Risma Manis</p>
    </div>
    <h1 class="mt-3 mb-4 text-center isian-db">Produksi TOGA - Pemanfaatan TOGA</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/produksi_toga">
                {{-- <input type="text" class="form-control border-2 collapsible1" placeholder="Nama Produksi TOGA" name="search" value="{{ request('search') }}"> --}}
                <div class="input-group mb-3">
                    <input type="text" class="form-control isian-db" placeholder="Cari Produk TOGA..." name="search" value="{{ request('search') }}">
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
                        <h5 class="card-title">{{ $item->name }}</h5>
                        {{-- <h6>Nama Latin: {{ $item->latin_name }}</h6> --}}
                        <p class="card-text">
                            <article>
                                {!! $item->excerpt !!}
                            </article>
                        </p>
                        <a href="/produksi_togas/{{ $item->id }}" class="btn btn-primary">Lebih Detail</a>
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