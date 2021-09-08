<?php
	
	if (empty($_POST['nome_departamento']) || empty($_POST['email']) ||  empty($_POST['local_trabalho']) || empty($_POST['telefone']))
	{
		echo "Preencher os dados<br>";
		echo "Você será redirecionado para a página de cadastro.<br>";
		header ("refresh:5;url=../Caddepartamento.html");
	}
	else
	{
		if (isset($_POST["idOculto"]))
		{
			require_once "model/departamento.php";
			atualizarDepartamento($_POST["nome_departamento"], $_POST["email"], $_POST["local_trabalho"], $_POST["telefone"], $_POST["idOculto"]);
			echo "Atualização efetuada com sucesso! <br>";
		}
		else
		{
			require_once "model/departamento.php";
			inserirDepartamento($_POST["nome_departamento"], $_POST["email"], $_POST["local_trabalho"], $_POST["telefone"]);
			echo "Cadastro Realizado<br>";
		}		
		
		echo "Você será redirecionado para a página index.<br>";
		header ("refresh:5;url=../index.html");
	}

?>