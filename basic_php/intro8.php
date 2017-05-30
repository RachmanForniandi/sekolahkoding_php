<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
    </head>

    <body>
    
    <h1>Array PHP</h1>
    
    <?php
        //-------tipe data array-------
		$angka=[5,10,2,1,6];
		$kotak= array('anjing','kurakura','koala','kucing');
		$nama= ['Hilman','Endy','Tiqa'];
		
		//print_r($kotak);	
		//echo $nama[0];
		
		//--------Metode Array-------
		//array_unique, _reverse, shuffle, count, sort
		//print_r(array_unique($kotak));
		//print_r(array_reverse($kotak));
		
		/*utk Array shuffle*/
		//shuffle($kotak);
		//print_r($kotak);
		
		/*utk Array sort*/
		sort($angka);
		print_r($angka);


		
		
	?>
    
    </body>
</html>