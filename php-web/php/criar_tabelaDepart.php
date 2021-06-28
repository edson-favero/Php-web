<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "construtora";

	$conexao = new mysqli ($servidor, $usuario, $senha, $banco);

	if ($conexao->connect_error)
		die ("Conexão falhou: " . $conexao->connect_error);

	$sql = "CREATE TABLE departamento (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome_departamento VARCHAR(30),
		email VARCHAR(30),
		local_trabalho VARCHAR(30),
		telefone VARCHAR(30)
		)";
	if ($conexao->query($sql) === TRUE)
		echo "Tabela departamento criada com sucesso";
	else
		echo "Erro criando a tabela departamento: " . $conexao->error;

	$conexao->close();
?>