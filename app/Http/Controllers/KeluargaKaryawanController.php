<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KeluargaKaryawanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $keluarga = DB::table('keluarga_karyawan')
        ->join('karyawan', 'keluarga_karyawan.karyawan_id', '=', 'karyawan.id')
        ->select('keluarga_karyawan.*', 'karyawan.nama as nama_karyawan')
        ->where('keluarga_karyawan.user_id', $user->id)
            ->get();

        return view('keluarga.index', compact('keluarga'));
    }

    public function create()
    {
        $karyawan = DB::table('karyawan')->get();
        return view('keluarga.create', compact('karyawan'));
    }

    public function store(Request $request)
    {
        // Validasi input jika diperlukan

        $user = Auth::user();

        $request->validate([
            'karyawan_id' => 'nullable|exists:karyawan,id',
            'nama' => 'required',
            'hubungan' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
        ]);


        DB::table('keluarga_karyawan')->insert([
            'user_id' => $user->id,
            'karyawan_id' => $request->karyawan_id ?? null,
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
        $keluarga = DB::table('keluarga_karyawan')
        ->join('karyawan', 'keluarga_karyawan.karyawan_id', '=', 'karyawan.id')
        ->select('keluarga_karyawan.*', 'karyawan.nama as nama_karyawan')
            ->where('keluarga_karyawan.id', $id)
            ->first();

        $karyawan = DB::table('karyawan')->get();
        return view('keluarga.edit', compact('keluarga', 'karyawan'));
    }
    
    public function update(Request $request, $id)
    {
        // Validasi input jika diperlukan

        DB::table('keluarga_karyawan')->where('id', $id)->update([
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
