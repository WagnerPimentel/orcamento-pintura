<?php include "cabecalho.php"; ?>

<h2>CADASTRAR UM NOVO ORÇAMENTO</h2>
<br>
<form method="post" action="salvar.php" enctype="multipart/form-data">
    <input type="text" name="nome_cliente" placeholder="Nome do cliente" class="form-control"> <br>
    <input type="text" name="endereco" placeholder="Endereço" class="form-control"> <br>
    <input type="text" name="telefone" placeholder="Telefone" class="form-control"> <br>
    <input type="text" name="servicos" placeholder="Serviços" class="form-control"> <br>
    <input type="text" name="materiais" placeholder="Materiais" class="form-control"> <br>
    <input type="text" name="valor_mao_de_obra" placeholder="Valor da mão de obra" class="form-control"> <br>
    <input type="text" name="valor_materiais" placeholder="Valor dos materiais" class="form-control"> <br>
    <input type="text" name="tempo_previsto" placeholder="Tempo previsto para finalização da obra" class="form-control"> <br>

    <br> <br>
    
    <button class="btn btn-primary" type="submit">SALVAR ORÇAMENTO</button>

</form>

<?php include "rodape.php" ?>