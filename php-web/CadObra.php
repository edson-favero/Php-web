<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="utf-8">
	<link href="css/index.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Obra</title>
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
                    <a href="CadEnge.html" >Cadastro Engenheiro</a>
                </div>
                <div class="col-2">
                    <a href="Caddepartamento.html" >Cadastro Departamento</a>
                </div>
                <div class="col-2">
                    <a href="CadCliente.html" >Cadastro Cliente</a>
                </div>
                <div class="col-2">
                    <a href="CadFun.php" >Cadastro Funcionario</a>
                </div>
                <div class="col-2">
                    <a href="CadProjeto.php" >Cadastro Projeto</a>
                </div>
                <div class="col-2">
                    <a href="login.html" >Login</a>
                </div>
                <div class="col-2">
                    <a href="logout.html" >Logout</a>
               
            </div>

            <hr>

            <h1>
			
			
                <form method="POST" action="#">
                    <div class="form">
                        <label for="nome" class="">Nome da Obra: </label>
                        <input type="text" class="" id="nome" name="nome">
                        <br>
                        <label for="data_obra" class="">Data de Início da Obra: </label>
                        <input type="date" class="" id="data_obra" name="data_obra">
						<br>
						
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
              <br />


                    <button type="submit" >Cadastrar Obra </button>
                    <button type="reset" >Limpar dados</button>
                </form>
                <?php
				if (isset($_POST["nome"]) and isset($_POST["data_obra"]) and isset($_POST["departamentoEscolhido"]) and isset($_POST["engenheiroEscolhido"]) and isset($_POST["clienteEscolhido"]))
				{
					require_once "C:/xampp/htdocs/Php-web/php-web/php/model/obra.php";
					inserirObra($_POST["nome"], $_POST["data_obra"], $_POST["departamentoEscolhido"] , $_POST["engenheiroEscolhido"] , $_POST["clienteEscolhido"]);
					echo "Cadastro da obra realizado com sucesso";
				}
			?>

            </h1>

            <hr>

            <footer>
                <h6>Desenvolvido por: João Vitor Lopes Ferreira</h6>

            </footer>
        </div>



    </body>

</html>