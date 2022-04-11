<?php include('../../config/vars.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | <?php echo $appName ?></title>
	<style>
	@media only screen and (max-width: 400px) {
		h1{
			font-family: Poppins;
			margin-top: 30%;
			margin-bottom: 20px;
			font-size: 35px;
		}
    }
    @media only screen and (min-width: 400px) {
		h1{
			font-family: Poppins;
			margin-top: 10%;
			margin-bottom: 20px;
			font-size: 30px;
		}
    }
		div.one, div.two{
			height: 100%;
		}

		div.left{
		}
		input, select, button{
			padding-left: 20px;
			margin-top: 5px;
			border-radius: 5px;
			border: 1px solid #ededed;
			margin-bottom: 5px;
			padding-right: 20px;
			width: 100%;
			height: 50px;
		}
		button{
			margin-top: 20px;
			margin-bottom: 20px;
		}
		a{
			text-decoration: none;
			color: green;
		}
		input::placeholder, select{
			font-size: 14px;
		}
		*.copy{
			font-size: 10px;
			font-weight: lighter;
			position: fixed;
			top: 97%;
			width: 400px;
			left: calc(50% - 200px);
		}
		div.progress-bar{
			background: #9fcb59;
		}
		div.progress{
			margin-bottom: 40px;
			margin-top: 30px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<center>
				<div class="col-10 one align-middle">
					<center>
						<form action="./verifyRegister.php" method="POST">
							<div style="width: 100%;">
								<h1 style="text-align: left;">Cadastre-se é fácil!</h1>
								<div class="progress">
								  <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<select>
									<option>Pessoa Física</option>
									<option>Pessoa Jurídica</option>
								</select><br>
								<input required placeholder="Nome completo / Razão Social" type="name" name="nome-completo"><br>
								<input required placeholder="Insira aqui o seu e-mail..." type="email" name="email"><br>
								<input required placeholder="Insira aqui o seu telefone..." type="tel" name="telphone"><br>
								<input required placeholder="Crie uma senha..." type="password" name="password"><br>
								<input required style="width: auto; height: auto; margin-top: 20px; margin-bottom: 20px;" type="checkbox" name="checkbox">
								<span> Li e concordo com os Termos de Uso e Política de Privacidade</span><br>
								<button>Enviar</button><br>
								<span>Já tem uma conta? <a href="../login/">Entrar</a></span>
							</div>
						</form>
					</center>
				</div>
				<h5 class="copy">© Todos os direitos reservados à <?php echo $empName?> - <?php echo  $cnpj  ?></h5>
			</center>
		</div>
	</div>
</body>
</html>