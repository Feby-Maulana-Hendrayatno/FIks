<?php

namespace App\Http\Controllers\Proyek;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Proyek;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;


class ProyekController extends Controller
{
    public function index()
    {
        $data = [
            "data_produk" => Proyek::get(),
            "data_kategori" => Kategori::orderBy("nama_kategori", "DESC")->get(),
        ];
        return view("administrator.proyek.index", $data);
    }


    public function store(Request $request)
    {
        if ($request->file("foto_proyek")) {
            $coba = $request->file("foto_proyek")->store("produk");
        }

        Proyek::create([
            "nm_proyek" => $request->nm_proyek,
            "device" => $request->device,
            "foto_proyek" => url("/storage") . "/" . $coba,
        ]);
        return redirect()->back()->with(["message" => "<script>Swal.fire('Berhasil', 'Data Proyek Berhasil di Simpan', 'success');</script>"]);
    }


    public function edit(Request $request)
    {
        $data = [
            "edit" => Proyek::where("id", $request->id)->first(),
            "data_kategori" => Kategori::orderBy("nama_kategori", "DESC")->get(),
        ];

        return view("administrator.proyek.edit", $data);
    }



    public function update(Request $request)
    {
        if ($request->file("new_foto_proyek")) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $icon = $request->file("new_foto_proyek")->store("produk");
            $data = url("/storage/" . $icon);
        }else{
            $data = url('') . "/storage/" . $request->oldImage;
        }


        Proyek::where("id", $request->id)->update([
            "nm_proyek" => $request->nm_proyek,
            "device" => $request->device,
            "foto_proyek" => $data,
        ]);

        return redirect()->back()->with(["message" => "<script>Swal.fire('Berhasil', 'Data Proyek Berhasil di update', 'success');</script>"]);
    }



    public function destroy($id)
    {
        Proyek::where("id", $id)->delete();
        return back()->with("message", "<script>Swal.fire('Berhasil', 'Data Proyek Berhasil di Hapus', 'success')</script>");
    }


}
