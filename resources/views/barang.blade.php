@extends('layouts.app')

@section('content')

<div class="container">
<br/>
<br/>
<br/>
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Barang</h4>
        </div>
        
        <div class="panel-body">
            <a href="{{ url('tambahbarang') }}" class="btn btn-warning">Tambah Barang</a>
            <br/>
            <br/>
            <table class="table table-bordered table-striped">
                <tr>
                    <td>Nama Barang</td>
                    <td>Gambar</td>
                    <td>stok</td>
                    <td>Keterangan</td>
                </tr>
                @foreach($barangs as $item)
                <tr>
                    <td>{{ $item->nama_barang }}</td>
                    <td>
                        <img src="{{ url('uploads') }}/{{ $item->gambar }}" class="rounded  d-block" width="200" alt="">
                    </td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <form action="{{ route('barangs.destroy', $item->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
