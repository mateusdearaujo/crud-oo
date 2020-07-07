<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crud - Adicionar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<h1>Adicionar Usuário</h1>
<form method="POST" action="adicionar_submit.php">
	Nome:</br>
	<input type="text" name="name"></br></br>

	E-mail:</br>
	<input type="email" name="email"></br></br>
	<input type="submit" value="Adicionar">
</form>
</body>