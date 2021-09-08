<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="css/index.css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		 <link rel="icon" href="imagens\icon.png">
		<title>Remover Departamento</title>
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
                <a href="CadProjeto.php" >Cadastro Projeto</a>
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
			  <label for="departamentoEscolhido">Escolha qual departamento você deseja remover do banco de dados: </label>
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
			  <button type="submit">Remover departamento</button>
			</form>
			
			<?php
				if (isset($_POST["departamentoEscolhido"]))
				{
					require_once "C:/xampp/htdocs/Php-web/php-web/php/model/departamento.php";
					excluirDepartamento($_POST["departamentoEscolhido"]);
					echo "Departamento excluído com sucesso do BD!";
				}
			
			?>
		</div>
 
  	</body>
</html>
 
