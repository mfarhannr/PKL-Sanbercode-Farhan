<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GajiController extends Controller
{
    public function index()
    {
        $gaji = DB::table('gaji')->get();

        return view('gaji.index', compact('gaji'));
    }

    public function create()
    {
        $karyawan = DB::table('karyawan')->get();

        return view('gaji.create', compact('karyawan'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'karyawan_id' => 'required|exists:karyawan,id',
            'gaji_pokok' => 'required|numeric',
            'tunjangan' => 'required|numeric',
            'total' => 'required|numeric',
            'tanggal' => 'required|date',
        ]);

        $data = $request->except('_token');

        DB::table('gaji')->insert($data);

        return redirect()->route('gaji.index')->with('success', 'Data gaji berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $gaji = DB::table('gaji')->where('id', $id)->first();
        $karyawan = DB::table('karyawan')->get();

        return view('gaji.edit', compact('gaji', 'karyawan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'karyawan_id' => 'required|exists:karyawan,id',
            'gaji_pokok' => 'required|numeric',
            'tunjangan' => 'required|numeric',
            'total' => 'required|numeric',
            'tanggal' => 'required|date',
        ]);

        $data = $request->except('_token', '_method');

        DB::table('gaji')->where('id', $id)->update($data);

        return redirect()->route('gaji.index')->with('success', 'Data gaji berhasil diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('gaji')->where('id', $id)->delete();
        return redirect()->route('gaji.index')->with('success', 'Data gaji berhasil dihapus.');
    }
}
