<?php
    include "config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Semua Penjualan</title>
    </head>
    <body>
        <div class="container-fluid" id= "content" >
            <div class="card">
                <div class="card-header">
                    LAPORAN SEMUA BUKU
                </div>
                <div class="card-body">
                    <div style="padding:10px;">
                        <form class="d-flex">
                            <button class="btn btn-primary me-2" type="submit">Cetak</button>
                            <button class="btn btn-success" type="submit">Export Excel</button>
                        </form>
                        <div class="table-responsive mt-3">
                            <table align="center" border="1" class="mt-4 table table-stripped table-hover bg-white" id="tableAll">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Faktur</th>
                                        <th>Judul Buku</th>
                                        <th>Jumlah Beli</th>
                                        <th>Harga Satuan</th>
                                        <th>PPN</th>
                                        <th>Diskon</th>
                                        <th>Total Harga</th>
                                        <th>Tanggal Transaksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        $sql = "SELECT * FROM tbl_penjualan INNER JOIN tbl_buku ON tbl_penjualan.id_buku = tbl_buku.id_buku";
                                        $jalan = mysqli_query($con, $sql);
                                        while($r= mysqli_fetch_array($jalan)){
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $r['id_penjualan']?></td>
                                        <td><?php echo $r['judul']?></td>
                                        <td><?php echo $r['jumlah_beli']?></td>
                                        <td><?php echo $r['harga_jual']?></td>
                                        <td><?php echo $r['ppn']?></td>
                                        <td><?php echo $r['diskon']?></td>
                                        <td><?php echo $r['total_harga']?></td>
                                        <td><?php echo $r['tanggal']?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>