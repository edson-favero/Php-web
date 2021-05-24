<?php
	
	if (empty($_POST['nome']) || empty($_POST['cra']) ||  empty($_POST['data_nascimento']) )
	{
        if(empty($_POST['sexoM']) && empty($_POST['SexoF']))
        {
            echo "Preencher os dados<br>";
            echo "Você será redirecionado para a página de cadastro.<br>";
            header ("refresh:5;url=\php-web/CadCliente.html");
        }
        else{
            echo "Cadastro Realizado<br>";
            echo "Você será redirecionado para a página index.<br>";
            header ("refresh:5;url=\php-web/index.html");
        }
		
	}
?>