<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "construtora";

	$conexao = new mysqli ($servidor, $usuario, $senha, $banco);

	if ($conexao->connect_error)
		die ("Conexão falhou: " . $conexao->connect_error);

	$sql = "CREATE TABLE cliente (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome_cliente VARCHAR(30),
		cpf VARCHAR(15),
		email VARCHAR(30),
		data_nascimento Date,
		telefone VARCHAR(30),
		sexo VARCHAR(15)
		)";
	if ($conexao->query($sql) === TRUE)
		echo "Tabela cliente criada com sucesso";
	else
		echo "Erro criando a tabela cliente: " . $conexao->error;

	$conexao->close();
?>