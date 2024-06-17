<?php
include "cabecalho.php"; 
include "conexao.php";
$id = $_GET['id'];
$nome_cliente = "nome_cliente";
$endereco = "endereco";
$telefone = "telefone";
$servicos = "servicos";
$materiais = "materiais";
$valor_mao_de_obra = "valor_mao_de_obra";
$valor_materiais = "valor_materiais";
$tempo_previsto = "tempo_previsto";

$sql = "select * from tb_orcamentos where id = $id";
$resultado = mysqli_query($conexao, $sql);
while($umOrçamento = mysqli_fetch_assoc($resultado)):
    $nome_cliente = $UmOrçamento['nome_cliente'];
    $endereco = $umOrçamento['endereco'];
    $telefone = $umOrçamento['telefone'];
    $servicos = $umOrçamento['servicos'];
    $materiais = $umOrçamento['materiais'];
    $valor_mao_de_obra = $umOrçamento['valor_mao_de_obra'];
    $valor_materiais = $umOrçamento['valor_materiais'];
    $tempo_previsto = $umOrçamento['tempo_previsto'];
endwhile;
?>

<h2>EDITAR ORÇAMENTO NUMERO <?=$id;?></h2>
<br>
<form method="post" action="atualizar.php?id=<?=$id;?>" enctype="multipart/form-data">
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

<?php 
mysqli_close($conexao);
include "rodape.php" ;
?>