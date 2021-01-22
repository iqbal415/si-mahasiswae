<?php
//membuat query untuk hapus data
$sql="DELETE FROM tbl_mahasiswa WHERE Nim ='".$_GET['nim']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=datamahasiswa&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=datamahasiswa&actions=tampil');</scripr>";
}

