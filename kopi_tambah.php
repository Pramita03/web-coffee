<form action="?halaman=kopi_aksi" method="post" enctype="multipart/formdata">
<center><h2>TAMBAH DATA KOPI</h2></center>
    <div class="form-group">
        <label>Kode Kopi :</label>
        <input type="text" class="form-control" placeholder="Masukkan Kode Kopi" name="txtKodeKopi" required="">
    </div>
    <div class="form-group">
        <label>Nama Kopi :</label>
        <input type="text" class="form-control" placeholder="Masukkan Nama Kopi" name="txtNamaKopi" required="">
    </div>
    <div class="form-group">
        <label>Harga Kopi :</label>
        <input type="text" class="form-control" placeholder="Masukkan Harga Kopi" name="txtHarga" required="">
    </div>
    <div class="form-group">
        <label>Jumlah Stok Kopi :</label>
        <input type="text" class="form-control" placeholder="Masukkan Jumlah Stok Kopi" name="txtStokKopi" required="">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm" name="btnSIMPAN">SIMPAN</button>
        <a href="?halaman=kopi_tampil" class='btn btn-dark btnsm'>BATAL</a>
    </div>
</form>
