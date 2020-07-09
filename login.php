<?php

	require_once("conexao.php");
	@session_start();

	if (isset($_POST['Email']) && !empty($_POST['Email']) && isset($_POST['Senha']) && !empty($_POST['Senha'])) {

		$user = addslashes($_POST['Email']);
		$senha = addslashes($_POST['Senha']);

	}else{

		#Caso o Required do HTML não trabalhe
		header("location:index.php");

	}

	
