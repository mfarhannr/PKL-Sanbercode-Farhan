<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->get();

        return view('karyawan.index', compact('karyawan'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip' => 'required|unique:karyawan,nip|max:20',
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'nullable|string',
            'foto' => 'nullable',
            'nohp' => 'nullable|string|max:15',
            'email' => 'nullable|email|unique:karyawan,email',
            'jabatan' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'tanggal_masuk' => 'nullable|date',
        ]);

        $this->storeOrUpdateKaryawan($request);

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $karyawan = DB::table('karyawan')->where('id', $id)->first();

        return view('karyawan.edit', compact('karyawan'));
    }

    public function showAndUpdate($id)
    {
        $karyawan = DB::table('karyawan')->where('id', $id)->first();

        if (!$karyawan) {
            return redirect()->route('karyawan.index')->with('error', 'Data karyawan tidak ditemukan.');
        }

        if (request()->isMethod('post')) {
            $this->storeOrUpdateKaryawan(request(), $id);

            return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil diperbarui.');
        }

        return view('karyawan.show', compact('karyawan'));
    }

    private function storeOrUpdateKaryawan(Request $request, $id = null)

     auth()->user()->update([
                'name' => $request->get('name'),
                'email' => $request->get('email')
        ]);
    {
        $data = [
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
            'status' => $request->status,
            'tanggal_masuk' => $request->tanggal_masuk,
            'updated_at' => now(),
        ];

        if ($id === null) {
            $data['created_at'] = now();
            DB::table('karyawan')->insert($data);
        } else {
            DB::table('karyawan')->where('id', $id)->update($data);
        }
    }

    public function destroy($id)
    {
        DB::table('karyawan')->where('id', $id)->delete();

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil dihapus.');
    }
}
