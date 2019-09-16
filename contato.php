<?php 
	$title = "JULIO UI | WEBSITE";
	require_once "head.php";
	titleMenu($title);
?>

<div class="m-2 w-75">
<form action="<?= DOMINIO ?>/respContato.php" class="p-2" method="post">

  <div class="form-group">
    <label for="email">Digite seu E-mail: </label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Seu E-mail será sando para spam!</small>
  </div>

  <div class="form-group">
    <label for="senha">Senha: </label>
    <input type="password" name="senha" class="form-control" id="senha" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="endereco">Digite seu Endereço: </label>
    <input type="text" name="endereco" class="form-control" id="endereco"  placeholder="Digite seu Endereço">
  </div>

  <div class="form-group">
    <label for="endereco">Serviços de interesse: </label>
    <select name="assunto" class="form-control" id="endereco">
    	<option>Deisgn</option>
    	<option>Programação</option>
    	<option>Front End</option>
    	<option>Banco de Dados</option>
    </select>
  </div>

  <p class="text-primary">Deseja ser notificado ?</p>

  <div class="form-group form-check">
    <input type="radio" class="form-check-input" id="checkYes" name="notification" value="sim">
    <label class="form-check-label" for="checkYes">Sim</label><br>
    <input type="radio" class="form-check-input" id="checkNo" name="notification" value="não">
    <label class="form-check-label" for="checkNo">Não</label>

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>

<?php 
	require_once "footer.php";
?>