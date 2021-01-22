<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Matakuliah</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <div class="col-sm-2 col-xs-9">
                            </div>
                            </div>
                        
                        <div class="form-group">
                            <label for="nim" class="col-sm-3 control-label">Nim</label>
                            <div class="col-sm-9">
                                <input type="text" name="nim" class="form-control" id="inputEmail3" placeholder="Inputkan nim" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_matkul" class="col-sm-3 control-label">Nama Matakuliah</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_matkul" class="form-control" id="inputEmail3" placeholder="Inputkan nama_matkul" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_dosen" class="col-sm-3 control-label">Nama Dosen</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_dosen" class="form-control" id="inputEmail3" placeholder="Inputkan nama_dosen" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="jlh_sks" class="col-sm-3 control-label">Jumlah SKS</label>
                            <div class="col-sm-9">
                                <input type="text" name="jlh_sks" class="form-control" id="inputEmail3" placeholder="Inputkan jlh_sks" required>
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
                    <a href="?page=matakuliah&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Matakuliah
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
    $nama_matkul=$_POST['nama_matkul'];
    $nama_dosen=$_POST['nama_dosen'];
    $jlh_sks=$_POST['jlh_sks'];
    //buat sql
    $sql="INSERT INTO tbl_matakuliah VALUES ('$nim','$nama','$nama_matkul','$nama_dosen','$jlh_sks')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan matakuliah  Error");
    if ($query){
        echo "<script>window.location.assign('?page=matakuliah&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
