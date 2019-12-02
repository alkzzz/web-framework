@extends('_backend.template')

@section('title', 'Tambah Artikel')

@section('subtitle', 'Tambah Artikel')

@section('content')
<form method="post" action="{{ route('artikel.update', $artikel->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="judul">Judul Artikel</label>
    <input type="text" name="judul" class="form-control" id="judul" value="{{ $artikel->judul }}" autofocus required>
    </div>
    <div class="form-group">
        <label for="isi">Isi Artikel</label>
        <textarea name="isi" class="form-control" id="isi" rows="8" required>{{ $artikel->isi }}</textarea>
      </div>
      <input type="submit" value="Update" class="btn btn-primary">
  </form>
@endsection