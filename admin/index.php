<html>
<head>
    <title>Login Admin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../css/login.css" rel="stylesheet">
  </head>
</head>
<?php
 if(isset($_GET['pesan']))
        {
if($_GET['pesan']== "gagal")
{
    echo "<script>alert('Username dan Password salah'); window.location='index.php'</script>";
} else if($_GET['pesan'] == "logout")
{ 
	echo "<script>alert('Anda Telah Berhasil Logout'); window.location='index.php'</script>";
   
} else if ($_GET['pesan'] == "belum_login")
{
	echo "<script>alert('Anda harus login untuk akses halaman admin'); window.location='index.php'</script>";	
    

}} ?>

<body class="text-center">
	<form class="text-center" action="../login.php" method="post">
		<h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
		<label for="inputUsername" class="sr-only">Username</label>
		<input type="text" name="username" class="form-control" placeholder="Username" required="" autofocus="">
		<label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" required="">
	  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
	</form>
 



<footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</footer>
</body>
</html>