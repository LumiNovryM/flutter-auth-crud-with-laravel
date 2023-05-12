<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan = Karyawan::paginate(10);
        return response()->json([
            'data' => $karyawan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $karyawan = Karyawan::create([
            'nama_lengkap' => $request->nama_lengkap,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'gaji' => $request->gaji,
        ]);
        return response()->json([
            'data' => $karyawan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        return response()->json([
            'data' => $karyawan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $karyawan->nama_lengkap = $request->nama_lengkap;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->email = $request->email;
        $karyawan->nomor_telepon = $request->nomor_telepon;
        $karyawan->gaji = $request->gaji;
        $karyawan->save();
        return response()->json([
            'data' => $karyawan
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return response()->json([
            'message' => 'Data Karyawan Has Been Deleted'
        ], 204);
    }
}
