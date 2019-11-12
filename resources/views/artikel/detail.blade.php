@extends('_frontend.template')

@section('content')
    <h1 class="mt-5 mb-4">{{ $artikel->judul }}</h1>
    <h5>{{ $artikel->isi }}</h5>
@endsection