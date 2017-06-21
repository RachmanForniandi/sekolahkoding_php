<?php 


if(isset($_POST['submit'])){
	//echo $_FILES['gambar']['name'];
	//print_r($_FILES);
	
	$time   = time();
	$nama   = $_FILES['gambar']['name'];
	$error  = $_FILES['gambar']['error'];
	$size   = $_FILES['gambar']['size'];
	$lokasi = $_FILES['gambar']['tmp_name'];
	$format = $_FILES['gambar']['type'];
	$namafile = 'upload/'. $nama;
	
	//$ex = pathinfo($nama, PATHINFO_EXTENSION);
	//die($ex);
	
	if($error == 0){
		if($size < 1000000){
	
	if($format == 'image/jpeg' || 'images/png'){
		
		if(file_exists($namafile)){
			$namafile = str_replace(".jpg", "", $namafile);
			$namafile = $namafile. "_". $time . ".jpg";
		}
		//utk upload
	move_uploaded_file($lokasi, $namafile);
	echo 'upload berhasil!';		
	
		}else{
			echo 'formatnya harus jpeg atau png bro';
		}
	
		}else{
			echo 'size itemnya kegedean coy!';
		}
		
		}else{
			echo 'upload error !';
	}
		
}

?>

<form action="index3.php" method="post" enctype="multipart/form-data">
	<input type="file" name="gambar">
    <input type="submit" name="submit" value="upload">
</form>