<?php
//membuat database di phpmyadmin

//menyambungkan database

$koneksi= mysqli_connect('localhost','root','','sekolah');

//menguji error
if(!$koneksi){
	die('Koneksi ke databse error' . mysqli_connect_error());
}

//query membuat database
$query = "SELECT * FROM murid";
$hasil = mysqli_query($koneksi, $query);

if(mysqli_num_rows($hasil) > 0 ){
	
	while ($data = mysqli_fetch_assoc($hasil)){
		echo $data['nama']. " ". $data['alamat'] . "<br>";
	}
}

//menutup koneksi
mysqli_close($koneksi);
?>