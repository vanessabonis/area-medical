<?php


	if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

		require 'conexao.php';
		require 'Usuario.class.php';

		$u = new Usuario();

		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);

		if($u->login($email, $senha) == true){
			if(isset($_SESSION['usuario_id'])){
				header("location:area-usuario.php");
			}else{
				
				header("location:index.php");
			}
		}else{
			header("location:index.php");
		}
	}else{

		#Caso o Required do HTML não trabalhe
		header("location:index.php");

	}

	?>

	
