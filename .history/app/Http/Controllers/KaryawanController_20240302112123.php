<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->get();

        return view('karyawan.index', compact('karyawan'));
    }

    public function show($id)
    {
        $karyawan = DB::table('karyawan')->find($id);

        if (!$karyawan) {
            return response()->json(['message' => 'karyawan tidak ditemukan'], 404);
        }

        return view('karyawan.show', compact('karyawan'));
    }

    // Metode CRUD lainnya tetap sama

    // Contoh untuk metode store:
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:karyawan,nip|max:20',
            'nama' => 'required',
            'jenis_kelamin' => ['required', Rule::in(['L', 'P'])],
            // Tambahkan aturan validasi untuk kolom lainnya
        ]);

        $karyawanId = DB::table('karyawan')->insertGetId($request->all());

        $karyawan = DB::table('karyawan')->find($karyawanId);

        return response()->json(['karyawan' => $karyawan], 201);
    }
}
