<?php 
	if(session_status()== PHP_SESSION_NONE)
	{
		session_start();
	}

	if(empty($_SESSION['username']))
	{
		header("location:index.php?pesan=belum_login");
	}

?>

<div>
	<center>
		<h1>Input Paket Umroh</h1><br>
		<form method="POST" action="upload.php">
			<table>
				<tr>
					<td>Id Paket</td>
					<td style="padding-top: 10px"><input class="form-control" id="exampleFormControlInput1"  type="text" name="id_paket"></td>
				</tr>
				<tr>
					<td>Nama Paket</td>
					<td style="padding-top: 10px"><input class="form-control" id="exampleFormControlInput1" type="text" name="nama_paket"></td>
				</tr>
				<tr>
					<td>Durasi</td>
					<td style="padding-top: 10px"><input class="form-control" id="exampleFormControlInput1"  type="text" name="durasi"></td>
				</tr>
				<tr>
					<td>Keberangkatan</td>
					<td style="padding-top: 10px"><input class="form-control" id="exampleFormControlInput1"  type="date" name="keberangkatan"></td>
				</tr>
				<tr>
					<td>Hotel Mekkah</td>
					<td style="padding-top: 10px"><input class="form-control" id="exampleFormControlInput1"  type="text" name="hotel_mekkah"></td>
				</tr>
				<tr>
					<td>Hotel Madinah</td>
					<td style="padding-top: 10px"><input class="form-control" id="exampleFormControlInput1"  type="text" name="hotel_madinah"></td>
				</tr>
				<tr>
					<td>Biaya</td>
					<td style="padding-top: 10px"><input class="form-control" id="exampleFormControlInput1"  type="text" name="biaya"></td>
				</tr>
			</table><br>
			<input class="btn btn-primary" type="submit" value="Buat Paket">
		</form>
	</center>
</div>