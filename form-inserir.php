<?php include "cabecalho.php"; ?>

<h2>CADASTRAR UM NOVO ORÇAMENTO</h2>
<br>
<form class="row g-3" method="post" action="salvar.php" enctype="multipart/form-data">
    <div class="col-md-6">
        <input type="text" name="nome_cliente" placeholder="Nome do cliente" class="form-control">
    </div>
    <div class="col-md-6">
        <input type="text" name="telefone" placeholder="Telefone" class="form-control">
    </div>
    <div class="col-md-12">
        <input type="text" name="endereco" placeholder="Endereço" class="form-control">
    </div>
    <div class="form-floating">
        <textarea name="servicos" class="form-control" placeholder="Trabalhos a serem realizados" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Trabalhos a serem realizados</label>
    </div>
    <div class="form-floating">
        <textarea name="materiais" class="form-control" placeholder="Materiais" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Materiais</label>
    </div>
    <div class="col-md-6">
        <input type="text" name="valor_mao_de_obra" placeholder="Valor da mão de obra" class="form-control">
    </div>
    <div class="col-md-6">
        <input type="text" name="valor_materiais" placeholder="Valor dos materiais" class="form-control">
    </div>
    <div class="col-md-12">
        <input type="text" name="tempo_previsto" placeholder="Tempo previsto para finalização da obra" class="form-control">
    </div>
    

    <br>
    
    <button class="btn btn-primary" type="submit">SALVAR ORÇAMENTO</button>
</form>

<?php include "rodape.php" ?>