<?php


if(!isset($_SESSION['admin']))
{
	echo '<p><a href="daftartampil.php">Home</a>';
	}
	else
	{
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="index.php";</script>';

}
?>