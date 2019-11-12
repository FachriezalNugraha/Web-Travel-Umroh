<?php 
	include"koneksi.php";
	
		$paket = $_POST['paket'];
		$noid = $_POST['noid'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$kode = $_POST['kode'];
		$tempat = $_POST['tempat'];
		$ttl = $_POST['ttl'];
		$jenis = $_POST['jenis1'];
		$no = $_POST['no'];
		$email = $_POST['email'];
		$nopaspor = $_POST['nopasspor'];
		$tgl1 = date("Y/m/d");// pendefinisian tanggal awal
        $tgl2 = date('Y-m-d', strtotime('+7 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                      
		$query = mysqli_query($koneksi, "insert INTO data VALUES('$paket','$noid','$nama','$alamat','$kota','$kode','$tempat','$ttl','$jenis','$no','$email','$nopaspor','$tgl2')");
		if($query)	
		{
			?> <script>alert('Pembayaran Terakhir Tanggal <?php echo $tgl2 ?>'); window.location='beranda.php'</script>
			<?php 
							
		}else{
			var_dump($query) ;
			echo "<script>alert('data tak tersimpan'); window.location='daftar.php'</script>";		
	}


?>