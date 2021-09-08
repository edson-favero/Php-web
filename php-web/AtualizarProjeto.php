<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="utf-8">
	<link href="css/index.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar Obra</title>
	 <link rel="icon" href="imagens\icon.png">
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
                    <a href="AtualizarObra.php" >Atualizar Obra</a>
                </div>
                <div class="col-2">
                    <a href="AtualizarEnge.php" >Atualizar Engenheiro</a>
                </div>
                <div class="col-2">
                    <a href="AtualizarDepart.php" >Atualizar funcionario</a>
                </div>
                <div class="col-2">
                    <a href="AtualizarCliente.html" >Atualizar Cliente</a>
                </div>
                <div class="col-2">
                    <a href="AtualizarFun.php" >Atualizar funcionario</a>
                </div>
                <div class="col-2">
                    <a href="login.html" >Login</a>
                </div>
                <div class="col-2">
                    <a href="logout.html" >Logout</a>
               
            </div>

            <hr>

    <h3>
        <form method="POST" action="#">
            <label for="projetoEscolhida" class="form-label">Escolha qual projeto você deseja atualizar do banco de dados: </label>
            <select class="form-select" id="projetoEscolhida" name="projetoEscolhida">
              <?php
                  require_once "C:/xampp/htdocs/Php-web/php-web/php/model/projeto.php";
                  $projeto = selecionarTodasProjetos();
                  foreach ($projeto as $ad)
                  {
                      echo "<option value = $ad->id>Projeto: " . $ad->pnome . " - Nome da obra: " . $ad->onome . " - Nome do funcionario: " . $ad->fnome . "</option>";		
                  }
              ?>
            
            </select><br>
            <button type="submit" class="btn btn-primary">Atualizar projeto </button>
			</form>
              
            <?php
				if (isset($_POST["projetoEscolhida"]))
                {
                }
			?>
            <form method="POST" action="#">
            <input type="hidden" id="projetoEscolhida" name="projetoEscolhida" value=<?php echo $_POST["projetoEscolhida"];?>
                        <label for="nome" class="">Nome do projeto: </label>
                        <input type="text" class="" id="nome" name="nome">
                        <br>
                        <label for="obraEscolhido" class="form-label">Escolha a qual obra o projeto pertence: </label>
				<select class="form-select" id="obraEscolhido" name="obraEscolhido">
					<?php
						require_once "C:/xampp/htdocs/Php-web/php-web/php/model/obra.php";
						$obra = selecionarTodasObras();
						foreach ($obra as $a)
						{
							echo "<option value = $a->id>" . $a->onome . "</option>";	
						}
					?>
			  </select><br>
						
						<label for="funcionarioEscolhido" class="form-label">Escolha qual funcionario a obra pertence: </label>
				<select class="form-select" id="funcionarioEscolhido" name="funcionarioEscolhido">
					<?php
						require_once "C:/xampp/htdocs/Php-web/php-web/php/model/funcionario.php";
						$funcionarios = selecionarTodasFuncionarios();
						foreach ($funcionarios as $a)
						{
							echo "<option value = $a->id>" . $a->fnome . "</option>";	
						}
					?>
			  </select><br>

                    <button type="submit" >Atualizar Projeto </button>
                    <button type="reset" >Limpar dados</button>
                </form>
                <?php
				if (isset($_POST["nome"])  and isset($_POST["funcionarioEscolhido"])  and isset($_POST["obraEscolhido"]))
				{
					require_once "C:/xampp/htdocs/Php-web/php-web/php/model/projeto.php";
					atualizarProjeto($_POST["nome"], $_POST["obraEscolhido"],$_POST["funcionarioEscolhido"], $_POST["projetoEscolhida"]);
					echo "Atualização da funcionario realizado com sucesso";
				}
			?>
    </h3>
    
    
</body>
</html>