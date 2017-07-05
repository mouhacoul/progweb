<!DOCTYPE html>
<html>
<head>
	<title>Instituto de Computação</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Formulário de Contato</h1>
	<p>Por favor, preencha o formulário abaixo e clique no botão Envia Mensagem. Agradecemos por seu contato.</p>
	<form action="index2.php" method="POST">
		<fieldset>
			<legend>Dados Básicos</legend>
			<label for="nome">Nome </label>
			<input type="text" name="nome" id="nome"><br>
			<label for="email">E-mail </label>
			<input type="email" name="email" value="seunome@dominio.com.br" id="email"><br>
			<label for="site">Website </label>
			<input type="text" name="site" value="http://" id="site">
		</fieldset>
		<fieldset>
			<legend>Digite sua Mensagem</legend>
			<textarea name="mensagem" rows="4" cols="50">Este é o valor padrão!
			</textarea>
		</fieldset>
		<p><input type="reset" value="Resetar Dados">
		<input type="submit" value="Enviar Mensagem" id="enviar"></p>
	</form>
</body>
</html>