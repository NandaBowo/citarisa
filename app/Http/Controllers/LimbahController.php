<?php

namespace App\Http\Controllers;

use App\Models\LimbahMasuk;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LimbahController extends Controller
{
    function limbahMasuk() {
        $limbah_masuk = LimbahMasuk::all();

        return view("limbah.limbah-masuk", compact("limbah_masuk"));
    }

    function limbahMasukAdd(Request $request): RedirectResponse
    {
        $limbah_masuk = LimbahMasuk::create([
            "jenis_limbah" => $request->jenis_limbah,
            "tanggal_masuk_limbah" => $request->tanggal_masuk_limbah,
            "sumber_limbah" => $request->sumber_limbah,
            "jumlah_limbah" => $request->jumlah_limbah,
            "maksimal_penyimpanan_limbah" => $request->maksimal_penyimpanan,
        ]);

        return redirect('/limbah_masuk')->with('status', "Data limbah berhasil ditambahkan!");
    }

    function limbahKeluar() {
        return view("limbah.limbah-keluar");
    }
}
