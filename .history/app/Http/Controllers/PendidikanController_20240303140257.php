<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendidikanController extends Controller
{
    public function edit($id)
    {
        $education = DB::table('educations')->where('user_id', $id)->first();

        return view('educations.edit', compact('education'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'pendidikan' => 'required|string',
        ]);

        DB::table('educations')->updateOrInsert(
            ['user_id' => $id],
            $data
        );

        return redirect()->route('home')->with('success', 'Pendidikan berhasil diperbarui!');
    }
}
