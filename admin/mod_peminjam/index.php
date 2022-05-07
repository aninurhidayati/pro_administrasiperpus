<?php
    include_once "peminjam_ctrl.php";
    if(!isset($_GET['act'])){
?>
<a href="?modul=mod_peminjam&act=add" class="btn btn-outline-primary my-4">Tambah Data</a>
<table class="table table-bordered">
    <tr>
        <th class="bg-success text-white">ID peminjam</th>
        <th class="bg-success text-white">nama peminjam</th>
        <th class="bg-success text-white">nama buku</th>
        <th class="bg-success text-white">tgl pinjam</th>
        <th class="bg-success text-white">Action</th>
    </tr>
    <?php
        $qry_listpjm =mysqli_query($koneksi_db, "select *from mst_datapinjam order by id_peminjam DESC")
        or die("gagal mengakses". mysqli_error($koneksi_db));
        while($row =mysqli_fetch_array($qry_listpjm)){
    ?>
    <tr>    
            <td><?= $row['id_peminjam'];?></td>
            <td><?= $row['nm_peminjam'];?></td>
            <td><?= $row['nm_buku'];?></td>
            <td><?= $row['tgl_pinjam'];?></td>
            <td>
                <a href="?modul=mod_peminjam&act=edit&id=<?=$row['id_peminjam'];?>" class="btn btn-outline-primary">
                        <i class="bi bi-pencil-fill">edit</i>
                    </a>
                <a href="?modul=mod_peminjam&act=delete&id=<?=$row['id_peminjam'];?>" class="btn btn-outline-danger">
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
    else if(isset($_GET['act']) && ($_GET['act'])=="add"){
?>
<div class="container-fluid my-4">
    <h3><?= $judula ?></h3>
    <form action="mod_peminjam/peminjam_ctrl.php?modul=mod_peminjam&act=save" method="POST">
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label">nama peminjam</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_nmpinjam" id="" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label">nama buku</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_nmbuku" id="" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label">tgl pinjam</label>
            </div>
            <div class="col-md-6">
                <input type="date" name="txt_tglpinjam" id="" class="form-control"><br>
                <a href="http://localhost/project_uts/pro_administrasiperpus/admin/home.php?modul=mod_peminjam"class="btn btn-outline-dark">
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
    else if(isset($_GET['act']) && ($_GET['act'])=="edit"){
?>
<div class="container-fluid my-4">
    <h3><?= $judula ?></h3>
    <form action="mod_peminjam/peminjam_ctrl.php?modul=mod_peminjam&act=update" method="POST">
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label">nama peminjam</label>
            </div>
            <div class="col-md-6">
                <input type="hidden" name="txt_id" class="form-control" value="<?=$data['id_peminjam'];?>">
                <input type="text" name="txt_nmpinjam" id="" class="form-control" value="<?=$data['nm_peminjam'];?>">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label">nama buku</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_nmbuku" id="" class="form-control" value="<?=$data['nm_buku'];?>">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2">
                <label for="" class="form-label">tgl pinjam</label>
            </div>
            <div class="col-md-6">
                <input type="date" name="txt_tglpinjam" class="form-control" value="<?=$data['tgl_pinjam'];?>"><br>
                <a href="http://localhost/project_uts/pro_administrasiperpus/admin/home.php?modul=mod_peminjam"class="btn btn-outline-dark">
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