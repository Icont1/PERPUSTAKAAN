<?php
require 'init.php';
$id=$_GET['id'];
$k=$user->getdataSingel($id);
if($_POST){
    if($_POST>0){
    $user->data=[$_POST["id"],$_POST['username'],$_POST['password']];
    $user->update();
   
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
    <form action="ubahuser.php" method="post" enctype="multipart/form-data">
<h2>UBAH DATA USER</h2>
<table>
    <tr>
    
<tr>
     <input type="hidden" name="id" id="id" required=""value="<?= $k["id"];?>">
     
<tr>
        <td>username</td>
        <td>: <input type="text" name="username" id="username" required=""value="<?= $k["username"];?>"></td>
        </tr>
<tr>
        <td>password</td>
        <td>: <input type="text" name="password" id="password" required="" value="<?= $k["password"];?>"></td>
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