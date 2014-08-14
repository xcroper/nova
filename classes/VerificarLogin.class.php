<?php
	
	class VerificarLogin{

		private $email;
		private $senha;

		function __construct($email, $senha){

			$this->email = $email;
			$this->senha = $senha;

		}

		function verificar(){

			//Conectar com o BD
			$conn = new ConexaoMySql('root', '');
			$db = $conn->connect();

			//Obtendo senha do email colocado
			// e checando se o email existe no BD
			$resultadoEmail= $db->prepare("SELECT senha FROM cadastro WHERE email=:email");
			$resultadoEmail->bindValue(":email",$this->email, PDO::PARAM_STR);
			$resultadoEmail->execute();

		   	$numResultados = $resultadoEmail->rowCount();

		   	if($numResultados<1){

		   		$erro[] = "Email Inexistente";
		   		header("Location: index.php");


		   	}else{

		   		$resultadoEmail = $resultadoEmail->fetch(PDO::FETCH_OBJ);
		   		
		   		if($this->senha == $resultadoEmail->senha){
		   			header("Location: home.php");
		   		
		   		}else{
		   			$erro[] = "E-mail ou senha não conferem".
		   			header("Location: index.php");
		   		}

		   	}


		}

	}

?>