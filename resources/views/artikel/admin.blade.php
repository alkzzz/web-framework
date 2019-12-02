@extends('_backend.template')

@section('title', 'Daftar Artikel')

@section('subtitle', 'Daftar Artikel')

@section('content')
<a class="btn btn-sm btn-success" href="{{ route('artikel.tambah') }}" role="button">Tambah</a>
<p></p>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Judul Artikel</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($daftar_artikel as $key => $artikel)
        <tr>
            <td>{{ $daftar_artikel->firstItem() + $key }}</td>
            <td>{{ $artikel->judul }}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="{{ route('artikel.edit', $artikel->id) }}" role="button">Edit</a>
                <form style="display:inline-block" action="{{ route('artikel.delete', $artikel->id) }}" method="post" onclick="return confirm('Anda Yakin Ingin Menghapus Artikel?')">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $daftar_artikel->links() }}

    @endsection
