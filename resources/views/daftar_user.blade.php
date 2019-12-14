@extends('_backend.template')

@section('title', 'Daftar User')

@section('subtitle', 'Daftar User')

@section('content')
<table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($daftar_user as $key => $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form style="display:inline-block" action="{{ route('user.delete', $user->id) }}" method="post" onclick="return confirm('Anda Yakin Ingin Menghapus User Ini?')">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
@endsection