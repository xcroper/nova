<?php
	
		//Definindo constantes do DB
		define("DB_HOST", "localhost");
		define("DB_USER", "root");
		define("DB_PASS", "");
		define("DB_NAME", "nova");
	
		function connect(){
	
		//Variavel de conexao
		$conn =  "mysql:";
		$conn .= "host=".DB_HOST.";";
		$conn .= "dbname=".DB_NAME.";";

		try {
			$db = new PDO($conn, DB_USER, DB_PASS);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			if($e->getCode()==1049){
				echo "Banco de Dados errado.";
			}else{
				echo $e->getMessage();	
			}
			
		}

		return $db;
	}
	

	//Carregando Classes automaticamente pelo config.php
		/*require ("config/config.php");
	
		$conexao = new ConexaoMySql('localhost', 'root', '', 'vab');
		
		$conexao->conectar();
		$conexao->selecionarBD();
		*/
?>