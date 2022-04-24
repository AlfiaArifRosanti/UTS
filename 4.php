<?php
include "koneksi.php";
$id = $_POST['id_alfia'];
$nama_alfia = $_POST['nama_alfia'];
$email_alfia = $_POST['email_alfia'];
$alamat_alfia = $_POST['alamat_alfia'];


$sql = "UPDATE tbl_alfia set nama_alfia = '$nama_alfia', email_alfia= '$email_alfia', alamat_alfia= '$alamat_alfia' where id_alfia=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi update Status Pengiriman gagal";
}else{
    echo "Eksekusi update Status Pengiriman berhasil<br>";
    echo "<a href='1.php'>Show data</a>";
}

?>