<?php

namespace App\Http\Controllers\Carousel;
use App\Http\Controllers\Controller;
use App\Models\Master\Carousel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index()
    {
        $data = [
            "data_carousel" =>Carousel::get()
        ];
        return view("administrator.carousel.index", $data);
    }

    public function add()
    {
        $data = [
            "add_carousel" => Carousel::get()
        ];
        return view("administrator.carousel.add_carousel", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("foto")) {
            $foto = $request->file("foto")->store("carousel");
                if ($request->file("icon")) {
                    $icon = $request->file("icon")->store("carousel");
                }
        }

        Carousel::create([
            "deskripsi" => $request->deskripsi,
            "nm_link" => $request->nm_link,
            "link" => $request->link,
            "warna" => $request->warna,
            "foto" => url("/storage") . "/" . $foto,
            "icon" => url("/storage") . "/" . $icon,
        ]);
        return redirect("/admin/carousel")->with(["message" => "<script>Swal.fire('Berhasil', 'Data Berhasil di Tambahkan', 'success');</script>"]);
    }


    public function edit($id)
    {
        $data = [
            "edit" => Carousel::where("id", decrypt($id))->first()
        ];
        return view("administrator.carousel.edit", $data);
    }


    public function update(Request $request, $id)
    {
        if ($request->file("foto")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $foto = $request->file("foto")->store("carousel");
            $data = url("/storage/". $foto);
        }
        if ($request->file("icon")) {
            if ($request->iconLama) {
                Storage::delete($request->iconLama);
            }
            $iconBaru = $request->file("icon")->store("carousel");
            $icon = url("/storage/". $iconBaru);
        }
        else {
            $data = url("/storage/". $request->gambarLama);
            $icon = url("/storage/". $request->IconLama);
        }

        Carousel::where("id", decrypt($id))->update([
            "deskripsi" => $request->deskripsi,
            "nm_link" => $request->nm_link,
            "link" => $request->link,
            "warna" => $request->warna,
            "foto" => $data,
            "icon" => $icon,
        ]);

        return redirect("/admin/carousel")->with(["message" => "<script>Swal.fire('Berhasil', 'Data Berhasil di Update', 'success');</script>"]);
    }




    public function destroy($id)
    {
        Carousel::where("id", $id)->delete();
        return back()->with("message", "<script>Swal.fire('Berhasil', 'Data Berhasil di Hapus', 'success')</script>");
    }


}
