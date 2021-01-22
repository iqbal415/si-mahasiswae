<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Data Mahasiswa</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail mahasiswa-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Data Matakuliah</h2>
                        <h4>Jalan Prof M.Yamin SH No.173, Kisaran <br>Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA SELURUH Mata Kuliah</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th width="18%"><center>Nim</th><th><center>Nama</th><th><center>Nama Mata Kuliah</th><th><center>Nama Dosen</th><th width="14%"><center>Jumlah SKS</th>
									</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_matakuliah";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                               <tr>
                                               <td><?= $nomor ?></td>
									<td><?= $data['nim'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['nama_matkul'] ?></td>
                                    <td><?= $data['nama_dosen'] ?></td>
                                    <td><?= $data['jlh_sks'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
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