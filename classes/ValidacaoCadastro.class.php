<?php

	class ValidacaoCadastro{

		private $dados;
		private $erro = array();

		public function set($valor, $nome){
			$this->dados = array("nome" => $nome, "email" => $email);
			return $this;
		}

		public function obrigatorio(){
			if(empty($this->dados['nome'])){
				$this->erro[] = sprintf("O campo %s é obrigatório", $this->dados['nome']);
			}
		} return $this;

		public function email(){
			if(filter_var($this->dados['valor'], FILTER_VALIDATE_EMAIL)){
				$this->erro[] = echo("Email inválido");
			}
		}

		public function data(){
			//99-99-9999
			if(!preg_match("/^[0-9]{2}\-^[0-9]{2}\-^[0-9]{4}$/"), $this->dados['data']);
			$this->erro[] = echo("Data inválida");
		}

		public function validar(){
			if(count($this-erro) > 0){
				return false;
			}else{
				return true;
			}
		}

		public function getErrors(){
			return $this->erro;
		}

	}

?>