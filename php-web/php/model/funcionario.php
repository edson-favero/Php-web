<?php
	include "C:/xampp/htdocs/Php-web/php-web/php/conexao_mysql.php";

	function inserirFuncionario($nome_funcionario, $cpf, $email, $id_depart, $data_nascimento, $telefone)
	{
		global $conexao;
		$prepara = $conexao->prepare("INSERT INTO funcionario (nome_funcionario, cpf, email, id_depart, data_nascimento, telefone) VALUES (?, ?, ?, ?, ?, ?)");
		$prepara->bind_param("sssiss", $nome_funcionario, $cpf, $email, $id_depart, $data_nascimento, $telefone);
		$prepara->execute();	
	}

	function atualizarFuncionario($nome_funcionario, $cpf, $email, $id_depart, $data_nascimento, $telefone, $id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("UPDATE funcionario SET nome_funcionario = ?, cpf = ?, email = ?, id_depart = ?, data_nascimento = ?, telefone = ? WHERE id = ?");
	      $prepara->bind_param("sssissi", $nome_funcionario, $cpf, $email, $id_depart, $data_nascimento, $telefone, $id);
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
	    $prepara = $conexao->prepare("SELECT funcionario.id as lid, funcionario.nome_funcionario as fnome_funcionario, funcionario.cpf as fcpf, funcionario.email as femail, departamento.nome_funcionario_departamento as dnome_funcionario, funcionario.data_nascimento as fdata_nascimento, funcionario.telefone as ftelefone,  FROM funcionario, departamento WHERE funcionario.id_depart = departamento.id");
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      while($ad = $resultado->fetch_object()){
		  $funcionarios[] = $ad;
	      }
	      return $funcionarios;
	}
?>