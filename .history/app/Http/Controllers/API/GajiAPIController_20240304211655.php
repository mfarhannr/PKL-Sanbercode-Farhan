<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GajiAPIController extends Controller
{
    public function index()
    {
        $gaji = DB::table('gaji')
            ->join('karyawan', 'gaji.karyawan_id', '=', 'karyawan.id')
            ->select('gaji.*', 'karyawan.nama as nama_karyawan')
            ->get();

        return response()->json(['gaji' => $gaji], 200);
    }

    public function create()
    {
        $karyawan = DB::table('karyawan')->get();
        return response()->json(['karyawan' => $karyawan], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'karyawan_id' => 'required|exists:karyawan,id',
            'gaji_pokok' => 'required|numeric',
            'tunjangan' => 'required|numeric',
            'tanggal' => 'required|date',
        ]);

        $total_gaji = $request->gaji_pokok + $request->tunjangan;

        DB::table('gaji')->insert([
            'karyawan_id' => $request->karyawan_id,
            'gaji_pokok' => $request->gaji_pokok,
            'tunjangan' => $request->tunjangan,
            'total_gaji' => $total_gaji,
            'tanggal' => $request->tanggal,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['message' => 'Data gaji berhasil ditambahkan.'], 201);
    }

    public function edit($id)
    {
        $gaji = DB::table('gaji')->where('id', $id)->first();
        $karyawan = DB::table('karyawan')->get();
        return response()->json(['gaji' => $gaji, 'karyawan' => $karyawan], 200);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'karyawan_id' => 'required|exists:karyawan,id',
            'gaji_pokok' => 'required|numeric',
            'tunjangan' => 'required|numeric',
            'tanggal' => 'required|date',
        ]);

        $total_gaji = $request->gaji_pokok + $request->tunjangan;

        DB::table('gaji')->where('id', $id)->update([
            'karyawan_id' => $request->karyawan_id,
            'gaji_pokok' => $request->gaji_pokok,
            'tunjangan' => $request->tunjangan,
            'total_gaji' => $total_gaji,
            'tanggal' => $request->tanggal,
            'updated_at' => now(),
        ]);

        return response()->json(['message' => 'Data gaji berhasil diperbarui.'], 200);
    }

    public function destroy($id)
    {
        DB::table('gaji')->where('id', $id)->delete();
        return response()->json(['message' => 'Data gaji berhasil dihapus.'], 200);
    }
}
