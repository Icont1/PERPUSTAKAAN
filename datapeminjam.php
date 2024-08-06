<?php
    require "init.php";
    require 'index.php';
$datapeminjam = $peminjam->getdata();
if(isset($_POST['Cari'])){
    $datapeminjam=$peminjam->cari($_POST["keyword"]);
}
    ?>
<section class="konten">
<form action="" method="post">
        <label></label>
        <input type="text" name="keyword">
        <input type="submit" name="Cari" value="Cari">
        </form>
    <button type="submit"><a href="tambahpeminjam.php">tambah</a></button>



<table id="karyawanTable" border="1">
        <thead>
        <tr>
        <th>ID</th>
        
            <th>NAMA</th>
            
            <th>ALAMAT</th>
            
            <th>JUDUL BUKU</th>

            
            <th>JENIS KELAMIN</th>
            <th>AKSI</th>
        </tr>
        <?php
        foreach($datapeminjam as $row):
            ?>
            <tr>
                <td><?=$row['id'];?></td>
                <td><?=$row['Nama'];?></td>
                <td><?=$row['alamat'];?></td>
                <td><?=$row['judul_buku'];?></td>
                <td><?=$row['jenis_kelamin'];?></td>
                <td>
                    <button><a href="ubahpeminjam.php?id=<?=$row["id"];?>">ubah</a></button>
                   <button> <a href="hapuspeminjam.php?id=<?=$row["id"];?>"onclick=" return confirm ('yakin hapus?');">hapus</a></button>
                </td>
            </tr>
            <?php
            endforeach;?>
</thead>
</section>