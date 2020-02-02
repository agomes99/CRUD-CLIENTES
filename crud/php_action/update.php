<?php
//Sessão

session_start();
// conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$cpf = mysqli_escape_string($connect, $_POST['cpf']);
	$id = mysqli_escape_string($connect, $_POST['id']);


	$sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', cpf = 'cpf' Where id = '$id' ";


	if (mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php?');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php?');
	endif;	
	
endif;
