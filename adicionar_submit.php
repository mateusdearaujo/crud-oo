<?php
include 'contato.class.php';
$contato = new Contato();

if(!empty($_POST['name']) && !empty($_POST['email'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];

	$contato->adicionar($email, $name);

	header("Location: index.php");
}
?>