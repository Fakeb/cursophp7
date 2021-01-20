<?php

$data = array(
    "empresa"=>"Empresa random"
);

setcookie("nome_do_cookie", json_encode($data), time() + 3600 );

echo "ok";

?>