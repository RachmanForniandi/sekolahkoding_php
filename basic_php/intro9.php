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
		
		//--------Associative Array-------
		$data = array( "nama"      => "hilman",
					   "umur" 	   => 21,
					   "pekerjaan" => "pengacara",	
					 );
					 
		//print_r($data);
		$data["nama"] = "Rachman Forniandi";
		//echo "Pekerjaanya adalah ".$data['pekerjaan'];
		echo "Namanya ".$data['nama'];
	?>
    
    </body>
</html>