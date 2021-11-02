<?php

$conn = new mysqli('localhost','root','','mandly_manuel_webshop');
if($conn->errno > 0){
    die('Az adatbázis nem elérhető!');
} 
else
{
$conn->set_charset("utf8");
}
?>