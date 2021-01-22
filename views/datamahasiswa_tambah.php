<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Mahasiswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <div class="col-sm-2 col-xs-9">
                            </div>
                            </div>
                        
						<div class="form-group">
                            <label for="nim" class="col-sm-3 control-label">Nim </label>
                            <div class="col-sm-9">
                                <input type="text" name="nim" class="form-control" id="inputEmail3" placeholder="Inputkan nim " required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama </label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama " required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="jurusan" class="col-sm-3 control-label">Jurusan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jurusan" class="form-control" id="inputEmail3" placeholder="Inputkan Jurusan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>

                </div>
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
    //Ambil data dari form
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
    $jurusan=$_POST['jurusan'];
    //buat sql
    $sql="INSERT INTO tbl_mahasiswa VALUES ('$nim','$nama','$alamat','$jurusan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan datamahasiswa  Error");
    if ($query){
        echo "<script>window.location.assign('?page=datamahasiswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
