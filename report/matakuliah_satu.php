<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Mata Kuliah</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_matakuliah WHERE nim='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Data Matakuliah </h2>
                        <h4>Jalan Prof M.Yamin SH No.173, Kisaran <br>Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA ARSIP Mata Kuliah</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nim</td><td><?= $data['nim'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td> <td><?= $data['nama'] ?></td>
                                </tr>
								<tr>
                                    <td>Nama Mata Kuliah</td> <td><?= $data['nama_matkul'] ?></td>
                                </tr>
								<tr>
                                    <td>Nama Dosen</td> <td><?= $data['nama_dosen'] ?></td>
                                </tr>
								<tr>
                                    <td>Jumlah SKS</td> <td><?= $data['jlh_sks'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                            <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?><br>Ketua STMIK Royal
                                        <br><br><br><br>
                                        <u>Wan Mariatul Kifti, M.M<strong></u><br>
                                        NIDN. 0114057302
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>