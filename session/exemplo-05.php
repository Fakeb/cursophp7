<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()){

    case PHP_SESSION_DISABLED:
        echo "Sessao desabilitada";
    break;

    case PHP_SESSION_NONE:
        echo "Sessao habilitada mas não iniciada";
    break;

    case PHP_SESSION_ACTIVE:
        echo "Sessao habilitada e iniciada";
    break;

}

?>