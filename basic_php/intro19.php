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
			
			$pendapatan = 500000;
			$keyboard = 2000000;
			$bonus = 2500000;
			
			if($pendapatan > $keyboard){
				echo 'Jadi beli !';
			}else if($bonus > $keyboard){
				echo 'Jadi beli !';
			}
			else{
				echo 'gak jadi beli !';
			}
		?>
    </body>
</html>