<?php

session_id('h4smj0omcv9lr8plqh7rdsv91u');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);


?>