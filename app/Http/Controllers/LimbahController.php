<?php

namespace App\Http\Controllers;

use App\Models\JumlahLimbah;
use App\Models\LimbahKeluar;
use App\Models\LimbahMasuk;
use App\Models\MasterLimbah;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

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

    function masterLimbahUpdate(Request $request, $id) : RedirectResponse
    {
        MasterLimbah::where('id', $id)->update([
            "data" => $request->data,
            "kategori" => $request->kategori,
        ]);

        return redirect('/master_limbah')->with('status', "Data berhasil diupdate!");
    }

    function masterLimbahDelete($id) : RedirectResponse
    {
        try {
            MasterLimbah::where('id', $id)->delete();
        } catch (Throwable $e) {
            report($e);
            return redirect('/master_limbah')->with('status', "Anda tidak dapat menghapus data yang telah digunakan!");
        }

        return redirect('/master_limbah')->with('status', "Data berhasil dihapus!");
    }

    function limbahMasuk() {
        $limbah_masuk = LimbahMasuk::join('master_limbahs', 'limbah_masuks.jenis_limbah_id', '=', 'master_limbahs.id')->select("limbah_masuks.*", "master_limbahs.data")->get();
        $master_limbah = MasterLimbah::where('kategori', 'Limbah')->get();

        return view("limbah.limbah-masuk", compact("limbah_masuk", "master_limbah"));
    }

    function limbahMasukAdd(Request $request): RedirectResponse
    {
        $date = $request->tanggal_masuk_limbah;
        $daysToAdd = intval($request->durasi_exp_limbah);
        $newDate = date("Y-m-d", strtotime("+{$daysToAdd} days", strtotime($date)));

        LimbahMasuk::create([
            "jenis_limbah_id" => $request->jenis_limbah_id,
            "sumber_limbah" => $request->sumber_limbah,
            "tanggal_masuk_limbah" => $request->tanggal_masuk_limbah,
            "jumlah_limbah" => $request->jumlah_limbah,
            "tanggal_exp_limbah" => $newDate,
        ]);

        $get_jumlah_limbah = JumlahLimbah::where('jenis_limbah_id', $request->jenis_limbah_id)->get();

        if ($get_jumlah_limbah == "[]") {
            JumlahLimbah::updateOrInsert(["jenis_limbah_id" => $request->jenis_limbah_id], ["jumlah_limbah" => $request->jumlah_limbah]);
        } else {
            $getdata = JumlahLimbah::where('jenis_limbah_id', $request->jenis_limbah_id)->first();
            
            $data_baru = $getdata->jumlah_limbah + $request->jumlah_limbah;

            JumlahLimbah::updateOrInsert(["jenis_limbah_id" => $request->jenis_limbah_id], ["jumlah_limbah" => $data_baru]);
        }

        $jenis_limbah_count = LimbahMasuk::select(DB::raw('jenis_limbah_id, count(*) as count'))->groupBy('jenis_limbah_id')->get();

        foreach ($jenis_limbah_count as $jlc) {
            MasterLimbah::where('id', $jlc->jenis_limbah_id)->update(['kuantitas' => $jlc->count]);
        }

        return redirect('/limbah_masuk')->with('status', "Data limbah berhasil ditambahkan!");
    }

    function limbahMasukUpdate(Request $request, $id) : RedirectResponse
    {
        $date = $request->tanggal_masuk_limbah;
        $daysToAdd = intval($request->durasi_exp_limbah);
        $newDate = date("Y-m-d", strtotime("+{$daysToAdd} days", strtotime($date)));

        $limbah_masuk = LimbahMasuk::where('id', $id)->first();
        $jumlah_limbah = JumlahLimbah::where('jenis_limbah_id', $request->jenis_limbah_id)->first();

        $limbah = $jumlah_limbah->jumlah_limbah - $limbah_masuk->jumlah_limbah;

        JumlahLimbah::updateOrInsert(["jenis_limbah_id" => $request->jenis_limbah_id], ["jumlah_limbah" => $limbah]);

        LimbahMasuk::where('id', $id)->update([
            "jenis_limbah_id" => $request->jenis_limbah_id,
            "sumber_limbah" => $request->sumber_limbah,
            "tanggal_masuk_limbah" => $request->tanggal_masuk_limbah,
            "jumlah_limbah" => $request->jumlah_limbah,
            "tanggal_exp_limbah" => $newDate,
        ]);

        $get_jumlah_limbah = JumlahLimbah::where('jenis_limbah_id', $request->jenis_limbah_id)->get();

        if ($get_jumlah_limbah == "[]") {
            JumlahLimbah::updateOrInsert(["jenis_limbah_id" => $request->jenis_limbah_id], ["jumlah_limbah" => $request->jumlah_limbah]);
        } else {
            $getdata = JumlahLimbah::where('jenis_limbah_id', $request->jenis_limbah_id)->first();
            
            $data_baru = $getdata->jumlah_limbah + $request->jumlah_limbah;

            JumlahLimbah::updateOrInsert(["jenis_limbah_id" => $request->jenis_limbah_id], ["jumlah_limbah" => $data_baru]);
        }

        $jenis_limbah_count = LimbahMasuk::select(DB::raw('jenis_limbah_id, count(*) as count'))->groupBy('jenis_limbah_id')->get();

        foreach ($jenis_limbah_count as $jlc) {
            MasterLimbah::where('id', $jlc->jenis_limbah_id)->update(['kuantitas' => $jlc->count]);
        }

        return redirect('/limbah_masuk')->with('status', "Data limbah berhasil diupdate!");
    }

    function limbahKeluar() {
        $limbah_keluar = LimbahKeluar::join('master_limbahs', 'limbah_keluars.jenis_limbah_id', '=', 'master_limbahs.id')->get();
        $master_limbah = MasterLimbah::where('kategori', 'Limbah')->get();

        return view("limbah.limbah-keluar", compact("limbah_keluar", "master_limbah"));
    }

    function limbahKeluarAdd(Request $request): RedirectResponse {

        $get_jumlah_limbah = JumlahLimbah::where('jenis_limbah_id', $request->jenis_limbah_id)->get();

        if ($get_jumlah_limbah == "[]") {
            $limbah_keluar = LimbahKeluar::create([
                "jenis_limbah_id" => $request->jenis_limbah_id,
                "tanggal_keluar_limbah" => $request->tanggal_keluar_limbah,
                "jumlah_limbah_keluar" => $request->jumlah_limbah,
                "tujuan_penyerahan" => $request->tujuan_penyerahan,
                "bukti_nomor_dokumen" => $request->bukti_nomor_dokumen,
            ]);

            JumlahLimbah::updateOrInsert(["jenis_limbah_id" => $request->jenis_limbah_id], ["jumlah_limbah" => $request->jumlah_limbah]);
        } else {
            $getdata = JumlahLimbah::where('jenis_limbah_id', $request->jenis_limbah_id)->first();
            
            $data_baru = $getdata->jumlah_limbah - $request->jumlah_limbah;

            if ($data_baru < 0) {
                return redirect('/limbah_keluar')->with('status', "Jumlah limbah tidak mencukupi!");
            }

            $limbah_keluar = LimbahKeluar::create([
                "jenis_limbah_id" => $request->jenis_limbah_id,
                "tanggal_keluar_limbah" => $request->tanggal_keluar_limbah,
                "jumlah_limbah_keluar" => $request->jumlah_limbah,
                "tujuan_penyerahan" => $request->tujuan_penyerahan,
                "bukti_nomor_dokumen" => $request->bukti_nomor_dokumen,
            ]);

            JumlahLimbah::updateOrInsert(["jenis_limbah_id" => $request->jenis_limbah_id], ["jumlah_limbah" => $data_baru]);
        }

        return redirect('/limbah_keluar')->with('status', "Data limbah berhasil ditambahkan!");
    }

    function jumlahLimbah() {
        $jumlah_limbah = JumlahLimbah::join('master_limbahs', 'master_limbahs.id', '=', 'jumlah_limbahs.jenis_limbah_id')->get();

        return view("limbah.jumlah-limbah", compact("jumlah_limbah"));
    }
}
