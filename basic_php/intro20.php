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
			//else if
			//operator logika == === > >= < <= !=
			
			$pendapatan = 1000;
			$keyboard = 2000;
			$bonus = 4000;
			
			if($pendapatan > $keyboard){
				echo 'Jadi beli !';
			}else if($bonus > $keyboard){
				echo 'siip. Jadi beli !';
				
			//---if bercabang
			if($bonus >= $keyboard *2){
				echo 'beli lagi kalau begitu.';
				}
			}
			else{
				echo 'yah gak cukup';
			}
		?>
    </body>
</html>