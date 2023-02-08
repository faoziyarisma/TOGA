@extends('layouts.main')

@section('container')
    <h1 class="mb-4 text-center isian-db">TOGA - Tanaman Obat Keluarga</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                {{-- <input type="text" class="form-control border-2 collapsible1" placeholder="Nama Produksi TOGA" name="search" value="{{ request('search') }}"> --}}
                <div class="input-group mb-3">
                    <input type="text" class="form-control isian-db" placeholder="Cari TOGA..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-success isian-db" type="submit" id="button-search">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            @foreach ($items as $item)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('storage/'.$item->image) }}" alt="" class="card-img-top img-fluid" width="350" height="200">
                        <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <h5>Nama Latin: {{ $item->latin_name }}</h5>
                        <p class="card-text">
                            <article>
                                {!! $item->excerpt !!}
                            </article>
                        </p>
                        <a href="/togas/{{ $item->id }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection