<style>
    thead th,
    tr {
        color: white;
    }
</style>
<center>
    <h2>DATA STOK KOPI</h2>
</center>
<br>
<table class="table table-hover">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA KOPI</th>
            <th>HARGA KOPI</th>
            <th>KODE KOPI</th>
            <th>JUMLAH STOK KOPI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql_tampil = "SELECT * FROM tb_kopi";
        $query_tampil = mysqli_query($konek, $sql_tampil);
        $no = 1;
        while ($data = mysqli_fetch_array($query_tampil, MYSQLI_BOTH)) {
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data['nama_kopi']; ?></td>
                <td class="harga"><?php echo $data['harga']; ?></td>
                <td><?php echo $data['kode_kopi']; ?></td>
                <td class="stok"><?php echo $data['stok_kopi']; ?></td>
            </tr>
            <?php
            $no++;
        }
        ?>
    </tbody>
</table>
