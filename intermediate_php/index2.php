<?php 

//--------GET and POST-----------

//if(isset($_GET['submit'])){
//echo $_GET['password'];
//}
$username ='RachmanForniandi';
$password = 'forniandi123';

if(isset($_POST['submit'])){
	
	if($_POST['nama'] == $user &&
	   $_POST['password']== $password){
		   
		//memindahkan ke halaman profile
		header('Location: profile.php' . $username);	
	}else{
		echo 'Login gagal. Silahkan coba lagi. ';
		}
	}
?>

<form action="profile.php" method="get">

	<input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">

</form>