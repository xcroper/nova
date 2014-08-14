<?php
	
	class Cadastro{
		
		//Dados a serem recebidos para o cadastro ser efetuado
		private $tipo;
		private $nome;
		private $username;
		private $email;
		private $senha;
		private $confirma_senha;
		private $data_nascimento;


		//Function construct apenas requere as variaveis para a classe recebe-las
		public function __construct($tipo, $nome, $username, $email, $senha, $confirma_senha, $data_nascimento){

					$this->tipo            =$tipo;
					$this->nome            = $nome;
					$this->username        = $username;
					$this->email           = $email;
					$this->senha           = $senha;
					$this->confirma_senha  = $confirma_senha;
					$this->data_nascimento = $data_nascimento;
			}

		
		
		//Insere dados no DB 
		public function inserirDados(){
			
			//Conectando BD
			$conn = new ConexaoMySql('root', '');
			$db = $conn->connect();

			//Preparando sql
			$sql  = "INSERT INTO cadastro (tipo, nome, username, email, senha, data_nascimento)";
			$sql .= " VALUES (:tipo, :nome, :username, :email, :senha, :data_nascimento)";
			
			try {
				$create = $db->prepare($sql);
				
				$create->bindValue(':tipo',     $this->tipo, PDO::PARAM_INT);
				$create->bindValue(':nome',     $this->nome, PDO::PARAM_STR);
				$create->bindValue(':username', $this->username, PDO::PARAM_STR);
				$create->bindValue(':email',    $this->email, PDO::PARAM_STR);
				$create->bindValue(':senha',    $this->senha, PDO::PARAM_STR);
				$create->bindValue(':data_nascimento', $this->data_nascimento, PDO::PARAM_INT);
				
				$create->execute();
			
			}catch(PDOException $e){
				echo  $e->getMessage();
			}	

			//Encerrando conexao com o DB
			$conn->


		}//end inserirDados
	


}//end Class

?>