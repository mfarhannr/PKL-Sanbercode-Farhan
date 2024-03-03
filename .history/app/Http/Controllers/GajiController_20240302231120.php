<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index()
    {
        $gaji = DB::table('gaji')->get();
        return view('gaji.index', compact('gaji'));
    }

    public function create()
    {
        return view('gaji.create');
    }

    public function store(Request $request)
    {
        // Validasi input jika diperlukan

        DB::table('gaji')->insert([
            'nip' => $request->nip,
            'gaji_pokok' => $request->gaji_pokok,
            'tunjangan' => $request->tunjangan,
            'total_gaji' => $request->gaji_pokok + $request->tunjangan,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('gaji.index')->with('success', 'Data gaji berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $gaji = DB::table('gaji')->where('id', $id)->first();
        return view('gaji.edit', compact('gaji'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input jika diperlukan

        DB::table('gaji')->where('id', $id)->update([
            'gaji_pokok' => $request->gaji_pokok,
            'tunjangan' => $request->tunjangan,
            'total_gaji' => $request->gaji_pokok + $request->tunjangan,
            'updated_at' => now(),
        ]);

        return redirect()->route('gaji.index')->with('success', 'Data gaji berhasil diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('gaji')->where('id', $id)->delete();
        return redirect()->route('gaji.index')->with('success', 'Data gaji berhasil dihapus.');
    }
}
