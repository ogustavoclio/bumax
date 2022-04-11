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
						<div class="itemMenu active">
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
						<div class="itemMenu">
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
						<span>Nome * </span><input disabled <?php while($prod = mysqli_fetch_array($query)) { ?><?php echo 'value="'; echo $prod["nome"];; echo '"' ?><?php } ?> type="name" name="nome"><br>
						<span>Sobrenome * </span><input disabled <?php while($prod = mysqli_fetch_array($queryLastname)) { ?><?php echo 'value="'; echo $prod["sobrenome"];; echo '"' ?><?php } ?> type="name" name="sobrenome"><br>
						<span>Data de nascimento * </span><input disabled <?php while($prod = mysqli_fetch_array($queryBorn)) { ?><?php echo 'value="'; echo $prod["data-de-nascimento"];; echo '"' ?><?php } ?> placeholder="Data de Nascimento..." type="text" name="data-de-nascimento"><br>
						<span>Nacionalidade * </span><input disabled <?php while($prod = mysqli_fetch_array($queryNacio)) { ?><?php echo 'value="'; echo $prod["nacionalidade"];; echo '"' ?><?php } ?> type="text" name="nacionalidade"><br>
						<span>Gênero * </span><input disabled <?php while($prod = mysqli_fetch_array($queryGender)) { ?><?php echo 'value="'; echo $prod["genero"];; echo '"' ?><?php } ?> type="text" name="genero"><br>
						<span>CPF * </span><input disabled <?php while($prod = mysqli_fetch_array($queryCPF)) { ?><?php echo 'value="'; echo $prod["cpf"];; echo '"' ?><?php } ?> type="text" name="cpf"><br>
						<span>RG * </span><input disabled <?php while($prod = mysqli_fetch_array($queryRG)) { ?><?php echo 'value="'; echo $prod["rg"];; echo '"' ?><?php } ?> value="SE JÁ TIVER PREENCHER MYSQL" type="text" name="rg"><br>
						<span>Órgão Exp/UF * </span><input disabled <?php while($prod = mysqli_fetch_array($queryOrg)) { ?><?php echo 'value="'; echo $prod["orgaoRg"];; echo '"' ?><?php } ?> value="SE JÁ TIVER PREENCHER MYSQL" type="text" name="orgaoRg"><br>
						<span>Estado civil * </span><input disabled <?php while($prod = mysqli_fetch_array($queryEstadoC)) { ?><?php echo 'value="'; echo $prod["estadoCivil"];; echo '"' ?><?php } ?> type="text" name="estadoCivil"><br>
						<span>Como você conheceu a Bumax? * </span><input disabled <?php while($prod = mysqli_fetch_array($queryHowTo)) { ?><?php echo 'value="'; echo $prod["howTo"];; echo '"' ?><?php } ?> type="text" name="howTo"><br>
						<span>Pessoa políticamente exposta? * </span><input disabled <?php while($prod = mysqli_fetch_array($queryExpo)) { ?><?php echo 'value="'; echo $prod["exposto"];; echo '"' ?><?php } ?> type="text" name="exposto">
						<br>
						<h4>Informações de contato:</h4>
						<form action="./config/infoContact.php" method="POST">
							<span>Telefone * </span><input <?php while($prod = mysqli_fetch_array($queryTelphone)) { ?><?php echo 'value="'; echo $prod["telphone"];; echo '"' ?><?php } ?> type="text" name="telphone"><br>
							<span>E-mail * </span><input <?php while($prod = mysqli_fetch_array($queryMail)) { ?><?php echo 'value="'; echo $prod["email"];; echo '"' ?><?php } ?> type="email" name="email"><br>
							<button style="margin-top: 15px; margin-left: 150px; margin-bottom: 20px;">Salvar</button>
						</form>
						<h4>Informações de Endereço:</h4>
						<span>País * </span><input disabled <?php while($prod = mysqli_fetch_array($queryPais)) { ?><?php echo 'value="'; echo $prod["pais"];; echo '"' ?><?php } ?> type="text" name="pais"><br>
						<span>CEP * </span><input disabled <?php while($prod = mysqli_fetch_array($queryCEP)) { ?><?php echo 'value="'; echo $prod["cep"];; echo '"' ?><?php } ?> type="text" name="cep"><br>
						<span>Endereço * </span><input disabled <?php while($prod = mysqli_fetch_array($queryEndereco)) { ?><?php echo 'value="'; echo $prod["endereco"];; echo '"' ?><?php } ?> type="text" name="endereco"><br>
						<span>Número * </span><input disabled <?php while($prod = mysqli_fetch_array($queryNumber)) { ?><?php echo 'value="'; echo $prod["numero"];; echo '"' ?><?php } ?> type="text" name="numero"><br>
						<span>Complemento </span><input disabled <?php while($prod = mysqli_fetch_array($queryComple)) { ?><?php echo 'value="'; echo $prod["complemento"];; echo '"' ?><?php } ?> type="text" name="complemento"><br>
						<span>Bairro * </span><input disabled <?php while($prod = mysqli_fetch_array($queryBairro)) { ?><?php echo 'value="'; echo $prod["bairro"];; echo '"' ?><?php } ?> type="text" name="bairro"><br>
						<span>Cidade * </span><input disabled <?php while($prod = mysqli_fetch_array($queryCidade)) { ?><?php echo 'value="'; echo $prod["cidade"];; echo '"' ?><?php } ?> type="text" name="cidade"><br>
						<span>Estado/Província * </span><input disabled <?php while($prod = mysqli_fetch_array($queryEstd)) { ?><?php echo 'value="'; echo $prod["estado"];; echo '"' ?><?php } ?> type="text" name="estado"><br>
						<h4>Informações profissionais:</h4>
						<form action="infoProfissionals.php" method="POST">
							<span>Empresa * </span><input disabled <?php while($prod = mysqli_fetch_array($queryEmpre)) { ?><?php echo 'value="'; echo $prod["empresa"];; echo '"' ?><?php } ?> type="text" name="empresa"><br>
							<span>Profissão * </span><input disabled <?php while($prod = mysqli_fetch_array($queryProf)) { ?><?php echo 'value="'; echo $prod["profissao"];; echo '"' ?><?php } ?> type="text" name="profissao"><br>
							<span>Cargo * </span><input disabled <?php while($prod = mysqli_fetch_array($queryCarg)) { ?><?php echo 'value="'; echo $prod["cargo"];; echo '"' ?><?php } ?> type="text" name="cargo"><br>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>