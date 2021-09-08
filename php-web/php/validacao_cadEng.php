<?php
	
	if (empty($_POST['nome']) || empty($_POST['cra']) ||  empty($_POST['email']))
	{
		echo "Preencher os dados<br>";
		echo "Você será redirecionado para a página de cadastro.<br>";
		header ("refresh:5;url=../CadEnge.html");
    }
    else
	{
		if (isset($_POST["idOculto"]))
		{
			require_once "model/engenheiro.php";
			atualizarEngenheiro($_POST["nome"], $_POST["cra"], $_POST["email"], $_POST["idOculto"]);
			echo "Atualização efetuada com sucesso! <br>";
		}
		else
		{
			require_once "model/engenheiro.php";
			inserirEngenheiro($_POST["nome"], $_POST["cra"], $_POST["email"]);
			echo "Cadastro Realizado<br>";
		}
		
		echo "Você será redirecionado para a página index.<br>";
		header ("refresh:5;url=../index.html");
	}
?>
	

