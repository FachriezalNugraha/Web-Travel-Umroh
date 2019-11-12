<?php 
		
	include 'akses.php';

	if(empty($_SESSION['username']))
	{
		header("location:index.php?pesan=belum_login");
	}

?>


<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading text-center">Data Paket</div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th> Id Paket </th>
										<th> Nama Paket </th>
										<th> Durasi </th>
										<th> Keberangkatan</th>
										<th> Hotel Mekkah </th>
										<th> Hotel Madinah </th>
										<th> Biaya </th>
                                    </tr>

                                </thead>
                            <tbody>

                               	<?php
                               	include "koneksi.php";
                               	 $query=mysqli_query($koneksi,"select * from data_paket");
									while($data = mysqli_fetch_array ($query)) 
									{
										?>
											<tr>
											<td> <?php echo $data['id_paket'];?></td>
											<td> <?php echo $data['nama_paket'];?></td>
											<td> <?php echo $data['durasi'];?></td>
											<td> <?php echo $data['keberangkatan'];?></td>
											<td> <?php echo $data['hotel_mekkah'];?></td>
											<td> <?php echo $data['hotel_madinah'];?></td>
											<td> <?php echo $data['biaya'];?></td>
											<td>
												<a class="btn btn-primary" href="editpaket.php?id_paket=<?php echo $data['id_paket'];?>">edit</a>
												<a class="btn btn-danger" href="proses_hapus_paket.php?id_paket=<?php echo $data['id_paket'];?>">hapus</a>
											</td>
											</tr>
							<?php
							 		}
							?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

