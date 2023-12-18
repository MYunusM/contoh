<?php 
error_reporting(0);
session_start();
include "connection.php";

$nik = mysqli_real_escape_string($conect, $_POST['nik']);
$nama = mysqli_real_escape_string($conect, $_POST['nama']);
$kode_bagian = mysqli_real_escape_string($conect, $_POST['kode_bagian']);
$masa_kerja = mysqli_real_escape_string($conect, $_POST['masa_kerja']);
$gaji = mysqli_real_escape_string($conect, $_POST['gaji']);

if(isset($_POST['submit'])){
    if($nik == ""){
      $nik_error = "<span style='color:red;'>NIK Wajib Diisi</span>";
    }elseif($nama == ""){
      $nama_error = "<span style='color:red;'>Nama Wajib Diisi</span>";
    }elseif($kode_bagian == ""){
        $kode_bagian_error = "<span style='color:red;'>Kode Wajib Diisi</span>";
    }elseif($masa_kerja == ""){
        $masa_kerja_error = "<span style='color:red;'>Masa Kerja Wajib Diisi</span>";
    }elseif($gaji == ""){
        $gaji_error = "<span style='color:red;'>Gaji Wajib Diisi</span>";
    }else{
      $sql = mysqli_query($conect, "insert into tb_pegawai (nik, nama, kode_bagian, masa_kerja, gaji)
      values ('$nik','$nama', '$kode_bagian', '$masa_kerja','$gaji')");
      if($sql){
        echo "<script>alert('Input Berhasil');document.location='data.php'</script>";
      }else{
        echo "<span style='color:red;'>Terjadi Kesalahan Silakan Coba Lagi</span>";
      }
      }
    }
  
  
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Input Data</title>
    <style>
* {
	padding: 0;
	margin: 0;
	font-family: sans-serif;
}
a{
	color:inherit;
	text-decoration: none;
}

.container{
	width:80%;
	margin:0 auto;

}
.container:after {
	content:'';
	display: block;
	clear: both;
}
nav{
  background-color: green;
}
header h2 {
	float:left;
	padding: 15px 0;
	color: #000000;
}
header ul {
	float:right;

}
header ul li {
	display:inline-block;
}
header ul li a {
	padding: 25px 20px;
	display: inline-block;
}
header ul li a:hover {
	background-color: #148F77;
	color: #fff;
}
footer {
	padding: 25px 0;
	background-color: #333;
	color: #fff;
	text-align: center;
}
</style>
</head>
<header>
        <nav>
            <div class="container">
			    <h2><a href="/">
				    Data Pegawai
			    </a></h2>
				    <ul>
					    <li><a href="index.php">Home</a></li>
					    <li><a href="tambahdata.php">Tambah Data</a></li>
					    <li><a href="data.php">Data Karyawan</a></li>
				    </ul>
		</div>
        </nav>
    </header>
<body>
  <br/><br/>
<a href="data.php"> Kembali</a>
<br /><br/>
<h1>Tambah Data Pegawai</h1><hr>
        <form action="" method="post" enctype="multipart/form-data">
          <table>
            <tr>
            <td>NIK</td>
            <td>
                <input type="text" name="nik" placeholder="Masukkan NIK" class="input" value="<?= $nik;?>">
                <?= $nik_error;?>  
            </td></tr>
            <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" placeholder="Masukkan Nama" class="input" value="<?= $nama;?>">
                <?= $nama_error;?>  
            </td></tr>
            <tr>
            <td>Kode Bagian</td>
            <td>
                <input type="text" name="kode_bagian" placeholder="Kode Bagian" class="input" value="<?= $kode_bagian;?>">
                <?= $kode_bagian_error;?>  
            </td></tr>
            <tr>
            <td>Masa Kerja</td>
            <td>
                <input type="text" name="masa_kerja" placeholder="Masa Kerja" class="input" value="<?= $masa_kerja;?>">
                <?= $masa_kerja_error;?>  
            </td></tr>
            <tr>
            <td>Gaji</td>
            <td>
                <input type="text" name="gaji" placeholder="Gaji" class="input" value="<?= $gaji;?>">
                <?= $gaji_error;?>  
            </td></tr>
            <tr><td>
                <button type="submit" name="submit">SIMPAN</button>
            </td></tr>
          </table>
</body>
<br><br>
<footer>
		<div class="container">
		<small>CopyRight @ 2023 Praktikum Web Lanjut</small>
	</footer>
</html>