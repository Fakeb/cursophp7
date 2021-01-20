<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "fake");

$conn->beginTransaction(); // transação

$stmt = $conn->prepare("DELETE FROM TB_USUARIOS WHERE ID_USUARIO = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollback(); // para cancelar a transação
$conn->commit(); // para confirmar a transação

echo "Dados EXCLUIDOS";

?>