<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MutasiController extends Controller
{
    public function index()
    {
        return response()->json(Mutasi::with('user', 'barang')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'barang_id' => 'required|exists:barangs,id',
            'tanggal' => 'required|date',
            'jenis_mutasi' => 'required|in:masuk,keluar',
            'jumlah' => 'required|integer',
        ]);

        $mutasi = Mutasi::create($request->all());
        return response()->json($mutasi, 201);
    }

    public function showMutasiBarang($barangId)
    {
        $mutasi = Mutasi::where('barang_id', $barangId)->with('user')->get();
        return response()->json($mutasi);
    }

    public function showMutasiUser($userId)
    {
        $mutasi = Mutasi::where('user_id', $userId)->with('barang')->get();
        return response()->json($mutasi);
    }
}

