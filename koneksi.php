<?php 
// isi nim host, username mysql, dan alamat mysql anda
$host = $db_name("localhost","root","xxx");
 
if($host){
	echo "koneksi host berhasil.<br/>";
}else{
	echo "koneksi gagal.<br/>";
}
// isikan dengan nama database yang akan di hubungkan
$db = $db_name("db_name");
 
if($db){
	echo "koneksi database berhasil.";
}else{
	echo "koneksi database gagal.";
}
?>