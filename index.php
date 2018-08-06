<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM usuarios");

echo json_encode($usuarios);
 * 
 */


//Carrega um usuário
//$sql = new Usuario();
//$sql->loadById(1);
//echo $sql->getIdUsuario() . " - " . $sql->getUsuario() . " - " . $sql->getSenha();
//echo $sql;

// Carrega uma lista de Usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usúários filtrado por uma busca
//$lista = Usuario::search("teste");
//echo json_encode($lista);

// Carrega um usuário autenticado
$usuario = new Usuario();
$usuario->login("teste", "123");
echo $usuario;
?>