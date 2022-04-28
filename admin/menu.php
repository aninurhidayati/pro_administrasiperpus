<?php
    $qry_menu=mysqli_query($koneksi_db,"select * from mst_menu");
    while($row=mysqli_fetch_array($qry_menu)){
?>
    <ul class="list-group">
        <a style="text-decoration: none;" href="?modul=<?php echo $row['link']?>">
            <li class="list-group-item" ><?php echo $row["nm_menu"];?></li>
        </a>
    </ul>
<?php
    }
?>