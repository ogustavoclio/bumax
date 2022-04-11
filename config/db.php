<?php

	header("content-type: text/html;charset=utf-8");
	$link = mysqli_connect("localhost", "root", "", "bumax");

	#estabelecemos conexão com o banco de dados
	mysqli_connect('localhost','root','') or die(mysqli_error());
	$conn = mysqli_connect('localhost','root','') or die(mysqli_error());

	#seleciona o banco de dados
	mysqli_select_db($conn, 'bumax') or die(mysqli_error());
	mysqli_query($conn, "SET NAMES 'utf8'");
	mysqli_query($conn, "SET character_set_connection=utf8");
	mysqli_query($conn, "SET character_set_client=utf8");
	mysqli_query($conn, "SET character_set_results=utf8");

		 
	if (!$link) {
	    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
	 
	mysqli_close($link);

?> 