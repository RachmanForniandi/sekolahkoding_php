<?php
//membuat database di phpmyadmin

//menyambungkan database

$koneksi= mysqli_connect('localhost','root','','sekolah');

//menguji error
if(!$koneksi){
	die('Koneksi ke databse error' . mysqli_connect_error());
}

//query membuat database
$query = "CREATE DATABASE new_sekolahkoding";
$hasil = mysqli_query($koneksi, $query);

if(mysqli_query($koneksi, $query) ){
	echo 'database berhasil dibuat';
}else{
	echo 'database gagal dibuat !!';
}

//menutup koneksi
mysqli_close($koneksi);
?>