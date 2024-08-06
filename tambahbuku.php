<?php
require 'init.php';
if($_POST){
    if($_POST>0){

        $buku->data=['',$_POST['id_buku'],$_POST['judul_buku'],$_POST['stok'],$_POST['penerbit'],$_POST['tahun_terbit']];
        $buku->save();
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
        <td>ID BUKU</td>
        <td>: <input type="text" name="id_buku" id="id_buku" requird=""></td>
        </tr>
<tr>
        <td>JUDUL BUKU</td>
        <td>: <input type="text" name="judul_buku" id="judul_buku" requird="" ></td>
        </tr>
<tr>
        <td>STOK</td>
        <td>: <input type="text" name="stok" id="stok" requird="" ></td>
        </tr>
<tr>
        <td>PENERBIT</td>
        <td>: <input type="text" name="penerbit" id="penerbit" requird=""></td>
        </tr>
<tr>
        <td>TAHUN TERBIT</td>
        <td>: <input type="text" name="tahun_terbit" id="tahun_terbit" requird=""></td>
        </tr>

<tr>
        <td></td>
        <td><button type="submit">save </button>
        <button type="button"><a href="databuku.php">Kembali </button></td>
        </tr>

    </tr>
</table>
        </form>
</body>
</html>