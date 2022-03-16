@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Catatan
            </div>
            <form action="{{route('riwayat.update', $data->id)}}" method="post">
                @method('put')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="" class="form-label">Lokasi</label>
                        <input type="text" name="lokasi" id="" class="form-control" required value="{{$data->lokasi}}">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Suhu Tubuh</label>
                        <input type="number" name="suhu_tubuh" id="" class="form-control" required value="{{$data->suhu_tubuh}}">
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="" class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" id="" class="form-control" required value="{{$data->tanggal}}">
                        </div>
                        <div class="form-group col-6">
                            <label for="" class="form-label">Waktu</label>
                            <input type="time" name="waktu" id="" class="form-control" required value="{{$data->waktu}}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Perbarui!</button>
                </div>
            </form>
        </div>
    </div>
@endsection
