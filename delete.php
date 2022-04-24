<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM tbl_alfia WHERE id_alfia=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete Data Diri gagal";
}else{
    echo "Status Data Diri di delete<br>";
    echo "<a href='1.php'> lihat data</a>";
}

?>
