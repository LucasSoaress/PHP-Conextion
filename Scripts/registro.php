<?php

require_once ("conexao.php");

$senha = md5('102030');

$insere = mysql_query("INSERT INTO usuarios (nome, senha)VALUES ('nexus', '$senha')");


if($insere) echo 'Cadastro realizado com sucesso';
else echo 'Error ao cadastrar';



?>