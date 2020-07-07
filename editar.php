<?php
include 'contato.class.php';
$contato = new Contato();

if(!empty($_GET['id'])) {
	$id = $_GET['id'];

	$info = $contato->getInfo($id);

	// if(empty($info['email'])) {
	// 	header("Location: index.php");
	// 	exit;
	// }
} else {
	header("Location: index.php");
	exit;
}
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crud - oop</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<h1>Editar Usuário</h1>
<form method="POST" action="editar_submit.php">
	<input type="hidden" name="id" value="<?php echo $info['id']; ?>">
	Nome:</br>
	<input type="text" name="name" value="<?php echo $info['nome']; ?>"></br></br>

	E-mail:</br>
	<input type="text" name="email" value="<?php echo $info['email']; ?>"></br></br>
	<input type="submit" value="Concluir edição">
</form>
</body>