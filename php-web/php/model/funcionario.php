<?php
	include "C:/xampp/htdocs/Php-web/php-web/php/conexao_mysql.php";

	function inserirFuncionario($nome, $cpf, $email, $id_depart, $data_nascimento, $telefone)
	{
		global $conexao;
		$prepara = $conexao->prepare("INSERT INTO funcionario (nome, cpf, email, id_depart, data_nascimento, telefone) VALUES (?, ?, ?, ?, ?, ?)");
		$prepara->bind_param("sssiss", $nome, $cpf, $email, $id_depart, $data_nascimento, $telefone);
		$prepara->execute();	
	}

	function atualizarFuncionario($nome, $cpf, $email, $id_depart, $data_nascimento, $telefone, $id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("UPDATE funcionario SET nome = ?, cpf = ?, email = ?, id_depart = ?, data_nascimento = ?, telefone = ? WHERE id = ?");
	      $prepara->bind_param("sssissi", $nome, $cpf, $email, $id_depart, $data_nascimento, $telefone, $id);
	      $prepara->execute();
	}

	function excluirFuncionario($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("DELETE FROM funcionario WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	}

	function selecionarFuncionarioId($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT * FROM funcionario WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      return $resultado->fetch_object();
	}

	function selecionarTodasFuncionarios()
	{
	      global $conexao;
	    $prepara = $conexao->prepare("SELECT funcionario.id as id, funcionario.nome as fnome  FROM funcionario");
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      while($ad = $resultado->fetch_object()){
		  $funcionarios[] = $ad;
	      }
	      return $funcionarios;
	}
?>