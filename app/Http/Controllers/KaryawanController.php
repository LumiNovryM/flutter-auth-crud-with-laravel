<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    # API ROUTE HANDLER
    public function index()
    {
        # Get Data
        $karyawan = Karyawan::paginate(5);
        return response()->json([
            'data' => $karyawan
        ]);
    }
}
