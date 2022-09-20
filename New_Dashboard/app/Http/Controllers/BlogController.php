<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            "data_blog" => Blog::get()
        ];

        return view("administrator.blog.index", $data);
    }

    public function create()
    {
        return view("administrator.blog.tambah");
    }

    public function store(Request $request)
    {
        if ($request->file("foto")) {
            $data = $request->file("foto")->store("blog");
        }

        Blog::create([
            "foto" => url('/storage') . "/" . $data,
            "judul" => $request->judul,
            "slug" => Str::slug($request->judul),
            "deskripsi" => $request->deskripsi
        ]);

        return redirect("/admin/blog")->with(["message" => "<script>Swal.fire('Berhasil', 'Data Berhasil di Tambahkan', 'success');</script>"]);
    }

    public function edit($id)
    {
        $data = [
            "edit" => Blog::where("id", decrypt($id))->first()
        ];

        return view("administrator.blog.edit", $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file("foto")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $nama_foto = $request->file("foto")->store("blog");

            $data = url("/storage/" . $nama_foto);
        } else {
            $data = url('') . "/storage/" . $request->gambarLama;
        }

        Blog::where("id", decrypt($id))->update([
            "foto" => $data,
            "judul" => $request->judul,
            "slug" => Str::slug($request->judul),
            "deskripsi" => $request->deskripsi
        ]);

        return redirect("/admin/blog")->with(["message" => "<script>Swal.fire('Berhasil', 'Data Berhasil di Simpan', 'success');</script>"]);
    }

    public function destroy($id)
    {
        Blog::where("id", $id)->delete();

        return back()->with(["message" => "<script>Swal.fire('Berhasil', 'Data Berhasil di di Hapus', 'success');</script>"]);
    }
}
