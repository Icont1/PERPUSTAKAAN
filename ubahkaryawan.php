<?php
require 'init.php';
$id=$_GET['id'];
$k=$karyawan->getdataSingel($id);
if($_POST){
    if($_POST>0){
    $karyawan->data=[$_POST['id'],$_POST['namakaryawan'],$_POST['alamat'],$_POST[''],$_POST['jeniskelamin']];
    $karyawan->update();
    echo"
    <script>
    alert('data berhasil di ubah!');
    document.location.href='datakaryawan.php';
    </script>";
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
    <form action="ubahkaryawan.php" method="post" enctype="multipart/form-data">
<h2>UBAH DATA</h2>
<table>
    <tr>
        <input type="hidden" name="id" id="id" required=""value="<?= $k["id"];?>">
        <tr>
        <td>ID</td>
        <td>: <input type="text" name="id" id="id" required=""value="<?= $k["id"];?>"></td>
        </tr>
<tr>
        <td>Nama Karyawan</td>
        <td>: <input type="text" name="namakaryawan" id="namakaryawan" required="" value="<?= $k["namakaryawan"];?>"></td>
        </tr>
<tr>
        <td>Alamat</td>
        <td>: <input type="text" name="alamat" id="alamat" required=""value="<?= $k["alamat"];?>"></td>
        </tr>

<tr>
        <td>Jenis Kelamin</td>
        <td>: <input type="text" name="jeniskelamin" id="jeniskelamin" required=""value="<?= $k["jeniskelamin"];?>"></td>
        </tr>
<tr>
        <td></td>
        <td><button type="submit">save </button>
        <button type="button"><a href="datakaryawan.php">Kembali </button></td>
        </tr>

    </tr>
</table>
        </form>
</body>
</html>