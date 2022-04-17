<?php
class dashboard
{

    function __construct()
    {
        include "menu.php";
    }
}
$halaman_utama = new dashboard;

include "database.php";
$db = new Database();
$data_barang = $db->data_barang();

$data_distributor = $db->data_distributor();

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CV. Maju Mundur</title>
</head>

<body>

    <div class="row" style="margin: 20px;">
        <?php
        include("form_barang.php");
        ?>
        <div class="col-8" style="border: 1px solid lightgray; border-radius: 10px; padding: 10px;">
            <h3
                style="text-align: center; background-color: lightblue; border-radius: 10px; color: white; padding: 10px;">
                Data Barang</h3>
            <div class="table-responsive mt-2">
                <table class="table table-bordered table-hover table-sm">
                    <thead class="text-dark bg-light">
                        <tr class="border border-dark text-center">
                            <th>No</th>
                            <th>Foto</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga Barang</th>
                            <th>Stok Barang</th>
                            <th>Distributor</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_barang as $row) {
                        ?>
                        <tr class="border border-dark text-center">
                            <td><?php echo $no++; ?></td>
                            <td align="center">
                                <img width="50" height="50" src="dokumen/<?php echo $row['foto'] ?>">
                            </td>
                            <td><?php echo $row['kd_barang'] ?></td>
                            <td><?php echo $row['nm_barang'] ?></td>
                            <td><?php echo $row['harga'] ?></td>
                            <td><?php echo $row['stok'] ?></td>
                            <td><?php echo $row['distributor'] ?></td>
                            <td><?php echo $row['ket'] ?></td>
                            <td align="center">
                                <a class="btn btn-outline-success text-black" href="#">Edit</a>
                                <a class="btn btn-outline-success text-black" href="#">Delete</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>