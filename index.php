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
//$usuario = new Usuario();
//$usuario->login("joao", "12345");

//echo $usuario;


//Inserindo um novo usuario no banco de dados

//$aluno = new Usuario("aluno2", "@lun1");  //opção 2

//$aluno->setDeslogin("aluno"); //opção 1
//$aluno->setDessenha("@lun0"); //opção 1
//$aluno->insert();
//echo $aluno;


//Fazendo um updadte no banco de dados
//$usuario = new Usuario();
//$usuario->loadById(6);
//$usuario->update("professor", "pro123");
//echo $usuario;


//Fazendo um updadte no banco de dados

$usuario = new Usuario();

$usuario->loadById(5);

$usuario->delete();

echo $usuario;
