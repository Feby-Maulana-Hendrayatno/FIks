<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        $data = [
            "data_user" => User::all()
        ];

        return view("administrator.users.index", $data);
    }

    public function store(Request $request)
    {
        $jumlah_data = User::get();

        if (count($jumlah_data) < 0) {
            $created_by = 0;
        } else {
            $created_by = Auth::user()->id;
        }

        User::create([
            "nama" => $request->nama,
            "email" => $request->email,
            "password" => bcrypt("administrator"),
            "created_by" => $created_by
        ]);

        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => User::where("id", $request->id)->first()
        ];

        return view("users.edit", $data);
    }

    public function destroy($id)
    {
        User::where("id", $id)->delete();

        return redirect()->back();
    }
}
