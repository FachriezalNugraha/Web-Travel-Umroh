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
	<title>Admin</title>
	<link href="../css/bootstrap.css" rel="stylesheet" />
</head>

<body>
	<center style="padding-top: 50px;">
		<h3 style="padding-bottom: 30px;">Edit Pelanggan</h3>
		<form method="POST" action="proses_edit.php">

		<?php
		include 'koneksi.php';
		$noid = $_GET['noid'];
		$query=mysqli_query($koneksi,"Select * from data where noid=$noid");
		$data = mysqli_fetch_array($query) or die (mysqli_error())	;
		
		?>

		<table>
			<tr>
				<td>Paket</td>
				<td style="padding-bottom:10px; padding-left: 20px;">
					<select name="paket" class="form-control">
						
						<option value="Paket Mina" <?php if($data['paket']=="Paket Mina") echo "selected='true'" ?>>Paket Mina</option>
						<option value="Paket Arofah" <?php if($data['paket']=="Paket Arofah") echo "selected='true'" ?>> Paket Arofah</option>
						<option value="Paket Safa" <?php if($data['paket']=="Paket Safa") echo "selected='true'" ?>>Paket Safa</option>
						<option value="Paket Muzdalifah" <?php if($data['paket']=="Paket Muzdalifah") echo "selected='true'" ?>>Paket Muzdalifah</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nomor KTP / SIM </td>
				<td style="padding-bottom:10px; padding-left: 20px;"><input  class="form-control " type="text" name="noid" value="<?php echo $data['noid']; ?>" > </td>
			</tr>
			<tr>
				<td>Nama </td>
				<td style="padding-bottom:10px; padding-left: 20px;"><input  class="form-control " type="text" name="nama" value="<?php echo $data['nama']; ?>"> </td>
			</tr>
			<tr>
				<td>Alamat </td>
				<td style="padding-bottom:10px; padding-left: 20px;"><input  class="form-control " type="text" name="alamat" value="<?php echo $data['alamat']; ?>"> </td>
			</tr>
			<tr>
				<td>Kota  </td>
				<td style="padding-bottom:10px; padding-left: 20px;"><input  class="form-control " type="text" name="kota" value="<?php echo $data['kota']; ?>"> </td>
			</tr>
			<tr>
				<td>Kode Pos</td>
				<td style="padding-bottom:10px; padding-left: 20px;"><input  class="form-control " type="text" name="kode" value="<?php echo $data['kode']; ?>"> </td>
			</tr>
			<tr>
				<td>TEMPAT LAHIR </td>
				<td style="padding-bottom:10px; padding-left: 20px;"><input  class="form-control " type="text" name="tempat" value="<?php echo $data['tempat']; ?>"> </td>
			</tr>
			<tr>
				<td>Tanggal lahir </td>
				<td style="padding-bottom:10px; padding-left: 20px;"><input  class="form-control " type="date" name="ttl" value="<?php echo $data['ttl']; ?>"> </td>
			</tr>
			<tr>
				<td>Jenis Kelamin </td>
				<td><input class="form-check-input"  type="radio" name="jenis" value="Laki Laki" <?php if ($data['jenis']=='Laki Laki') echo "checked='true'" ?> > Laki laki</td>
				<td><input class="form-check-input"  type="radio" name="jenis" value="Perempuan" <?php if ($data['jenis']=='Perempuan') echo "checked=
				true'" ?> >Perempuan</td>
			</tr>
				<tr>
				<td>No Telepon </td>
				<td style="padding-bottom:10px; padding-left: 20px;"><input class="form-control" type="text" name="no" value="<?php echo $data['no']; ?>"> </td>
			</tr>
			<tr>
				<td> Email </td>
				<td style="padding-bottom:10px; padding-left: 20px;"><input class="form-control" type="text" name="email" value="<?php echo $data['email']; ?>"> </td>
			</tr>
			<tr>
				<td>Nomor Passpor </td>
				<td style="padding-bottom:10px; padding-left: 20px;"><input class="form-control" type="text" name="nopaspor" value="<?php echo $data['nopaspor']; ?>"> </td>
			</tr>
			</table>
			<div style="padding-bottom:10px; padding-top:20px; padding-left: 100px;">
				<input class="btn btn-info" type="submit" name="submit" value="edit">
				<a href="admin.php?page=paket"><button class="btn btn-danger" type="button" name="batal">Batal</button> </a>
			</div>
			</form>
	</center>
</body>
</html>