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
                <a href="CadProjeto.php" >Cadastro Projeto</a>
            </div>
                <div class="col-2">
                    <a href="CadObra.php" >Cadastro Obra</a>
                </div>
                <div class="col-2">
                    <a href="CadEnge.html" >Cadastro Engenheiro</a>
                </div>
                <div class="col-2">
                    <a href="Caddepartamento.html" >Cadastro Departamento</a>
                </div>
                <div class="col-2">
                    <a href="CadFun.php" >Cadastro Funcionário</a>
                </div>
                <div class="col-2">
                    <a href="login.html" >Login</a>
                </div>
                <div class="col-2">
                    <a href="logout.html" >Logout</a>
                </div>
			</div>
			
            <form method="POST" action="#">
			  <label for="projetoEscolhida" class="form-label">Escolha qual projeto você deseja remover do banco de dados: </label>
			  <select class="form-select" id="projetoEscolhida" name="projetoEscolhida">
				<?php
					require_once "C:/xampp/htdocs/Php-web/php-web/php/model/projeto.php";
					$projetos = selecionarTodasProjetos();
					foreach ($projetos as $ad)
					{
						echo "<option value = $ad->id>Nome da obra: " . $ad->onome . "<br>".
                         "<br>"."Nome do funcionario: " ."<br>". $ad->fnome . "<br>"."Nome do projeto: " ."<br>"
                         . $ad->pnome."<br>"."</option>";		
					}
				?>
			  </select><br>
			  <button type="submit" class="btn btn-primary">Remover projeto </button>
			</form>
			
			<?php
				if (isset($_POST["projetoEscolhida"]))
				{
					require_once "C:/xampp/htdocs/Php-web/php-web/php/model/projeto.php";
					excluirProjeto($_POST["projetoEscolhida"]);
					echo "Projeto excluída com sucesso do BD!";
				} 
			?>
			
    
</body>

</html>