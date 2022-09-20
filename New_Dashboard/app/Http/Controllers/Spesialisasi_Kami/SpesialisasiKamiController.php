<?php

namespace App\Http\Controllers\Spesialisasi_Kami;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Master\SpesialisasiKami;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;





class SpesialisasiKamiController extends Controller
{
    public function index()
    {
        $data = [
            "data_spesialisasi_kami" =>SpesialisasiKami::get()
        ];

        return view("administrator.spesialisasi_kami.index", $data);

    }


    public function add()
    {
        $data = [
            "add_spesialisasi_kami" => SpesialisasiKami::get()
        ];
        return view("administrator.spesialisasi_kami.add_data", $data);
    }


    public function store(Request $request)
    {
        if ($request->file("foto")) {
            $coba = $request->file("foto")->store("spesialisasi_kami");
        }

        SpesialisasiKami::create([
            "deskripsi" => $request->deskripsi,
            "foto" => url("/storage") . "/" . $coba,
        ]);
        return redirect("/admin/spesialisasi_kami")->with(["message" => "<script>Swal.fire('Berhasil', 'Data Berhasil di Tambahkan', 'success');</script>"]);
    }

    public function edit($id)
    {
        $data = [
            "edit" => SpesialisasiKami::where("id", decrypt($id))->first()
        ];

        return view("administrator.spesialisasi_kami.edit", $data);
    }



    public function update(Request $request, $id)
    {
        if ($request->file("foto")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $foto = $request->file("foto")->store("spesialisasi_kami");
            $data = url("/storage/". $foto);
        } else {
            $data = url("/storage/". $request->gambarLama);
        }

        SpesialisasiKami::where("id", decrypt($id))->update([
            "deskripsi" => $request->deskripsi,
            "foto" => $data,
        ]);

        return redirect("/admin/spesialisasi_kami")->with(["message" => "<script>Swal.fire('Berhasil', 'Data Berhasil di Update', 'success');</script>"]);
    }




    public function destroy($id)
    {
        SpesialisasiKami::where("id", $id)->delete();
        return back()->with("message", "<script>Swal.fire('Berhasil', 'Data Berhasil di Hapus', 'success')</script>");
    }
}
