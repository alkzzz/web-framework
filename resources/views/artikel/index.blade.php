@extends('_frontend.template')

@section('title', 'Daftar Artikel')

@section('content')
<h1 class="mt-5 mb-4" style="text-decoration: underline">Daftar Artikel</h1>
    @foreach($daftar_artikel->chunk(3) as $chunk)
    <div class="row">
            @foreach($chunk as $artikel)
                <div class="col-sm">
                    <h3><a href="{{ route('artikel.detail', $artikel->id) }}">{{ $artikel->judul }}</a></h3>
                    <p>{{ $artikel->isi }}</p>
                    
                </div>
            @endforeach 
    </div>
    @endforeach
@endsection