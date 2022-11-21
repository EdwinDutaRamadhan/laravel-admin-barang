<form action="{{ (isset($action)) ? $action : "insert_proses"; }}" method="post">
    @csrf
    @foreach ($barang as $b)
    <ul>
        <input type="hidden" name="id" value="{{ $b->id }}">
        <li>
            Nama : <input type="text" name="nama" value="{{ (isset($b)) ? $b->nama : ""; }}">
        </li>
        <li>
            Jenis : <input type="text" name="jenis" value="{{ (isset($b)) ? $b->jenis : ""; }}">
        </li>
        <li>
            Harga : <input type="number" name="harga" value="{{ (isset($b)) ? $b->harga : ""; }}">
        </li>
        <li>
            Stok : <input type="number" name="stok" value="{{ (isset($b)) ? $b->stok : ""; }}">
        </li>
        <li>
            <input type="submit" value="{{ (isset($submit)) ? $submit : "tambah"; }}">
        </li>
    </ul>
    @endforeach
</form>