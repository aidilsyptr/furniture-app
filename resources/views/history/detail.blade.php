@extends('layouts.app')
@section('content')
<div class="container">
<br/>
<br/>
<br/>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('history') }}" class="btn btn-light text-white" style="background-color: #FF7A00;"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('history') }}">Riwayat Pemesanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                </ol>
            </nav>
        </div>
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Sukses Check Out</h3>
                    <h7>Pesanan anda sudah sukses dicheck out selanjutnya silahkan kontak admin <strong>0895629109355</strong> untuk konfirmasi barang yang di check-out. Jika sudah silahkan melakukan pembayaran transfer di rekening <strong>Bank BRI Nomer Rekening : 32113-821312-123</strong> Kode Barang : <strong>{{ ($pesanan->kode) }}</strong></h7>
                </div> 
                
            </div>
            <div class="card">
                <div class="card-body mt-2">
                    <h5><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h5>
                    @if(!empty($pesanan))
                    <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ url('uploads') }}/{{ $pesanan_detail->barang->gambar }}" width="100" alt="...">
                                </td>
                                <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                <td>{{ $pesanan_detail->jumlah }} unit</td>
                                <td align="right">Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                                <td align="right">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                <td align="right"><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>

                            </tr>
                            
                            <tr>
                                <td colspan="5" align="right"><strong>Total yang harus ditransfer:</strong></td>
                                <td align="right"><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>

                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection