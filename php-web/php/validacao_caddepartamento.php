<?php
	
	if (empty($_POST['nome']) || empty($_POST['depart']) || (empty($_POST['email']) ||  empty($_POST['local']) || (empty($_POST['telefone']) )
	{
     
        {
            echo "Preencher os dados<br>";
            echo "Você será redirecionado para a página de cadastro.<br>";
            header ("refresh:5;url=\php-web/Caddepartamento.html");
        }
        else{
            echo "Cadastro Realizado<br>";
            echo "Você será redirecionado para a página index.<br>";
            header ("refresh:5;url=\php-web/index.html");
        }
		
	}
?>