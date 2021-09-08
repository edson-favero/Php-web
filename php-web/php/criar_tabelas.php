<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "construtora";

	$conexao = new mysqli ($servidor, $usuario, $senha, $banco);

    $sql = "CREATE TABLE engenheiro (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome VARCHAR(30),
		cra VARCHAR(20),
		email VARCHAR (40)
		)";
	if ($conexao->query($sql) === TRUE)
		echo "Tabela engenheiro criada com sucesso\n";
	else
		echo "Erro criando a tabela engenheiro: " . $conexao->error;

        if ($conexao->connect_error)
		die ("Conexão falhou: " . $conexao->connect_error);
   
   
   
    if ($conexao->connect_error)
		die ("Conexão falhou: " . $conexao->connect_error);

	$sql = "CREATE TABLE cliente (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome_cliente VARCHAR(30),
		cpf VARCHAR(30),
		email VARCHAR(30),
		telefone VARCHAR(30)
		)";
	if ($conexao->query($sql) === TRUE)
		echo "Tabela cliente criada com sucesso\n";
	else
		echo "Erro criando a tabela cliente: " . $conexao->error;

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
            echo "Tabela departamento criada com sucesso\n";
        else
            echo "Erro criando a tabela departamento: " . $conexao->error;
    
            if ($conexao->connect_error)
            die ("Conexão falhou: " . $conexao->connect_error);
    
    
    
    
    $sql = "CREATE TABLE funcionario (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome VARCHAR(30),
		cpf VARCHAR(15),
		email VARCHAR(30),
		id_depart INT UNSIGNED,
		data_nascimento Date,
		telefone VARCHAR(30),
		FOREIGN KEY (id_depart) REFERENCES departamento (id)
		)";
	if ($conexao->query($sql) === TRUE)
		echo "Tabela funcionário criada com sucesso\n";
	else
		echo "Erro criando a tabela funcionário: " . $conexao->error;


        if ($conexao->connect_error)
		die ("Conexão falhou: " . $conexao->connect_error);

	
        $sql = "CREATE TABLE obra (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(30),
            inicio_obra date NULL DEFAULT NULL,
            id_depart INT UNSIGNED,
            id_engenheiro INT UNSIGNED,
            id_cliente INT UNSIGNED,
            FOREIGN KEY (id_depart) REFERENCES departamento (id),
            FOREIGN KEY (id_engenheiro) REFERENCES engenheiro (id),
            FOREIGN KEY (id_cliente) REFERENCES cliente (id)
    
            )";
        if ($conexao->query($sql) === TRUE)
            echo "Tabela obra criada com sucesso\n";
        else
            echo "Erro criando a tabela obra: " . $conexao->error;

	
	$sql = "CREATE TABLE projeto (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome VARCHAR(30),
        id_obra INT UNSIGNED,
        id_func INT UNSIGNED,
		FOREIGN KEY (id_obra) REFERENCES obra (id),
		FOREIGN KEY (id_func) REFERENCES funcionario (id)
		

		)";
	if ($conexao->query($sql) === TRUE)
		echo "Tabela obra criada com sucesso\n";
	else
		echo "Erro criando a tabela obra:\n " . $conexao->error;

		if ($conexao->connect_error)
		die ("Conexão falhou: " . $conexao->connect_error);

	

        $conexao->close();



    ?>