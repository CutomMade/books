<?php

$conn = mysqli_connect('localhost','id20952656_denzel07','@Bozzin2023','id20952656_shop_db') or die('connection failed');

$mysqli = new mysqli('localhost', 'id20952656_denzel07', '@Bozzin2023', 'id20952656_shop_db');
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
return $mysqli;


?>