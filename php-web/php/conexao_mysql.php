<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$bd="construtora";

	$conexao = new mysqli ($servidor, $usuario, $senha, $bd);

	if ($conexao->connect_error)
		die ("Conexão falhou: " . $conexao->connect_error);
	echo "Conexão realizada com sucesso<br>";

?>
