<?php 

//--------GET and POST-----------

//if(isset($_GET['submit'])){
//echo $_GET['password'];
//}
$username ='RachmanForniandi';
$password = 'forniandi123';

if(isset($_POST['submit'])){
	
	if($_POST['nama'] == $username &&
	   $_POST['password']== $password){
		   
		//utk cookie
		//setcookie(key, nilai, expire)
		setcookie('nama_user', $_POST['nama'], time()+180);
		   
		//memindahkan ke halaman profile
		header('Location: profile.php');	
	}else{
		echo 'Login gagal. Silahkan coba lagi. ';
		}
	}
?>

<form action="index2.php" method="post">

	<input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">

</form>