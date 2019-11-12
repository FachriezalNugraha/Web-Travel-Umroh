<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Tampilan</title>
</head>

<body>
	<h2>Tampilan Form Online</h2>
	<hr>




	<div class="menu">
				<a href="beranda.php"class="item" style = "padding: 100px">beranda</a>
				<a href="paket.php" class="item" style = "padding-left: 150px">Paket umroh</a>
				<a href="dafStar.php" class="item" style = "padding-left: 240px">daftar online</a>
				<a href="tentangkami.php" class="item" style = "padding-left: 400px">Tentang Kami </a>

			</div>
	<table border="1">
			<tr>
			<th> paket </th>
			<th> No ktp / Sim </th>
			<th> nama </th>
			<th> alamat</th>
			<th> kota </th>
			<th> kodepos</th>
			<th> tempat lahir </th>
			<th> tanggal lahir</th>
			<th> jenis kelamin </th>
			<th> nomor telepon </th>
			<th> alamat email </th>
			<th> no paspor </th>
			<th> aksi </th>
			</tr>
			<?php
			include 'koneksi.php';
			$query=mysqli_query($koneksi,"select * from data");
			while($data = mysqli_fetch_array ($query))

			{
				?>
				<tr>
				<td> <?php echo $data['paket'];?></td>
				<td> <?php echo $data['noid'];?></td>
				<td> <?php echo $data['nama'];?></td>
				<td> <?php echo $data['alamat'];?></td>
				<td> <?php echo $data['kota'];?></td>
				<td> <?php echo $data['kode'];?></td>
				<td> <?php echo $data['tempat'];?></td>
				<td> <?php echo $data['ttl'];?></td>
				<td> <?php echo $data['jenis'];?></td>
				<td> <?php echo $data['no'];?></td>
				<td> <?php echo $data['email'];?></td>
				<td> <?php echo $data['nopaspor'];?></td>
				<td>
					<a href="edit.php?noid=<?php echo $data['noid'];?>">edit</a>
					<a href="proses_hapus.php?noid=<?php echo $data['noid'];?>">hapus</a>
				</td>
				</tr>
<?php }?>
						
</table>

</body>
</html>