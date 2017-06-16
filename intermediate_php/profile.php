<?php
session_start();
	//cookie expired 
	//setcookie('nama_user', $_POST['nama'], time()-180);
	
	//echo 'ini halaman profile ' . $_COOKIE['nama_user'];
if(isset($_SESSION['nama_user'])){
	echo 'ini halaman profile ' . $_SESSION['nama_user'];
}else{
	echo 'login sing nggenah cok !!';
}
?>

<br>
<a href="logout.php">LogOut</a>