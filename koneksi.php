<?php 
$host_name = "localhost";
$user = "root";
$pass = "";
$db = "pos";

$conn = mysqli_connect($host_name,$user,$pass,$db);

if (!$conn) {
	die("Koneksi Gagal".mysqli_connect_error());
}
 ?>