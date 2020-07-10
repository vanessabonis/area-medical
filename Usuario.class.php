<?php

/**
 * Verificar se existe os dados fornecidos no login
 */
class Usuario 
{
	
	public function login($email, $senha)
	{
		global $pdo;

		$sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";

		$sql = $pdo->prepare($sql);
		$sql->bindValue("email", $email);
		$sql->bindValue("senha", md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0){

			$dado = $sql->fetch();
			
			$_SESSION['usuario_id'] = $dado['usuario_id'];

			return true;

		}else{

			return false;
		}
	}
}

?>