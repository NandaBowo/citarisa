<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DetectorsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Detector;

class DetectorController extends Controller
{
    //
    public function index()
    {
        return view('layout.detector');
    }
    public function export()
    {
        return Excel::download(new DetectorsExport, 'detector.xlsx');
    }
}
