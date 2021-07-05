<?php
	include "./BD/conexaoBD.php";

	function inserirCliente($nome_cliete, $cpf, $email, $sexo, $telefone, $data_nascimento)
	{
		global $conexao;
		$prepara = $conexao->prepare("INSERT INTO cliente (nome_cliente, cpf, email, sexo, telefone, data_nascimento) VALUES (?, ?, ?, ?, ?, ?)");
		$prepara->bind_param("ssssss", $nome_cliete, $cpf, $email, $sexo, $telefone, $data_nascimento);
		$prepara->execute();	
	}

	function atualizarAnimal($nome, $peso, $idade, $sexo, $descricao, $historico, $tipo, $status, $id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("UPDATE animal SET nome = ?, peso = ?, idade = ?, sexo = ?, descricao = ?, historico = ?, tipo = ?, status = ? WHERE id = ?");
	      $prepara->bind_param("sdisssssi", $nome, $peso, $idade, $sexo, $descricao, $historico, $tipo, $status, $id);
	      $prepara->execute();
	}

	function excluirAnimal($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("DELETE FROM animal WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	}

	function selecionarAnimalId($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT * FROM animal WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      return $resultado->fetch_object();
	}

	function selecionarTodosAnimais()
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT * FROM animal");
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      while($a = $resultado->fetch_object()){
		  $animais[] = $a;
	      }
	      return $animais;
	}
?>