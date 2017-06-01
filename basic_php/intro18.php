<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Belajar PHP</title>
    </head>   
    <body>
    	<h1>Logika di PHP</h1>
        <?php 
			//------tipe data boolean-----
			// $hasil1 = true;
			// $hasil2 = false;
			
			//--------if dan else---------
			//operator logika == === > >= < <= !=
			$password_user = '1000';
			$password_ketik = '1000';
				
			
			//if($password_user == $password_ketik){
			//	echo 'Password benar.Silahkan masuk !';
			//}else{
			//	echo 'Password salah. Silahkan coba lagi!';
			//}
			
			//if($password_user < $password_ketik){
				//echo 'benar, $password_ketik lebih besar !';
			//}else{
				//echo 'salah, $password_ketik lebih kecil!';
			//}
			
			if($password_user != $password_ketik){
				echo '--------------';
				echo 'benar,password tidak sama !!';
				echo '--------------';
			}else{
				echo 'salah, password sama !';
			}
		?>
    </body>
</html>