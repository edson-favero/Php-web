<?php
	
	if (empty($_POST['nome']) || empty($_POST['cpf']) || (empty($_POST['email']) ||  empty($_POST['data_nascimento']) || (empty($_POST['telefone']) )
	{
        if(empty($_POST['sexoM']) && empty($_POST['SexoF']))
        {
            echo "Preencher os dados<br>";
            echo "Você será redirecionado para a página de cadastro.<br>";
            header ("refresh:5;url=\php-web/CadFun.html");
        }
        else{
            echo "Cadastro Realizado<br>";
            echo "Você será redirecionado para a página index.<br>";
            header ("refresh:5;url=\php-web/index.html");
        }
		
	}
?>