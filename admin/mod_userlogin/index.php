<?php
        include_once "user_ctrl.php";
?>
<?php
    if(!isset($_GET['act'])){
?>
<a href="?modul=mod_userlogin&act=add" class="btn btn-outline-primary my-4">Tambah Data</a>
<table class="table table-bordered">
    <tr>
        <th class="bg-success text-white">ID user</th>
        <th  class="bg-success text-white">username</th>
        <th  class="bg-success text-white">password</th>
        <th  class="bg-success text-white">is active</th>
        <th  class="bg-success text-white">action</th>
    </tr>
    <tr>
    <?php
        $qry_listuser=mysqli_query($koneksi_db,"select * from mst_userlogin order by id_user ASC") 
            or die ("gagal mengakses tabel user".mysqli_error($koneksi_db));
        while($row=mysqli_fetch_array($qry_listuser)){
    ?>
    <tr>
        <td><?= $row['id_user'];?></td>
        <td><?= $row['username'];?></td>
        <td><?= $row['password'];?></td>
        <td><?= $row['is_active'];?></td>
        <td>
            <a href="?modul=mod_userlogin&act=edit&id=<?=$row['id_user'];?>" class="btn btn-outline-primary">
                <i class="bi bi-pencil-fill">edit</i>
            </a>
            <a href="?modul=mod_userlogin&act=delete&id=<?=$row['id_user'];?>" class="btn btn-outline-danger">
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
    <form action="mod_userlogin/user_ctrl.php?modul=mod_userlogin&act=save" method="POST">
        <div class="row my-2">
            <div class="col-md-2">
                <label for="txt_user" class="form-label">username</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_user" id="txt_user" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2">
                <label for="txt_pass" class="form-label">password</label>
            </div>
            <div class="col-md-6">
                <input type="password" name="txt_pass" id="txt_user" class="form-control"><br>
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
    else if(isset($_GET['act']) && ($_GET['act']=="edit")){
?>
<div class="container-fluid my-4">
    <h3><?= $judulb ?></h3>
        <form action="mod_userlogin/user_ctrl.php?modul=mod_userlogin&act=update" method="POST">
            <div class="row my-2">
                <div class="col-md-2">
                    <label for="txt_user" class="form-label">username</label>
                </div>
                <div class="col-md-6">
                    <input type="hidden" class="form-control" name="id_user" id="id_user" value="<?= $data['id_user']?>">
                    <input type="text" name="txt_user" class="form-control" value="<?=$data['username'];?>">
                </div>
            </div>
        <div class="row my-2">
                <div class="col-md-2">
                    <label for="txt_pass" class="form-label">password</label>
                </div>
                <div class="col-md-6">
                    <input type="password" name="txt_pass" class="form-control" value="<?=$data['password'];?>"><br>
                        <input type="checkbox" name="ck_aktif" id="ck_aktif" class="form-check-input" <?php echo $check; ?>>aktif <br>
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