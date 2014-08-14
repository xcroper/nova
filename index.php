<!DOCTYPE html>
<html lang="pt-BR">
	
	<head>
		<meta charset="iso-8859-1" />
		<title>NOVA</title>
		<link rel="stylesheet" href="css/default.css" type="text/css"/>
		<link rel="stylesheet" href="css/index.css" type="text/css"/>
		<script src="js/index.js" type="text/javascript"></script>
		<script src="js/jquery.js" type="text/javascript"></script>
	</head>

	<body>

		<!--Header para usuarios que ainda nao estao logados-->
		<?php require_once("tiles/header_unlogged.php"); ?>
		<!--END HEADER-->

		<div id="content">
		<div id="left" class="left">
				
				<img id="login_img" src="img/signup.png" />
				<form id="signup" name="cadastro" method="post"  enctype="multipart/form-data" action="efetuarCadastro.php">
						
						<input type="hidden" name="tipo" id="tipo" value="1" />

						<input type="text" name="nome" id="nome" value="<?php if(isset($_POST['nome'])){echo $_POST['nome'];} ?>" 
						placeholder="Nome" class="input_dados" maxlength=40 required />
						
						<input type="text" name="username" id="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];} ?>" 
						placeholder="Username" class="input_dados" maxlength=40 required />
						
						<input id="email" type="email" name="email" placeholder="exemplo@email.com" maxlength=32 
						value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" class="input_dados" required />
						
						<input type="password" id="senha" name="senha" value="" maxlength=32 class="input_dados" placeholder="Senha" required />
						
						<input type="password" id="confirma_senha" name="confirma_senha" value="" placeholder="Confirme a senha" maxlength=32 
						class="input_dados" required />
						
						<select name="data_nascimento" id="data_nascimento" class="select">
						<?php 
						if(isset($_POST['data_nascimento'])){
						echo '<option>'.$_POST['data_nascimento'].'</option>';
						}else{echo '<option>Ano de Nascimento</option>';}
						$ano = date("Y");
						for($i = $ano-16;$i>$ano - 50;$i--){
						echo '<option>'.$i.'</option>';}
						?>
						</select>
						
						<input type="submit" name="submitCadastro" value="Sign Up" class="submit_login"/>
				
				</form><!--login-->

			</div><!--left-->

			<!--Colocação da logo lateral-->
			<?php require_once "tiles/logo_lateral_grande.php"; ?>

		</div><!--content-->	

	</body>

</html>