<?php 
	include_once 'view/topnavbar.php';
?>

<div class="container-fluid" style="margin-top: 50px">
		<div class="row text-center">
			<div class="col-12">
				<br><br>
				<h1 class="display-4">Paket yang ditawarkan</h1>
				<br><br>
			</div>
		</div>
	</div>
<div class="container-fluid">
<div class="row">
<?php 
include "koneksi.php";

$query = "SELECT * FROM data_paket";
$sql= mysqli_query($koneksi, $query);

while ($data = mysqli_fetch_array($sql)){
 ?>

	<div class="col-3">
	  <div class="card f-beranda"> 
	    <img class="card-img-top image-card" src="img/mina.jpg" alt="Card image cap" height="200px">
	    <div class="card-body">
	     <a href="daftar.php"> <h5 class="card-title"><?php echo $data['nama_paket']; ?></h5></a>
	      <ul class="list-group">
			  <li class="list-group-item">Biaya <?php echo $data['biaya']; ?></li>
			  <li class="list-group-item">Durasi : <?php echo $data['durasi']; ?></li>
			  <li class="list-group-item">Berangkat <?php echo $data['keberangkatan']; ?></li>
			  <li class="list-group-item">Hotel Mekkah : <?php echo $data['hotel_mekkah']; ?></li>
			  <li class="list-group-item">Hotel Madinah : <?php echo $data['hotel_madinah']; ?></li>
			</ul>
	    </div>
	  </div>
	</div>
<?php } ?>
</div>
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

