<?php 

	// INSIRA users nome, email, telphone, senha OS DADOS nome-completo e email e telphone e password

	$conn = mysqli_connect("localhost", "root", "", "bumax");

	$nome = $_REQUEST['nome-completo'];
	$email = $_REQUEST['email'];
	$telphone = $_REQUEST['telphone'];
	$senha = $_REQUEST['password'];

	$query = "INSERT INTO users (nome, email, telphone, senha) VALUES ('$nome', '$email', '$telphone', '$senha')";

	$pegaEmail = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
	$pegaTelphone = mysqli_query($conn, "SELECT * FROM users WHERE telphone = '$telphone'");

	if (!mysqli_num_rows($pegaEmail) >= 1) {
		if (!mysqli_num_rows($pegaTelphone) >= 1) {
			if (!mysqli_query($conn, $query)) {
				echo 'Deu erro, em alguma coisa :(';
		 		echo '<script>window.location.href = "./index.php";</script>';
			}else{
				echo 'deu certo caraio';
			}
		}else{
		 	echo '<script>alert("esse telefone já foi registrado :(")</script>';
		 	echo '<script>window.location.href = "./index.php";</script>';
		}
	}else{
		 echo '<script>alert("esse e-mail já foi registrado :(")</script>';
		 	echo '<script>window.location.href = "./index.php";</script>';
	}

	mysqli_close($conn);

 ?>

