<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error) {

	echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) values(?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

//outra inserção usando stmt

//$Login = "usuario";
//$pass = "1245";

//$stmt->execute();

?>