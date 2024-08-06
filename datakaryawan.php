<?php
    require "init.php";
    require 'index.php';
$datakaryawan = $karyawan->getdata();
if(isset($_POST['Cari'])){
    $datakaryawan=$karyawan->cari($_POST["keyword"]);
}
    ?>
<section class="konten">
<form action="" method="post">
        <label></label>
        <input type="text" name="keyword">
        <input type="submit" name="Cari" value="Cari">
        </form>
    <button type="submit"><a href="tambahkaryawan.php">tambah</a></button>



<table id="karyawanTable" border="1">
        <thead>
        <tr>
        <th>ID</th>
        
            <th>NAMA</th>
            
            <th>ALAMAT</th>
            
            

            
            <th>JENIS KELAMIN</th>
            <th>AKSI</th>
        </tr>
        <?php
        foreach($datakaryawan as $row):
            ?>
            <tr>
                <td><?=$row['id'];?></td>
                <td><?=$row['namakaryawan'];?></td>
                <td><?=$row['alamat'];?></td>
                <td><?=$row['jeniskelamin'];?></td>
                <td>
                    <button><a href="ubahkaryawan.php?id=<?=$row["id"];?>">ubah</a></button>
                   <button> <a href="hapuskaryawan.php?id=<?=$row["id"];?>"onclick=" return confirm ('yakin hapus?');">hapus</a></button>
                </td>
            </tr>
            <?php
            endforeach;?>
</thead>
</section>