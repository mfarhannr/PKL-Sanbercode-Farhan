<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $karyawan = DB::table('karyawan')->get();

        if ($request->wantsJson()) {
            return response()->json(['data' => $karyawan], 200);
        }

        return view('karyawan.index', compact('karyawan'));
    }

    public function getKaryawanList()
    {
        $karyawan = DB::table('karyawan')->get();

        return response()->json(['data' => $karyawan], 200);
    }

    public function getKaryawanProfile()
    {
        $user = Auth::user();

        if ($user) {
            return response()->json(['data' => $user], 200);
        }

        return response()->json(['message' => 'Unauthorized'], 401);
    }

    public function getKaryawanDetail($nik)
    {
        $karyawan = DB::table('karyawan')->where('nik', $nik)->first();

        if (!$karyawan) {
            return response()->json(['message' => 'Karyawan not found'], 404);
        }

        return response()->json(['data' => $karyawan], 200);
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nik' => 'required|unique:karyawan,nik|max:20',
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nohp' => 'nullable|string|max:15',
            'email' => 'nullable|email|unique:karyawan,email',
            'jabatan' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'tanggal_masuk' => 'nullable|date',
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('karyawan_foto', 'public');
        } else {
            $fotoPath = null;
        }

        DB::table('karyawan')->insert([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto' => $fotoPath,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'status' => $request->status,
            'tanggal_masuk' => $request->tanggal_masuk,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($request->wantsJson()) {
            return response()->json(['message' => 'Data karyawan berhasil ditambahkan.'], 201);
        }

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $karyawan = DB::table('karyawan')->where('id', $id)->first();

        return view('karyawan.edit', compact('karyawan'));
    }

    public function show($id)
    {
        $karyawan = DB::table('karyawan')->where('id', $id)->first();

        if (!$karyawan) {
            return redirect()->route('karyawan.index')->with('error', 'Data karyawan tidak ditemukan.');
        }

        if (request()->wantsJson()) {
            return response()->json(['data' => $karyawan], 200);
        }

        return view('karyawan.show', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nik' => ['required', 'max:20', Rule::unique('karyawan', 'nik')->ignore($id)],
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nohp' => 'nullable|string|max:15',
            'email' => ['nullable', 'email', Rule::unique('karyawan', 'email')->ignore($id)],
            'jabatan' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'tanggal_masuk' => 'nullable|date',
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('karyawan_foto', 'public');
        } else {
            $existingFotoPath = DB::table('karyawan')->where('id', $id)->value('foto');
            $fotoPath = $existingFotoPath ? $existingFotoPath : 'default/path/to/default/photo.jpg';
        }

        // Update data karyawan dengan path foto yang baru atau yang sudah ada
        DB::table('karyawan')->where('id',
            $id
        )->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'foto' => $fotoPath,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'status' => $request->status,
            'tanggal_masuk' => $request->tanggal_masuk,
            'updated_at' => now(),
        ]);

        if ($request->wantsJson()) {
            return response()->json(['message' => 'Data karyawan berhasil diperbarui.'], 200);
        }

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('karyawan')->where('id', $id)->delete();

        if (request()->wantsJson()) {
            return response()->json(['message' => 'Data karyawan berhasil dihapus.'], 200);
        }

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil dihapus.');
    }
}
