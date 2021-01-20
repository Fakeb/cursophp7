<?php

if(!is_dir("teste")) mkdir("teste");

if(!file_exists("teste/teste.txt")){

    fopen("teste/teste.txt","w+");

    echo "Criou o teste.txt";

}
else{

    foreach (scandir("teste") as $item) {
    
        if(!in_array($item, array(".", ".."))){

            unlink("teste/" . $item);

        }

    }

    echo "Apagou o teste.txt";

}

?>