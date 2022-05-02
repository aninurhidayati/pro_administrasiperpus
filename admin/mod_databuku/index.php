<?php
    include_once "datbuku_ctrl.php";
?>
<?php 
    if(!isset($_GET['act'])){
?>
<a href="?modul=mod_databuku&act=add" class="btn btn-outline-primary my-4">Tambah Data</a>
<table class="table table-bordered">
    <tr>
        <th class="bg-success text-white">ID buku</th>
        <th class="bg-success text-white">judul buku</th>
        <th class="bg-success text-white">penerbit</th>
        <th class="bg-success text-white">pengarang</th>
        <th class="bg-success text-white">action</th>
    </tr>
    <?php 
        $qry_databuku=mysqli_query($koneksi_db,"select * from mst_databuku order by id_buku ASC") or die ("gagal mengakses tabel mst_databuku ".mysqli_error($koneksi_db));
        while($datbuk=mysqli_fetch_array($qry_databuku)){
    ?>
    <tr>
        <td><?= $datbuk['id_buku']; ?></td>
        <td><?= $datbuk['judul_buku']; ?></td>
        <td><?= $datbuk['pengarang_buku']; ?></td>
        <td><?= $datbuk['jumlah_buku']; ?></td>
        <td>
        <a href="?modul=mod_databuku&act=edit&id=<?= $datbuk['id_buku']; ?>" class="btn btn-outline-primary">
                <i class="bi bi-pencil-fill">edit</i>
            </a>
            <a href="?modul=mod_databuku&act=delete&id=<?= $datbuk['id_buku']; ?>"  class="btn btn-outline-danger">
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
    <form action="mod_databuku/datbuku_ctrl.php?modul=mod_databuku&act=save" method="POST">
        <div class="row my-2">
            <div class="col-md-2">
                <label for="txt_jbuku" class="form-label">judul buku</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_jbuku" id="txt_jbuku" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2">
                <label for="txt_pbuku" class="form-label">penerbit buku</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_pbuku" id="txt_pbuku" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2">
                <label for="txt_prbuku" class="form-label">pengarang</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_prbuku" id="txt_prbuku" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-2">
                <label for="txt_jmlbuku" class="form-label">jumlah buku</label>
            </div>
            <div class="col-md-6">
                <input type="text" name="txt_jmlbuku" id="txt_jmlbuku" class="form-control"><br>
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
        <form action="mod_databuku/datbuku_ctrl.php?modul=mod_databuku&act=update" method="POST">
            <div class="row my-2">
                <div class="col-md-2">
                    <label for="txt_user" class="form-label">judul buku</label>
                </div>
                <div class="col-md-6">
                    <input type="hidden" class="form-control" name="id_buku" id="id_user" value="<?= $datbuku['id_buku'];?>">
                    <input type="text" name="txt_jbuku" class="form-control" value="<?= $datbuku['judul_buku'];?>">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-2">
                    <label for="txt_user" class="form-label">penerbit buku</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="txt_pbuku" class="form-control" value="<?= $datbuku['penerbit_buku'];?>">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-2">
                    <label for="txt_user" class="form-label">pengarang buku</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="txt_prbuku" class="form-control" value="<?= $datbuku['pengarang_buku']; ?>">
                </div>
            </div>
        <div class="row my-2">
                <div class="col-md-2">
                    <label for="txt_pass" class="form-label">jumlah buku</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="txt_jmlbuku" class="form-control" value="<?= $datbuku['jumlah_buku'];?>"><br>
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
