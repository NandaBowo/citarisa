<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\SurveysExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('survey');
    }

    public function survey(Request $request) : RedirectResponse
    {
        DB::table('survey')->insert([
            'nama' => $request->nama,
            'nama_pt' => $request->nama_pt,
            'tanggal' => $request->tanggal,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'posisi' => $request->posisi,
            'lokasi_kerja' => $request->lokasi_kerja,
            'survei1' => $request->survei1,
            'survei2' => $request->survei2,
            'survei3' => $request->survei3,
            'survei4' => $request->survei4,
            'survei5' => $request->survei5,
            'survei6' => $request->survei6,
            'survei7' => $request->survei7,
            'survei8' => $request->survei8,
            'survei9' => $request->survei9,
            'survei10' => $request->survei10,
            'survei11' => $request->survei11,
            'survei12' => $request->survei12,
            'survei13' => $request->survei13,
            'survei14' => $request->survei14,
            'survei15' => $request->survei15,
            'survei16' => $request->survei16,
            'survei17' => $request->survei17,
            'survei18' => $request->survei18,
            'survei19' => $request->survei19,
            'survei20' => $request->survei20,
        ]);

        DB::table('survey2')->insert([
            'survei21' => $request->survei21,
            'survei22' => $request->survei22,
            'survei23' => $request->survei23,
            'survei24' => $request->survei24,
            'survei25' => $request->survei25,
            'survei26' => $request->survei26,
            'survei27' => $request->survei27,
            'survei28' => $request->survei28,
            'survei29' => $request->survei29,
            'survei30' => $request->survei30,
            'survei31' => $request->survei31,
            'survei32' => $request->survei32,
            'survei33' => $request->survei33,
            'survei34' => $request->survei34,
            'survei35' => $request->survei35,
            'survei36' => $request->survei36,
            'survei37' => $request->survei37,
            'survei38' => $request->survei38,
            'survei39' => $request->survei39,
            'survei40' => $request->survei40,
        ]);

        DB::table('survey3')->insert([
            'survei41' => $request->survei41,
            'survei42' => $request->survei42,
            'survei43' => $request->survei43,
            'survei44' => $request->survei44,
            'survei45' => $request->survei45,
            'survei46' => $request->survei46,
            'survei47' => $request->survei47,
            'survei48' => $request->survei48,
            'survei49' => $request->survei49,
            'survei50' => $request->survei50,
            'survei51' => $request->survei51,
            'survei52' => $request->survei52,
            'survei53' => $request->survei53,
            'survei54' => $request->survei54,
            'survei55' => $request->survei55,
            'survei56' => $request->survei56,
            'survei57' => $request->survei57,
            'survei58' => $request->survei58,
            'survei59' => $request->survei59,
            'survei60' => $request->survei60,
        ]);

        DB::table('survey4')->insert([
            'survei61' => $request->survei61,
            'survei62' => $request->survei62,
            'survei63' => $request->survei63,
            'survei64' => $request->survei64,
            'survei65' => $request->survei65,
            'survei66' => $request->survei66,
            'survei67' => $request->survei67,
            'survei68' => $request->survei68,
            'survei69' => $request->survei69,
            'survei70' => $request->survei70,
            'survei71' => $request->survei71,
            'survei72' => $request->survei72,
            'survei73' => $request->survei73,
            'survei74' => $request->survei74,
            'survei75' => $request->survei75,
            'survei76' => $request->survei76,
            'survei77' => $request->survei77,
            'survei78' => $request->survei78,
            'survei79' => $request->survei79,
            'survei80' => $request->survei80,
        ]);

        DB::table('survey5')->insert([
            'survei81' => $request->survei81,
            'survei82' => $request->survei82,
            'survei83' => $request->survei83,
            'survei84' => $request->survei84,
            'survei85' => $request->survei85,
            'survei86' => $request->survei86,
            'survei87' => $request->survei87,
            'survei88' => $request->survei88,
            'survei89' => $request->survei89,
            'survei90' => $request->survei90,
            'survei91' => $request->survei91,
        ]);

        return redirect('/')->with('status', 'Terima kasih telah mengisi survey!');
    }

    function dataSurvey() {
        $survei1 = DB::table('survey')->get();
        $survei2 = DB::table('survey2')->get();
        $survei3 = DB::table('survey3')->get();
        $survei4 = DB::table('survey4')->get();
        $survei5 = DB::table('survey5')->get();

        return view('data-survey', compact('survei1', 'survei2', 'survei3', 'survei4', 'survei5'));
    }

    function deleteSurvey($id) : RedirectResponse
    {
        DB::table('survey')->where('id', $id)->delete();
        DB::table('survey2')->where('id', $id)->delete();
        DB::table('survey3')->where('id', $id)->delete();
        DB::table('survey4')->where('id', $id)->delete();
        DB::table('survey5')->where('id', $id)->delete();
        
        return redirect('/survey')->with('status', 'Data Survey Berhasil di Hapus!');
    }
    public function export()
    {
        return Excel::download(new SurveysExport, 'surveys.xlsx');
    }
}
