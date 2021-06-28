<?php
	
	if (empty($_POST['valor_obra']) || empty($_POST['nome']) || empty($_POST['nome_eng']) ||  empty($_POST['nome_fun']) || empty($_POST['nome_cliente'])||  empty($_POST['num_obra']) ||  empty($_POST['data_obra']))
	{
		echo "Preencher os dados<br>";
		echo "Você será redirecionado para a página de cadastro.<br>";
		header ("refresh:5;url=\php-web/CadObra.html");
	}else{
		echo "Cadastro Realizado<br>";
		echo "Você será redirecionado para a página index.<br>";
		header ("refresh:5;url=\php-web/index.html");
	}
?>