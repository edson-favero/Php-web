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
        <header>
            <h1> Sistema para construtora</h1>
        </header>

        <hr>
        <div class="menu">

            <div class="col-2">
                <a href="index.html">Página Inicial</a>
            </div>

            <div class="col-2">
                <a href="CadObra.php">Cadastro Obra</a>
            </div>
            <div class="col-2">
                <a href="CadEnge.html">Cadastro funcionario</a>
            </div>
            <div class="col-2">
                <a href="Caddepartamento.html">Cadastro Departamento</a>
            </div>
            <div class="col-2">
                <a href="CadCliente.html">Cadastro Cliente</a>
            </div>
            <div class="col-2">
                <a href="CadFun.php">Cadastro Funcionario</a>
            </div>
            <div class="col-2">
                <a href="login.html">Login</a>
            </div>
            <div class="col-2">
                <a href="logout.html">Logout</a>

            </div>

            <hr>

            <h1>


                <form method="POST" action="#">
                    <div class="form">
                        <label for="nome" class="">Nome do projeto: </label>
                        <input type="text" class="" id="nome" name="nome">
                        <br>

                        <label for="obraEscolhido" class="form-label">Escolha a qual  obra o projeto pertence: </label>
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
              
              <label for="funcionarioEscolhido" class="form-label">Escolha a qual  funcionario o  projeto pertence: </label>
				<select class="form-select" id="funcionarioEscolhido" name="funcionarioEscolhido">
					<?php
						require_once "C:/xampp/htdocs/Php-web/php-web/php/model/funcionario.php";
						$funcionario = selecionarTodasFuncionarios();
						foreach ($funcionario as $a)
						{
							echo "<option value = $a->id>" . $a->fnome . "</option>";	
						}
					?>
			  </select><br>
              



                        <button type="submit">Cadastrar projeto </button>
                        <button type="reset">Limpar dados</button>
                </form>
                <?php
                if (isset($_POST["nome"]) and isset($_POST["funcionarioEscolhido"]) and isset($_POST["obraEscolhido"])) 
                {
                    require_once "C:/xampp/htdocs/Php-web/php-web/php/model/projeto.php";
                    inserirProjeto($_POST["nome"], $_POST["obraEscolhido"], $_POST["funcionarioEscolhido"]);
                    echo "Cadastro do projeto realizado com sucesso";
                }
                ?>

            </h1>

            <hr>

            <footer>
                <h6>Desenvolvido por: Edson Castilho Favero</h6>

            </footer>
        </div>



</body>

</html>