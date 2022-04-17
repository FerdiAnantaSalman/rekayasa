<?php
include 'database.php';
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->input_distributor(
        $_POST['kd_distributor'],
        $_POST['nm_distributor'],
        $_POST['alamat'],
        $_POST['nohp'],
        $_POST['pemilik'],
        $_POST['tipe_produk']
    );
    echo "
	<script language = 'JavaScript'>
	alert('Data Berhasil Disimpan');
	document.location='data_distributor.php';
	</script>
	";
} else {
    echo "Database anda error silahkan kembali lagi <a href = 'data_distributor.php?'>Klik Disini</a>";
}