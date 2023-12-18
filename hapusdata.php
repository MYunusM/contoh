<?php
error_reporting(0);
session_start();
include "connection.php";

$id = mysqli_real_escape_string($conect, $_GET['id']);

$sql = mysqli_query($conect, "DELETE from tb_pegawai where nik='$id'");
 if($sql){
      echo "<script>alert('Hapus Berhasil');document.location='data.php'</script>\n";
    }else{
       echo "<script>alert('Hapus Gagal');document.location='data.php'</script>\n";
    }

?>