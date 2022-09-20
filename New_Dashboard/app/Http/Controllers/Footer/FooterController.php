<?php

namespace App\Http\Controllers\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Footer;
use Illuminate\Support\Facades\Storage;



class FooterController extends Controller
{
    public function index()
    {
        $data = [
            "footer" => Footer::get()
        ];
        return view("administrator.footer.index", $data);
    }


    public function store(Request $request)
    {
        if ($request->file("icon_footer")) {
            $coba = $request->file("icon_footer")->store("footer");
        }

        Footer::create([
            "deskripsi_footer" => $request->deskripsi_footer,
            "icon_footer" => url("/storage") . "/" . $coba,
        ]);
        return redirect()->back()->with(["message" => "<script>Swal.fire('Berhasil', 'Data Berhasil di Simpan', 'success');</script>"]);
    }



    public function edit(Request $request)
    {
        $data = [
            "edit" => Footer::where("id", $request->id)->first()
        ];

        return view("administrator.footer.edit", $data);
    }


    public function update(Request $request)
    {
        if ($request->file("icon_footer_new")) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $icon_footer = $request->file("icon_footer_new")->store("footer");
            $data = url("/storage/" . $icon_footer);
        }else{
            $data = url('') . "/storage/" . $request->oldImage;
        }


        Footer::where("id", $request->id)->update([
            "deskripsi_footer" => $request->deskripsi_footer,
            "icon_footer" => $data,
        ]);

        return redirect()->back()->with(["message" => "<script>Swal.fire('Berhasil', 'Data Berhasil di update', 'success');</script>"]);
    }


    public function destroy($id)
    {
        Footer::where("id", $id)->delete();
        return back()->with("message", "<script>Swal.fire('Berhasil', 'Data Berhasil di Hapus', 'success')</script>");
    }


}
