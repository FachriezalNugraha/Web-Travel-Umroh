<?php
	include "koneksi.php";
	include_once 'view/topnavbar.php';
	
	
?>

	<hr>

	<div class="container" style="margin-top: 50px">
		<br>
	<center><h1>Formulir Pendaftaran online</h1>
		<br>
		
		<form method="POST" action="proses_simpan.php">
		<table>
			<tr>
				<td>Paket</td>
				<td>
					<select class='form-control' id="exampleFormControlSelect1" name=paket>
						<option>Pilih Paket</option>
						<option>Paket Mina</option>
						<option>Paket Arofah</option>
						<option>Paket Safa</option>
						<option>Paket Muzdalifah</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nomor KTP / SIM </td>
				<td><input type="text" class="form-control" id="exampleFormControlInput1" name="noid"></td>
			</tr>
			<tr>
				<td>Nama </td>
				<td><input type="text" class="form-control" id="exampleFormControlInput1" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat </td>
				<td><input type="text" class="form-control" id="exampleFormControlInput1" name="alamat"></td>
			</tr>
			<tr>
				<td>Kota  </td>
				<td><input type="text" class="form-control" id="exampleFormControlInput1" name="kota"></td>
			</tr>
			<tr>
				<td>Kode Pos</td>
				<td><input type="text" class="form-control" id="exampleFormControlInput1" name="kode"></td>
			</tr>
			<tr>
				<td>Tempat Lahir </td>
				<td><input type="text" class="form-control" id="exampleFormControlInput1" name="tempat"></td>
			</tr>
			<tr>
				<td>Tanggal lahir </td>
				<td><input type="date" class="form-control" name="ttl"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin </td>
				<td><input type="radio" name="jenis1" value="Laki Laki"> Laki laki
				<input type="radio" name="jenis1" value="Perempuan"> Perempuan</td>
			</tr>
				<tr>
				<td>No Telepon </td>
				<td><input type="text" class="form-control" id="exampleFormControlInput1"  name="no"></td>
			</tr>
			<tr>
				<td> Email </td>
				<td><input type="text" class="form-control" id="exampleFormControlInput1" name="email"></td>
			</tr>
			<tr>
				<td>Nomor Passpor </td>
				<td><input type="text" class="form-control" id="exampleFormControlInput1" name="nopasspor"></td>
			</tr>
			
			
			</table>
			<br>
			<a> Setelah melakukan pendaftaran online silahkan konfirmasi melalui call center kami, </a>
			<a>jika melebihi batas 7 hari setelah mendaftar belum melakukan pembayaran maka pendaftaran akan dibatalkan</a>
			<br><br>
		    <input class="btn btn-primary" type="submit" value="Daftar">
			<input class="btn btn-primary" type="reset" value="Reset">
			
	</center>
</div>
<div class="container-fluid">
	<div class="row text-center">
		<div class="col-12">
			<h1 class="display-4"></h1>
		</div>
	</div>
</div>
<hr>
</div>

<footer class="page-footer font-small unique-color-dark">
    <div style="background-color: #343a40;">
      <div class="container">
        <div class="row py-4 d-flex align-items-center">
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0" font-color: #ffffff></h6>
          </div>
          </div>
      </div>
   </div>
    <div class="container text-center text-md-left mt-5">
      <div class="row">
        <div class="col-sm">
          <h1 style="margin-top:30px;"><img src="img/logo.png"></a></h1>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p></p>
        </div>
        <div class="col-sm">
          <h6 class="text-uppercase font-weight-bold">Alamat Kantor Pusat</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
           <p>
            Komplek Zatabbaru Jl. Karangdowo – Solo Km 3,5, Bakungan, Karangdowo, Klaten 57464 </p>
          <p>
        </div>

        <div class="col-sm">
          <h6 class="text-uppercase font-weight-bold">Email</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>zatabbarutour@gmail.com</p>
          </div>
       <div class="col-sm">
          <h6 class="text-uppercase font-weight-bold">Call Center</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>(0272)456478</p>
         </div>
      </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="beranda.php">Zatabbaru Umroh Tour & Travel</a>
    </div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</footer>


</body>
</html>