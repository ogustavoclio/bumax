<?php include('../../config/vars.php') ?>

<?php 	if (!empty(@$_SESSION['email'])){header('Location: http://192.168.0.124/bumax/dashboard/minha-carteira.php');} ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | <?php echo $appName ?></title>
	<style>
	@media only screen and (max-width: 500px) {
		h1{
			font-family: Poppins;
			margin-top: 40%;
			margin-bottom: 20px;
			font-size: 35px;
		}
    }
    @media only screen and (min-width: 600px) {
		h1{
			font-family: Poppins;
			margin-top: 15%;
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
		span{
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<center>
				<div class="col-10 one align-middle">
					<center>
						<form method="POST" action="./verifyLogin.php">
							<div style="width: 100%;">
								<h1 style="text-align: left;">Login</h1>
								<input placeholder="Insira o seu e-mail..." type="email" name="email"><br>
								<input style="margin-bottom: 20px !important;" placeholder="Insira a sua senha..." type="password" name="password"><br>
								<span>Esqueceu sua senha? <a href="../login/">Recuperar Senha</a></span><br>
								<button>Enviar</button><br>
								<img style="margin-top: 20px; border-radius: 20px;" width="100px" src="../../assets/img/logo.png">
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