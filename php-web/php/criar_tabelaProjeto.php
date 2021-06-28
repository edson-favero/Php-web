<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "construtora";

	$conexao = new mysqli ($servidor, $usuario, $senha, $banco);

	if ($conexao->connect_error)
		die ("Conexão falhou: " . $conexao->connect_error);

	$sql = "CREATE TABLE projeto (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome VARCHAR(30),
        id_obra INT UNSIGNED,
        id_func INT UNSIGNED,
		FOREIGN KEY (id_obra) REFERENCES obra (id),
		FOREIGN KEY (id_func) REFERENCES funcionario (id)
		

		)";
	if ($conexao->query($sql) === TRUE)
		echo "Tabela obra criada com sucesso";
	else
		echo "Erro criando a tabela obra: " . $conexao->error;

	$conexao->close();
?>
