<?php include('../vars.php'); ?>
<?php include('../db.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meus Dados | <?php echo $appName ?></title>
	<style>
		div.containerBuild{
			padding: 30px;
			background: white;
			border-radius: 5px;
		}
		div.containerBuild-noPadding{
			background: white;
			border-radius: 5px;
		}
		div.itemMenu{
			padding: 10px;
			cursor: pointer;
			margin: 10px;
			border-radius: 5px;
			background: #f9f9f9;
		}
		div.itemMenu:hover{
			padding: 10px;
			border-radius: 5px;
			background: #f0f0f0;
			transition: all 300ms;
			color: black;
		}
		div.active{
			background: #ededed;
		}
		div.itemMenu-active{
			padding: 10px;
			cursor: pointer;
			margin: 10px;
			border-radius: 5px;
			background: #f9f9f9;
		}
		i.fa-solid{
			margin-right: 5px;
		}
		i.item{
			margin-right: 5px;
		}
		h4{
			margin-bottom: 15px !important;
			margin-left: 100px;
			margin-top: 25px !important;
		}
		div.cnt{
			padding: 20px;
		}
		span{
			margin-left: 150px;
			margin-right: 20px;
		}
		input, select{
			padding: 5px;
			color: #455057;
			width: 400px;
			border-radius: 5px;
			border: 1px solid #929292;
			padding-left: 20px;
			height: 40px;
			margin: 10px;
		}
		button{
			padding: 10px;
			width: 150px;
			margin-left: 100px;
			margin-top: 50px;
			margin-bottom: 50px;
			border: 1px solid black;
			background: transparent;

		}
		button:hover{
			padding: 10px;
			width: 150px;
			margin-left: 100px;
			margin-top: 50px;
			margin-bottom: 50px;
			border: 1px solid black;
			background: black;
			color: white;
			transition: all 300ms;
			
		}
		a{
			color: #787878;
		}
	</style>
</head>
<body>

	<!-- --------------------------------------------------------------------------------------------- -->
	<!-- -------------------------------- TOPBAR COMEÇA AQUI ----------------------------------------- -->
	<!-- --------------------------------------------------------------------------------------------- -->

	<style>
		a{text-decoration: none !important;}div.header{margin-bottom: 0px !important;height: 60px;background: #ffffff;padding-top: calc(30px - 23px);}img.logo{width: 45px;border-radius: 5px;}a.link{}a.link-ative{} *.align-middle{margin-top: 9px;}li.active{background: #ebebeb;padding-left: 15px;padding-right: 15px;border-radius: 50px;}li.nav-item{padding-left: 15px;padding-right: 15px;}
	</style>

	<nav style="margin-bottom: 0px; border-radius: 0px;" class="navbar navbar-expand-lg navbar-light bg-light">
	<nav class="navbar navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	    <img style="border-radius: 10px; margin-top: -4px;" src="<?php echo $appAssets , '/img/logo.png' ?>" width="50" height="50" alt="">
	  </a>
	</nav>
	  <button style="" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav ">
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo $appLocal ?>/dashboard/minha-carteira.php">Minha Carteira</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo $appLocal ?>/dashboard/meus-investimentos.php">Meus Investimentos</a>
	      </li>
<!-- 	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo $appLocal ?>/dashboard/proventos.php">Proventos</a>
	      </li> -->
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo $appLocal ?>/dashboard/extrato.php">Extrato</a>
	      </li>
	      <li style="background: #a0cc5a; margin-left: 20px;" class="nav-item active">
	        <a class="nav-link" href="<?php echo $appLocal ?>/dashboard/investir.php">Investir</a>
	      </li>
	    </ul>
	  </div>
	  <div class="col-2">
		<div class="dropdown show">
		  <a style="background: #A0CC5A; border: none;" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  	<span class="2" style="padding: 20px; margin-left: 0px;">Minha Conta</span>
		    <img width="50px" src="<?php echo $appAssets , '/icons/profilePic.png' ?>">
		  </a>

		  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
		    <a class="dropdown-item" href="<?php echo $appLocal , '/dashboard/minha-carteira.php' ?>">Minha Carteira</a>
		    <a class="dropdown-item" href="#">Dados Cadastrais</a>
		    <a class="dropdown-item" href="#">Perfil do Investidor</a>
		    <hr>
		    <a class="dropdown-item" href="<?php echo $logout ?>"><i class="fa-solid fa-right-from-bracket"></i> Sair</a>
		  </div>
		</div>
	  </div>
	</nav>

	<!-- --------------------------------------------------------------------------------------------- -->
	<!-- -------------------------------- TOPBAR TERMINA AQUI ---------------------------------------- -->
	<!-- --------------------------------------------------------------------------------------------- -->

	<div class="marginTop"></div>
	<div class="container-fluid">
		<div class="row">			
			<div class="col-3">
				<div class="containerBuild">
					<!-- menu -->
					<h4>Cadastro:</h4>
					<!-- item -->
					<a class="menuItem" href="./dados-cadastrais.php">
						<div class="itemMenu">
							<i class="fa-solid fa-user-gear item"></i> Dados Pessoais<br>
						</div>
					</a>
					<!-- item -->
					<a class="menuItem" href="./dados-bancarios.php">
						<div class="itemMenu">
							<i class="fa-solid fa-building-columns item"></i></i> Dados Bancários<br>
						</div>
					</a>
					<!-- item -->
					<a class="menuItem" href="./pix.php">
						<div class="itemMenu">
							<i class="fa-brands fa-pix item"></i> PIX<br>
						</div>
					</a>
					<!-- menu -->
					<h4>Segurança</h4>
					<!-- item -->
					<a class="menuItem" href="./alterar-senha.php">
						<div class="itemMenu active">
							<i class="fa-solid fa-key"></i> Alterar Senha<br>
						</div>
					</a>
				</div>
			</div>
			<div class="col-9">
				<div class="containerBuild-noPadding">
					<div class="borderDown">
						<h4 style="margin: 0px !important;">Dados cadastrais</h4>
					</div>
					<div class="cnt">
						<form action="./config/configChangePass.php" method="POST">
							<span style="margin-left: 20px">Senha atual:</span><input placeholder="Insira a sua senha atual..." type="password" name="senhaAtual"><br>
							<span style="margin-left: 20px">Nova Senha:</span><input placeholder="Insira a nova senha..." type="password" name="novaSenha"><br>
							<span style="margin-left: 20px">Repetir Senha:</span><input placeholder="Repita a nova senha..." type="password" name="novaSenhaRepeat"><br>
							<button style="margin: 30px 0px 30px 20px">Salvar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>