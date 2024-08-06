<?php require 'database.php';
 
$buku=new database();
$buku->table='data_buku';
$buku->field=['id','id_buku','judul_buku','penerbit','tahun_terbit'];

$karyawan=new database();
$karyawan->table='datakaryawan';
$karyawan->field=['id','namakaryawan','alamat','jeniskelamin'];

$peminjam=new database();
$peminjam->table='data_peminjam';
$peminjam->field=['id','Nama','alamat','judul_buku','jenis kelamin'];

$user=new database();
$user->table='datauser';
$user->field=['id','username','password'];


