<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $accounts = DB::table('users')->get();

        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('accounts.create');
    }

    

    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'password', 'role']);

        DB::table('users')->insert($data);

        return redirect()->route('accounts.index')->with('success', 'Akun berhasil ditambahkan');
    }

    public function edit($id)
    {
        $account = DB::table('users')->find($id);

        return view('accounts.edit', compact('account'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['name', 'email', 'password', 'role']);

        DB::table('users')->where('id', $id)->update($data);

        return redirect()->route('accounts.index')->with('success', 'Akun berhasil diperbarui');
    }

    public function destroy($id)
    {
        DB::table('keluarga_karyawan')->where('user_id', $id)->delete();

        // Setelah itu, baru hapus baris dari tabel 'users'
        DB::table('users')->where('id', $id)->delete();

        return redirect()->route('accounts.index')->with('success', 'Akun berhasil dihapus');
    }
}
