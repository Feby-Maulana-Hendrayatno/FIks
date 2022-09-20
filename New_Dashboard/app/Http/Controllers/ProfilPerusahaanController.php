<?php

namespace App\Http\Controllers;

use App\Models\ProfilPerusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilPerusahaanController extends Controller
{
    public function index()
    {
        $data = [
            "profil_perusahaan" => ProfilPerusahaan::select("id", "logo", "singkatan", "nama", "alamat", "no_hp")->first()
        ];

        return view("administrator.profil_perusahaan.index", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("logo")) {
            $data = $request->file("logo")->store("profil_perusahaan");
        }

        ProfilPerusahaan::create([
            "logo" => url("/storage") . "/" . $data,
            "singkatan" => $request->singkatan,
            "nama" => $request->nama,
            "alamat" => $request->alamat,
            "no_hp" => $request->no_hp
        ]);

        return redirect("/admin/profil_perusahaan");
    }

    public function update(Request $request, $id)
    {
        if ($request->file("logo")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $nama_logo = $request->file("logo")->store("profil_perusahaan");

            $data = url("/storage/" . $nama_logo);
        } else {
            $data = url('') . "/storage/" . $request->gambarLama;
        }

        ProfilPerusahaan::where("id", decrypt($id))->update([
            "logo" => $data,
            "singkatan" => $request->singkatan,
            "nama" => $request->nama,
            "alamat" => $request->alamat,
            "no_hp" => $request->no_hp
        ]);

        return redirect("/admin/profil_perusahaan");
    }

    public function destroy($id)
    {
        ProfilPerusahaan::where("id", $id)->delete();

        return back();
    }
}
