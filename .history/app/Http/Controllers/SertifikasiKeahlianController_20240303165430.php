<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SertifikasiKeahlianController extends Controller
{
    public function index()
    {
        $sertifikasiKeahlian = DB::table('sertifikasi_keahlian')
        ->where('user_id', auth()->id())
            ->get();

        return view('sertifikasi_keahlian.index', compact('sertifikasiKeahlian'));
    }

    public function create()
    {
        return view('sertifikasi_keahlian.create');
    }

    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'sertifikat' => 'required|mimes:pdf|max:2048', // Hanya menerima file PDF dengan maksimal 2MB
        ]);

        // Upload sertifikat
        $sertifikatPath = $request->file('sertifikat')->store('sertifikat');

        $data = [
            'user_id' => auth()->id(),
            'nama_sertifikasi' => request('nama_sertifikasi'),
            'lembaga_penerbit' => request('lembaga_penerbit'),
            'tanggal_terbit' => request('tanggal_terbit'),
            'tanggal_expire' => request('tanggal_expire'),
            'sertifikat_path' => $sertifikatPath,
        ];

        DB::table('sertifikasi_keahlian')->insert($data);

        return redirect('/sertifikasi-keahlian')->with('success', 'Sertifikasi Keahlian berhasil ditambahkan');
    }

    public function edit($id)
    {
        $sertifikasiKeahlian = DB::table('sertifikasi_keahlian')->where('id', $id)->first();
        return view('sertifikasi_keahlian.edit', compact('sertifikasiKeahlian'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'sertifikat' => 'nullable|mimes:pdf|max:2048', // Hanya menerima file PDF dengan maksimal 2MB
        ]);

        $updateData = [
            'nama_sertifikasi' => request('nama_sertifikasi'),
            'lembaga_penerbit' => request('lembaga_penerbit'),
            'tanggal_terbit' => request('tanggal_terbit'),
            'tanggal_expire' => request('tanggal_expire'),
        ];

        // Jika ada file sertifikat baru, upload dan update path
        if ($request->hasFile('sertifikat')) {
            $sertifikatPath = $request->file('sertifikat')->store('sertifikat');
            $updateData['sertifikat_path'] = $sertifikatPath;
        }

        DB::table('sertifikasi_keahlian')->where('id', $id)->update($updateData);

        return redirect('/sertifikasi-keahlian')->with('success', 'Sertifikasi Keahlian berhasil diupdate');
    }

    public function destroy($id)
    {
        $sertifikasiKeahlian = DB::table('sertifikasi_keahlian')->where('id', $id)->first();

        // Hapus file sertifikat dari storage jika ada
        if ($sertifikasiKeahlian->sertifikat_path) {
            Storage::delete($sertifikasiKeahlian->sertifikat_path);
        }

        DB::table('sertifikasi_keahlian')->where('id', $id)->delete();

        return redirect('/sertifikasi-keahlian')->with('success', 'Sertifikasi Keahlian berhasil dihapus');
    }
}
