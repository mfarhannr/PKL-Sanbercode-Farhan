<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeluargaKaryawanController extends Controller
{
    public function index()
    {
        $keluarga = DB::table('keluarga_karyawan')
            ->join('karyawan', 'keluarga_karyawan.id_karyawan', '=', 'karyawan.id')
            ->select('keluarga_karyawan.*', 'karyawan.nama as nama_karyawan')
            ->get();

        return view('keluarga-karyawan.index', compact('keluarga'));
    }

    public function create()
    {
        $karyawan = DB::table('karyawan')->get();
        return view('keluarga-karyawan.create', compact('karyawan'));
    }

    public function store(Request $request)
    {
        // Validasi input jika diperlukan

        DB::table('keluarga_karyawan')->insert([
            'id_karyawan' => $request->id_karyawan,
            'nama' => $request->nama,
            'hubungan' => $request->hubungan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('keluarga-karyawan.index')->with('success', 'Data keluarga berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $keluarga = DB::table('keluarga_karyawan')->where('id', $id)->first();
        $karyawan = DB::table('karyawan')->get();
        return view('keluarga.edit', compact('keluarga', 'karyawan'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input jika diperlukan

        DB::table('keluarga_karyawan')->where('id', $id)->update([
            'id_karyawan' => $request->id_karyawan,
            'nama' => $request->nama,
            'hubungan' => $request->hubungan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
            'updated_at' => now(),
        ]);

        return redirect()->route('keluarga-karyawan.index')->with('success', 'Data keluarga berhasil diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('keluarga_karyawan')->where('id', $id)->delete();
        return redirect()->route('keluarga-karyawan.index')->with('success', 'Data keluarga berhasil dihapus.');
    }
}
