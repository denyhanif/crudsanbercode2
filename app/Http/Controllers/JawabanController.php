<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->get();
        $jawaban = DB::table('jawaban')->where('pertanyaan_id', $id)->get();
        // $pertanyaan = DB::table('pertanyaan')->lists();
        return view('jawaban', ['pertanyaan' => $pertanyaan, 'id' => $id, 'listJawaban' => $jawaban]);
    }
    public function store(Request $request)
    {
        $id = $request->id;
        $date_now = date('Y-m-d');
        DB::table('jawaban')->insert([
            'isi'     => ucwords($request->jawaban),
            'tanggal_dibuat'       => $date_now,
            'tanggal_diperbaharui'      => $date_now,
            'pertanyaan_id' => $id
        ]);
        return redirect('/jawaban/' . $id)->with('status', 'Berhasil menambah jawaban');
    }
}
