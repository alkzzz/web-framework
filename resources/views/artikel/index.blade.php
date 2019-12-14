@extends('_frontend.template')

@section('title', 'Daftar Artikel')

@section('content')
<h1 class="mt-5 mb-4" style="text-decoration: underline">Daftar Artikel</h1>
@foreach($daftar_artikel->chunk(3) as $chunk)
<div class="row mt-4">
    @foreach($chunk as $artikel)
    <div class="col-sm">
        <h3><a style="color:black" href="{{ route('artikel.detail', $artikel->id) }}">{{ $artikel->judul }}</a></h3>
        <p>{{ $artikel->isi }}</p>
        <hr>
        <div style="float:right">
            <p>Diposting oleh: {{ $artikel->user->name }}</p>
        </div>
        <br>
        <hr>
        <h4><u>Daftar Komentar</u></h4>
        <ul>
            @foreach ($artikel->komentar as $komentar)
                <li>{{ $komentar->isi }}</li>
                <br>
            @endforeach
        </ul>
        <hr>
        <div style="float:left;margin-top:3%;margin-bottom:3%">
            @guest
            <p>Silahkan <a href="{{ route('login') }}">login</a> atau <a href="{{ route('register') }}">register</a>
                untuk menambahkan komentar.</p>
            @endguest
            @auth
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalKomentar">
                Tambahkan Komentar
            </button>
            <div class="modal fade" id="modalKomentar" tabindex="-1" role="dialog" aria-labelledby="modalKomentarLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalKomentarLabel">Tambah Komentar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="formKomentar" action="{{ route('komentar.simpan') }}" method="post">
                            @csrf
                            <div class="modal-body">
                            <input type="hidden" name="artikel_id" value="{{ $artikel->id }}">
                                <div class="form-group">
                                    <label for="isiKomentar">Isi Komentar</label>
                                    <textarea class="form-control" id="isiKomentar" name="isi" rows="5"
                                        required></textarea>
                                </div>
                                <p id="errorMsg"></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button onclick="form_submit()" type="button" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endauth
    </div>

</div>
@endforeach
</div>
@endforeach
<hr>
{{ $daftar_artikel->links() }}
@endsection

@section('js')
<script>
    $('#modalKomentar').on('shown.bs.modal', function () {
        $('#isiKomentar').trigger('focus')
    })

    $("#modalKomentar").on("hidden.bs.modal", function () {
        $('#errorMsg').text("");
    });

    function form_submit() {
        var komentar = document.getElementById("isiKomentar");
        if (komentar.checkValidity()) {
            $('#formKomentar').submit();
        } else {
            $('#errorMsg').text(komentar.validationMessage);
        }
    }

</script>
@endsection
