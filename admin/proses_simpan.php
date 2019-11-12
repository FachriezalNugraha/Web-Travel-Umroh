<?php 
	include("koneksi.php");
	if(isset($_POST['submit'])){
		$paket = $_POST['paket'];
		$noid = $_POST['noid'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$kode = $_POST['kode'];
		$tempat = $_POST['tempat'];
		$ttl = $_POST['ttl'];
		$jenis = $_POST['jenis'];
		$no = $_POST['no'];
		$email = $_POST['email'];
		$nopaspor = $_POST['nopaspor'];

		$query = mysqli_query($koneksi, "insert INTO data VALUES('$paket','$noid','$nama','$alamat','$kota','$kode','$tempat','$ttl','$jenis','$no','$email','$nopaspor')");
		if($query>0)	
		{
					
			header("location: daftartampil.php");				
		}else{
			var_dump($query) ;
			echo "gagal <a href='daftar.php'>kembali</a>";
		}
	}


?>