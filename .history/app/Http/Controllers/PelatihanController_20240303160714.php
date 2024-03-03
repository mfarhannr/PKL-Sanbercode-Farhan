<?php

namespace App\Http\Controllers;

// PelatihanController.php

use DB;

public function index()
{
    $pelatihan = DB::table('pelatihan')
        ->where('user_id', auth()->id())
        ->get();

    return view('pelatihan.index', compact('pelatihan'));
}

public function create()
{
    return view('pelatihan.create');
}

public function store()
{
    // Validasi input jika diperlukan

    $data = [
        'user_id' => auth()->id(),
        'nama_pelatihan' => request('nama_pelatihan'),
        'penyelenggara' => request('penyelenggara'),
        'tanggal_mulai' => request('tanggal_mulai'),
        'tanggal_selesai' => request('tanggal_selesai'),
    ];

    DB::table('pelatihan')->insert($data);

    return redirect('/pelatihan')->with('success', 'Pelatihan berhasil ditambahkan');
}

public function edit($id)
{
    $pelatihan = DB::table('pelatihan')->where('id', $id)->first();
    return view('pelatihan.edit', compact('pelatihan'));
}

public function update($id)
{
    // Validasi input jika diperlukan

    $updateData = [
        'nama_pelatihan' => request('nama_pelatihan'),
        'penyelenggara' => request('penyelenggara'),
        'tanggal_mulai' => request('tanggal_mulai'),
        'tanggal_selesai' => request('tanggal_selesai'),
    ];

    DB::table('pelatihan')->where('id', $id)->update($updateData);

    return redirect('/pelatihan')->with('success', 'Pelatihan berhasil diupdate');
}

public function destroy($id)
{
    DB::table('pelatihan')->where('id', $id)->delete();

    return redirect('/pelatihan')->with('success', 'Pelatihan berhasil dihapus');
}

