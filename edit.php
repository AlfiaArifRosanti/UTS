<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Form Data Diri</title>
</head>
<body class="bg">
<?php
 include 'koneksi.php';
 $id=$_GET['id'];
$sql = "SELECT * FROM tbl_alfia where id_alfia=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}

?>

<h1 class="text-center">Form Data Diri</h1>
<?php
while ($row = mysqli_fetch_array($hasil))
{
?>

    <form class="posisi" method="post" action="4.php">
        <table>
            <tr>
                <td>id_alfia :</td>
                <td><input type="text" name="id_alfia" value="<?php echo $row['id_alfia']?>"></td>
            </tr>
            <tr>
                <td>nama_alfia :</td>
                <td><input type="text" name="nama_alfia" value="<?php echo $row['nama_alfia']?>"></td>
            </tr>
            <tr>
                <td>email_alfia :</td>
                <td> <input type="text" name="email_alfia" value="<?php echo $row['email_alfia']?>"></td>
            </tr>
            <tr>
                <td>alamat_alfia :</td>
                <td> <input type="text" name="alamat_alfia" value="<?php echo $row['alamat_alfia']?>"></td>
            </tr>
        </table>
        <button class="btn btn-info" type="submit">Update</button>
    </form>
<?php }?>
</body>
</html>