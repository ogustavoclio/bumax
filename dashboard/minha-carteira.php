<?php

	$link = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	include('../config/vars.php');

?>

<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Minha Carteira | <?php echo $appName ?></title>
	<style>
		body{
			
		}
		div.header{
			margin-bottom: 0px !important;
			height: 60px;
			background: #ffffff;
			padding-top: calc(30px - 23px);
		}
		img.logo{
			width: 45px;
			border-radius: 5px;
		}
		a.link{

		}
		a.link-ative{

		}
		*.align-middle{
			margin-top: 9px;
		}
		li.active{
			background: #ebebeb;
			padding-left: 15px;
			padding-right: 15px;
			border-radius: 50px;
		}
		li.nav-item{
			padding-left: 15px;
			padding-right: 15px;
		}
		div.dropdown{
			margin-right: 107px;
		}
	</style>
</head>
<body>
	<nav style="margin-bottom: 0px; border-radius: 0px;" class="navbar navbar-expand-lg navbar-light bg-light">
	<nav class="navbar navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	    <img style="border-radius: 10px; margin-top: -4px;" src="<?php echo $appAssets ?>/img/logo.png" width="50" height="50" alt="">
	  </a>
	</nav>
	  <button style="" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav ">
	      <li class="nav-item active">
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
	      <li style="background: #a0cc5a;margin-left: 20px;" class="nav-item active">
	        <a class="nav-link" href="<?php echo $appLocal ?>/dashboard/investir.php">Investir</a>
	      </li>
	    </ul>
	  </div>
		<div class="dropdown show">
		  <a style="background: #A0CC5A; border: none;" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  	<span style="padding: 20px">Minha Conta</span>
		    <img width="50px" src="<?php echo $appAssets , '/icons/profilePic.png' ?>">
		  </a>

		  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
		    <a class="dropdown-item" href="<?php echo $appLocal , '/dashboard/minha-carteira.php' ?>">Minha Carteira</a>
		    <a class="dropdown-item" href="<?php echo $appLocal , '/config/auth/dados-cadastrais.php' ?>">Dados Cadastrais</a>
		    <a class="dropdown-item" href="#">Perfil do Investidor</a>
		    <hr>
		    <a class="dropdown-item" href="<?php echo $logout ?>"><i class="fa-solid fa-right-from-bracket"></i> Sair</a>
		  </div>
		</div>
	  </div>
	</nav>
	<script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
	<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
	<script>
	  $(function () {
	    $('.dropdown-toggle').dropdown();
	  }); 
	</script>
</body>
</html>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	body{

	}
	div.content{
		background: #edeff7;
		height: calc(100% - 94px);
		padding: 20px;
	}
	div.contentBox{
		background: white;
		border-radius: 5px;
		padding: 20px;
		padding-top: 25px !important;
		height: 220px;
		padding-left: 35px;
	}
	div.contentBoxMid{
		background: white;
		padding: 20px;
		padding-left: 35px;
		border-radius: 5px;
		height: 100px;
	}
	b{
		font-size: 13px;
		font-weight: 500;
		color: #595d6e;
		text-transform: uppercase;
	}
	b.number{
		font-size: 25px !important;
		font-weight: 500;
		color: black;
	}
	div.headerTitle{
		border-bottom: 1px solid #f1f1f1;
	}
	b.title{
		padding: 20px;
	}
	div.contentInternalBox{
		padding: 35px;
		padding-top: 20px;
	}
	div.itemInvest{
		margin-top: 20px;
		border-left: 3px solid blue;
		padding-left: 20px !important;
		padding: 10px;
	}
</style>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-3">
				<div class="col-12">
					<div class="contentBoxMid">
						<b>INVESTIMENTOS ATIVOS</b><br>
						<b class="number">0</b>
					</div>
				</div>
				<br>
				<div class="col-12">
					<div class="contentBoxMid">
						<b>TOTAL INVESTIDO</b><br>
						<b class="number">R$ 00,00</b>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="col-12">
					<div class="contentBoxMid">
						<b>TOTAL RECEBIDO</b><br>
						<b class="number">R$ 00,00</b>
					</div>
				</div>
				<br>
				<div class="col-12">
					<div class="contentBoxMid">
						<b>PATRIMÔNIO ESTIMADO</b><br>
						<b class="number">R$ 00,00</b>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div style="padding: 0px;" class="contentBox">
					<div class="container-fluid headerTitle">
						<b class="title">Title</b>
					</div>
					<div class="contentInternalBox">
						<div class="banner">
							Banner content here...
						</div>
					</div>
				</div>
			</div>
		</div>
			<div style="margin-top: 20px;" class="row">
				<div class="col-6">
					<div style="height: auto; padding-bottom: 50px;" class="contentBox">
						<div class="row">
							<div class="col-6">
								<div style="border-left: 3px solid blue;" class="itemInvest">
									<b style="font-size: 40px;">0%</b><br>
									<b><span style="color: blue;">Imobiliária</span></b><br>
									<b><span>R$ 00,00</span></b>
								</div>
								<div style="border-left: 3px solid purple;" class="itemInvest">
									<b style="font-size: 40px;">0%</b><br>
									<b><span style="color: purple;">ATIVOS JUDICIAIS</span></b><br>
									<b><span>R$ 00,00</span></b>
								</div>
								<div style="border-left: 3px solid orange;" class="itemInvest">
									<b style="font-size: 40px;">0%</b><br>
									<b><span style="color: orange;">COMERCIAL</span></b><br>
									<b><span>R$ 00,00</span></b>
								</div>
							</div>
							<div class="col-6">
								<div style="border-left: 3px solid #ffa600;" class="itemInvest">
									<b style="font-size: 40px;">0%</b><br>
									<b><span style="color: #ffa600;">ENERGIA</span></b><br>
									<b><span>R$ 00,00</span></b>
								</div>
								<div style="border-left: 3px solid green;" class="itemInvest">
									<b style="font-size: 40px;">0%</b><br>
									<b><span style="color: green;">AGRONEGOCIO</span></b><br>
									<b><span>R$ 00,00</span></b>
								</div>
								<div style="border-left: 3px solid pink;" class="itemInvest">
									<b style="font-size: 40px;">0%</b><br>
									<b><span style="color: pink;">STARTUPS</span></b><br>
									<b><span>R$ 00,00</span></b>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div style="height: 480px;" class="contentBox">
						<center>
							<div style="font-size: 30px; margin-top: 120px;">R$ 00,00</div>
							<b style="font-size: 50px;">0</b>
							<div>TIPOS DE INVESTIMENTO</div>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>