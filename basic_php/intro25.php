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
	
	?>
</body>
</html>