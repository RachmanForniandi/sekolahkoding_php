<?php
//membuat database di phpmyadmin

//menyambungkan database

$koneksi= mysqli_connect('localhost','root','','sekolah');

//menguji error
if(!$koneksi){
	die('Koneksi ke databse error' . mysqli_connect_error());
}

//query membuat database

//FILTER: LIMIT, ORDER, WHERE, DESC(bawah ke atas), ASC(atas ke bawah)

//$query = "DELETE FROM murid WHERE id=7";
//$query = "DELETE FROM murid WHERE id IN (2,3)";
$query = "DELETE FROM murid WHERE id BETWEEN 4 AND 6";

if(mysqli_query($koneksi, $query)){
	echo 'Delete data berhasil';
}

//menutup koneksi
mysqli_close($koneksi);
?>