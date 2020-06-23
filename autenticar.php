<?php 
	
	require_once("conexao.php");
	@session_start();


/*Inútil nesse caso*/
	if (empty($_POST['usuario']) || empty($_POST['senha'])) {

		#Caso o Required do HTML não trabalhe
		header("location:index.php");
		exit();

	}

	#Método Prepare
	$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
	$senha = mysql_real_escape_string($mysqli, $_POST['senha']);

	$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

	$res = mysqli_query{$}


 ?>