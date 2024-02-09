<?php  
	

try{


	$db = new PDO("mysql:host=localhost;dbname=login;charset=utf8",'root','');


	//echo "Veri tabanı bağlantısı başarılı";
}catch(PDOExpception $e){


	echo $e->getMessage();
}


/*

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "giris";
$conn = new mysqli($servername,
	$username, $password, $db_name, 3307);
if($conn->connect_error){
	die("Connection failed".$conn->connect_error);
}
echo "Connection successful";

*/
?>
