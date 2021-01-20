<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("SELECT * FROM TB_USUARIOS ORDER BY id_usuario");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    foreach ($row as $key => $value) {
        $key = strtolower($key);
        $key = ucfirst($key);
        echo "<strong>" . $key . "</strong> " . $value . "<br/>";
    }

    echo "=======================================================<br/>";

}

?>