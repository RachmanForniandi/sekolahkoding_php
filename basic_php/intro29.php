<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Belajar PHP</title>
    </head>

<body>
	<h1>Fungsi PHP</h1>
    <?php
	
    //---------callback function------
	function berteriak($callback){
			echo "HALOOOOOOOO <br>";
			//$callback();
			
			if( is_callable($callback)){ //menguji apakah ini fungsi apa tidak
				call_user_func($callback, "selamat datang");
			}else{
				echo 'dia bukan fungsi';
			}
				
		}
		
	//	berteriak(function(){
	//		echo 'saya anonymous, yang tak bernama.';
	//	});
	
	$panggil = function($text){
			echo $text;
		};
	
	berteriak( $panggil );
	
	
	?>
</body>
</html>