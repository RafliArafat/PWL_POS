<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PenjualanDetailModel;
use App\Models\PenjualanModel;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index(){
        $penjualan = PenjualanModel::with('penjualan_detail')->get();
        
        return response()->json($penjualan, 200);
    }
    public function store(Request $request){
        $penjualan = PenjualanModel::create([
            'user_id' => $request->user_id,
            'pembeli' => $request->pembeli,
            'penjualan_kode' => $request->penjualan_kode,
            'penjualan_tanggal' => $request->penjualan_tanggal
        ]);
        // foreach ($request->barang_id as $key => $barangId){
            PenjualanDetailModel::create([
                'penjualan_id' => $penjualan->penjualan_id,
                'barang_id' => $request->barang_id,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah
            ]);
        // }
        return response()->json($penjualan->load('penjualan_detail'), 201);
    }
    public function show(PenjualanModel $penjualan){
        $penjualans = PenjualanModel::find($penjualan);
        $penjualans->load('penjualan_detail');
        return response()->json($penjualans,200);
    }
    public function update(Request $request, PenjualanModel $penjualan){
        $penjualans = PenjualanModel::find($penjualan);
        $penjualans->update([
            'user_id' => $request->user_id,
            'pembeli' => $request->pembeli,
            'penjualan_kode' => $request->penjualan_kode,
            'penjualan_tanggal' => $request->penjualan_tanggal
        ]);
        PenjualanDetailModel::where('penjualan_id', $penjualan)->delete();
        PenjualanDetailModel::create([
            'penjualan_id' => $penjualan,
            'barang_id' => $request->barang_id,
            'jumlah' => $request->jumlah,
            'harga' => $request->total_harga,
        ]);
        $penjualans->load('penjualan_detail');
        return response()->json($penjualans,200);
    }
    public function destroy(PenjualanModel $penjualan){
        $penjualan->penjualan_detail()->delete();
        $penjualan->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Terhapus'
        ]);
    }
}
