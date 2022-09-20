<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilUsersController extends Controller
{
    public function index()
    {
        $data = [
            "profil_user" => User::select("id", "nama", "email", "foto")->first()
        ];

        return view("administrator.profil_users.index", $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file("foto")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("foto")->store("users");
        } else {
            $data = $request->gambarLama;
        }

        User::where("id", decrypt($id))->update([
            "nama" => $request->nama,
            "email" => $request->email,
            "foto" => $data
        ]);

        return redirect()->back();
    }

    public function simpan(Request $request)
    {
        if ($request->ganti_password != $request->konfirmasi_password) {
            return redirect()->back();
        } else {
            User::where("id", Auth::user()->id)->update([
                "password" => bcrypt($request->ganti_password)
            ]);

            return redirect()->back();
        }
    }
}
