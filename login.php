<?php
session_start();
$query= new mysqli ('localhost', 'root','', 'datajamaah' );

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = mysqli_query($query, "SELECT * FROM login WHERE username='$username' AND password='$password'") or die(mysqli_error($query));

	$num=mysqli_num_rows($sql);
	if ($num>0)
	 {
	 	$_SESSION['username'] =$username['username'];
	 	$_SESSION['status']="login";
		header("location:admin/admin.php");
	}
	else{
		
		header("Location: admin/index.php?pesan=gagal");
	}

 ?>

