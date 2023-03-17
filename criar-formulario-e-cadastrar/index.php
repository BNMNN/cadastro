<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
		<h1>Cadastrar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" required><br><br>
			
			<label>Usuario: </label>
			<input type="text" name="usuario" placeholder="Digite o seu usuario" required><br><br>

			<label>Senha: </label>
			<input type="password" minlength="8" name="senha" placeholder="Digite sua senha" required><br><br>

			<label>Telefone: </label>
			<input type="tel" maxlength="11" minlength="10" name="telefone" placeholder="Digite o seu telefone" required><br><br>
			
			<input type="submit" value="Cadastrar">
			<input type="reset" value="Limpar">
		</form>
	</body>
</html>