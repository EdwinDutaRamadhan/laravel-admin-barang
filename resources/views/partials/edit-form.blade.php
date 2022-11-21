<form action="{{ (isset($action)) ? $action : "insert_proses"; }}" method="post">
    @csrf
        <div class="row">
            <input type="hidden" name="id" value="{{ (isset($b)) ? $b->id : ""; }}">
        <div class="col-6 m-3">
            <input class="form-control form-control-sm" type="text" name="nama" value="{{ (isset($b)) ? $b->nama : ""; }}" placeholder="Nama Barang" required>
        </div>
        <div class="col-5 m-3">
            <input class="form-control form-control-sm" type="text" name="jenis" value="{{ (isset($b)) ? $b->jenis : ""; }}" placeholder="Jenis Barang" required>
        </div>
        <div class="col-6 m-3">
            <input class="form-control form-control-sm" type="number" name="harga" value="{{ (isset($b)) ? $b->harga : ""; }}" placeholder="Harga Barang" required>
        </div>
        <div class="col-5 m-3">
            <input class="form-control form-control-sm" type="number" name="stok" value="{{ (isset($b)) ? $b->stok : ""; }}" placeholder="Stok Barang" required>
        </div>
        <div class="col-12 m-3">
            <input class="btn btn-primary form-control form-control-sm" type="submit" value="{{ (isset($submit)) ? $submit : "tambah"; }}">
        </div>
        </div>
</form>