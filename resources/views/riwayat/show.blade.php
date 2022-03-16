@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Detail Catatan
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="" class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" id="" class="form-control" required value="{{$data->lokasi}}" readonly>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Suhu Tubuh</label>
                    <input type="text" name="suhu_tubuh" id="" class="form-control" required value="{{$data->suhu_tubuh}} C" readonly>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" id="" class="form-control" required value="{{$data->tanggal}}" readonly>
                    </div>
                    <div class="form-group col-6">
                        <label for="" class="form-label">Waktu</label>
                        <input type="time" name="waktu" id="" class="form-control" required value="{{$data->waktu}}" readonly>
                    </div>
                </div>
            </div>
            <div class="card-footer">

                    <a href="{{route('riwayat.edit', $data->id)}}" class="btn btn-warning">Edit</a>

                    <a href="" class="btn btn-danger" onclick="event.preventDefault(); confirm('Yakin hapus data ini?');
                    document.getElementById('delete-form').submit();">Hapus</a>
                    <form action="{{route('riwayat.destroy', $data->id)}}" id="delete-form" method="post" class="col-1">
                        @method('delete')
                        @csrf

                    </form>


            </div>
        </div>
    </div>
@endsection
