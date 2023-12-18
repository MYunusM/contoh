<?php include "connection.php";?>


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
			    <h2><a href="">
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
<a href="tambahdata.php"> Tambah Data Pegawai</a>
<br/><br/>
<h1>Data Pegawai</h1><hr>
<br/>
<table style="text-align:left ; border=1px solid; border-collapse: collapse;">
        <tr>
            <th style="border:1px solid; padding:10px; text-align:center">NIK</th>
            <th style="border:1px solid; padding:10px; text-align:center">Nama</th>
            <th style="border:1px solid; padding:10px; text-align:center">Kode Bagian</th>
            <th style="border:1px solid; padding:10px; text-align:center">Masa Kerja</th>
            <th style="border:1px solid; padding:10px; text-align:center">Gaji</th>            
            <th style="border:1px solid; padding:10px; text-align:center">Opsi</th>            
        </tr>
          <tbody>
          <?php
          $sql = mysqli_query($conect,"SELECT * FROM tb_pegawai where tb_pegawai . nik");
          while($row=mysqli_fetch_array($sql)){
            ?>
            <tr>
            <td style="border:1px solid; padding:10px;"><?=$row['nik'];?></td>
            <td style="border:1px solid; padding:10px;"><?=$row['nama'];?></td>
            <td style="border:1px solid; padding:10px;"><?=$row['kode_bagian'];?></td>
            <td style="border:1px solid; padding:10px;"><?=$row['masa_kerja'];?></td>
            <td style="border:1px solid; padding:10px;"><?=$row['gaji'];?></td>
            <td style="border:1px solid; padding:10px;">
              <a href="editdata.php?id=<?= $row['nik'];?>" title="Edit">Edit |</a> 
              <a href="hapusdata.php?id=<?= $row['nik'];?>" title="Hapus">Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </table>   
      </div>
    </div>
</body><br><br>
<footer>
		<div class="container">
		<small>CopyRight @ 2023 Praktikum Web Lanjut</small>
	</footer>
</html>