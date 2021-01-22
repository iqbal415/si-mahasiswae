<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Matakuliah</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT * FROM tbl_matakuliah WHERE nim ='" . $_GET ['nim'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>Nim</td> <td><?= $data['nim'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama </td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Matakuliah</td> <td><?= $data['nama_matkul'] ?></td>
                        </tr>
                         <td>Nama Dosen</td> <td><?= $data['nama_dosen'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah SKS</td> <td><?= $data['jlh_sks'] ?></td>
                        </tr>
                    </table>
                
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=matakuliah&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Matakuliah </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

