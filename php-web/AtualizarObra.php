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
                    <a href="AtualizarDepart.php" >Atualizar Departamento</a>
                </div>
                <div class="col-2">
                    <a href="AtualizarCliente.html" >Atualizar Cliente</a>
                </div>
                <div class="col-2">
                    <a href="AtualizarFun.php" >Atualizar Funcionario</a>
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
            <label for="obraEscolhida" class="form-label">Escolha qual obra você deseja atualizar do banco de dados: </label>
            <select class="form-select" id="obraEscolhida" name="obraEscolhida">
              <?php
                  require_once "C:/xampp/htdocs/Php-web/php-web/php/model/obra.php";
                  $obra = selecionarTodasObras();
                  foreach ($obra as $ad)
                  {
                      echo "<option value = $ad->id>Obra: " . $ad->onome . " - Inicio da obra: " . $ad->iobra . " - Departamento: " . $ad->dnome . " - Engenheiro " . $ad->enome . " - Cliente: " . $ad->cnome . "</option>";		
                  }
              ?>
            
            </select><br>
            <button type="submit" class="btn btn-primary">Atualizar obra </button>
			</form>
              
            <?php
				if (isset($_POST["obraEscolhida"]))
                {
                }
			?>
            <form method="POST" action="#">
            <input type="hidden" id="obraEscolhida" name="obraEscolhida" value=<?php echo $_POST["obraEscolhida"];?>
                        <label for="nome" class="">Nome da Obra: </label>
                        <input type="text" class="" id="nome" name="nome">
                        <br>
                        <label for="data_obra" class="">Data de Início da Obra: </label>
                        <input type="date" class="" id="data_obra" name="data_obra">
						<br>
                        <label for="clienteEscolhido" class="form-label">Escolha a qual cliente a obra pertence: </label>
				<select class="form-select" id="clienteEscolhido" name="clienteEscolhido">
					<?php
						require_once "C:/xampp/htdocs/Php-web/php-web/php/model/cliente.php";
						$cliente = selecionarTodosClientes();
						foreach ($cliente as $a)
						{
							echo "<option value = $a->id>" . $a->nome_cliente . "</option>";	
						}
					?>
			  </select><br>
						
						<label for="departamentoEscolhido" class="form-label">Escolha qual departamento a obra pertence: </label>
				<select class="form-select" id="departamentoEscolhido" name="departamentoEscolhido">
					<?php
						require_once "C:/xampp/htdocs/Php-web/php-web/php/model/departamento.php";
						$departamentos = selecionarTodosDepartamentos();
						foreach ($departamentos as $a)
						{
							echo "<option value = $a->id>" . $a->nome_departamento . "</option>";	
						}
					?>
			  </select><br>

					
              <label for="engenheiroEscolhido" class="form-label">Escolha a qual engenheiro a obra pertence: </label>
				<select class="form-select" id="engenheiroEscolhido" name="engenheiroEscolhido">
					<?php
						require_once "C:/xampp/htdocs/Php-web/php-web/php/model/engenheiro.php";
						$engenheiro = selecionarTodosEngenheiro();
						foreach ($engenheiro as $a)
						{
							echo "<option value = $a->id>" . $a->nome . "</option>";	
						}
					?>
			  </select><br>
              
             
              
              


                    <button type="submit" >Atualizar Obra </button>
                    <button type="reset" >Limpar dados</button>
                </form>
                <?php
				if (isset($_POST["nome"]) and isset($_POST["data_obra"]) and isset($_POST["departamentoEscolhido"]) and isset($_POST["engenheiroEscolhido"]) and isset($_POST["clienteEscolhido"]))
				{
					require_once "C:/xampp/htdocs/Php-web/php-web/php/model/obra.php";
					atualizarObra($_POST["nome"], $_POST["data_obra"], $_POST["departamentoEscolhido"] , $_POST["engenheiroEscolhido"] , $_POST["clienteEscolhido"], $_POST["obraEscolhida"]);
					echo "Atualização da obra realizado com sucesso";
				}
			?>
    </h3>
    
    
</body>
</html>