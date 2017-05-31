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
		//$angka=[5,10,2,1,6];
		//$kotak= array('anjing','kurakura','koala','kucing');
		//$nama= ['Hilman','Endy','Tiqa'];
		
		//print_r($kotak);	
		//echo $nama[0];
		
		//--------Associative Array-------
		//$data = array( "nama"      => "hilman",
		//			   "umur" 	   => 21,
		//			   "pekerjaan" => "pengacara",	
		//			 );
		//$data2 = array( "status"              => "lajang",
		//			   	  "pendidikan terakhir" => "Sarjana S1"	
		//			 );
					 				 
		//print_r($data);
		//$data["nama"] = "Rachman Forniandi";
		//echo "Pekerjaanya adalah ".$data['pekerjaan'];
		//echo "Namanya ".$data['nama'];
		
		//---------metode associative array----
		//array_values, array_keys, array_merge
		//print_r( array_values($data));
		//print_r( array_keys($data));
		//print_r( array_merge($data, $data2));
		
		//---------multidimensi array----
		$data = array(
					array("Rachman Forniandi", "26", "Full Stack Engineer"),
					array("Muhammad Irsyad", "25", "Android Developer"),
					array("Elynna Michella", "22", "Graphic Designer")
				);
		// 00 01 02
		// 10 11 12
		// 20 21 22
		
		$data[2][0]= "Amelia";
		echo $data[0][2];
		
		
	?>
    
    </body>
</html>