<?php

	//Carregando Classes automaticamente pelo config.php
	require_once("config/config.php");

	
	//Recebendo dados via Post
	$tipo            = trim($_POST['tipo']);
	$nome            = trim($_POST['nome']);
	$username        = trim($_POST['username']);
	$email           = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
	$senha           = trim($_POST['senha']);
	$confirma_senha  = trim($_POST['confirma_senha']);
	$data_nascimento = trim($_POST['data_nascimento']);

	
	$cadastro= new  Cadastro($tipo,
							 $nome, 
						     $username, 
						     $email, 
						     $senha, 
						     $confirma_senha, 
						     $data_nascimento);


	$cadastro->inserirDados();
		
?>