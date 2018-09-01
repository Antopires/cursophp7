<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);


// chama um usuario
//$root = new Usuario();

//$root->loadById(1);

//echo $root;


//chama uma lista de usuarios

//$lista = Usuario::getList();

//echo json_encode($lista);


//chama uma lista de usuarios buscando pelo login

//$search = Usuario::search("jo");

//echo json_encode($search);

//chama um usuario usando login e senha
$usuario = new Usuario();
$usuario->login("joao", "12345");

echo $usuario;
