<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
	<link href="css/index.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="imagens\icon.png">
	<title>Consultar Cliente</title>
</head>

<body>
<header class="cabecalho">
			<img id="logo" src="imagens\logo.png">
		</header>
		
		<div class="container">
		<header >
                <h1> Sistema para construtora</h1>
            </header>
			<hr>

			<div class="menu">

                <div class="col-2">
                    <a href="index.html" >Página Inicial</a>
                </div>

                <div class="col-2">
                    <a href="CadObra.html" >Cadastro Obra</a>
                </div>
                <div class="col-2">
                    <a href="CadEnge.html" >Cadastro Engenheiro</a>
                </div>
                <div class="col-2">
                    <a href="Caddepartamento.html" >Cadastro Departamento</a>
                </div>
                <div class="col-2">
                    <a href="CadFun.html" >Cadastro Funcionário</a>
                </div>
                <div class="col-2">
                    <a href="login.html" >Login</a>
                </div>
                <div class="col-2">
                    <a href="logout.html" >Logout</a>
                </div>
			</div>
			
<form method="POST" action="#">
<label for="clienteEscolhido" class="form-label">Escolha qual cliente você deseja consultar do banco de dados: </label>
<select class="form-select" id="clienteEscolhido" name="clienteEscolhido">
<?php
	require_once "C:/xampp/htdocs/Php-web/php-web/php/model/cliente.php";
	$clientes = selecionarTodosClientes();
	foreach ($clientes as $a)
	{
		echo "<option value = $a->id>" . $a->nome_cliente . "</option>";
	}
?>
	</select><br>
	<button type="submit" class="btn btn-primary">Consultar dados do cliente </button>
	</form>
	
<?php
	if (isset($_POST["clienteEscolhido"]))
	{
		require_once "C:/xampp/htdocs/Php-web/php-web/php/model/cliente.php";
		$cliente = selecionarClienteId($_POST["clienteEscolhido"]);
		echo "Nome: " . $cliente->nome_cliente . "<br>";
		echo "Cpf: " . $cliente->cpf . "<br>";
		echo "Email: " . $cliente->email . "<br>";
		echo "Telefone: " . $cliente->telefone . "<br>";
		}
	?>  
    
</body>

</html>