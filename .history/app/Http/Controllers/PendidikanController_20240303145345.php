<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikans = DB::table('pendidikan')->get();
        return view('pendidikan.index', compact('pendidikans'));
    }

    public function create()
    {
        return view('pendidikan.create');
    }

    public function store()
    {
        // Lakukan validasi input jika diperlukan

        $data = [
            'user_id' => auth()->id(), // ID user yang sedang login
            'tingkat_pendidikan' => request('tingkat_pendidikan'),
            'nama_sekolah' => request('nama_sekolah'),
            'jurusan' => request('jurusan'),
            'tahun_lulus' => request('tahun_lulus'),
        ];

        // Simpan data ke database
        DB::table('pendidikan')->insert($data);

        return redirect('/pendidikan')->with('success', 'Pendidikan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pendidikan = DB::table('pendidikan')->where('id', $id)->first();
        return view('pendidikan.edit', compact('pendidikan'));
    }

    public function update($id)
    {
        // Lakukan validasi input jika diperlukan

        $updateData = [
            'tingkat_pendidikan' => request('tingkat_pendidikan'),
            'nama_sekolah' => request('nama_sekolah'),
            'jurusan' => request('jurusan'),
            'tahun_lulus' => request('tahun_lulus'),
        ];

        // Lakukan update menggunakan query builder
        DB::table('pendidikan')->where('id', $id)->update($updateData);

        return redirect('/pendidikan')->with('success', 'Pendidikan berhasil diupdate');
    }

    public function destroy($id)
    {
        // Hapus data menggunakan query builder
        DB::table('pendidikan')->where('id', $id)->delete();

        return redirect('/pendidikan')->with('success', 'Pendidikan berhasil dihapus');
    }
}
