<?php include "cabecalho.php"; ?>

<form>
  <div class="row g-3">  
    <div class="col-md-6">
      <label class="form-label">Email</label>
      <input type="email" name="nome_usuario" class="form-control">

    <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="col-md-6">
      <label class="form-label">Senha</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="col-md-12">
      <input type="checkbox" class="form-check-input">
      <label class="form-check-label" for="exampleCheck1">Lembrar de Login e senha</label>
    </div>
    <br> <br>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="col-md-6">
        <input type="text" name="nome_cliente" placeholder="Nome do cliente" class="form-control">
    </div>

<?php include "rodape.php" ?>