<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM TB_USUARIOS ORDER BY DESLOGIN");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
    
    array_push($headers, ucfirst($key));

}

$file = fopen("usuarios.csv","w+");

fwrite($file, implode(", ", $headers) . "\r\n" );

foreach ($usuarios as $row) {
    
    $data = array();

    foreach ($row as $key => $value) {
        
        array_push($data, $value);
    
    } // terminou de percorrer as colunas

    fwrite($file, implode(", ", $data) . "\r\n" );

} // terminou de percorrer as linhas

fclose($file);

echo "Arquivo escrito com sucesso";

?>