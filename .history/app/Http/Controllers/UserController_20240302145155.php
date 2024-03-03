<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use

class UserController extends Controller
{
    public function index()
    {
        $user = User::get();
        return view('admin-pages.user-managements.index', ['user' => $user]);
    }

    public function create()
    {
        return view('admin-pages.user-managements.create');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'username' => 'required|max:30|min:2',
            'email' => 'required|email|max:50|unique:users,email',
            'password' => 'required|min:5|max:30',
            'role' => 'required|max:5'

        ]);
        $user = User::create($attributes);

        // return redirect('/admin-management');
        return redirect()->to('/admin-management')->with('succes', 'Admin berhasil ditambahkan');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->to('/admin-management')->with('succes', 'Admin berhasil dihapus');
    }
}
