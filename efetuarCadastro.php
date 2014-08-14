<?php
	
	//Carregando Classes automaticamente pelo config.php
	require_once("config/config.php");
	//require_once("classes/cadastro.class.php");

	//Conectando BD
	require_once("tiles/connect.php");

	$dados = new  Cadastro($_POST['nome'], 
						   $_POST['username'], 
						   $_POST['email'], 
						   $_POST['senha'], 
						   $_POST['confirma_senha'], 
						   $_POST['data_nascimento']);
	
	$info = $dados->obterDados();	

	$nome            = $info[0]["nome"];
	$username 		 = $info[0]["username"];
	$email			 = $info[0]["email"];
	$senha			 = $info[0]["senha"];
	$data_nascimento = $info[0]["data_nascimento"];
		
	
	$validacao = new ValidacaoCadastro($info);

	$validacao->validar();







	$dados->inserirDados($nome, $username, $email, $senha, $data_nascimento);
		
?>