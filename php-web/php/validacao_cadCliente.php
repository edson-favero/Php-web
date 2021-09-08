<?php
	
	if (empty($_POST['nome_cliente']) || empty($_POST['cpf']) || empty($_POST['email']) || empty($_POST['telefone']))
	{
		echo "Preencher os dados<br>";
		echo "Você será redirecionado para a página de cadastro.<br>";
		header ("refresh:5;url=../CadCliente.html");
	}
	else
	{
		if (isset($_POST["idOculto"]))
		{
			require_once "model/cliente.php";
			atualizarCliente($_POST["nome_cliente"], $_POST["cpf"], $_POST["email"], $_POST["telefone"], $_POST["idOculto"]);
			echo "Atualização efetuada com sucesso! <br>";
		}
		else
		{
			require_once "model/cliente.php";
			inserirCliente($_POST["nome_cliente"], $_POST["cpf"], $_POST["email"], $_POST["telefone"]);
			echo "Cadastro Realizado<br>";
		}
		echo "Você será redirecionado para a página index.<br>";
		header ("refresh:5;url=../index.html");
		}
?>
	


