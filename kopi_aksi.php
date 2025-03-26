<?php
if (isset ($_POST['btnSIMPAN'])){
    //mulai proses simpan
    $sql_simpan = "INSERT INTO tb_kopi
    (kode_kopi,nama_kopi,harga,stok_kopi) VALUES (
    '".$_POST['txtKodeKopi']."',
    '".$_POST['txtNamaKopi']."',
    '".$_POST['txtHarga']."',
    '".$_POST['txtStokKopi']."')";
    $query_simpan = mysqli_query($konek, $sql_simpan);
    if ($query_simpan) {
        echo "<script>alert('Simpan Berhasil')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=kopi_tampil'>";
    }else{
        echo "<script>alert('Simpan Gagal')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=kopi_tampil'>";
    }
    //selesai proses simpan
    }else if (isset ($_POST['btnUBAH'])){
        //mulasi proses ubah
        $sql_ubah = "UPDATE tb_kopi set
        nama_kopi='".$_POST['txtNamaKopi']."',
        stok_kopi='".$_POST['txtStokKopi']."',
        harga='".$_POST['txtHarga']."'
        WHERE kode_kopi='".$_POST['txtKodeKopi']."'";
        $query_ubah = mysqli_query($konek, $sql_ubah);
        if ($query_ubah) {
            echo "<script>alert('Ubah Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=kopi_tampil'>";
        }else{
            echo "<script>alert('Ubah Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=kopi_tampil'>";
        }
        //selesai proses ubah
    }else{
        //mulai proses hapus
        if(isset($_GET['kode'])){
            $sql_hapus = "DELETE FROM tb_kopi WHERE
            kode_kopi='".$_GET['kode']."'";
            $query_hapus = mysqli_query($konek, $sql_hapus);
            if ($query_hapus) {
                echo "<script>alert('Hapus Berhasil')</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=kopi_tampil'>";
            }else{
                echo "<script>alert('Hapus Gagal')</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=kopi_tampil'>";
        }
    }
    //selesai proses hapus
    }
    ?>