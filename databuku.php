<?php
    require "init.php";
    require 'index.php';
$data_buku= $buku->getdata();
if(isset($_POST['Cari'])){
    $data_buku=$buku->cari($_POST["keyword"]);
    
}
    ?>
<section class="konten">
<form action="" method="post">
        <label></label>
        <input type="text" name="keyword">
        <input type="submit" name="Cari" value="Cari">
        </form>
    <button type="submit"><a href="tambahbuku.php">tambah</a></button>

<?php


    ?>
    <div id="tableContainer">
    <table border="1">
        <thead>
        <tr>
        <th>NO</th>
        
            <th>ID BUKU</th>
            
            <th>JUDUL BUKU</th>
            
            <th>STOK</th>
            
            <th>PENERBIT</th>
            <th>TAHUN TERBIT</th>
            <th>aksi</th>
            
        </tr>
</thead>
        <?php
        foreach($data_buku as $row):
            ?>
            <tr>
                <td><?=$row['id'];?></td>
                <td><?=$row['id_buku'];?></td>
                <td><?=$row['judul_buku'];?></td>
                <td><?=$row['stok'];?></td>
                <td><?=$row['penerbit'];?></td>
                <td><?=$row['tahun_terbit'];?></td>
                <td>
                    <a href="ubahbuku.php?id=<?= $row["id"];  ?>">ubah</a>
                    <a href="hapusbuku.php?id=<?= $row["id"]; ?>" onclick="return confirm ('yakin hapus?');">hapus</a>
                </td>
            </tr>
            <?php
            endforeach;?>
    </table>
    </section>