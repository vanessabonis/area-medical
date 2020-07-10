<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Área Médica</title>

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--JavaScript-->

		

		<!-- Bootstrap-->
		
		
		<!--Folha de Estilo -->
		<link rel="stylesheet" href="CSS/area-usuario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
 		
 		<!--ICONE-->
 		


		<!-- FAVICON -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

	</head>
	
	<body>

     <input type="checkbox" id="check">
    
    <!--Header-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Área <span>Médica</span></h3>
      </div>

      <!--Botão Sair-->
      <div>
        <a href="index.php" class="logout_btn">Sair</a>
      </div>
    </header>
   
    <!--Sidebar-->
    <div class="sidebar">
      <center>
        <img src="CSS/pf.png" class="profile_image" alt="">
        <h4>Dr. Fulano De Tal</h4>
      </center>
      <a href="#"><i class="fas fa-desktop"></i><span>Pacientes</span></a>
      <a href="#"><i class="fas fa-table"></i><span>Planos</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Agenda</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Configurações</span></a>
    </div>

    <div class="content"></div>

	</body>
</html>
