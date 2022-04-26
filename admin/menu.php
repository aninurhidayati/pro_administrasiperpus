<?php

    $qry_menu=mysqli_query($koneksi_db,"select * from mst_menu");
    while($row=mysqli_fetch_array($qry_menu)){
?>
    <a href="?modul=<?php echo $row['link']?>">
        <li class="list-group-item"><?php echo $row["nm_menu"];?></li>
    </a>
<?php
    }
?>