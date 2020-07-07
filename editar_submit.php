<?php
include 'contato.class.php';
$contato = new Contato();

if(!empty($_POST['id'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$id = $_POST['id'];

	$contato->editar($name, $id, $email);

	header("Location: index.php");
}
?>