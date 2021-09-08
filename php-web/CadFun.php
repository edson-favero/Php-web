<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/index.css" rel="stylesheet" />
    <title>Cadastro Funcionário</title>
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
                    <a href="CadCliente.html" >Cadastro Cliente</a>
                </div>
                <div class="col-2">
                    <a href="login.html" >Login</a>
                </div>
                <div class="col-2">
                    <a href="logout.html" >Logout</a>
               
            </div>

            <hr>

            <h1>
			<font size="6"> 
			
                <form method="POST" action="#">
                    <div class="form">
                        <label for="nome" class="">Nome do Funcionário: </label>
                        <input type="text" class="" id="nome" name="nome">
                        <br>
                        <label for="cpf" class="">Cpf: </label>
                        <input type="text" class="" id="cpf" name="cpf">
                        <br>
                        <label for="email" class="">Email: </label>
                        <input type="email" class="" id="email" name="email">
                        <br>
                        <label for="data_nascimento" class="">Data de nascimento: </label>
                        <input type="date" class="" id="data_nascimento" name="data_nascimento">
						<br>
						<label for="telefone" class="form-label">Telefone: </label>
						<input type="text" class="form-control" id="telefone" name="telefone">
						
						<br>
						
						<label for="departamentoEscolhido" class="form-label">Escolha qual departamento o funcionario pertence: </label>
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
						
					
</font> <br />


                    <button type="submit" >Cadastrar Cliente </button>
                    <button type="reset" >Limpar dados</button>
                </form>
                <?php
				if (isset($_POST["nome"]) and isset($_POST["cpf"]) and isset($_POST["email"]) and isset($_POST["data_nascimento"]) and isset($_POST["departamentoEscolhido"]) and isset($_POST["telefone"]))
				{
					require_once "C:/xampp/htdocs/Php-web/php-web/php/model/funcionario.php";
					inserirFuncionario($_POST["nome"], $_POST["cpf"], $_POST["email"], $_POST["departamentoEscolhido"], $_POST["data_nascimento"], $_POST["telefone"]);
					echo "Cadastro da obra realizado com sucesso";
				}
			?>
            </h1>

            <hr>

            <footer>
                <h6>Desenvolvido por: Júlia Corol dos Santos</h6>

            </footer>
        </div>



    </body>

</html>