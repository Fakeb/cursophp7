<form method="post">

    <input type="text" name="busca">
    <button type="submit">Enviar</button>

</form>

<?php

if(isset($_POST['busca'])){

    echo strip_tags($_POST['busca'], "<strong><a>"); // nao permite que digite uma tag para enviar via post, no exemplo a tag strong e A são permitidos
    echo htmlentities($_POST['busca']); // transforma as tags em texto

}

?>