@extends('layouts.app')

@section('content')
<div class="container">
    @if (Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <div class="row ">
        <div class="col-md-7">
            <form action="{{route('store')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <h5>Yuk isi datanya</h5>
                        <hr class="hr">
                        <div class="form-group">
                            <label for="" class="form-label">Lokasi</label>
                            <input type="text" name="lokasi" id="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Suhu Tubuh</label>
                            <input type="number" name="suhu_tubuh" id="" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" id="" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="" class="form-label">Waktu</label>
                                <input type="time" name="waktu" id="" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h6>Riwayat hari ini</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Lokasi</th>
                                    <th>Suhu Tubuh</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->lokasi}}</td>
                                    <td>{{$item->suhu_tubuh}} &dot; C</td>
                                    <td>{{$item->tanggal}}</td>
                                    <td>{{$item->waktu}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
