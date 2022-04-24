<?php
include "koneksi.php";

$nama_alfia = $_POST['nama_alfia'];
$email_alfia = $_POST['email_alfia'];
$alamat_alfia = $_POST['alamat_alfia'];

$sql = "INSERT INTO tbl_alfia VALUES(null,'$nama_alfia','$email_alfia','$alamat_alfia')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi tambah Data Diri gagal";
}else{
    echo "Eksekusi tambah Data Diri berhasil<br>";
    echo "<a href='1.php'>lihat data</a>";
}

?>