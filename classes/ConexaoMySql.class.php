<?php
		class ConexaoMySql{
			
			public function __construct($nome, $senha){
			
				//Definindo váriaveis de conexao;
				define("DB_HOST", "localhost");
				define("DB_USER", $nome);
				define("DB_PASSWORD", $senha);
				define("DB_NAME", "nova");

			}


			public function connect(){
				//Variavel de conexao
				$conn =  "mysql:";
				$conn .= "host=".DB_HOST.";";
				$conn .= "dbname=".DB_NAME.";";
				
				//Criando variavel $db de conexao
				try {
					$db = new PDO($conn, DB_USER, DB_PASSWORD);
					$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}catch (PDOException $e) {
					if($e->getCode()==1049){
						echo "Banco de Dados errado.";
					}else{
						echo $e->getMessage();	
					}
				
				}

				return $db;
			}

			
			public function fechar(){
				mysql_close();
			}
			
		}
?>