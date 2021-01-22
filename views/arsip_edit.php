<?php
$im=$_GET['nim'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_matakuliah WHERE nim='$nim") or die ("SQL Edit error");
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
                            <label for="nim" class="col-sm-3 control-label">nim</label>
                             <div class="col-sm-9">
								<input type="text" name="nim" value="<?=$data['nim']?>"class="form-control" id="inputEmail3" placeholder="nim" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="nama">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Matakuliah</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_matkul" value="<?=$data['nama_matkul']?>"class="form-control" id="inputEmail3" placeholder="nama_matkul">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_dosen" class="col-sm-3 control-label">Nama Dosen</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_dosen" value="<?=$data['nama_dosen']?>"class="form-control" id="inputEmail3" placeholder="nama_dosen">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="jlh_sks" class="col-sm-3 control-label">Jumlah SKS</label>
                            <div class="col-sm-9">
                                <input type="text" name="jlh_sks" value="<?=$data['jlh_sks']?>"class="form-control" id="inputEmail3" placeholder="jlh_sks">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Matakuliah</button>
                            </div>
                        </div>
                    </form>


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
		$nim =$_POST['nim'];
		$Nama =$_POST['nama'];
		$nama_matkul =$_POST['nama_matkul'];
		$nama_dosen =$_POST['nama_dosen'];
		$jlh_sks =$_POST['jlh_sks'];
    //buat sql
    $sql="UPDATE matakuliah SET nim = '$nim', nama='$Nama', nama_matkul='$nama_matkul', nama_dosen='$nama_dosen', jlh_sks='$jlh_sks',='$ket' WHERE nim='$nim'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=matakuliah&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



