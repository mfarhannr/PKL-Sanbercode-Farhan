<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = DB::table('pendidikan')->get();

        return view('pendidikan.index', compact('pendidikan'));
    }

    public function create()
    {
        return view('pendidikan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'jenjang' => 'required',
            'institusi' => 'required',
            'jurusan' => 'required',
            'tahun_lulus' => 'required|numeric',
        ]);

        $data = $request->except('_token');

        DB::table('pendidikan')->insert($data);

        return redirect()->route('pendidikan.index')->with('success', 'Data pendidikan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pendidikan = DB::table('pendidikan')->where('id', $id)->first();

        return view('pendidikan.edit', compact('pendidikan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'jenjang' => 'required',
            'institusi' => 'required',
            'jurusan' => 'required',
            'tahun_lulus' => 'required|numeric',
        ]);

        $data = $request->except('_token', '_method');

        DB::table('pendidikan')->where('id', $id)->update($data);

        return redirect()->route('pendidikan.index')->with('success', 'Data pendidikan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('pendidikan')->where('id', $id)->delete();

        return redirect()->route('pendidikan.index')->with('success', 'Data pendidikan berhasil dihapus.');
    }
}
