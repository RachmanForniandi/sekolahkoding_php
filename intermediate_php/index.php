<?php include_once('header.php'); ?>
    
    <main>
    	Selamat datang di sekolah koding, tempat belajar programming online.
        
        <h2>Implode dan Explode</h2>
        
        <?php 
		//implode (separator, array)
		$pekerjaan= ["Front-End","Back-End","Android Developer","Graphic Designer"];
		echo implode(" | ", $pekerjaan);
		
		echo "<br>";
		
		//explode
		$pelajaran = "html css javascript php java";
		print_r(explode(" ", $pelajaran));
		?>
        
        <h2>Fungsi Date</h2>
        
        <?php 
			echo date('d - M - Y');
		?>
    </main>
    
<?php include_once('footer.php'); ?>
    
