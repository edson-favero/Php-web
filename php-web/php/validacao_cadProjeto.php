<?php
	
	if (empty($_POST['nome']) || empty($_POST['valor_obra']) ||  empty($_POST['nome_func']) )
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