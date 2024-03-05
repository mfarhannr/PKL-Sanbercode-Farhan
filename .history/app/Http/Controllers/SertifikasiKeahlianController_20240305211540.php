<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
            'sertifikat_path' => 'required|mimes:pdf|max:2048', // Hanya menerima file PDF dengan maksimal 2MB
        ]);


        // Upload sertifikat
        $sertifikatPath = $request->file('sertifikat_path')->store('sertifikat');
        $data['sertifikat_path'] = $sertifikatPath;

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
        // Validasi input
        $request->validate([
            'nama_sertifikasi' => 'required',
            'lembaga_penerbit' => 'required',
            'tanggal_terbit' => 'required|date',
            'tanggal_expire' => 'required|date|after:tanggal_terbit',
            'sertifikat' => 'nullable|mimes:pdf|max:2048', // Jika diunggah, hanya menerima file PDF dengan maksimal 2MB
        ]);

        try {
            // Ambil data sertifikasi yang akan diupdate
            $sertifikasi = DB::table('sertifikasi_keahlian')->find($id);

            if (!$sertifikasi) {
                return redirect('/sertifikasi-keahlian')->with('error', 'Sertifikasi Keahlian tidak ditemukan');
            }

            $updateData = [
                'nama_sertifikasi' => $request->input('nama_sertifikasi'),
                'lembaga_penerbit' => $request->input('lembaga_penerbit'),
                'tanggal_terbit' => $request->input('tanggal_terbit'),
                'tanggal_expire' => $request->input('tanggal_expire'),
            ];

            // Jika ada file sertifikat baru, upload dan update path
            if ($request->hasFile('sertifikat')) {
                $sertifikatPath = $request->file('sertifikat')->store('sertifikat');
                $updateData['sertifikat_path'] = $sertifikatPath;
            }

            // Lakukan update data
            DB::table('sertifikasi_keahlian')->where('id', $id)->update($updateData);

            return redirect('/sertifikasi-keahlian')->with('success', 'Sertifikasi Keahlian berhasil diupdate');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, hapus file sertifikat yang sudah diunggah
            if (isset($sertifikatPath) && Storage::exists($sertifikatPath)) {
                Storage::delete($sertifikatPath);
            }

            return redirect('/sertifikasi-keahlian')->with('error', 'Gagal melakukan update sertifikasi keahlian: ' . $e->getMessage());
        }
    }


    public function destroy($id)
    {
        $sertifikasiKeahlian = DB::table('sertifikasi_keahlian')->where('id', $id)->first();

        if ($sertifikasiKeahlian->sertifikat_path) {
            Storage::delete($sertifikasiKeahlian->sertifikat_path);
        }

        DB::table('sertifikasi_keahlian')->where('id', $id)->delete();

        return redirect('/sertifikasi-keahlian')->with('success', 'Sertifikasi Keahlian berhasil dihapus');
    }
}
