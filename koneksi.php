<?php 
	$koneksi=mysqli_connect("localhost","root","");
	if ($koneksi) {
		mysqli_select_db($koneksi,"datajamaah");
		
	}
	else
	{
		echo "Koneksi Gagal";
	}
 ?>