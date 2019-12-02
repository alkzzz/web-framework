@extends('_frontend.template')

@section('title', $artikel->judul)

@section('content')
    <h1 class="mt-5 mb-4">{{ $artikel->judul }}</h1>
    <h5>{{ $artikel->isi }}</h5>
@endsection