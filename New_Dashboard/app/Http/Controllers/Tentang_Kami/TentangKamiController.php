<?php

namespace App\Http\Controllers\Tentang_Kami;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Master\TentangKami;


class TentangKamiController extends Controller
{
    public function index()
    {
        $data = [
            "data_tentang_kami" => TentangKami::get()
        ];
        return view("administrator.tentang_kami.index", $data);
    }

    public function store(Request $request)
    {
        TentangKami::create([
            "tentang_km" => $request->tentang_km,
        ]);
        return redirect()->back()->with(["message" => "<script>Swal.fire('Berhasil', 'Data Tentang Kami Berhasil di Tambahkan', 'success');</script>"]);
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => TentangKami::where("id", $request->id)->first()
        ];

        return view("administrator.tentang_kami.edit", $data);
    }

    public function update(Request $request)
    {
        TentangKami::where("id", $request->id)->update([
            "tentang_km" => $request->tentang_km
        ]);

        return redirect()->back()->with(["message" => "<script>Swal.fire('Berhasil', 'Data Tentang Kami Berhasil di update', 'success');</script>"]);
    }

    public function destroy($id)
    {
        TentangKami::where("id", $id)->delete();
        return back()->with("message", "<script>Swal.fire('Berhasil', 'Data Tentang Kami Berhasil di Hapus', 'success')</script>");
    }
}
