<?php
//membuat database di phpmyadmin

//menyambungkan database

$koneksi= mysqli_connect('localhost','root','','sekolah');

//menguji error
if(!$koneksi){
	die('Koneksi ke databse error' . mysqli_connect_error());
}

//$query = "DELETE FROM murid WHERE id IN (2,3)";
$query = "UPDATE murid SET nama='Kadek Budi', umur = 21 WHERE id = 3";

if(mysqli_query($koneksi, $query)){
	echo 'Update data berhasil';
}

//menutup koneksi
mysqli_close($koneksi);
?>