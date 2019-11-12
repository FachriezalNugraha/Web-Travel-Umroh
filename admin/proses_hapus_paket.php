<?php

include "koneksi.php";
$id_paket = $_GET['id_paket'];
$query=mysqli_query($koneksi, "Delete from data_paket where id_paket='$id_paket'");

if ($query)
{
	//"<meta http-equiv="refresh" content="0; url='admin.php?page=anggota'" />"
	header("Location: admin.php?page=paket");
	//echo "proses hapus berhasill, ingin lihat hasil <a href = 'admin.php?page=anggota'> disini </a>";
	
}
else 
{
	echo "proses input gagal";
}
?>