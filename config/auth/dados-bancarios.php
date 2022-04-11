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
						<div class="itemMenu active">
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
						<h4 style="margin: 0px !important;">Dados bancários</h4>
					</div>

					<div class="cnt">
						<form action="./config/configDadosBancarios.php" method="POST">
							<select name="idbanco" class="input">
								<option value="0">Selecione...</option>
								<option value="1" <?php if($idbanco == 1) echo "selected"?>>001 - BANCO DO BRASIL S/A</option>
								<option value="2" <?php if($idbanco == 2) echo "selected"?>>002 - BANCO CENTRAL DO BRASIL</option>
								<option value="3" <?php if($idbanco == 3) echo "selected"?>>003 - BANCO DA AMAZONIA S.A</option>
								<option value="4" <?php if($idbanco == 4) echo "selected"?>>004 - BANCO DO NORDESTE DO BRASIL S.A</option>
								<option value="7" <?php if($idbanco == 7) echo "selected"?>>007 - BANCO NAC DESENV. ECO. SOCIAL S.A</option>
								<option value="8" <?php if($idbanco == 8) echo "selected"?>>008 - BANCO MERIDIONAL DO BRASIL</option>
								<option value="20" <?php if($idbanco == 20) echo "selected"?>>020 - BANCO DO ESTADO DE ALAGOAS S.A</option>
								<option value="21" <?php if($idbanco == 21) echo "selected"?>>021 - BANCO DO ESTADO DO ESPIRITO SANTO S.A</option>
								<option value="22" <?php if($idbanco == 22) echo "selected"?>>022 - BANCO DE CREDITO REAL DE MINAS GERAIS SA</option>
								<option value="24" <?php if($idbanco == 24) echo "selected"?>>024 - BANCO DO ESTADO DE PERNAMBUCO</option>
								<option value="25" <?php if($idbanco == 25) echo "selected"?>>025 - BANCO ALFA S/A</option>
								<option value="26" <?php if($idbanco == 26) echo "selected"?>>026 - BANCO DO ESTADO DO ACRE S.A</option>
								<option value="27" <?php if($idbanco == 27) echo "selected"?>>027 - BANCO DO ESTADO DE SANTA CATARINA S.A</option>
								<option value="28" <?php if($idbanco == 28) echo "selected"?>>028 - BANCO DO ESTADO DA BAHIA S.A</option>
								<option value="29" <?php if($idbanco == 29) echo "selected"?>>029 - BANCO DO ESTADO DO RIO DE JANEIRO S.A</option>
								<option value="30" <?php if($idbanco == 30) echo "selected"?>>030 - BANCO DO ESTADO DA PARAIBA S.A</option>
								<option value="31" <?php if($idbanco == 31) echo "selected"?>>031 - BANCO DO ESTADO DE GOIAS S.A</option>
								<option value="32" <?php if($idbanco == 32) echo "selected"?>>032 - BANCO DO ESTADO DO MATO GROSSO S.A.</option>
								<option value="33" <?php if($idbanco == 33) echo "selected"?>>033 - BANCO DO ESTADO DE SAO PAULO S.A</option>
								<option value="34" <?php if($idbanco == 34) echo "selected"?>>034 - BANCO DO ESADO DO AMAZONAS S.A</option>
								<option value="35" <?php if($idbanco == 35) echo "selected"?>>035 - BANCO DO ESTADO DO CEARA S.A</option>
								<option value="36" <?php if($idbanco == 36) echo "selected"?>>036 - BANCO DO ESTADO DO MARANHAO S.A</option>
								<option value="37" <?php if($idbanco == 37) echo "selected"?>>037 - BANCO DO ESTADO DO PARA S.A</option>
								<option value="38" <?php if($idbanco == 38) echo "selected"?>>038 - BANCO DO ESTADO DO PARANA S.A</option>
								<option value="39" <?php if($idbanco == 39) echo "selected"?>>039 - BANCO DO ESTADO DO PIAUI S.A</option>
								<option value="41" <?php if($idbanco == 41) echo "selected"?>>041 - BANCO DO ESTADO DO RIO GRANDE DO SUL S.A</option>
								<option value="47" <?php if($idbanco == 47) echo "selected"?>>047 - BANCO DO ESTADO DE SERGIPE S.A</option>
								<option value="48" <?php if($idbanco == 48) echo "selected"?>>048 - BANCO DO ESTADO DE MINAS GERAIS S.A</option>
								<option value="59" <?php if($idbanco == 59) echo "selected"?>>059 - BANCO DO ESTADO DE RONDONIA S.A</option>
								<option value="70" <?php if($idbanco == 70) echo "selected"?>>070 - BANCO DE BRASILIA S.A</option>
								<option value="104" <?php if($idbanco == 104) echo "selected"?>>104 - CAIXA ECONOMICA FEDERAL</option>
								<option value="106" <?php if($idbanco == 106) echo "selected"?>>106 - BANCO ITABANCO S.A.</option>
								<option value="107" <?php if($idbanco == 107) echo "selected"?>>107 - BANCO BBM S.A</option>
								<option value="109" <?php if($idbanco == 109) echo "selected"?>>109 - BANCO CREDIBANCO S.A</option>
								<option value="116" <?php if($idbanco == 116) echo "selected"?>>116 - BANCO B.N.L DO BRASIL S.A</option>
								<option value="148" <?php if($idbanco == 148) echo "selected"?>>148 - MULTI BANCO S.A</option>
								<option value="151" <?php if($idbanco == 151) echo "selected"?>>151 - CAIXA ECONOMICA DO ESTADO DE SAO PAULO</option>
								<option value="153" <?php if($idbanco == 153) echo "selected"?>>153 - CAIXA ECONOMICA DO ESTADO DO R.G.SUL</option>
								<option value="165" <?php if($idbanco == 165) echo "selected"?>>165 - BANCO NORCHEM S.A</option>
								<option value="166" <?php if($idbanco == 166) echo "selected"?>>166 - BANCO INTER-ATLANTICO S.A</option>
								<option value="168" <?php if($idbanco == 168) echo "selected"?>>168 - BANCO C.C.F. BRASIL S.A</option>
								<option value="175" <?php if($idbanco == 175) echo "selected"?>>175 - CONTINENTAL BANCO S.A</option>
								<option value="184" <?php if($idbanco == 184) echo "selected"?>>184 - BBA - CREDITANSTALT S.A</option>
								<option value="199" <?php if($idbanco == 199) echo "selected"?>>199 - BANCO FINANCIAL PORTUGUES</option>
								<option value="200" <?php if($idbanco == 200) echo "selected"?>>200 - BANCO FRICRISA AXELRUD S.A</option>
								<option value="201" <?php if($idbanco == 201) echo "selected"?>>201 - BANCO AUGUSTA INDUSTRIA E COMERCIAL S.A</option>
								<option value="204" <?php if($idbanco == 204) echo "selected"?>>204 - BANCO S.R.L S.A</option>
								<option value="205" <?php if($idbanco == 205) echo "selected"?>>205 - BANCO SUL AMERICA S.A</option>
								<option value="206" <?php if($idbanco == 206) echo "selected"?>>206 - BANCO MARTINELLI S.A</option>
								<option value="208" <?php if($idbanco == 208) echo "selected"?>>208 - BANCO PACTUAL S.A</option>
								<option value="210" <?php if($idbanco == 210) echo "selected"?>>210 - DEUTSCH SUDAMERIKANICHE BANK AG</option>
								<option value="211" <?php if($idbanco == 211) echo "selected"?>>211 - BANCO SISTEMA S.A</option>
								<option value="212" <?php if($idbanco == 212) echo "selected"?>>212 - BANCO MATONE S.A</option>
								<option value="213" <?php if($idbanco == 213) echo "selected"?>>213 - BANCO ARBI S.A</option>
								<option value="214" <?php if($idbanco == 214) echo "selected"?>>214 - BANCO DIBENS S.A</option>
								<option value="215" <?php if($idbanco == 215) echo "selected"?>>215 - BANCO AMERICA DO SUL S.A</option>
								<option value="216" <?php if($idbanco == 216) echo "selected"?>>216 - BANCO REGIONAL MALCON S.A</option>
								<option value="217" <?php if($idbanco == 217) echo "selected"?>>217 - BANCO AGROINVEST S.A</option>
								<option value="218" <?php if($idbanco == 218) echo "selected"?>>218 - BBS - BANCO BONSUCESSO S.A.</option>
								<option value="219" <?php if($idbanco == 219) echo "selected"?>>219 - BANCO DE CREDITO DE SAO PAULO S.A</option>
								<option value="220" <?php if($idbanco == 220) echo "selected"?>>220 - BANCO CREFISUL</option>
								<option value="221" <?php if($idbanco == 221) echo "selected"?>>221 - BANCO GRAPHUS S.A</option>
								<option value="222" <?php if($idbanco == 222) echo "selected"?>>222 - BANCO AGF BRASIL S. A.</option>
								<option value="223" <?php if($idbanco == 223) echo "selected"?>>223 - BANCO INTERUNION S.A</option>
								<option value="224" <?php if($idbanco == 224) echo "selected"?>>224 - BANCO FIBRA S.A</option>
								<option value="225" <?php if($idbanco == 225) echo "selected"?>>225 - BANCO BRASCAN S.A</option>
								<option value="228" <?php if($idbanco == 228) echo "selected"?>>228 - BANCO ICATU S.A</option>
								<option value="229" <?php if($idbanco == 229) echo "selected"?>>229 - BANCO CRUZEIRO S.A</option>
								<option value="230" <?php if($idbanco == 230) echo "selected"?>>230 - BANCO BANDEIRANTES S.A</option>
								<option value="231" <?php if($idbanco == 231) echo "selected"?>>231 - BANCO BOAVISTA S.A</option>
								<option value="232" <?php if($idbanco == 232) echo "selected"?>>232 - BANCO INTERPART S.A</option>
								<option value="233" <?php if($idbanco == 233) echo "selected"?>>233 - BANCO MAPPIN S.A</option>
								<option value="234" <?php if($idbanco == 234) echo "selected"?>>234 - BANCO LAVRA S.A.</option>
								<option value="235" <?php if($idbanco == 235) echo "selected"?>>235 - BANCO LIBERAL S.A</option>
								<option value="236" <?php if($idbanco == 236) echo "selected"?>>236 - BANCO CAMBIAL S.A</option>
								<option value="237" <?php if($idbanco == 237) echo "selected"?>>237 - BANCO BRADESCO S.A</option>
								<option value="239" <?php if($idbanco == 239) echo "selected"?>>239 - BANCO BANCRED S.A</option>
								<option value="240" <?php if($idbanco == 240) echo "selected"?>>240 - BANCO DE CREDITO REAL DE MINAS GERAIS S.</option>
								<option value="241" <?php if($idbanco == 241) echo "selected"?>>241 - BANCO CLASSICO S.A</option>
								<option value="242" <?php if($idbanco == 242) echo "selected"?>>242 - BANCO EUROINVEST S.A</option>
								<option value="243" <?php if($idbanco == 243) echo "selected"?>>243 - BANCO STOCK S.A</option>
								<option value="244" <?php if($idbanco == 244) echo "selected"?>>244 - BANCO CIDADE S.A</option>
								<option value="245" <?php if($idbanco == 245) echo "selected"?>>245 - BANCO EMPRESARIAL S.A</option>
								<option value="246" <?php if($idbanco == 246) echo "selected"?>>246 - BANCO ABC ROMA S.A</option>
								<option value="247" <?php if($idbanco == 247) echo "selected"?>>247 - BANCO OMEGA S.A</option>
								<option value="249" <?php if($idbanco == 249) echo "selected"?>>249 - BANCO INVESTCRED S.A</option>
								<option value="250" <?php if($idbanco == 250) echo "selected"?>>250 - BANCO SCHAHIN CURY S.A</option>
								<option value="251" <?php if($idbanco == 251) echo "selected"?>>251 - BANCO SAO JORGE S.A.</option>
								<option value="252" <?php if($idbanco == 252) echo "selected"?>>252 - BANCO FININVEST S.A</option>
								<option value="254" <?php if($idbanco == 254) echo "selected"?>>254 - BANCO PARANA BANCO S.A</option>
								<option value="255" <?php if($idbanco == 255) echo "selected"?>>255 - MILBANCO S.A.</option>
								<option value="256" <?php if($idbanco == 256) echo "selected"?>>256 - BANCO GULVINVEST S.A</option>
								<option value="258" <?php if($idbanco == 258) echo "selected"?>>258 - BANCO INDUSCRED S.A</option>
								<option value="261" <?php if($idbanco == 261) echo "selected"?>>261 - BANCO VARIG S.A</option>
								<option value="262" <?php if($idbanco == 262) echo "selected"?>>262 - BANCO BOREAL S.A</option>
								<option value="263" <?php if($idbanco == 263) echo "selected"?>>263 - BANCO CACIQUE</option>
								<option value="264" <?php if($idbanco == 264) echo "selected"?>>264 - BANCO PERFORMANCE S.A</option>
								<option value="265" <?php if($idbanco == 265) echo "selected"?>>265 - BANCO FATOR S.A</option>
								<option value="266" <?php if($idbanco == 266) echo "selected"?>>266 - BANCO CEDULA S.A</option>
								<option value="267" <?php if($idbanco == 267) echo "selected"?>>267 - BANCO BBM-COM.C.IMOB.CFI S.A.</option>
								<option value="275" <?php if($idbanco == 275) echo "selected"?>>275 - BANCO REAL S.A</option>
								<option value="277" <?php if($idbanco == 277) echo "selected"?>>277 - BANCO PLANIBANC S.A</option>
								<option value="282" <?php if($idbanco == 282) echo "selected"?>>282 - BANCO BRASILEIRO COMERCIAL</option>
								<option value="291" <?php if($idbanco == 291) echo "selected"?>>291 - BANCO DE CREDITO NACIONAL S.A</option>
								<option value="294" <?php if($idbanco == 294) echo "selected"?>>294 - BCR - BANCO DE CREDITO REAL S.A</option>
								<option value="295" <?php if($idbanco == 295) echo "selected"?>>295 - BANCO CREDIPLAN S.A</option>
								<option value="300" <?php if($idbanco == 300) echo "selected"?>>300 - BANCO DE LA NACION ARGENTINA S.A</option>
								<option value="302" <?php if($idbanco == 302) echo "selected"?>>302 - BANCO DO PROGRESSO S.A</option>
								<option value="303" <?php if($idbanco == 303) echo "selected"?>>303 - BANCO HNF S.A.</option>
								<option value="304" <?php if($idbanco == 304) echo "selected"?>>304 - BANCO PONTUAL S.A</option>
								<option value="308" <?php if($idbanco == 308) echo "selected"?>>308 - BANCO COMERCIAL BANCESA S.A.</option>
								<option value="318" <?php if($idbanco == 318) echo "selected"?>>318 - BANCO B.M.G. S.A</option>
								<option value="320" <?php if($idbanco == 320) echo "selected"?>>320 - BANCO INDUSTRIAL E COMERCIAL</option>
								<option value="341" <?php if($idbanco == 341) echo "selected"?>>341 - BANCO ITAU S.A</option>
								<option value="346" <?php if($idbanco == 346) echo "selected"?>>346 - BANCO FRANCES E BRASILEIRO S.A</option>
								<option value="347" <?php if($idbanco == 347) echo "selected"?>>347 - BANCO SUDAMERIS BRASIL S.A</option>
								<option value="351" <?php if($idbanco == 351) echo "selected"?>>351 - BANCO BOZANO SIMONSEN S.A</option>
								<option value="353" <?php if($idbanco == 353) echo "selected"?>>353 - BANCO GERAL DO COMERCIO S.A</option>
								<option value="356" <?php if($idbanco == 356) echo "selected"?>>356 - ABN AMRO S.A</option>
								<option value="366" <?php if($idbanco == 366) echo "selected"?>>366 - BANCO SOGERAL S.A</option>
								<option value="369" <?php if($idbanco == 369) echo "selected"?>>369 - PONTUAL</option>
								<option value="370" <?php if($idbanco == 370) echo "selected"?>>370 - BEAL - BANCO EUROPEU PARA AMERICA LATINA</option>
								<option value="372" <?php if($idbanco == 372) echo "selected"?>>372 - BANCO ITAMARATI S.A</option>
								<option value="375" <?php if($idbanco == 375) echo "selected"?>>375 - BANCO FENICIA S.A</option>
								<option value="376" <?php if($idbanco == 376) echo "selected"?>>376 - CHASE MANHATTAN BANK S.A</option>
								<option value="388" <?php if($idbanco == 388) echo "selected"?>>388 - BANCO MERCANTIL DE DESCONTOS S/A</option>
								<option value="389" <?php if($idbanco == 389) echo "selected"?>>389 - BANCO MERCANTIL DO BRASIL S.A</option>
								<option value="392" <?php if($idbanco == 392) echo "selected"?>>392 - BANCO MERCANTIL DE SAO PAULO S.A</option>
								<option value="394" <?php if($idbanco == 394) echo "selected"?>>394 - BANCO B.M.C. S.A</option>
								<option value="399" <?php if($idbanco == 399) echo "selected"?>>399 - BANCO BAMERINDUS DO BRASIL S.A</option>
								<option value="409" <?php if($idbanco == 409) echo "selected"?>>409 - UNIBANCO - UNIAO DOS BANCOS BRASILEIROS</option>
								<option value="412" <?php if($idbanco == 412) echo "selected"?>>412 - BANCO NACIONAL DA BAHIA S.A</option>
								<option value="415" <?php if($idbanco == 415) echo "selected"?>>415 - BANCO NACIONAL S.A</option>
								<option value="420" <?php if($idbanco == 420) echo "selected"?>>420 - BANCO NACIONAL DO NORTE S.A</option>
								<option value="422" <?php if($idbanco == 422) echo "selected"?>>422 - BANCO SAFRA S.A</option>
								<option value="424" <?php if($idbanco == 424) echo "selected"?>>424 - BANCO NOROESTE S.A</option>
								<option value="434" <?php if($idbanco == 434) echo "selected"?>>434 - BANCO FORTALEZA S.A</option>
								<option value="453" <?php if($idbanco == 453) echo "selected"?>>453 - BANCO RURAL S.A</option>
								<option value="456" <?php if($idbanco == 456) echo "selected"?>>456 - BANCO TOKIO S.A</option>
								<option value="464" <?php if($idbanco == 464) echo "selected"?>>464 - BANCO SUMITOMO BRASILEIRO S.A</option>
								<option value="466" <?php if($idbanco == 466) echo "selected"?>>466 - BANCO MITSUBISHI BRASILEIRO S.A</option>
								<option value="472" <?php if($idbanco == 472) echo "selected"?>>472 - LLOYDS BANK PLC</option>
								<option value="473" <?php if($idbanco == 473) echo "selected"?>>473 - BANCO FINANCIAL PORTUGUES S.A</option>
								<option value="477" <?php if($idbanco == 477) echo "selected"?>>477 - CITIBANK N.A</option>
								<option value="479" <?php if($idbanco == 479) echo "selected"?>>479 - BANCO DE BOSTON S.A</option>
								<option value="480" <?php if($idbanco == 480) echo "selected"?>>480 - BANCO PORTUGUES DO ATLANTICO-BRASIL S.A</option>
								<option value="483" <?php if($idbanco == 483) echo "selected"?>>483 - BANCO AGRIMISA S.A.</option>
								<option value="487" <?php if($idbanco == 487) echo "selected"?>>487 - DEUTSCHE BANK S.A - BANCO ALEMAO</option>
								<option value="488" <?php if($idbanco == 488) echo "selected"?>>488 - BANCO J. P. MORGAN S.A</option>
								<option value="489" <?php if($idbanco == 489) echo "selected"?>>489 - BANESTO BANCO URUGAUAY S.A</option>
								<option value="492" <?php if($idbanco == 492) echo "selected"?>>492 - INTERNATIONALE NEDERLANDEN BANK N.V.</option>
								<option value="493" <?php if($idbanco == 493) echo "selected"?>>493 - BANCO UNION S.A.C.A</option>
								<option value="494" <?php if($idbanco == 494) echo "selected"?>>494 - BANCO LA REP. ORIENTAL DEL URUGUAY</option>
								<option value="495" <?php if($idbanco == 495) echo "selected"?>>495 - BANCO LA PROVINCIA DE BUENOS AIRES</option>
								<option value="496" <?php if($idbanco == 496) echo "selected"?>>496 - BANCO EXTERIOR DE ESPANA S.A</option>
								<option value="498" <?php if($idbanco == 498) echo "selected"?>>498 - CENTRO HISPANO BANCO</option>
								<option value="499" <?php if($idbanco == 499) echo "selected"?>>499 - BANCO IOCHPE S.A</option>
								<option value="501" <?php if($idbanco == 501) echo "selected"?>>501 - BANCO BRASILEIRO IRAQUIANO S.A.</option>
								<option value="502" <?php if($idbanco == 502) echo "selected"?>>502 - BANCO SANTANDER S.A</option>
								<option value="504" <?php if($idbanco == 504) echo "selected"?>>504 - BANCO MULTIPLIC S.A</option>
								<option value="505" <?php if($idbanco == 505) echo "selected"?>>505 - BANCO GARANTIA S.A</option>
								<option value="600" <?php if($idbanco == 600) echo "selected"?>>600 - BANCO LUSO BRASILEIRO S.A</option>
								<option value="601" <?php if($idbanco == 601) echo "selected"?>>601 - BFC BANCO S.A.</option>
								<option value="602" <?php if($idbanco == 602) echo "selected"?>>602 - BANCO PATENTE S.A</option>
								<option value="604" <?php if($idbanco == 604) echo "selected"?>>604 - BANCO INDUSTRIAL DO BRASIL S.A</option>
								<option value="607" <?php if($idbanco == 607) echo "selected"?>>607 - BANCO SANTOS NEVES S.A</option>
								<option value="608" <?php if($idbanco == 608) echo "selected"?>>608 - BANCO OPEN S.A</option>
								<option value="610" <?php if($idbanco == 610) echo "selected"?>>610 - BANCO V.R. S.A</option>
								<option value="611" <?php if($idbanco == 611) echo "selected"?>>611 - BANCO PAULISTA S.A</option>
								<option value="612" <?php if($idbanco == 612) echo "selected"?>>612 - BANCO GUANABARA S.A</option>
								<option value="613" <?php if($idbanco == 613) echo "selected"?>>613 - BANCO PECUNIA S.A</option>
								<option value="616" <?php if($idbanco == 616) echo "selected"?>>616 - BANCO INTERPACIFICO S.A</option>
								<option value="617" <?php if($idbanco == 617) echo "selected"?>>617 - BANCO INVESTOR S.A.</option>
								<option value="618" <?php if($idbanco == 618) echo "selected"?>>618 - BANCO TENDENCIA S.A</option>
								<option value="621" <?php if($idbanco == 621) echo "selected"?>>621 - BANCO APLICAP S.A.</option>
								<option value="622" <?php if($idbanco == 622) echo "selected"?>>622 - BANCO DRACMA S.A</option>
								<option value="623" <?php if($idbanco == 623) echo "selected"?>>623 - BANCO PANAMERICANO S.A</option>
								<option value="624" <?php if($idbanco == 624) echo "selected"?>>624 - BANCO GENERAL MOTORS S.A</option>
								<option value="625" <?php if($idbanco == 625) echo "selected"?>>625 - BANCO ARAUCARIA S.A</option>
								<option value="626" <?php if($idbanco == 626) echo "selected"?>>626 - BANCO FICSA S.A</option>
								<option value="627" <?php if($idbanco == 627) echo "selected"?>>627 - BANCO DESTAK S.A</option>
								<option value="628" <?php if($idbanco == 628) echo "selected"?>>628 - BANCO CRITERIUM S.A</option>
								<option value="629" <?php if($idbanco == 629) echo "selected"?>>629 - BANCORP BANCO COML. E. DE INVESTMENTO</option>
								<option value="630" <?php if($idbanco == 630) echo "selected"?>>630 - BANCO INTERCAP S.A</option>
								<option value="633" <?php if($idbanco == 633) echo "selected"?>>633 - BANCO REDIMENTO S.A</option>
								<option value="634" <?php if($idbanco == 634) echo "selected"?>>634 - BANCO TRIANGULO S.A</option>
								<option value="635" <?php if($idbanco == 635) echo "selected"?>>635 - BANCO DO ESTADO DO AMAPA S.A</option>
								<option value="637" <?php if($idbanco == 637) echo "selected"?>>637 - BANCO SOFISA S.A</option>
								<option value="638" <?php if($idbanco == 638) echo "selected"?>>638 - BANCO PROSPER S.A</option>
								<option value="639" <?php if($idbanco == 639) echo "selected"?>>639 - BIG S.A. - BANCO IRMAOS GUIMARAES</option>
								<option value="640" <?php if($idbanco == 640) echo "selected"?>>640 - BANCO DE CREDITO METROPOLITANO S.A</option>
								<option value="641" <?php if($idbanco == 641) echo "selected"?>>641 - BANCO EXCEL ECONOMICO S/A</option>
								<option value="643" <?php if($idbanco == 643) echo "selected"?>>643 - BANCO SEGMENTO S.A</option>
								<option value="645" <?php if($idbanco == 645) echo "selected"?>>645 - BANCO DO ESTADO DE RORAIMA S.A</option>
								<option value="647" <?php if($idbanco == 647) echo "selected"?>>647 - BANCO MARKA S.A</option>
								<option value="648" <?php if($idbanco == 648) echo "selected"?>>648 - BANCO ATLANTIS S.A</option>
								<option value="649" <?php if($idbanco == 649) echo "selected"?>>649 - BANCO DIMENSAO S.A</option>
								<option value="650" <?php if($idbanco == 650) echo "selected"?>>650 - BANCO PEBB S.A</option>
								<option value="652" <?php if($idbanco == 652) echo "selected"?>>652 - BANCO FRANCES E BRASILEIRO SA</option>
								<option value="653" <?php if($idbanco == 653) echo "selected"?>>653 - BANCO INDUSVAL S.A</option>
								<option value="654" <?php if($idbanco == 654) echo "selected"?>>654 - BANCO A. J. RENNER S.A</option>
								<option value="655" <?php if($idbanco == 655) echo "selected"?>>655 - BANCO VOTORANTIM S.A.</option>
								<option value="656" <?php if($idbanco == 656) echo "selected"?>>656 - BANCO MATRIX S.A</option>
								<option value="657" <?php if($idbanco == 657) echo "selected"?>>657 - BANCO TECNICORP S.A</option>
								<option value="658" <?php if($idbanco == 658) echo "selected"?>>658 - BANCO PORTO REAL S.A</option>
								<option value="702" <?php if($idbanco == 702) echo "selected"?>>702 - BANCO SANTOS S.A</option>
								<option value="705" <?php if($idbanco == 705) echo "selected"?>>705 - BANCO INVESTCORP S.A.</option>
								<option value="707" <?php if($idbanco == 707) echo "selected"?>>707 - BANCO DAYCOVAL S.A</option>
								<option value="711" <?php if($idbanco == 711) echo "selected"?>>711 - BANCO VETOR S.A.</option>
								<option value="713" <?php if($idbanco == 713) echo "selected"?>>713 - BANCO CINDAM S.A</option>
								<option value="715" <?php if($idbanco == 715) echo "selected"?>>715 - BANCO VEGA S.A</option>
								<option value="718" <?php if($idbanco == 718) echo "selected"?>>718 - BANCO OPERADOR S.A</option>
								<option value="719" <?php if($idbanco == 719) echo "selected"?>>719 - BANCO PRIMUS S.A</option>
								<option value="720" <?php if($idbanco == 720) echo "selected"?>>720 - BANCO MAXINVEST S.A</option>
								<option value="721" <?php if($idbanco == 721) echo "selected"?>>721 - BANCO CREDIBEL S.A</option>
								<option value="722" <?php if($idbanco == 722) echo "selected"?>>722 - BANCO INTERIOR DE SAO PAULO S.A</option>
								<option value="724" <?php if($idbanco == 724) echo "selected"?>>724 - BANCO PORTO SEGURO S.A</option>
								<option value="725" <?php if($idbanco == 725) echo "selected"?>>725 - BANCO FINABANCO S.A</option>
								<option value="726" <?php if($idbanco == 726) echo "selected"?>>726 - BANCO UNIVERSAL S.A</option>
								<option value="728" <?php if($idbanco == 728) echo "selected"?>>728 - BANCO FITAL S.A</option>
								<option value="729" <?php if($idbanco == 729) echo "selected"?>>729 - BANCO FONTE S.A</option>
								<option value="730" <?php if($idbanco == 730) echo "selected"?>>730 - BANCO COMERCIAL PARAGUAYO S.A</option>
								<option value="731" <?php if($idbanco == 731) echo "selected"?>>731 - BANCO GNPP S.A.</option>
								<option value="732" <?php if($idbanco == 732) echo "selected"?>>732 - BANCO PREMIER S.A.</option>
								<option value="733" <?php if($idbanco == 733) echo "selected"?>>733 - BANCO NACOES S.A.</option>
								<option value="734" <?php if($idbanco == 734) echo "selected"?>>734 - BANCO GERDAU S.A</option>
								<option value="735" <?php if($idbanco == 735) echo "selected"?>>735 - BACO POTENCIAL</option>
								<option value="736" <?php if($idbanco == 736) echo "selected"?>>736 - BANCO UNITED S.A</option>
								<option value="737" <?php if($idbanco == 737) echo "selected"?>>737 - THECA</option>
								<option value="738" <?php if($idbanco == 738) echo "selected"?>>738 - MARADA</option>
								<option value="739" <?php if($idbanco == 739) echo "selected"?>>739 - BGN</option>
								<option value="740" <?php if($idbanco == 740) echo "selected"?>>740 - BCN BARCLAYS</option>
								<option value="741" <?php if($idbanco == 741) echo "selected"?>>741 - BRP</option>
								<option value="742" <?php if($idbanco == 742) echo "selected"?>>742 - EQUATORIAL</option>
								<option value="743" <?php if($idbanco == 743) echo "selected"?>>743 - BANCO EMBLEMA S.A</option>
								<option value="744" <?php if($idbanco == 744) echo "selected"?>>744 - THE FIRST NATIONAL BANK OF BOSTON</option>
								<option value="745" <?php if($idbanco == 745) echo "selected"?>>745 - CITIBAN N.A.</option>
								<option value="746" <?php if($idbanco == 746) echo "selected"?>>746 - MODAL S\A</option>
								<option value="747" <?php if($idbanco == 747) echo "selected"?>>747 - RAIBOBANK DO BRASIL</option>
								<option value="748" <?php if($idbanco == 748) echo "selected"?>>748 - SICREDI</option>
								<option value="749" <?php if($idbanco == 749) echo "selected"?>>749 - BRMSANTIL SA</option>
								<option value="750" <?php if($idbanco == 750) echo "selected"?>>750 - BANCO REPUBLIC NATIONAL OF NEW YORK (BRA</option>
								<option value="751" <?php if($idbanco == 751) echo "selected"?>>751 - DRESDNER BANK LATEINAMERIKA-BRASIL S/A</option>
								<option value="752" <?php if($idbanco == 752) echo "selected"?>>752 - BANCO BANQUE NATIONALE DE PARIS BRASIL S</option>
								<option value="753" <?php if($idbanco == 753) echo "selected"?>>753 - BANCO COMERCIAL URUGUAI S.A.</option>
								<option value="755" <?php if($idbanco == 755) echo "selected"?>>755 - BANCO MERRILL LYNCH S.A</option>
								<option value="756" <?php if($idbanco == 756) echo "selected"?>>756 - BANCO COOPERATIVO DO BRASIL S.A.</option>
								<option value="757" <?php if($idbanco == 757) echo "selected"?>>757 - BANCO KEB DO BRASIL S.A.</option>
							</select><br>
							<input placeholder="Agência..." <?php while($prod = mysqli_fetch_array($queryAg)) { ?><?php echo 'value="'; echo $prod["agencia"]; if (empty($prod["agencia"])) { echo '';} echo '"' ?><?php } ?> type="text" name="agencia"><br>
							<input placeholder="Conta (sem dígito)..." <?php while($prod = mysqli_fetch_array($queryConta)) { ?><?php echo 'value="'; echo $prod["conta"]; if (empty($prod["conta"])) { echo '';} echo '"' ?><?php } ?> type="text" name="agencia"><br>
							<input placeholder="Dígito conta..." <?php while($prod = mysqli_fetch_array($queryDigito)) { ?><?php echo 'value="'; echo $prod["digito"]; if (empty($prod["digito"])) { echo '';} echo '"' ?><?php } ?> type="text" name="agencia"><br>
							<button style="margin: 10px; margin-top: 30px;">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>