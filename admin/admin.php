<?php
session_start();
if(empty($_SESSION['username']))
{
    header("location:index.php?pesan=belum_login");
}?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zattabaru Travel Admin</title>
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <link href="../js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="../css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php" style="font-size:14pt; style="background-color : black;" >Zattabaru Admin</a> 
            </div>
              <div style="color: blue;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../img/find_user.png" class="user-image img-responsive"/>
					</li>
					
                    <li>
                        <a  href="?page=dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a  href="?page=pelanggan"><i class="fa fa-users fa-3x"></i> Data Pelanggan</a>
                    </li>
                    <li>
                        <a  href="?page=paket"><i class="fa fa-plane fa-3x"></i> Paket Umroh</a>
                    </li>
                    <li>
                        <a href="?page=inputpaket"><i class="fa fa-user fa-3x"></i> Input Paket Umroh</a>
                    </li>
            
        </nav>  
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                       <!-- <?php echo "<h3>Welcome ".$_SESSION['username']."</h3>";?> -->
                     
                        <?php

                            if(isset($_GET['page']))
                            {
                                $page = $_GET['page']; 
                            }
                                else
                                {
                                    $page = "";
                                }
                            

                            if($page=="dashboard"){
                                echo "Selamat Datang";
                            }
                            if($page=="pelanggan")
                            {
                                include "daftartampil.php";
                            }
                            if($page=="paket")
                            {
                                include "daftarpaket.php";
                            }
                            if($page=="inputpaket")
                            {
                                include "inputpaket.php";
                            }

                        ?>


                    </div>
                </div>                      
            </div>
        </div>



    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
