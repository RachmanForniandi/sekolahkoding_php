<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
    </head>

    <body>
    <?php
        /*
            berapa baris
            komentar
            terserah kita2
        */ 
        // variabel pada php
        //tipe data -string-
        $nama = "sekolah koding";
        $nama2 = "Bermain koding";
		
		echo "<br>Selamat datang di $nama <br>";
		
		//tipe data angka/number
		// 1. Integer 2. Float
		
		$angka1 = 1000;
		$angka2 = 3;
		$angka3 = 2.64; //tipe float
	
		//tipe data aritmatik
		// + - * / % ++ --
		
		//echo $angka1 + $angka2 * $angka3;
		
		//$angka2 = $angka2 +$angka1;
		//echo $angka2;
		
		//$angka1 += $angka3;
		//echo $angka1;
		
		//round rand(min, max)
		//echo "Angka hari adalah ". rand(5, 10);
		
		//max/min(min, max)
		//echo "Angka hari adalah ". min(5, 10, 8, 15);
		echo "Angka hari adalah ". min($angka1, $angka2, $angka3);
		
		
		
		
    ?>
    
    </body>
</html>