<?php
	include "C:/xampp/htdocs/Php-web/php-web/php/conexao_mysql.php";

	function inserirCliente($nome_cliente, $cpf, $email, $telefone)
	{
		global $conexao;
		$prepara = $conexao->prepare("INSERT INTO cliente (id, nome_cliente, cpf, email, telefone) VALUES (?, ?, ?, ?, ?)");
		$prepara->bind_param("issss", $id, $nome_cliente, $cpf, $email, $telefone);
		$prepara->execute();	
	}

	function atualizarCliente($nome_cliente, $cpf, $email, $telefone, $id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("UPDATE cliente SET nome_cliente = ?, cpf = ?, email = ?, telefone = ? WHERE id = ?");
	      $prepara->bind_param("ssssi", $nome_cliente, $cpf, $email, $telefone, $id);
	      $prepara->execute();
	}

	function excluirCliente($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("DELETE FROM cliente WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	}

	function selecionarClienteId($id)
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT * FROM cliente WHERE id = ?");
	      $prepara->bind_param("i", $id);
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      return $resultado->fetch_object();
	}

	function selecionarTodosClientes()
	{
	      global $conexao;
	      $prepara = $conexao->prepare("SELECT * FROM cliente");
	      $prepara->execute();
	      $resultado = $prepara->get_result();
	      while($a = $resultado->fetch_object()){
		  $clientes[] = $a;
	      }
	      return $clientes;
	}
?>