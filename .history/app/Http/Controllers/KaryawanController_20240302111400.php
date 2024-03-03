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

        return response()->json(['karyawan' => $karyawan], 200);
        return view('karyawan')
    }

    public function show($id)
    {
        $karyawan = DB::table('karyawan')->find($id);

        if (!$karyawan) {
            return response()->json(['message' => 'karyawan not found'], 404);
        }

        return response()->json(['karyawan' => $karyawan], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:karyawan,nip|max:20',
            'nama' => 'required',
            'jenis_kelamin' => ['required', Rule::in(['L', 'P'])],
            // Add validation rules for other fields
        ]);

        $karyawanId = DB::table('karyawan')->insertGetId($request->all());

        $karyawan = DB::table('karyawan')->find($karyawanId);

        return response()->json(['karyawan' => $karyawan], 201);
    }

    public function update(Request $request, $id)
    {
        $karyawan = DB::table('karyawan')->find($id);

        if (!$karyawan) {
            return response()->json(['message' => 'karyawan not found'], 404);
        }

        $request->validate([
            'nip' => [
                'required',
                Rule::unique('karyawan')->ignore($id),
                'max:20',
            ],
            'nama' => 'required',
            'jenis_kelamin' => ['required', Rule::in(['L', 'P'])],
            // Add validation rules for other fields
        ]);

        DB::table('karyawan')->where('id', $id)->update($request->all());

        $karyawan = DB::table('karyawan')->find($id);

        return response()->json(['karyawan' => $karyawan], 200);
    }

    public function destroy($id)
    {
        $karyawan = DB::table('karyawan')->find($id);

        if (!$karyawan) {
            return response()->json(['message' => 'karyawan not found'], 404);
        }

        DB::table('karyawan')->delete($id);

        return response()->json(['message' => 'karyawan deleted'], 200);
    }
}
