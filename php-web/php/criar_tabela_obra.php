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
        id_depart INT,
        id_engenheiro INT,
        id_cliente INT,
		FOREIGN KEY (id_depart) REFERENCES departamento (id),
		FOREIGN KEY (id_engenheiro) REFERENCES engenheiro (id),
		FOREIGN KEY (id_cliente) REFERENCES cliente (id)

		)";
	if ($conexao->query($sql) === TRUE)
		echo "Tabela obra criada com sucesso";
	else
		echo "Erro criando a tabela obra: " . $conexao->error;

	$conexao->close();
?>
