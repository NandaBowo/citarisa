<?php

namespace App\Http\Controllers;

use App\Models\JumlahLimbah;
use App\Models\LimbahKeluar;
use App\Models\LimbahMasuk;
use App\Models\MasterLimbah;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LimbahController extends Controller
{
    function masterLimbah() {
        $master_limbah = MasterLimbah::all();

        return view("limbah.master-limbah", compact("master_limbah"));
    }

    function masterLimbahAdd(Request $request) : RedirectResponse
    {
        $master_limbah = MasterLimbah::create([
            "data" => $request->data,
            "kategori" => $request->kategori,
        ]);

        return redirect('/master_limbah')->with('status', "Data berhasil ditambahkan!");
    }

    function limbahMasuk() {
        $limbah_masuk = LimbahMasuk::join('master_limbahs', 'limbah_masuks.sumber_limbah_id', '=', 'master_limbahs.id')->get();
        $master_limbah = MasterLimbah::all();

        return view("limbah.limbah-masuk", compact("limbah_masuk", "master_limbah"));
    }

    function limbahMasukAdd(Request $request): RedirectResponse
    {
        $date = $request->tanggal_masuk_limbah;
        $daysToAdd = intval($request->durasi_exp_limbah);
        $newDate = date("Y-m-d", strtotime("+{$daysToAdd} days", strtotime($date)));

        LimbahMasuk::create([
            "sumber_limbah_id" => $request->sumber_limbah_id,
            "jenis_limbah" => $request->jenis_limbah,
            "tanggal_masuk_limbah" => $request->tanggal_masuk_limbah,
            "jumlah_limbah" => $request->jumlah_limbah,
            "tanggal_exp_limbah" => $newDate,
        ]);

        $get_jumlah_limbah = JumlahLimbah::where('jenis_limbah', $request->jenis_limbah)->get();

        if ($get_jumlah_limbah == "[]") {
            JumlahLimbah::updateOrInsert(["jenis_limbah" => $request->jenis_limbah], ["jumlah_limbah" => $request->jumlah_limbah]);
        } else {
            $getdata = JumlahLimbah::where('jenis_limbah', $request->jenis_limbah)->first();
            
            $data_baru = $getdata->jumlah_limbah + $request->jumlah_limbah;

            JumlahLimbah::updateOrInsert(["jenis_limbah" => $request->jenis_limbah], ["jumlah_limbah" => $data_baru]);
        }

        $sumber_limbah_count = LimbahMasuk::select(DB::raw('sumber_limbah_id, count(*) as count'))->groupBy('sumber_limbah_id')->get();

        foreach ($sumber_limbah_count as $slc) {
            MasterLimbah::where('id', $slc->sumber_limbah_id)->update(['kuantitas' => $slc->count]);
        }

        return redirect('/limbah_masuk')->with('status', "Data limbah berhasil ditambahkan!");
    }

    function limbahKeluar() {
        $limbah_keluar = LimbahKeluar::all();

        return view("limbah.limbah-keluar", compact("limbah_keluar"));
    }

    function limbahKeluarAdd(Request $request): RedirectResponse {

        $get_jumlah_limbah = JumlahLimbah::where('jenis_limbah', $request->jenis_limbah)->get();

        if ($get_jumlah_limbah == "[]") {
            $limbah_keluar = LimbahKeluar::create([
                "jenis_limbah" => $request->jenis_limbah,
                "tanggal_keluar_limbah" => $request->tanggal_keluar_limbah,
                "jumlah_limbah_keluar" => $request->jumlah_limbah,
                "tujuan_penyerahan" => $request->tujuan_penyerahan,
                "bukti_nomor_dokumen" => $request->bukti_nomor_dokumen,
            ]);

            JumlahLimbah::updateOrInsert(["jenis_limbah" => $request->jenis_limbah], ["jumlah_limbah" => $request->jumlah_limbah]);
        } else {
            $getdata = JumlahLimbah::where('jenis_limbah', $request->jenis_limbah)->first();
            
            $data_baru = $getdata->jumlah_limbah - $request->jumlah_limbah;

            if ($data_baru < 0) {
                return redirect('/limbah_keluar')->with('status', "Jumlah limbah tidak mencukupi!");
            }

            $limbah_keluar = LimbahKeluar::create([
                "jenis_limbah" => $request->jenis_limbah,
                "tanggal_keluar_limbah" => $request->tanggal_keluar_limbah,
                "jumlah_limbah_keluar" => $request->jumlah_limbah,
                "tujuan_penyerahan" => $request->tujuan_penyerahan,
                "bukti_nomor_dokumen" => $request->bukti_nomor_dokumen,
            ]);

            JumlahLimbah::updateOrInsert(["jenis_limbah" => $request->jenis_limbah], ["jumlah_limbah" => $data_baru]);
        }

        return redirect('/limbah_keluar')->with('status', "Data limbah berhasil ditambahkan!");
    }

    function jumlahLimbah() {
        $jumlah_limbah = JumlahLimbah::all();

        return view("limbah.jumlah-limbah", compact("jumlah_limbah"));
    }
}
