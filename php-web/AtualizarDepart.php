<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="css/index.css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		 <link rel="icon" href="imagens\icon.png">
		<title>Atualizar Departamento</title>
	</head>

  	<body>
		<header class="cabecalho">
			<img id="logo" src="imagens\logo.png">
		</header>
		
		<div class="container">
		<header>
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
			
			<div class="form">
				<form method="POST" action="#">
				  <label for="departamentoEscolhido">Escolha qual departamento você deseja atualizar:</label>
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
				  <button type="submit">Atualizar departamento</button>
				</form>
			</div>

			<?php
				if (isset($_POST["departamentoEscolhido"]))
				{
					require_once "C:/xampp/htdocs/Php-web/php-web/php/model/departamento.php";
					$departamento = selecionarDepartamentoId($_POST["departamentoEscolhido"]);
			?>
					<form method="POST" action="php\validacao_caddepartamento.php">
						<input type="hidden" id="idOculto" name="idOculto" value=<?php echo $departamento->id;?>">
						<label for="nome_departamento">Nome do Departamento: </label>
						<input type="text" id="nome_departamento" name="nome_departamento" value="<?php echo $departamento->nome_departamento;?>">

						<label for="email">Email: </label>
						<input type="email" id="email" name="email" value="<?php echo $departamento->email;?>">

						<label for="local_trabalho">Local de trabalho: </label>
						<input type="text" id="local_trabalho" name="local_trabalho" value="<?php echo $departamento->local_trabalho;?>">

						<label for="telefone">Telefone: </label>
						<input type="text" id="telefone" name="telefone" value="<?php echo $departamento->telefone;?>"><br>

						<button type="submit">Atualizar Departamento</button>
					</form>
			<?php				
				}
			
			?>
		</div>
  	</body>
</html>