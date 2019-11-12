<?php

include("koneksi.php");
	if(isset($_POST['submit']))
	{
		$id_paket = $_POST['id_paket'];
		$nama_paket = $_POST['nama_paket'];
		$durasi = $_POST['durasi'];
		$keberangkatan = $_POST['keberangkatan'];
		$hotel_mekkah = $_POST['hotel_mekkah'];
		$hotel_madinah = $_POST['hotel_madinah'];
		$biaya = $_POST['biaya'];

		$query = mysqli_query($koneksi, "update data_paket set id_paket='$id_paket', nama_paket='$nama_paket', durasi='$durasi', keberangkatan='$keberangkatan',hotel_mekkah='$hotel_mekkah', hotel_madinah='$hotel_madinah', biaya='$biaya' where id_paket='$id_paket'");
		if($query>0)	
		{
					
			header("location: admin.php?page=paket");				
		}else
		{
			var_dump($query) ;
			echo "gagal <a href='editpaket.php'>kembali</a>";
		}
}

?>

