<?php
    include 'koneksi.php';
    $kat    = $_POST['kategori'];
    $nama   = $_POST['nama'];
    $jual   = $_POST['beli'];
    $beli   = $_POST['jual'];
    $stok   = $_POST['stok'];

    mysql_query("INSERT INTO barang VALUES('','$kat','$nama','$jual','$beli','$stok')");

    header("location:index.php?pesan=input");
?>
