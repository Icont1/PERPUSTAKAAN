<?php
    require "init.php";


$id=$_GET['id'];
$user->delete($id);
if($user){
    header ('location: datauser.php');
}else{
    die("gagal menghapus..");
}
