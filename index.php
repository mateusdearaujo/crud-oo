<?php
include 'contato.class.php';

$contato = new Contato();

$usuarios = $contato->getAll();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crud - oop</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($usuarios as $usuario): ?>
		<tr>
			<td><?php echo $usuario['id']; ?></td>
			<td><?php echo $usuario['nome']; ?></td>
			<td><?php echo $usuario['email']; ?></td>
			<td>
				<a href="editar.php?id=<?php echo $usuario['id']; ?>"><img src="assets/images/editar.svg" width="20" height="20"></a>
				<a href="excluir.php?id=<?php echo $usuario['id']; ?>"><img style="margin-left:10px;" src="assets/images/excluir.svg" width="20" height="20"></a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a href="adicionar.php">Adicionar</a>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>