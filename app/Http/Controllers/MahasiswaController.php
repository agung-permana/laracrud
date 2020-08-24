<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('mahasiswa/index', compact('mahasiswa'));
    }

    public function tambah()
    {
        return view('mahasiswa/tambah');
    }

    public function tambahProses(Request $request)
    {
        // return $request;
        DB::table('mahasiswa')->insert([
            'npm' => $request->npm,
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('mahasiswa')->with('status', 'Data Berhasil Disimpan!');
    }
}
