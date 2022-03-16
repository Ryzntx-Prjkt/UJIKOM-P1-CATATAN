<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catatan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id_user = Auth::user()->id;
        $todayDate = Carbon::now()->format('Y-m-d');
        $data = Catatan::where('id_user', '=', $id_user)->whereDate('tanggal', '=', $todayDate)->get();
        return view('home', ['data' => $data]);
    }

    public function store(Request $request){
        $data = $request->all();
        $id_user = Auth::user()->id;
        Catatan::create([
            'lokasi' => $data['lokasi'],
            'suhu_tubuh' => $data['suhu_tubuh'],
            'tanggal' => $data['tanggal'],
            'waktu' => $data['waktu'],
            'id_user' => $id_user,

        ]);
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }
}
