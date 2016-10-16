<?php
require_once ("conexao.php");

$nome = mysqli_real_escape_string ( $mysqli, $_POST['nome'] );
$senha = mysqli_real_escape_string( $mysqli, $_POST['senha']);
$senhaConvertida = md5($senha);

$sql = $mysqli->query("SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senhaConvertida'");

if($sql)
{
	$dados = mysqli_num_rows($sql);
	
	if($dados == 1)
	{
		echo '1'; // usuario tem cadastro e pode logar
	}
	else
	{
		echo '0'; // usuario não tem cadastro e não pode logar
	}
}

$q->close();


?>