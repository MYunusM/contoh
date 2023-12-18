<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
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
<body>
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
</body>
<br>

	<footer>
		<div class="container">
		<small>CopyRight @ 2023 Praktikum Web Lanjut</small>
	</footer>
</html>