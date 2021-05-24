<?php
	$erros="";
	if (empty($_POST["login"]) || empty($_POST["senha"]))
	{
		$erros .= "Todos os campos devem ser preenchidos <br>";
	}
	if ( strlen($_POST["login"]) < 5)
	{
		$erros .= "O campo Login deve ter no mínimo 5 caracteres<br>";
	}
	if ( strlen($_POST["senha"]) < 6 || strlen($_POST["senha"]) > 8)
	{
		$erros .= "O campo Senha deve ter entre 6 e 8 caracteres<br>";
	}
	if ( strlen($erros) == 0)
	{
		echo "Login efetuado com sucesso! <br>";
		echo "Você será redirecionado para a página inicial.<br>";
		header ("refresh:5;url=\php-web\index.html");
	}
	else
	{
		echo $erros . "<br>";
		echo "Você será redirecionado para a página de login.<br>";
		header ("refresh:5;url=\php-web\login.html");
	}
?>