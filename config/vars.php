<!-- bootstrap install -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- favicon -->
<link rel="icon" href="../../assets/img/favicon.png" type="image/x-icon" />
<!-- fontawesome -->
<script src="https://kit.fontawesome.com/772240cd66.js" crossorigin="anonymous"></script>

<?php include('db.php'); ?>

<style>
	body{
		background: #edeff7 !important;
	}
	@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>

	
	<!-- vars -->

	<?php 


	$appName = 'Bumax Investimentos';
	$empName = 'Bumax';
	$cnpj = '40.109.939/0001-03';


	// links
	$appLocal = 'http://localhost/bumax';
	$appAssets = 'http://localhost/bumax/assets';


	// auth links
	$logout = 'http://localhost/bumax/config/auth/logout.php';


	// session links
	if (empty(@$_SESSION['profilePic'])) {
		$profilePic = '/icons/profilePic.png';
	}


	// session vars
	$nomeSQL = '';


	if (@$_SESSION['email'] = '') {
		header('Location: http://localhost/bumax/auth/login/');
	}


	 ?>


 	<!-- QUERYS -->
	<?php 
	
	session_start();
	$emailSession = 'gustavomeiradsg@gmail.com';
	
	// querys
	$query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryName = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryLastname = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryBorn = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryNacio = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryGender = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryCPF = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryRG = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryOrg = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryEstadoC = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryHowTo = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryExpo = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryPais = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryCEP = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryEndereco = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryNumber = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryComple = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryBairro = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryCidade = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryEstd = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryEmpre = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryProf = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryCarg = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryTelphone = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryMail = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryBanco = mysqli_query($conn, "SELECT banco FROM users WHERE email = '$emailSession'");
	$queryAg = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryConta = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryDigito = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryPIX = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$queryChavePix = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");
	$querySenha = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailSession'");

 	?>

 	<!-- while do banco -->
	<?php 

		while($prod = mysqli_fetch_array($queryBanco)) { 
			$idbanco = $prod["banco"];
		}
		while($prod = mysqli_fetch_array($queryPIX)) { 
			$idPIX = $prod["tipoPix"];
		}
		while($prod = mysqli_fetch_array($querySenha)) { 
			$passDb = $prod["senha"];
		}

	?>

 	<!-- STYLES -->

 <style>
 	div.marginTop{
 		margin-top: 20px !important;
 	}
 	div.borderDown{
 		padding: 25px;
 		border-bottom: 1px solid #f4f4f4;
 		border-radius: 5px 5px 0px 0px;

 	}
 </style>