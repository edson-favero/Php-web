!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
	<link href="css/index.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="imagens\icon.png">
	<title>Consultar Engenheiro</title>
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
<label for="engenheiroEscolhido" class="form-label">Escolha qual engenheiro você deseja consultar do banco de dados: </label>
<select class="form-select" id="engenheiroEscolhido" name="engenheiroEscolhido">
<?php
	require_once "C:/xampp/htdocs/Php-web/php-web/php/model/engenheiro.php";
	$engenheiros = selecionarTodosEngenheiro();
	foreach ($engenheiros as $a)
	{
		echo "<option value = $a->id>" . $a->nome . "</option>";
	}
?>
	</select><br>
	<button type="submit" class="btn btn-primary">Consultar dados do engenheiro </button>
	</form>
	
<?php
	if (isset($_POST["engenheiroEscolhido"]))
	{
		require_once "C:/xampp/htdocs/Php-web/php-web/php/model/engenheiro.php";
		$engenheiro = selecionarEngenheiroId($_POST["engenheiroEscolhido"]);
		echo "Nome: " . $engenheiro->nome . "<br>";
		echo "Cra: " . $engenheiro->cra . "<br>";
		echo "E-mail: " . $engenheiro->email . "<br>";
		}
	?>  
    
</body>

</html>