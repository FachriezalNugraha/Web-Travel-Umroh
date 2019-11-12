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

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading text-center">Data Formulir Jamaah</div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th> Paket </th>
										<th> No ktp / Sim </th>
										<th> Nama </th>
										<th> Alamat</th>
										<th> Kota </th>
										<th> Kodepos</th>
										<th> Tempat lahir </th>
										<th> Tanggal lahir</th>
										<th> Jenis kelamin </th>
										<th> Nomor telepon </th>
										<th> Alamat email </th>
										<th> No paspor </th>
										<th> Tanggal Deadline </th>
										
										<th> Aksi </th>
                                    </tr>
                                </thead>
                            <tbody>
                               	<?php
                               	include "koneksi.php";
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
											<td> <?php echo $data['deadline'];?></td>
											<td>
												<a class="btn btn-primary" href="edit.php?noid=<?php echo $data['noid'];?>">edit</a>
												<a class="btn btn-danger" href="proses_hapus.php?noid=<?php echo $data['noid'];?>">hapus</a>
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
