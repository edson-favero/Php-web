<?php
	include "C:/xampp/htdocs/Php-web/php-web/php/conexao_mysql.php";
	function inserirProjeto($nome, $id_obra, $id_func)
	{
		global $conexao;
		$prepara = $conexao->prepare("INSERT INTO projeto (nome, id_obra, id_func) VALUES (?, ?, ?)");
		$prepara->bind_param("sii", $nome, $id_obra, $id_func);
		$prepara->execute();	
	}

	function atualizarProjeto($nome, $id_obra, $id_func, $id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("UPDATE projeto SET nome = ?, id_Obra = ?, id_func = ? WHERE id = ?");
	      $prepara->bind_param("siii", $nome, $id_obra, $id_func, $id);
	      $prepara->execute();
	}

	function excluirProjeto($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("DELETE FROM projeto WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	}

	function selecionarTodasProjetos()
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT projeto.id as id, projeto.nome as pnome, obra.nome as onome, funcionario.nome as fnome FROM projeto, obra, funcionario WHERE projeto.id_obra = obra.id and projeto.id_func = funcionario.id" );
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      while($ob = $resultado->fetch_object()){
		  $obras[] = $ob;
	      }
	      return $obras;
	}
?>
