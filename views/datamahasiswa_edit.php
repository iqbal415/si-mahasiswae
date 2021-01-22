<?php
$Nim=$_GET['nim'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa WHERE nim ='$Nim'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Mahasiswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nim" class="col-sm-3 control-label">Nim</label>
                             <div class="col-sm-9">
                                <input type="text" name="nim" value="<?=$data['nim']?>"class="form-control" id="inputEmail3" placeholder="Nim" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="nama">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="alamat">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="jurusan" class="col-sm-3 control-label">Jurusan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jurusan" value="<?=$data['jurusan']?>"class="form-control" id="inputEmail3" placeholder="jurusan">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Mahasiswa</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=datamahasiswa&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Mahasiswa
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    $Nim=$_POST['nim'];
    $Nama=$_POST['nama'];
    $Alamat=$_POST['alamat'];
    $Jurusan=$_POST['jurusan'];
    //buat sql
    $sql="UPDATE tbl_mahasiswa SET nim = '$Nim', nama='$Nama', alamat='$Alamat', jurusan='$Jurusan' WHERE nim='$Nim'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=datamahasiswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



