<?php
require 'init.php';
if($_POST){
    if($_POST>0){

        $karyawan->data=['',$_POST['namakaryawan'],$_POST['alamat'],$_POST['jeniskelamin']];
        $karyawan->save();
        echo "sukses tambah data";}else{ 
            echo"gagal tambah data";}
        }
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
    <form action="" method="post" enctype="multipart/form-data">
    <h2>TAMBAH DATA KARYAWAN</h2>
    <table>
    <tr>
    
<tr>
        </tr>
<tr>
        <td>Nama</td>
        <td>: <input type="text" name="namakaryawan" id="karyawan" requird="" ></td>
        </tr>
<tr>
        <td>Alamat</td>
        <td>: <input type="text" name="alamat" id="alamat" requird="" ></td>
        </tr>


        <td>JENIS KELAMIN</td>
        <td>: <input type="text" name="jeniskelamin" id="jeniskelamin" requird=""></td>
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