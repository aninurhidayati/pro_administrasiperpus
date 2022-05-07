<?php
    include_once "anggota_ctrl.php";
    if(!isset($_GET['act'])){
?>
<a href="?modul=mod_anggota&act=add" class="btn btn-outline-primary my-4 ">
    <i class="bi bi-person-plus-fill"></i> Tambah Data
</a>
<table class="table table-bordered">
    <tr>
        <th class="bg-success text-white">ID anggota</th>
        <th class="bg-success text-white">nama anggota</th>
        <th class="bg-success text-white">status anggota</th>
        <th class="bg-success text-white">action</th>
    </tr>
        <?php
            $qry_listagt =mysqli_query ($koneksi_db, "select * from mst_dataagt order by id_anggota ASC")
            or die("gagal mengakses table user".mysqli_error($koneksi_db));
            while($row =mysqli_fetch_array($qry_listagt)){
        ?>
    <tr>
        <td><?=$row['id_anggota'];?></td>
        <td><?=$row['nm_anggota'];?></td>
        <td><?=$row['status_anggota'];?></td>  
        <td>
            <a href="?modul=mod_anggota&act=edit&id=<?=$row ['id_anggota'];?>" class="btn btn-outline-primary">
                <i class="bi bi-pencil-fill">edit</i>
            </a>
            <a href="?modul=mod_anggota&act=delete&id=<?=$row['id_anggota'];?>" class="btn btn-outline-danger">
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
    <form action="mod_anggota/anggota_ctrl.php?modul=mod_anggota&act=save" method="POST">
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label">Nama Anggota</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_agt" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label">Status Anggota</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_status" class="form-control"><br>
                <a href="http://localhost/project_uts/pro_administrasiperpus/admin/home.php?modul=mod_anggota"class="btn btn-outline-dark">
                    <i class="bi bi-arrow-left-circle-fill">Back</i>
                </a>
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
    else if(isset($_GET['act']) && ($_GET['act']=="edit")){
?>
<div class="container-fluid my-4">
    <h3><?= $judula ?></h3>
    <form action="mod_anggota/anggota_ctrl.php?modul=mod_anggota&act=update" method="POST">
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label" >Nama Anggota</label>
            </div>
            <div class="col-md-6">
                <input type="hidden" name="txt_idagt" class="form-control" value="<?=$data['id_anggota'];?>">
                <input type="text" name="txt_agt" class="form-control" value="<?=$data['nm_anggota'];?>">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2">
                <label for="txt_status" class="form-label">status</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_status" class="form-control" value="<?=$data['status_anggota']?>"><br>
                <a href="http://localhost/project_uts/pro_administrasiperpus/admin/home.php?modul=mod_anggota"class="btn btn-outline-dark">
                    <i class="bi bi-arrow-left-circle-fill">Back</i>
                </a>
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
?>