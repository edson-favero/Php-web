<?php
	include "C:/xampp/htdocs/Php-web/php-web/php/conexao_mysql.php";
	function inserirObra($nome, $inicio_obra, $id_depart, $id_engenheiro, $id_cliente)
	{
		global $conexao;
		$prepara = $conexao->prepare("INSERT INTO obra (nome, inicio_obra, id_depart, id_engenheiro, id_cliente) VALUES (?, ?, ?, ?, ?)");
		$prepara->bind_param("ssiii", $nome, $inicio_obra, $id_depart, $id_engenheiro, $id_cliente);
		$prepara->execute();	
	}

	function atualizarObra($nome, $inicio_obra, $id_depart, $id_engenheiro, $id_cliente, $id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("UPDATE obra SET nome = ?, inicio_obra = ?, id_depart = ?, id_engenheiro = ?, id_cliente = ? WHERE id = ?");
	      $prepara->bind_param("ssiiii", $nome, $inicio_obra, $id_depart, $id_engenheiro, $id_cliente, $id);
	      $prepara->execute();
	}

	function excluirObra($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("DELETE FROM obra WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	}

	function selecionarTodasObras()
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT obra.id, obra.nome as onome, obra.inicio_obra as iobra, departamento.nome_departamento as dnome, cliente.nome_cliente as cnome, engenheiro.nome as enome  FROM obra, departamento, cliente, engenheiro WHERE obra.id_depart = departamento.id and obra.id_engenheiro = engenheiro.id and obra.id_cliente = cliente.id" );
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      while($ob = $resultado->fetch_object()){
		  $obras[] = $ob;
	      }
	      return $obras;
	}
?>
