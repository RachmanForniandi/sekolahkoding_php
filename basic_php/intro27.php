<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Belajar PHP</title>
    </head>

<body>
	<h1>Fungsi PHP</h1>
    <?php
    // fungsi pada PHP 
    
    function print_text($text, $angka){
		$text = "gedung " . $text . " " .$angka;
		echo "-----------------";
		echo $text;
		echo "-----------------";
	}
	
	function jarak(){
		echo "<br>";
	}
	
	print_text("koding", 21);
	jarak();
	print_text("perawat", 22);
	jarak();
	print_text("pilot", 23);
	jarak();
	
	//--------return fungsi-----------
	
	//function menghitung($x, $y){
		//$z = $x + $y;
		//return $z;
	//}
	
	//echo "Hasil dari penjumlahan adalah ". menghitung(2, 4);
	//$hasil = menghitung(2, 5)* 10;
	//echo "Hasil dari penjumlahan adalah ". $hasil;
	
	//---------scope-----------------
	$a = 2000;
	$b = 3000;
	
	function menghitung(){
		global $a, $b;
		
		//$c = $GLOBALS['a'] + $GLOBALS['b']; atau
		$c = $a + $b;
		return $c;	
	}
	
	echo menghitung();
	
	?>
</body>
</html>