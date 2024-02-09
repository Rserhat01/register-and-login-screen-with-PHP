<?php 
require_once 'baglan.php';

if($_POST['pass'] == $_POST['cpass']){
	if ($_POST) {
		$kaydet = $db->prepare("INSERT into giris set 
			adi=:adi,
			soyadi=:soyadi,
			kadi=:kadi,
			sifre=:sifre
			");

		$insert = $kaydet->execute(array(
			'adi' => $_POST['name'],
			'soyadi' => $_POST['sname'],
			'kadi' => $_POST['user'],
			'sifre' => $_POST['pass']
		));


		if($insert){

			echo "Kayıt başarılı.";

			header("Location:sign_up.php?durum=ok");

			exit;


		}else{

			echo "Kayıt başarısız.";
		//header("Location:crud.php?durum=no");
		//exit;

		}
	}
}else{

	if($_POST['pass'] !== $_POST['cpass']){
		echo '<script language="javascript">';
		echo 'alert("Şifrelerin aynı olduğundan emin olun")';  
		echo '</script>';
	}
	// header("Location:sign_up.php?err=confirm");


	
}

/*

if(isset($_POST['kayit'])){
	if($_POST['pass'] !== $_POST['cpass']){
		echo '<script language="javascript">';
		echo 'alert("Şifrelerin aynı olduğundan emin olun")';  
		echo '</script>';
	}
}

*/
?>