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
			
			//$pendapatan = 1000;
			//$keyboard = 2000;
			//$bonus = 4000;
			
			// && atau ||
			//if($pendapatan > $keyboard && $bonus > $keyboard){
			//	echo 'Jadi beli';
			//}else{
			//	echo 'nggak jadi beli';
			//}
			
			//true atau false
			//$hasil = true;
			//$hasil2 = false;
			
			//if($hasil2){
			//	echo 'Jadi beli !';
			//}else if($hasil2){
			//	echo 'siip. Jadi beli !';
				
			//---if bercabang
			//if($bonus >= $keyboard *2){
			//	echo 'beli lagi kalau begitu.';
			//	}
			// }
			//else{
			//	echo 'yah gak cukup';
			//}
			
			//switch case
			$nama ="Hamtaro";
			
			switch($nama){
				case 'Ian';
					echo 'panggilan sehari-harinya Ian';
					break;
				case 'Boss';
					echo 'panggilan sehari-harinya Boss';
					break;
				case 'Vrda';
					echo 'panggilan sehari-harinya Vrda';
					break;
				default:
					echo 'tidak ada yang cocok';
				
			}
		?>
    </body>
</html>