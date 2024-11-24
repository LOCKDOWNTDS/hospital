<?php 

try{
	$db =new PDO("mysql:host=localhost; dbname=hastane_oto; charest=utf8", 'root','');
	//echo 'veritabanı bağlantısı başarılı';
}
catch(Exception $e){
	echo $e->getMessage();	
}



?>