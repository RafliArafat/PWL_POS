<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable){
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now(),
        // ];
        // DB::table('m_kategoris')->insert($data);
        // return 'Insert data baru berhasil';

        // $row = DB::table('m_kategoris')->where('kategori_kode', 'SNK')->update(['kategori_nama'=> 'Camilan']);
        // return 'Update data berhasil. Jumlah data yang diupdate: '. $row . ' baris';

        // $row = DB::table('m_kategoris')->where('kategori_kode', 'SNK')->delete();
        // return 'Delete data berhasil. jumlah data yang dihapus: '. $row . ' baris';

        // $data = DB::table('m_kategoris')->get();
        // return view('kategori', ['data' => $data]);
        return $dataTable->render('kategori.index');
    }

    public function create(){
        return view('kategori.create');
    }

    public function store(Request $request){
        KategoriModel::create([
            'kategori_kode' =>$request->kodeKategori,
            'kategori_nama' =>$request->namaKategori,
        ]);
        // $validated = $request->validate([
        //     'kategori_kode' => 'required',
        //     'kategori_nama' => 'required',
        // ]);
        return redirect('/kategori');
    }

    public function edit($id){
        $kategori = KategoriModel::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }
    
    public function update(Request $request, $id){
        $kategori = KategoriModel::findOrFail($id);
        $kategori->update([
            'kategori_kode' =>$request->kodeKategori,
            'kategori_nama' =>$request->namaKategori,
        ]);
        return redirect('/kategori')->with('success', 'Kategori berhasil diperbarui');
    }
    
    public function delete($id){
        $kategori = KategoriModel::findOrFail($id);
        $kategori->delete();
        return redirect('/kategori')->with('success', 'Kategori berhasil dihapus');
    }
}
