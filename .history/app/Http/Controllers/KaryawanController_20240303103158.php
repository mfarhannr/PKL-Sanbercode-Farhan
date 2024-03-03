<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = DB::table('karyawan')->get();

        return view('karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nip' => 'required|unique:karyawan,nip|max:20',
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'nullable|string',
            'foto' => 'nullable|string|max:255',
            'nohp' => 'nullable|string|max:15',
            'email' => 'nullable|email|unique:karyawan,email',
            'jabatan' => 'nullable|string|max:255',
            'gaji' => 'nullable|numeric',
            'status_kawin' => 'nullable|string|max:255',
            'tanggal_masuk' => 'nullable|date',
        ]);

        DB::table('karyawan')->insert([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'foto' => $request->foto,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'gaji' => $request->gaji,
            'status_kawin' => $request->status_kawin,
            'tanggal_masuk' => $request->tanggal_masuk,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $karyawan = DB::table('karyawan')->where('id', $id)->first();

        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nip' => ['required', 'max:20', Rule::unique('karyawan', 'nip')->ignore($id)],
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'nullable|string',
            'foto' => 'nullable|string|max:255',
            'nohp' => 'nullable|string|max:15',
            'email' => ['nullable', 'email', Rule::unique('karyawan', 'email')->ignore($id)],
            'jabatan' => 'nullable|string|max:255',
            'gaji' => 'nullable|numeric',
            'status_kawin' => 'nullable|string|max:255',
            'tanggal_masuk' => 'nullable|date',
        ]);

        DB::table('karyawan')->where('id', $id)->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'foto' => $request->foto,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'gaji' => $request->gaji,
            'status_kawin' => $request->status_kawin,
            'tanggal_masuk' => $request->tanggal_masuk,
            'updated_at' => now(),
        ]);

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('karyawan')->where('id', $id)->delete();

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil dihapus.');
    }
}
