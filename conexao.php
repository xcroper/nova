<?php
	
		//Carregando Classes automaticamente pelo config.php
		require ("config/config.php");
	
		$conexao = new ConexaoMySql('localhost', 'root', '', 'vab');
		
		$conexao->conectar();
		$conexao->selecionarBD();
		
?>