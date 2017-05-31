<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Belajar PHP</title>
    </head>
    
    <body>
    	<h1>Loop PHP</h1>
        <?php 
			//-------Pengulangan-----------
			//for(variabel_awal(mulai); batas(syarat); perubahan)
			$hewan =['anjing','kucing','hamster','kelinci','iguana'];
			for($i=0; $i < count($hewan)-1; $i++){
				echo "-------------------";
				echo $hewan [$i];
				echo "---------------<br>";
			}
			
			foreach($hewan as $h){
				echo "-------------------";
				echo $h;
				echo "---------------<br>";
			}
		?>
    </body>
</html>