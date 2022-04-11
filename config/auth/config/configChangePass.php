<?php 

	include('../../vars.php');

	$link = mysqli_connect("localhost", "root", "", "bumax");

	// requests
	$oldPass = $_REQUEST['senhaAtual'];
	$newPass = $_REQUEST['novaSenha'];
	$newPassRepeat = $_REQUEST['novaSenhaRepeat'];

	$sql = "UPDATE users SET senha = '$newPass' WHERE email = '$emailSession'";

	if ($oldPass == $passDb) {
		if ($newPass == $newPassRepeat) {
			if(mysqli_query($link, $sql)){
			    echo "Records inserted successfully.";
			} else{
			    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
		}
	}else{
		echo '<script>alert("Senha incorreta!");</script>';
		echo $oldPass;
		echo $newPass;
		echo $newPassRepeat;
		echo $passDb;
		echo '<script>alert("Senha atualizada!");</script>';
		echo '<script>window.location.href = "./logout.php";</script>';
	}

 ?>