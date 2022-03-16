@extends('layouts.app')

@section('content')
    <div class="container">

        @if (Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                Riwayat Perjalanan
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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->lokasi}}</td>
                                    <td>{{$item->suhu_tubuh}}</td>
                                    <td>{{$item->created_at->format('d M Y')}}</td>
                                    <td>{{$item->waktu}}</td>
                                    <td>
                                        <a href="{{route('riwayat.show', $item->id)}}" class="btn btn-primary">Lihat</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
