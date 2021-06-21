<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "construtora";

	$conexao = new mysqli ($servidor, $usuario, $senha, $banco);

	if ($conexao->connect_error)
		die ("Conexão falhou: " . $conexao->connect_error);

	$sql = "CREATE TABLE obra (
		id_obra INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome VARCHAR(30),
		inicio_obra date NULL DEFAULT NULL,
        departemento_nome VARCHAR(30) NULL DEFAULT NULL,
        nome_engenheiro VARCHAR(30) NULL DEFAULT NULL,
        nome_cliente VARCHAR(30) NULL DEFAULT NULL

		)";
	if ($conexao->query($sql) === TRUE)
		echo "Tabela obra criada com sucesso";
	else
		echo "Erro criando a tabela obra: " . $conexao->error;

	$conexao->close();
?>
