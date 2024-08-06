<?php
    require "init.php";
    require 'index.php';
$datauser= $user->getdata();
if(isset($_POST['Cari'])){
    $datauser=$user->cari($_POST["keyword"]);
}
    ?>
<form action="" method="post">
    <label></label>
    <input type="text" name="keyword">
    <input type="submit" name="Cari" value="Cari">
</form>
<section class="konten">
    <button type="submit"><a href="tambahuser.php">tambah</a></button>

<?php


    ?>
    <div id="tableContainer">
    <table id="userTable" border="1" >
        <thead>
        <tr>
            <th>id</th>
        <th>USERNAME</th>
        
            <th>PASSWORD</th>
            
            <th>AKSI</th>
        
            
        </tr>
</thead>
        <?php
        foreach($datauser as $row):
            ?>
            <tr>
                <td><?=$row['id'];?></td>
                <td><?=$row['username'];?></td>
                <td><?=$row['password'];?></td>
                                <td>
                    <button><a href="ubahuser.php?id=<?=$row["id"];?>">ubah</a></button>
                   <button> <a href="hapususer.php?id=<?=$row["id"];?>"onclick=" return confirm ('yakin hapus?');">hapus</a></button>
                </td>
            </tr>
            <?php
            endforeach;?>
    </table>
    </section>