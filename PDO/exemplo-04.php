<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "fake");

$stmt = $conn->prepare("UPDATE TB_USUARIOS SET DESLOGIN =:LOGIN, DESSENHA =:PASSWORD WHERE ID_USUARIO = :ID");

$login = "cleber";
$password = "22222";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados alterados";


?>