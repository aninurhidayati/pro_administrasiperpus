<?php
    include_once "katbuku_ctrl.php";
?>
<?php 
    if(!isset($_GET['act'])){
?>
<a href="?modul=mod_katbuku&act=add" class="btn btn-outline-primary my-4">
    <i class="bi bi-folder-plus"></i> Tambah Data
</a>
<table class="table table-bordered">
    <tr>
        <th class="bg-success text-white">ID buku</th>
        <th class="bg-success text-white">nama buku</th>
        <th class="bg-success text-white">kategori buku</th>
        <th class="bg-success text-white">action</th>
    </tr>
    <?php 
        $qry_kategbuku=mysqli_query($koneksi_db,"select * from mst_kategbuku order by id_buku ASC") or die(mysqli_error($koneksi_db));
        while($kategori=mysqli_fetch_array($qry_kategbuku)){
    ?>
    <tr>
        <td><?= $kategori['id_buku'];?></td>
        <td><?= $kategori['nm_buku'];?></td>
        <td><?= $kategori['kt_buku'];?></td>
        <td>
            <a href="?modul=mod_katbuku&act=edit&id=<?= $kategori['id_buku'];?>" class="btn btn-outline-primary">
                <i class="bi bi-pencil-fill">edit</i>
            </a>
            <a href="?modul=mod_katbuku&act=delete&id=<?= $kategori['id_buku'];?>"  class="btn btn-outline-danger">
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
    <h3><?= $judul1 ?></h3>
    <form action="mod_katbuku/katbuku_ctrl.php?modul=mod_katbuku&act=save" method="POST">
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label">nama buku</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_nmbuku" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label">kategori buku</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_katbuku" class="form-control"><br>
                <a href="http://localhost/project_uts/pro_administrasiperpus/admin/home.php?modul=mod_katbuku"class="btn btn-outline-dark">
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
    <h3><?= $judul ?></h3>
        <form action="mod_katbuku/katbuku_ctrl.php?modul=mod_katbuku&act=update" method="POST">
            <div class="row my-2">
                <div class="col-md-2">
                    <label for="" class="form-label">nama buku</label>
                </div>
                <div class="col-md-6">
                    <input type="hidden" class="form-control" name="id_buku" value="<?= $databuku['id_buku'];?>">
                    <input type="text" name="txt_nmbuku" class="form-control" value="<?=$databuku['nm_buku'];?>">
                </div>
            </div>
        <div class="row my-2">
                <div class="col-md-2">
                    <label for="" class="form-label">kategori buku</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="txt_katbuku" class="form-control" value="<?=$databuku['kt_buku'];?>"><br>
                    <a href="http://localhost/project_uts/pro_administrasiperpus/admin/home.php?modul=mod_katbuku"class="btn btn-outline-dark">
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