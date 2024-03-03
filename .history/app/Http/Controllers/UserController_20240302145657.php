<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $akun = DB::table('users')->get();

        return view('akun.index', compact('akun'));
    }

    public function create()
    {
        return view('akun.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'password', 'role']);

        DB::table('akun')->insert($data);

        return redirect()->route('akun.index')->with('success', 'Akun berhasil ditambahkan');
    }

    public function edit($id)
    {
        $account = DB::table('akun')->find($id);

        return view('akun.edit', compact('account'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['name', 'email', 'password', 'role']);

        DB::table('akun')->where('id', $id)->update($data);

        return redirect()->route('akun.index')->with('success', 'Akun berhasil diperbarui');
    }

    public function destroy($id)
    {
        DB::table('akun')->where('id', $id)->delete();

        return redirect()->route('akun.index')->with('success', 'Akun berhasil dihapus');
    }
}
