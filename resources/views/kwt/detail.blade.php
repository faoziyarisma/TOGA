
@extends('layouts.main')

@section('container')
    <div class="mt-5 mb-4">
        <p style="color: white">Risma Manis</p>
    </div>
    <div class="container isian-db">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $item->title }}</h2>
                {{-- <h5>Nama Latin : {{ $item->latin_name }}</h5> --}}
                {{-- <h6>Kategori : <a href="/posts?category={{ $item->category->slug }}" class="text-decoration-none">{{ $item->category->name }}</a></h6> --}}
                <div class="text-center mt-3">
                    <img src="{{ asset('storage/'.$item->image) }}" class="img-fluid" width="300">
                </div>
                {{-- @if ($item->image)
                @else
                <img src="https://source.unsplash.com/1200x700/?{{ $item->category->name }}" alt="{{ $item->category->name }}" class="img-fluid">
                @endif --}}
                <article class="my-3">
                    {!! $item->body !!}
                </article>
                <a href="/kwt">Kembali</a>
            </div>
        </div>
    </div>
@endsection
