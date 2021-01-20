<?php

require_once("config.php");
//carregar tudo do banco
// $sql = new SQL();
// $usuarios = $sql->select("SELECT * FROM TB_USUARIOS");
// echo json_encode($usuarios);

//carrega um usuario
// $user = new Usuario();
// $user->loadById(1);
// echo $user;

//carrega todos usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

//carrega os usuarios que tem "ro" no login
// $search = Usuario::search("ro");
// echo json_encode($search);

//carrega um usuario usando o login e senha
// $usuario = new Usuario();
// $usuario->login("root","!@#$%");
// echo $usuario;

//criando novo usuario
// $usuario = new Usuario("novoUsuario","novaSenha");
// $usuario->insert();
// echo $usuario;

//alterar um usuario
// $usuario = new Usuario();
// $usuario->loadById(5);
// $usuario->update("professor", "!@##@@");
// echo $usuario;

//deletar um usuario
$usuario = new Usuario();

$usuario->loadById(4);

$usuario->delete();

echo $usuario;

?>