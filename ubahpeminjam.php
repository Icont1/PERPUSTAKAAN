<?php
require 'init.php';
$id=$_GET['id'];
$k=$peminjam->getdataSingel($id);
if($_POST){
    if($_POST>0){
    $peminjam->data=[$_POST["id"],$_POST['Nama'],$_POST['alamat'],$_POST['judul_buku'],$_POST['jenis_kelamin']];
    $peminjam->update();
   
}else{ echo "gagal ubah data";}}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->


</head>
<body>
    <form action="ubahpeminjam.php" method="post" enctype="multipart/form-data">
<h2>UBAH DATA PEMINJAM</h2>
<table>
    <tr>
    
<tr>
     <input type="hidden" name="id" id="id" required=""value="<?= $k["id"];?>">
     
<tr>
        <td>NAMA</td>
        <td>: <input type="text" name="Nama" id="Nama" required=""value="<?= $k["Nama"];?>"></td>
        </tr>
<tr>
        <td>ALAMAT</td>
        <td>: <input type="text" name="alamat" id="alamat" required="" value="<?= $k["alamat"];?>"></td>
        </tr>
<tr>
        <td>JUDUL BUKU</td>
        <td>: <input type="text" name="judul_buku" id="judul_buku" required="" value="<?= $k["judul_buku"];?>"></td>
        </tr>
<tr>
        <td>JENIS KELAMIN</td>
        <td>: <input type="text" name="jenis_kelamin" id="jenis_kelamin" required="" value="<?= $k["jenis_kelamin"];?>"></td>
        </tr>


<tr>
        <td></td>
        <td><button type="submit">save </button>
        <button type="button"><a href="datapeminjam.php">Kembali </button></td>
        </tr>

    </tr>
</table>
        </form>
</body>
</html>