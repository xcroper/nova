<?php
	
	class Cadastro{
		public $nome;
		public $username;
		public $email;
		protected $senha;
		protected $confirma_senha;
		public $data_nascimento;



		public function __construct($nome, $username, $email, $senha, $confirma_senha, $data_nascimento){

					$this->nome            = $nome;
					$this->username        = $username;
					$this->email           = $email;
					$this->senha           = $senha;
					$this->confirma_senha  = $confirma_senha;
					$this->data_nascimento = $data_nascimento;
			}


		public function obterDados(){
			$nome = trim($_POST['nome']);
			$username = trim($_POST['username']);
			$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
			$senha = trim($_POST['senha']);
			$confirma_senha = trim($_POST['confirma_senha']);
			$data_nascimento = trim($_POST['data_nascimento']);
			
			$info[] = array("nome"            => $nome, 
				            "username"        => $username, 
				            "email"           => $email, 
				            "senha"           => $senha, 
				            "confirma_senha"  => $confirma_senha, 
				            "data_nascimento" => $data_nascimento);

			return $info;
			}

		public function inserirDados($nome, $username, $email, $senha, $data_nascimento){
				$query = "INSERT INTO cadastro (nome, username, email, senha, data_nascimento) 
						  VALUES ('".$nome."', '".$username."', '".$email."', '".$senha."','".$data_nascimento."')";						  
				
				mysql_query($query) or die(mysql_error());
			
		}	

	}

?>