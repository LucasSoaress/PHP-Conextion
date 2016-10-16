<?php

require_once ("conexao.php");
	
$nome = mysqli_real_escape_string ( $mysqli, $_POST['nome'] );
$senha = mysqli_real_escape_string( $mysqli, $_POST['senha']);
$senhaConvertida = md5($senha);

$sql = $mysqli->query("SELECT * FROM usuarios WHERE nome = '$nome'");

if($sql)
{
	$dados = mysqli_num_rows($sql);
	
	if($dados == 1) // verifica se ja tem cadastro utilizando este nome de usuario
	{
		echo '1'; // nome de usuario ja cadastrado
	}
	else // se não houver, faz o cadastro do usuario
	{
		//echo '0'; // posso cadastrar esse nome
		$res = $mysqli->query("INSERT INTO usuarios (nome, senha) VALUES ('$nome', '$senhaConvertida')"); // inserindo os valores no banco de dados
		
		if($res) // verifica se inseriu corretamente e da um feedback
		{
			echo '10';
		}
		else
		{
			echo '11';
		}
	}
}

$q->close();

?>