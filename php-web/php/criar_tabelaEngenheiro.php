<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "construtora";

	$conexao = new mysqli ($servidor, $usuario, $senha, $banco);

	if ($conexao->connect_error)
		die ("Conexão falhou: " . $conexao->connect_error);

	$sql = "CREATE TABLE engenheiro (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome_engenheiro VARCHAR(30),
		cra VARCHAR(9),
		email VARCHAR(30),
		data_nascimento Date,
		sexo VARCHAR(15)
		)";
	if ($conexao->query($sql) === TRUE)
		echo "Tabela engenheiro criada com sucesso";
	else
		echo "Erro criando a tabela engenheiro: " . $conexao->error;

	$conexao->close();
?>