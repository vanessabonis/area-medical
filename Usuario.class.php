<?php

/**
 * 
 */
class Usuario 
{
	
	public function login($user, $senha)
	{
		global $pdo;

		$sql = "SELECT * FROM usuario WHERE email= :email AND senha = :senha";

		$sql = $pdo->prepare($sql);
		$sql->bindValue("email", $email);
		$sql->bindValue("senha", md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0){

			$dado = $sql->fetch();
			echo $dado['usuario_id'];

		}
	}
}

?>