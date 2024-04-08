<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\AparsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Apar;

class AparController extends Controller
{
    //
    public function index()
    {
        return view('layout.apar');
    }
    public function export()
    {
        return Excel::download(new AparsExport, 'apars.xlsx');
    }
}
