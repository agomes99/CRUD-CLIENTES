<?php

//conexão
include_once 'php_action/db_connect.php';


include_once 'includes/header.php';

// SELECT
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);
	$sql = "SELECT * FROM clientes WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>


<div class="row">
	<div class=" col s12 m6 push-m3">
<h3 class="light"> Editar cliente </h3>


<form action="php_action/update.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $dados['id'];?>">	
		<div class="input-field col s12">
			<input type="text" name="nome" id="nome" value="<?php echo $dados ['nome']; ?>">
			<label for="nome">Nome</label>
		</div>	

		<div class="input-field col s12">
			<input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados ['sobrenome']; ?>" >
			<label for="sobrenome">Sobrenome</label>
		</div>	


		<div class="input-field col s12">
			<input type="text" name="email" id="email" value="<?php echo $dados ['email']; ?>" >
			<label for="email">E-mail</label>
		</div>	

		<div class="input-field col s12">
			<input type="text" name="cpf" id="cpf" value="<?php echo $dados ['cpf']; ?>">
			<label for="cpf">CPF</label>
		</div>	

	<button type="submit" name="btn-editar" class="btn">ATUALIZAR</button>
	<a href="index.php" class="btn green">Lista de clientes </a>

</form>

	</div>
	</div>	


<?php
include_once  'includes/footer.php';
?>








