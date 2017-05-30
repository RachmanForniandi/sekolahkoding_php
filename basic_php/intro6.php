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
	
		//-------Operator Math---------
		//tipe data aritmatik
		// + - * / % ++ --
		
		//echo $angka1 + $angka2 * $angka3;
		
		//$angka2 = $angka2 +$angka1;
		//echo $angka2;
		
		//$angka1 += $angka3;
		//echo $angka1;
		
		//--------Math method----------
		//round rand(min, max)
		//echo "Angka hari ini adalah ". rand(5, 10);
		
		//max/min(min, max)
		//echo "Angka hari adalah ". min(5, 10, 8, 15);
		//echo "Angka hari adalah ". min($angka1, $angka2, $angka3);
		
		//------String Method---------
		//strlen && str_word_count
		//str_replace(find,replace,string)
		//str_repeat(text, times); str_shuffle(text);
		
		$text= "Hai semuanya di sini!";
		//echo str_word_count($text);
		//echo str_replace("Hai", "Halo", $text);
		//echo str_repeat("Hai ",8);
		echo str_repeat(str_replace("Hai", "Hallo", $text), 10);		
    ?>
    
    </body>
</html>