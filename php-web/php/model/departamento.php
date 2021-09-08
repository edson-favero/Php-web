<?php
	include "C:/xampp/htdocs/Php-web/php-web/php/conexao_mysql.php";

	function inserirDepartamento($nome_departamento, $email, $local_trabalho, $telefone)
	{
		global $conexao;
		$prepara = $conexao->prepare("INSERT INTO departamento (nome_departamento, email, local_trabalho, telefone) VALUES (?, ?, ?, ?)");
		$prepara->bind_param("ssss", $nome_departamento, $email, $local_trabalho, $telefone);
		$prepara->execute();	
	}

	function atualizarDepartamento($nome_departamento, $email, $local_trabalho, $telefone, $id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("UPDATE departamento SET nome_departamento = ?, email = ?, local_trabalho = ?, telefone = ? WHERE id = ?");
	      $prepara->bind_param("ssssi", $nome_departamento, $email, $local_trabalho, $telefone, $id);
	      $prepara->execute();
	}

	function excluirDepartamento($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("DELETE FROM departamento WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	}

	function selecionarDepartamentoId($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT * FROM departamento WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      return $resultado->fetch_object();
	}

	function selecionarTodosDepartamentos()
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT * FROM departamento");
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      while($a = $resultado->fetch_object()){
		  $departamentos[] = $a;
	      }
	      return $departamentos;
	}
?>