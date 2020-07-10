<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Sistema Medico</title>

		<meta charset="utf-8">

		<!--Responsivo-->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--JavaScript-->

		<script src="JS/login.js"></script>

		<!-- Bootstrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
			

		<!--Folha de Estilo - Login -->
		<link rel="stylesheet" href="CSS/login.css">
 		
 		<!--ICONE-->
 		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


		<!-- FAVICON -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

	</head>
	
	<body>

		<form class="login-form" method="POST" action="login.php">
			<!--Logo usuario-->
			<div class="user">
				<img src="img/logoJ.jpg">
			</div>

			<!--Email-->
			
			<div class="login-box">
				<!--icone email-->
				<i class="fa fa-envelope-o"></i>

				<input type="email" name="email" placeholder="Insira seu Email" required>
			</div>
					
			<!--Senha-->
			<div class="login-box">
				<!--icone key-->
				<i class="fa fa-key"></i>

				<input type="password" name="senha" placeholder="Insira sua Senha" id="myInput" required>

				<!--icone eye-->
				<span class="eye" onclick="hide()">
					<i id="hide1" class="fa fa-eye"></i>
					<i id="hide2" class="fa fa-eye-slash"></i>
				</span>
			</div>

			<!--Botão-->
			<div>

				<button type="submit" class="login-btn">ENTRAR</button>

				<!-- Esqueceu a senha-->

				<!--<a style="text-align: center; display: block; color: white; font-size: 13px;" href="">Esqueci minha Senha</a>-->
										

			</div>

		</form>

	</body>
</html>