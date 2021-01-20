<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "fake");

$stmt = $conn->prepare("DELETE FROM TB_USUARIOS WHERE ID_USUARIO = :ID");

$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados EXCLUIDOS";


?>