<?php
	include "C:/xampp/htdocs/Php-web/php-web/php/conexao_mysql.php";

	function inserirEngenheiro($nome, $cra, $email)
	{
		global $conexao;
		$prepara = $conexao->prepare("INSERT INTO engenheiro (nome, cra, email) VALUES (?, ?, ?)");
		$prepara->bind_param("sss", $nome, $cra, $email);
		$prepara->execute();	
	}

	function atualizarEngenheiro($nome, $cra, $email, $id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("UPDATE engenheiro SET nome = ?, cra = ?, email = ? WHERE id = ?");
	      $prepara->bind_param("sssi", $nome, $cra, $email, $id);
	      $prepara->execute();
	}

	function excluirEngenheiro($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("DELETE FROM engenheiro WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	}

	function selecionarEngenheiroId($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT * FROM engenheiro WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      return $resultado->fetch_object();
	}

	function selecionarTodosEngenheiro()
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT * FROM engenheiro");
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      while($a = $resultado->fetch_object()){
		  $engenheiros[] = $a;
	      }
	      return $engenheiros;
	}
?>