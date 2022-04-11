<?php 
	
	include('../../config/vars.php');
	include('../../config/sql.php');

	$emailRequest = $_REQUEST['email'];
	$passwordRequest = $_REQUEST['password'];

    $verifica = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailRequest' AND senha = '$passwordRequest'") or die("erro ao selecionar");

      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='./index.php';</script>";
        die();

      }else{
        session_start();
        @$_SESSION['email'] = $emailRequest;
        header("Location: ../../dashboard/minha-carteira.php/");
      }

 ?>