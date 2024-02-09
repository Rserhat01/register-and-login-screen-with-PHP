<?php
require_once 'baglan.php';

if ($_POST) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $login = $db->prepare("SELECT kadi, sifre FROM giris WHERE kadi = :username AND sifre = :password");
    $login->execute(array(':username' => $username, ':password' => $password));

    $result = $login->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        header("Location:welcome.php?user=". $result['kadi']);
        //echo "Giriş başarılı. Hoşgeldin " . $result['kadi'];
    } else {
        echo "Giriş başarısız. Lütfen giriş bilgilerinizi kontrol edip tekrar deneyiniz.";
    }
}


?>
