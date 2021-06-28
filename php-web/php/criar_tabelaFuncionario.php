<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "construtora";

	$conexao = new mysqli ($servidor, $usuario, $senha, $banco);

	if ($conexao->connect_error)
		die ("Conexão falhou: " . $conexao->connect_error);

	$sql = "CREATE TABLE funcionario (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome_funcionario VARCHAR(30),
		cpf VARCHAR(15),
		email VARCHAR(30),
		endereco VARCHAR(30),
		id_depart VARCHAR(30),
		data_nascimento Date,
		telefone VARCHAR(30),
		sexo VARCHAR(15),
		FOREIGN KEY (id_depart) REFERENCES departamento (id)
		)";
	if ($conexao->query($sql) === TRUE)
		echo "Tabela funcionário criada com sucesso";
	else
		echo "Erro criando a tabela funcionário: " . $conexao->error;

	$conexao->close();
?>