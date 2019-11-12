<?php
	include "koneksi.php";

	if(session_status()== PHP_SESSION_NONE)
	{
		session_start();
	}

	if(empty($_SESSION['username']))
	{
		header("location:index.php?pesan=belum_login");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/bootstrap.css" rel="stylesheet" />
</head>

<body>
	<center style="padding-top: 50px">

		<h3 style="padding-bottom: 30px;">Edit Paket Umroh</h3>
		<form method="POST" action="proses_edit_paket.php">

		<?php
		include 'koneksi.php';
		$id_paket = $_GET['id_paket'];
		$query=mysqli_query($koneksi,"Select * from data_paket where id_paket=$id_paket");
		$data = mysqli_fetch_array($query) or die (mysqli_error())	;
		
		?>

		<table>
			<tr>
				<td>Id Paket</td>
				<td style="padding-top: 10px;"><input class="form-control" type="text" name="id_paket" value="<?php echo $data['id_paket']; ?>" > </td>
			</tr>
			<tr>
				<td>Nama Paket</td>
				<td style="padding-top: 10px;"><input class="form-control" type="text" name="nama_paket" value="<?php echo $data['nama_paket']; ?>"> </td>
			</tr>
			<tr>
				<td>Durasi </td>
				<td style="padding-top: 10px;"><input class="form-control" type="text" name="durasi" value="<?php echo $data['durasi']; ?>"> </td>
			</tr>
			<tr>
				<td>Keberangkatan  </td>
				<td style="padding-top: 10px;"><input class="form-control" type="text" name="keberangkatan" value="<?php echo $data['keberangkatan']; ?>"> </td>
			</tr>
			<tr>
				<td>Hotel Mekkah</td>
				<td style="padding-top: 10px;"><input class="form-control" type="text" name="hotel_mekkah" value="<?php echo $data['hotel_mekkah']; ?>"> </td>
			</tr>
			<tr>
				<td>Hotel Madinah </td>
				<td style="padding-top: 10px;"><input class="form-control" type="text" name="hotel_madinah" value="<?php echo $data['hotel_madinah']; ?>"> </td>
			</tr>
			<tr>
				<td>Biaya </td>
				<td style="padding-top: 10px;"><input class="form-control" type="text" name="biaya" value="<?php echo $data['biaya']; ?>"> </td>
			</tr>
			</table>
			<div style="padding-top:20px; padding-left: 200px;">
				<input class="btn btn-info" type="submit" name="submit" value="edit">
				<a href="admin.php?page=paket"><button class="btn btn-danger" type="button" name="batal">Batal</button> </a>
			</div>
			
			</form>
	</center>
</body>
</html>