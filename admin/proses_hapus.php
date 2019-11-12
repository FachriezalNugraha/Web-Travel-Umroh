<?php

include "koneksi.php";
$noid = $_GET['noid'];
$query=mysqli_query($koneksi, "Delete from data where noid='$noid'");

if ($query)
{
	//"<meta http-equiv="refresh" content="0; url='admin.php?page=anggota'" />"
	header("Location: admin.php?page=pelanggan");
	//echo "proses hapus berhasill, ingin lihat hasil <a href = 'admin.php?page=anggota'> disini </a>";
	
}
else 
{
	echo "proses input gagal";
}
?>