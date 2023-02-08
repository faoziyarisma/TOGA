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

    <div class="container">
        <div class="row">
            @foreach ($items as $item)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        {{-- <div class="position-absolute bg-danger px-3 py-1 text-white"><a href="/posts?category={{ $item->category->slug }}" class="text-decoration-none text-light">{{ $item->category->name }}</a></div> --}}
                        
                        {{-- @if ($item->image)
                            <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->category->name }}" class="img-fluid">
                        @else
                            <img src="https://source.unsplash.com/500x300/?{{ $item->category->name }}" class="card-img-top" alt="{{ $item->category->name }}">
                        @endif --}}
                        <img src="{{ asset('storage/'.$item->image) }}" alt="" class="img-fluid" width="500" height="300">
                        <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <h5>Nama Latin: {{ $item->latin_name }}</h5>
                        <p class="card-text">{{ $item->excerpt }}</p>
                        <a href="/togas/{{ $item->id }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection