<?php
//Sessão

session_start();
// conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$cpf = mysqli_escape_string($connect, $_POST['cpf']);

	$sql = "INSERT INTO clientes (nome, sobrenome, email, cpf) VALUES ('$nome', '$sobrenome', '$email', '$cpf')";

	if (mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "cadastro efetuado com sucesso!";
		header('Location: ../index.php?');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php?');
	endif;	
	
endif;
