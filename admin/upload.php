<?php 
	include"koneksi.php";
	
		$id_paket = $_POST['id_paket'];
		$nama_paket = $_POST['nama_paket'];
		$durasi = $_POST['durasi'];
		$keberangkatan = $_POST['keberangkatan'];
		$hotel_mekkah = $_POST['hotel_mekkah'];
		$hotel_madinah = $_POST['hotel_madinah'];
		$biaya = $_POST['biaya'];

		$query = mysqli_query($koneksi, "insert INTO data_paket VALUES('$id_paket','$nama_paket','$durasi','$keberangkatan','$hotel_mekkah','$hotel_madinah','$biaya')");
		if($query)	
		{
					
			echo "<script>alert('data tersimpan'); window.location='admin.php?page=paket'</script>";				
		}else{
			var_dump($query) ;
			echo "<script>alert('data tak tersimpan'); window.location='daftarpaket.php'</script>";		
	}


?>
