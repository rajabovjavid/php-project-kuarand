<?php 

//Çoklu Dil Mantığı if/else

//$_SESSION['tr'];
//veya
////$_SESSION['eng'];

try {
	$db=new PDO("mysql:host=localhost:8889;dbname=eticaret_final;charset=utf8",'root','mysql');
//	echo "veritabanı bağlantısı başarılı";
}
catch (PDOExpception $e) {
	echo $e->getMessage();
}

 ?>