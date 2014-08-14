<?php

	//Carregando Classes automaticamente pelo config.php
	require_once("config/config.php");

	//Recebendo dados via Post
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$verificar = new VerificarLogin($email, $senha);

	$verificar->verificar();


?>