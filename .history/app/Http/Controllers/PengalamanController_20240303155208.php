<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    public function index()
    {
        $pengalaman = DB::table('pengalaman')
            ->where('user_id', auth()->id())
            ->get();

        return view('pengalaman.index', compact('pengalaman'));
    }

    public function create()
    {
        return view('pengalaman.create');
    }

    public function store(Request $request)
    {
        // Validasi input jika diperlukan

        $data = [
            'user_id' => auth()->id(),
            'posisi' => $request->input('posisi'),
            'perusahaan' => $request->input('perusahaan'),
            'deskripsi' => $request->input('deskripsi'),
            'tanggal_mulai' => $request->input('tanggal_mulai'),
            'tanggal_selesai' => $request->input('tanggal_selesai'),
        ];

        DB::table('pengalaman')->insert($data);

        return redirect('/pengalaman')->with('success', 'Pengalaman berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pengalaman = DB::table('pengalaman')->where('id', $id)->first();
        return view('pengalaman.edit', compact('pengalaman'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input jika diperlukan

        $updateData = [
            'posisi' => $request->input('posisi'),
            'perusahaan' => $request->input('perusahaan'),
            'deskripsi' => $request->input('deskripsi'),
            'tanggal_mulai' => $request->input('tanggal_mulai'),
            'tanggal_selesai' => $request->input('tanggal_selesai'),
        ];

        DB::table('pengalaman')->where('id', $id)->update($updateData);

        return redirect('/pengalaman')->with('success', 'Pengalaman berhasil diupdate');
    }

    public function destroy($id)
    {
        DB::table('pengalaman')->where('id', $id)->delete();

        return redirect('/pengalaman')->with('success', 'Pengalaman berhasil dihapus');
    }
}

