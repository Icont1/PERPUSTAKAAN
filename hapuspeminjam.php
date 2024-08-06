<?php
    require "init.php";


$id=$_GET['id'];
$peminjam->delete($id);
if($peminjam){
    header ('location: datapeminjam.php');
}else{
    die("gagal menghapus..");
}
