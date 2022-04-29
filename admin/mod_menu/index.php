<?php
    include_once "menu_ctrl.php";
    if(!isset($_GET['act'])){
?>
<a href="?modul=mod_menu&act=add" class="btn btn-outline-primary my-4">Tambah Data</a>
<table class="table table-bordered">
    <tr>
        <th class="bg-success text-white">ID menu</th>
        <th class="bg-success text-white">nama menu</th>
        <th class="bg-success text-white">link</th>
        <th class="bg-success text-white">is active</th>
        <th class="bg-success text-white">Action</th>
    </tr>
    <?php
        $qrylistmenu =mysqli_query($koneksi_db, "select *from mst_menu order by id_menu DESC")
        or die("gagal mengakses".mysqli_error($koneksi_db));
        while($row =mysqli_fetch_array($qrylistmenu)){
    ?>
    <tr>    
            <td><?= $row['id_menu']?></td>
            <td><?= $row['nm_menu']?></td>
            <td><?= $row['link']?></td>
            <td><?= $row['isActive']?></td>
            <td>
                <a href="?modul=mod_menu&act=edit&id=<?=$row['id_menu'];?>" class="btn btn-outline-primary">
                        <i class="bi bi-pencil-fill">edit</i>
                    </a>
                <a href="?modul=mod_menu&act=delete&id=<?=$row['id_menu'];?>" class="btn btn-outline-danger">
                        <i class="bi bi-trash-fill">delete</i>
                    </a>
            </td>
    </tr>
    <?php
        }
    ?>
</table>
<?php 
    }
    else if(isset($_GET['act']) && ($_GET['act']=="add")){
?>
<div class="container-fluid my-4">
    <h3><?= $judula ?></h3>
    <form action="mod_menu/menu_ctrl.php?modul=mod_menu&act=save" method="POST">
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label">nama menu</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_menu" id="" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label">link</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_link" id="" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <input type="checkbox" name="ck_aktif" id="ck_aktif" class="form-check-input">aktif <br>
                <button type="submit" class="btn btn-outline-success">
                    <i class="bi bi-check-circle-fill"> submit</i>
                </button>
                <button type="reset" class="btn btn-outline-danger">
                    <i class="bi bi-x-circle-fill"> reset</i> 
                </button>
            </div>
        </div>
    </form>
</div>
<?php
    }
    else if(isset($_GET['act']) && ($_GET['act'])=="edit"){
?>
<div class="container-fluid my-4">
    <h3><?= $judula ?></h3>
    <form action="mod_menu/menu_ctrl.php?modul=mod_menu&act=update" method="POST">
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label">nama menu</label>
            </div>
            <div class="col-md-6">
                <input type="hidden" name="txt_id" value="<?= $data['id_menu']?>">
                <input type="text" name="txt_menu" id="" class="form-control" value="<?= $data['nm_menu']?>">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label">link</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_link" id="" class="form-control" value="<?= $data['link']?>">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <input type="checkbox" name="ck_aktif" id="ck_aktif" class="form-check-input">aktif <br>
                <button type="submit" class="btn btn-outline-success">
                    <i class="bi bi-check-circle-fill">submit</i>
                </button>
                <button type="reset" class="btn btn-outline-danger">
                    <i class="bi bi-x-circle-fill">reset</i> 
                </button>
            </div>
        </div>
    </form>
</div>
<?php
    }
?>