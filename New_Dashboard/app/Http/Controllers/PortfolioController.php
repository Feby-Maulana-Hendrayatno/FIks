<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            "data_portfolio" => Portfolio::get()
        ];

        return view("administrator.portfolio.index", $data);
    }

    public function create()
    {
        $data = [
            "data_kategori" => Kategori::all()
        ];

        return view("administrator.portfolio.tambah", $data);
    }

    public function store(Request $request)
    {
        if ($request->file('foto')) {
            $data = $request->file('foto')->store('portfolio');
        }

        Portfolio::create([
            "foto" => url('/storage') . "/" . $data,
            "nama_portfolio" => $request->nama_portfolio,
            "id_kategori" => $request->id_kategori,
            "warna" => $request->warna
        ]);

        return redirect("/admin/portfolio");
    }

    public function edit($id)
    {
        $data = [
            "data_kategori" => Kategori::get(),
            "edit" => Portfolio::where("id", decrypt($id))->first()
        ];

        return view("administrator.portfolio.edit", $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file("foto")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $nama_foto = $request->file("foto")->store("portfolio");

            $data = url("/storage/" . $nama_foto);
        } else {
            $data = url('') . "/storage/" . $request->gambarLama;
        }

        Portfolio::where("id", decrypt($id))->update([
            "foto" => $data,
            "nama_portfolio" => $request->nama_portfolio,
            "id_kategori" => $request->id_kategori,
            "warna" => $request->warna
        ]);

        return redirect("/admin/portfolio");
    }
}
