<?php 

if(isset($_POST['submit'])){
	echo $_FILES['gambar']['name'];
	
	$nama = $_FILES['gambar']['name'];
	$lokasi = $_FILES['gambar']['tmp_name'];
	
	move_uploaded_file($lokasi, 'upload/'. $nama);
}


?>

<form action="index3.php" method="post" enctype="multipart/form-data">
	<input type="file" name="gambar">
    <input type="submit" name="submit" value="upload">
</form>