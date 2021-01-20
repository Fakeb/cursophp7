<?php

$id = (isset($_GET["id"]))?$_GET["id"]:1;

if (!is_numeric($id) || strlen($id)>5){ // maneira de evitar o problema
    exit("Pegamos você");
}

$conn = mysqli_connect("localhost", "root", "fake", "dbphp7");

$sql = "SELECT * FROM TB_USUARIOS WHERE ID_USUARIO = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) { //php?id=2 OR 1 = 1 --        -> na url do site para acessar todos dados

    var_dump($resultado);

}



?>