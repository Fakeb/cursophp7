<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "fake");

$stmt = $conn->prepare("INSERT INTO TB_USUARIOS (DESLOGIN, DESSENHA) VALUES(:LOGIN, :PASSWORD)");

$login = "testando";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "dados inseridos";


?>