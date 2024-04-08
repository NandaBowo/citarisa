<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\HydrantsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Hydra;

class HydraController extends Controller
{
    //
    public function index()
    {
        return view('layout.hydra');
    }
    public function export()
    {
        return Excel::download(new HydrantsExport, 'hydrant.xlsx');
    }
}

