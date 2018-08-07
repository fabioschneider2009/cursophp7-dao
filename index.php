<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
 * 
 */


//Carrega um usuário
//$sql = new Usuario();
//$sql->loadById(1);
//echo $sql->getIdusuario() . " - " . $sql->getDeslogin() . " - " . $sql->getDessenha();
//echo $sql;

// Carrega uma lista de Usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usúários filtrado por uma busca
//$lista = Usuario::search("usuario");
//echo json_encode($lista);

// Carrega um usuário autenticado
//$usuario = new Usuario();
//$usuario->login("usuario", "senha");
//echo $usuario;

// Insere um usuário utilizando procedure
$aluno = new Usuario("aluno","765");
$aluno->insert();
echo $aluno;

// Atualizando um registro
//$update = new Usuario();
//$update->loadById(1);
//$update->update("professor","123456");
//echo $update;

// Deletando um registro
//$delete = new Usuario();
//$delete->loadById(3);
//$delete->delete();




?>