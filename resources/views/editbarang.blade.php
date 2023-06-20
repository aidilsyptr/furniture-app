<div class="container">
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Barang</h4>
            </div>
            <div class="panel-body">
                <form action="{{ route('barangs.update', $barang->id) }}" method="POST">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_barang" placeholder="" value="{{ $barang->nama_barang }}">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" class="form-control" name="harga" placeholder="" value="{{ $barang->harga }}">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" class="form-control" name="stok" placeholder="" value="{{ $barang->stok }}">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" placeholder="." value="{{ $barang->keterangan }}">
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>
