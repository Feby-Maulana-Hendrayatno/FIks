<?php

namespace App\Http\Controllers\Layanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Master\Layanan;
use Illuminate\Support\Facades\Storage;


class LayananController extends Controller
{
    public function index()
    {
        $data = [
            "data_layanan" => Layanan::get()
        ];
        return view("administrator.layanan.index", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("icon_lyn")) {
            $coba = $request->file("icon_lyn")->store("layanan");
        }

        Layanan::create([
            "nama_lyn" => $request->nama_lyn,
            "deskripsi_lyn" => $request->deskripsi_lyn,
            "icon_lyn" =>  url("/storage") . "/" . $coba,
        ]);
        return redirect()->back()->with(["message" => "<script>Swal.fire('Berhasil', 'Data Layanan Berhasil di Simpan', 'success');</script>"]);
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Layanan::where("id", $request->id)->first()
        ];

        return view("administrator.layanan.edit", $data);
    }

    public function update(Request $request)
    {
        if ($request->file("icon_lyn")) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $icon_lyn = $request->file("icon_lyn")->store("layanan");
            $data = url("/storage/" . $icon_lyn);
        }else{
            $data = url('') . "/storage/" . $request->oldImage;
        }


        Layanan::where("id", $request->id)->update([
            "nama_lyn" => $request->nama_lyn,
            "deskripsi_lyn" => $request->deskripsi_lyn,
            "icon_lyn" => $data,
        ]);

        return redirect()->back()->with(["message" => "<script>Swal.fire('Berhasil', 'Data Layanan Berhasil di update', 'success');</script>"]);
    }

    public function destroy($id)
    {
        Layanan::where("id", $id)->delete();
        return back()->with("message", "<script>Swal.fire('Berhasil', 'Data Layanan Berhasil di Hapus', 'success')</script>");
    }
}
