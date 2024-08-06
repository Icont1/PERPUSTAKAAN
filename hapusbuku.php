<?php
    require "init.php";


$id=$_GET['id'];
$buku->delete($id);
if($buku){
    header ('location: databuku.php');
}else{
    die("gagal menghapus..");
}
