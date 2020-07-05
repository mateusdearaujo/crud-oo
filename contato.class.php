<?php
class Contato {
	private $pdo;

	public function __construct() {
		$this->pdo = new PDO("mysql:dbname=crud_oo;host=localhost", "mateus", "");
	}

	public function adicionar($email, $nome) {
		if($this->existeEmail($email) == false) {
			$sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->execute();

			return true;
		}	else {
			return false;
		}
	}

	public function getNome($email) {
		$sql = "SELECT nome FROM contatos WHERE email = :email";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$info = $sql->fetch();
			return $info['nome'];
		} else {
			return '';
		}
	}

	public function getAll() {
		$sql = "SELECT * FROM contatos";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			array();
		}
	}

	public function existeEmail($email) {
		$sql = "SELECT * FROM contatos WHERE email = :email";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function editar($nome, $email) {
		if($this->existeEmail($email)) {
			$sql = "UPDATE contatos SET nome = :nome WHERE email = :email";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

	public function excluir($id) {
		$sql = "DELETE FROM contatos WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();
	}
}
?>