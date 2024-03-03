<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $accounts = DB::table('accounts')->get();

        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('accounts.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'password', 'role']);

        DB::table('accounts')->insert($data);

        return redirect()->route('accounts.index')->with('success', 'Akun berhasil ditambahkan');
    }

    public function edit($id)
    {
        $account = DB::table('accounts')->find($id);

        return view('accounts.edit', compact('account'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['name', 'email', 'password', 'role']);

        DB::table('accounts')->where('id', $id)->update($data);

        return redirect()->route('accounts.index')->with('success', 'Akun berhasil diperbarui');
    }

    public function destroy($id)
    {
        DB::table('accounts')->where('id', $id)->delete();

        return redirect()->route('accounts.index')->with('success', 'Akun berhasil dihapus');
    }
}
