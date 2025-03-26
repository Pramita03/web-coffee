<?php
//perintah untuk menampilkan data dari tb_kopi ke komponen input form
//dengan acuan kode yang didapat dari halaman kopi_tampil
    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_kopi WHERE
        kode_kopi='".$_GET['kode']."'";
        $query_cek = mysqli_query($konek, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<form action="?halaman=kopi_aksi" method="post" enctype="multipart/formdata">
    <center><h2>UBAH DATA KOPI</h2></center>
        <div class="form-group">
            <label>Kode Kopi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Kode Kopi"
            name="txtKodeKopi" value="<?php echo $data_cek['kode_kopi']; ?>" required="" readonly="">
        </div>
        <div class="form-group">
            <label>Nama Kopi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Kopi"
            name="txtNamaKopi" value="<?php echo $data_cek['nama_kopi']; ?>" required="">
        </div>
        <div class="form-group">
            <label>Harga Kopi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Harga Kopi"
            name="txtHarga" value="<?php echo $data_cek['harga']; ?>" required="">
        </div>
        <div class="form-group">
            <label>Jumlah Stok Kopi :</label>
            <input type="text" class="form-control" placeholder="Masukkan Stok Kopi"
            name="txtStokKopi" value="<?php echo $data_cek['stok_kopi']; ?>" required="">
        </div>
        <div class="form-gruop">
            <button type="submit" class="btn btn-warning btn-sm" name="btnUBAH">UBAH</button>
            <a href="?halaman=kopi_tampil" class='btn btn-dark btnsm'>BATAL</a>
        </div>
</form>