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

$query = "INSERT INTO murid (nama, umur, alamat)
			VALUES('Jesica', 22, 'Kebayoran'); ";

$query .= "INSERT INTO murid (nama, umur, alamat)
			VALUES('Josuke', 20, 'Sudirman')";
 
if(mysqli_multi_query($koneksi, $query)){
	echo 'Insert data berhasil';
}

//menutup koneksi
mysqli_close($koneksi);
?>