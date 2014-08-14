<?php
		class ConexaoMySql{
			protected $servidor;
			protected $usuario;
			protected $senha;
			protected $bancoDeDados;
			
			public function __construct($servidor, $usuario, $senha, $bancoDeDados){
			
					$this->servidor = $servidor;
					$this->usuario = $usuario;
					$this->senha = $senha;
					$this->bancoDeDados = $bancoDeDados;
			
			}
			
			public function conectar(){
				mysql_connect($this->servidor, $this->usuario, $this->senha) or die(mysql_error());
			}

			public function selecionarBD(){
				mysql_select_db($this->bancoDeDados) or die(mysql_error());
			}

			

			public function fechar(){
				mysql_close();
			}
			
		}
?>