<?php
    $konek = mysqli_connect("sql307.infinityfree.com","if0_34530563","SVERhwExtvD","if0_34530563_db_kopi");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shirnk-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Laporan Stok Coffee Shop Inventory</title>
        <link rel="icon" type="masthead-avatar mb-5" href="assets/img/logokopi.png" />
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min/css" rel="stylesheet">
    </head>
    <body>
        <center>
            <br>
            <h2>LAPORAN STOK KOPI</h2>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>KODE KOPI</th>
                        <th>NAMA KOPI</th>
                        <th>HARGA KOPI</th>
                        <th>JUMLAH STOK KOPI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql_tampil = "SELECT * FROM tb_kopi";
                        $query_tampil = mysqli_query($konek, $sql_tampil);
                        $no=1;
                        while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['kode_kopi']; ?></td>
                            <td><?php echo $data['nama_kopi']; ?></td>
                            <td><?php echo $data['harga']; ?></td>
                            <td><?php echo $data['stok_kopi']; ?></td>
                        </tr>
                    <?php
                        $no++;
                        }
                    ?>
                    <tbody>
            </table>
        </center>
            <br>
            <div style="text-align: left;">
                <b>Jepara, <?php echo date("d-m-y"); ?></b>
                <br><br><br><br>
                <u>Admin Coffee Shop Inventory</u>
            </div>
                <script>
                    //perintah untuk cetak di browser
                    window.print();
                </script>
    </body>
</html>