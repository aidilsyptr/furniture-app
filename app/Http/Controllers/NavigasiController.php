<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class NavigasiController extends Controller
{
    public function barang()
    {
        $barangs = Barang::paginate(20);
        return view('barang', compact('barangs'));
    }
    public function pelanggan()
    {
        $barangs = Barang::paginate(20);
        return view('pelanggan', compact('barangs'));
    }
    public function create(){
        return view('tambah_barang');
    }
    public function edit($id){
        $barangs = Barang::find($id);
        return view('editbarang',compact('barangs'));
    }
    public function update(Request $request, $id) 
    {
        $data =$request->only(['nama_barang','stok','keterangan']);

        $barangs =Barang::find($id);
        $barangs->update($data);

        return redirect()->route('barang')->with('Data barang berhasil diperbarui');
    }
    
   
}
