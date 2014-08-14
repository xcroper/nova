	$con = new ConexaoMySql('localhost', 'root', '', 'nova');
	$con->conectar();
	$con->selecionarBD();