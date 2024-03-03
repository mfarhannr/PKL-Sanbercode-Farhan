<?php

// app/Http/Controllers/KeluargaKaryawanController.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeluargaKaryawanController extends Controller
{
    public function index()
    {
        $keluarga = DB::table('keluarga_karyawan')->get();
        return view('keluarga.index', compact('keluarga'));
    }

    public function create()
    {
        return view('keluarga.create');
    }

    public function store(Request $request)
    {
        // Validasi input jika diperlukan

        DB::table('keluarga_karyawan')->insert([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'hubungan' => $request->hubungan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('keluarga.index')->with('success', 'Data keluarga berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $keluarga = DB::table('keluarga_karyawan')->where('id', $id)->first();
        return view('keluarga.edit', compact('keluarga'));
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

        return redirect()->route('keluarga.index')->with('success', 'Data keluarga berhasil diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('keluarga_karyawan')->where('id', $id)->delete();
        return redirect()->route('keluarga.index')->with('success', 'Data keluarga berhasil dihapus.');
    }
}
