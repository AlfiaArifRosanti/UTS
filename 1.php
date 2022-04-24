<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Data Diri</title>
</head>
<body class="bg">
<h1 class="text-center">Data Diri </h1>
<a class="btn btn-success" href="2.php">Tambah data</a>
<table style="border" class="table">
    <tr>
        <td>id_alfia</td>
        <td>nama_alfia</td>
        <td>email_alfia</td>
        <td>alamat_alfia
        <td>Action</td>
    </tr>
        <?php
        include 'koneksi.php';
        $sql="SELECT * FROM tbl_alfia";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr>
            <td><?=$row['id_alfia'];?></td>
            <td><?=$row['nama_alfia'];?></td>
            <td><?=$row['email_alfia'];?></td>
            <td><?=$row['alamat_alfia'];?></td>
            <td><a class="btn btn-outline-primary" href="edit.php?id=<?=$row['id_alfia']?>"> Edit</a> | <a class="btn btn-outline-danger" href="delete.php?id=<?=$row['id_alfia']?>"> Delete</td>
        </tr>
        <?php }
        ?> 
</table> 
</body>
</html>
