<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM usuarios");

echo json_encode($usuarios);
 * 
 */

$sql = new Usuario();

$sql->loadById(1);

//echo $sql->getIdUsuario() . " - " . $sql->getUsuario() . " - " . $sql->getSenha();

echo $sql;
?>