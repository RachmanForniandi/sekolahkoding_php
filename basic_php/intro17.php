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
			$password_user = '123456';
			$password_ketik = '123456';
			
			if($password_user == $password_ketik){
				echo 'Password benar.Silahkan masuk !';
			}else{
				echo 'Password salah. Silahkan coba lagi!';
			}
		?>
    </body>
</html>