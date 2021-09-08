<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="css/index.css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="imagens\icon.png">
		<title>Consultar Departamento</title>
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

			<hr>

			<form method="POST" action="#">
				<label for="departamentoEscolhido">Escolha qual departamento você deseja consultar do banco de dados: </label>
				<select id="departamentoEscolhido" name="departamentoEscolhido">
					<?php
						require_once "C:/xampp/htdocs/Php-web/php-web/php/model/departamento.php";
						$departamentos = selecionarTodosDepartamentos();
						foreach ($departamentos as $a)
						{
							echo "<option value = $a->id>" . $a->nome_departamento . "</option>";
						}
					?>
				</select><br>
				<button type="submit">Consultar dados do departamento</button>
			</form>
			
			<?php
				if (isset($_POST["departamentoEscolhido"]))
				{
					require_once "C:/xampp/htdocs/Php-web/php-web/php/model/departamento.php";
					$departamento = selecionarDepartamentoId($_POST["departamentoEscolhido"]);
					echo "Nome: " . $departamento->nome_departamento . "<br>";
					echo "E-mail: " . $departamento->email . "<br>";
					echo "Local de Trabalho: " . $departamento->local_trabalho . "<br>";
					echo "Telefone: " . $departamento->telefone . "<br>";
				}
			
			?>

		</div>
 
  	</body>
</html>
 
