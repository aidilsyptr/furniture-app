<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::paginate(20);
        return view('barang', compact('barangs'));
    }

    public function tambahbarang()
    {
        return view('tambahbarang');
    }
    

    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'gambar' => 'required|image',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'keterangan' => 'required',
        ]);

        // Simpan data barang ke dalam database
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = $file->getClientOriginalName();
            $filePath = 'uploads/' . $fileName; // Menyimpan file di folder public/uploads
        
            $file->move(public_path('uploads'), $fileName); // Pindahkan file ke folder uploads
        
            
        }

        $barang = new Barang;
        $barang->nama_barang = $request->input('nama_barang');
        $barang->gambar = $filePath;
        $barang->gambar = $fileName;
        $barang->harga = $request->input('harga');
        $barang->stok = $request->input('stok');
        $barang->keterangan = $request->input('keterangan');
        $barang->save();

        // Berikan respons atau redirect ke halaman yang sesuai
        Alert::success('Terima Kasih', 'Barang Sudah Ditambahkan');
        return redirect('/barang');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
    $barang->delete();

    Alert::error('Terhapus', 'Barang Sudah Dihapus');
    return redirect()->route('barang');
    }
}
