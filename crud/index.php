<?php
include_once 'includes/message.php';
// conexão  banco de dados
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
?>




<div class="row">
	<div class=" col s12 m6 push-m3">
<h3 class="light"> Clientes </h3>

<table class="striped">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Sobrenome</th>
			<th>E-mail:</th>
			<th>CPF</th>
		</tr>


	</thead>
<tbody>
<?php
$sql = "SELECT * FROM clientes";
$resultado = mysqli_query($connect, $sql);
while($dados = mysqli_fetch_array($resultado)):
?>

	<tr>
		<td><?php echo $dados['nome']; ?></td>
		<td><?php echo $dados['sobrenome']; ?></td>
		<td><?php echo $dados['email']; ?></td>
		<td><?php echo $dados['cpf']; ?></td>
		<td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
		<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
	

 <!-- Modal Structure -->
  <div id="modal<?php echo $dados['id']; ?>" class="modal">
    <div class="modal-content">
      <h3>Atenção!</h3>
      <p>Você tem certeza que deseja excluir este cliente?<p>
    
    <div class="modal-footer">
      
	
	<form action="php_action/delete.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
		<button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar!</button>

		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
		
	</form>
</div>
    </div>
  </div>





	</tr>



</tbody>
<?php endwhile; ?>
</table>


<br>
<a href="adicionar.php" class="btn">Adicionar cliente</a>



	</div>
	</div>	

<?php
include_once  'includes/footer.php';
?>









