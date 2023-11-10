<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PegawaiController extends Controller
{
    public function index() :View
    {

        return view('pegawai', [
            'pegawai' => DB::table('pegawai')->paginate(10)]);
    }

    public function cari(Request $request){
        $cari = $request->cari;

        $pegawai = DB::table('pegawai')
        ->where('nama','like',"%".$cari."%")
        ->paginate(10);

        return view('pegawai', ['pegawai'=>$pegawai]);
    }
}
