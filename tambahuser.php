<?php
require 'init.php';
if($_POST){
    if($_POST>0){

        $user->data=['',$_POST['username'],$_POST['password']];
        $user->save();
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
    <h2>TAMBAH DATA USER</h2>
    <table>
    <tr>
    
<tr>
        <td>USERNAME</td>
        <td>: <input type="text" name="username" id="username" requird="" ></td>
        </tr>
<tr>
        <td>PASSWORD</td>
        <td>: <input type="text" name="password" id="password" requird="" ></td>
        </tr>
<tr>

        <td></td>
        <td><button type="submit">save </button>
        <button type="button"><a href="datauser.php">Kembali </button></td>
        </tr>

    </tr>
</table>
        </form>
</body>
</html>