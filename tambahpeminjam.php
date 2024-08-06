<?php
require 'init.php';
if($_POST){
    if($_POST>0){

        $peminjam->data=['',$_POST['Nama'],$_POST['Alamat'],$_POST['judul_buku'],$_POST['jenis_kelamin']];
        $peminjam->save();
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
    <h2>TAMBAH DATA</h2>
    <table>
    <tr>
    
<tr>
        <td>Nama</td>
        <td>: <input type="text" name="Nama" id="Nama" requird=""></td>
        </tr>
<tr>
        <td>ALAMAT</td>
        <td>: <input type="text" name="Alamat" id="Alamat" requird="" ></td>
        </tr>

<tr>
        <td>JUDUL BUKU</td>
        <td>: <input type="text" name="judul_buku" id="judul_buku" requird=""></td>
        </tr>
<tr>
        <td>JENIS KELAMIN</td>
        <td>: <input type="text" name="jenis_kelamin" id="jenis_kelamin" requird=""></td>
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