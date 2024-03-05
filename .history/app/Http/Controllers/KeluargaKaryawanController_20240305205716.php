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
        ->select('keluarga_karyawan.*')
        ->where('keluarga_karyawan.user_id', $user->id)
            ->get();

        return view('keluarga.index', compact('keluarga'));
    }

    public function create()
    {
        return view('keluarga.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'nama' => 'required',
            'hubungan' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
        ]);

        DB::table('keluarga_karyawan')->insert([
            'user_id' => $user->id,
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
        ->select('keluarga_karyawan.*')
        ->where('keluarga_karyawan.id', $id)
            ->first();

        return view('keluarga.edit', compact('keluarga'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'hubungan' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
        ]);

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
        public function destroy($id)
{
    // Hapus terlebih dahulu baris terkait dari tabel 'keluarga_karyawan'
    DB::table('keluarga_karyawan')->where('user_id', $id)->delete();

    // Setelah itu, baru hapus baris dari tabel 'users'
    DB::table('users')->where('id', $id)->delete();

    return redirect()->route('accounts.index')->with('success', 'Akun berhasil dihapus');
}
    }
}
