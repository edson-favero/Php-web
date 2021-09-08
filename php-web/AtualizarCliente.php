<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="css/index.css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		 <link rel="icon" href="imagens\icon.png">
		<title>Atualizar Cliente</title>
	</head>

  	<body>
		<header class="cabecalho">
			<img id="logo" src="imagens\logo.png">
		</header>
		<div class="container">
			<header>
				<h1> Sistema para construtora</h1>
			</header>

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
			  <label for="clienteEscolhido">Escolha qual cliente você deseja atualizar dados no banco de dados: </label>
			  <select id="clienteEscolhido" name="clienteEscolhido">
				<?php
						require_once "C:/xampp/htdocs/Php-web/php-web/php/model/cliente.php";
						$clientes = selecionarTodosClientes();
						foreach ($clientes as $a)
						{
							echo "<option value = $a->id>" . $a->nome_cliente . "</option>";
						}
				?>
			  </select><br>
			  <button type="submit">Atualizar dados do cliente </button>
			</form>

			<?php
				if (isset($_POST["clienteEscolhido"]))
				{
					require_once "C:/xampp/htdocs/Php-web/php-web/php/model/cliente.php";
					$cliente = selecionarClienteId($_POST["clienteEscolhido"]);
			?>
					<form method="POST" action="php\validacao_cadCliente.php">
						<input type="hidden" id="idOculto" name="idOculto" value=<?php echo $cliente->id;?>">
						<label for="nome_cliente">Nome do Cliente: </label>
						<input type="text" id="nome_cliente" name="nome_cliente" value="<?php echo $cliente->nome_cliente;?>">

						<label for="cpf" class="form-label">CPF: </label>
						<input type="text" id="cpf" name="cpf" value="<?php echo $cliente->cpf;?>">

						<label for="email">Email: </label>
						<input type="email" id="email" name="email" value="<?php echo $cliente->email;?>">

						<label for="telefone">Telefone: </label>
						<input type="text" id="telefone" name="telefone" value="<?php echo $cliente->telefone;?>">
						
						<button type="submit">Atualizar Cliente </button>
					</form>
			<?php				
				}
			
			?>
		</div>
  	</body>
</html>