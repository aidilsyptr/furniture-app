@extends('layouts.app')

@section('content')
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Barang</h4>
            </div>
            <div class="panel-body">
                <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered">
                    <td>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang:</label>
                        <input type="text" name="nama_barang" id="nama_barang" required>
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        <label for="gambar">Gambar Barang:</label>
                        <input type="file" name="gambar" id="gambar" required>
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        <label for="harga">Harga Barang:</label>
                        <input type="number" name="harga" id="harga" required>
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        <label for="stok">Stok Barang:</label>
                        <input type="number" name="stok" id="stok" required>
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        <label for="keterangan">Keterangan:</label>
                        <textarea name="keterangan" id="keterangan" required></textarea>
                    </div>
                    </td>
                    <div >
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                    </div>
                </table>
                </form>
            </div>
        </div>
    </div>
</div>