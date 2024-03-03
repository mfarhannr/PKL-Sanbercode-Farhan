<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendidikanController extends Controller
{
    public function edit($id)
    {
        $education = DB::table('pendidikan')
        ->join('users', 'users.id', '=', 'pendidikan.user_id')
        ->select('pendidikan.*', 'users.name')
        ->where('user_id', $id)
        ->first();

        return view('pendidikan.edit', compact('education'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'tingkat_pendidikan' => 'required|string',
            'nama_sekolah' => 'required|string',
            'jurusan' => 'required|string',
            'tahun_lulus' => 'required|integer',
        ]);

        DB::table('pendidikan')->updateOrInsert(
            ['user_id' => $id],
            $data
        );

        return redirect()->route('home')->with('success', 'Informasi pendidikan berhasil diperbarui!');
    }
}
