<?php
require_once 'init.php';
session_start();
if(!isset($_SESSION["login"])){
  header("Location:login.php");
  exit;
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .navbar {
    overflow: hidden;
    background-color: aqua;

}
.navbar a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
    cursor: pointer;
}
.navbar a:hover {
    background-color: #ddd;
    color: black;
    align-items: center;

}
.h1 {
    text-align:center;
    width:100 px;
}



</style>
<link rel="stylesheet" href="style.css">
</head>
<body>
  
    <div class="navbar">
        <a href="databuku.php" onclick="showTable('buku')">DATA BUKU</a>
        <a href="datapeminjam.php" onclick="showTable('peminjam')">DATA PEMINJAM</a>
        
        <a href="datakaryawan.php" onclick="showTable('karyawan')">DATA KARYAWAN</a>
        <a href="datauser.php" onclick="showTable('user')">DATA USER</a>
        <a href="logout.php" style="float:right;">LOGOUT</a>
        <script>
            
        </script>
        </div>
    <section class="konten"></section>
    
    
</div>
</body>
<div class="h1">
        <h1>WELCOME IN PERPUSTAKAAN</h1>
</html>
