<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('pertanyaan', ['pertanyaan' => $pertanyaan]);
    }
    function create()
    {
        return view('createpertanyaan');
    }
    public function store(Request $request)
    {
        $date_now = date('Y-m-d');
        echo $date_now;
        DB::table('pertanyaan')->insert([
            'judul'     => ucwords($request->judul),
            'isi'    =>  ucfirst($request->isi),
            'tanggal_dibuat'       => $date_now,
            'tanggal_diperbaharui'      => $date_now
        ]);
        return redirect('/pertanyaan')->with('st atus', 'Pertanyaan berhasil ditambahkan');
    }
}
