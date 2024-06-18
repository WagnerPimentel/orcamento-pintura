<?php 
include "cabecalho.php";
include "conexao.php";

$id = $_GET['id'];
$nome_cliente = 'nome_cliente';
$endereco = 'endereco';
$telefone = 'telefone';
$servicos = 'servicos';
$materiais = 'materiais';
$valor_mao_de_obra = 'valor_mao_de_obra';
$valor_materiais = 'valor_materiais';
$tempo_previsto = 'tempo_previsto';

$sql = "select * from tb_orcamentos where id = $id";

$resultado = mysqli_query($conexao, $sql);
while($umOrçamento = mysqli_fetch_assoc($resultado)):
    $nome_cliente = $umOrçamento['nome_cliente'];
    $endereco = $umOrçamento['endereco'];
    $telefone = $umOrçamento['telefone'];
    $servicos = $umOrçamento['servicos'];
    $materiais = $umOrçamento['materiais'];
    $valor_mao_de_obra = $umOrçamento['valor_mao_de_obra'];
    $valor_materiais = $umOrçamento['valor_materiais'];
    $tempo_previsto = $umOrçamento['tempo_previsto'];
endwhile;    
?>
<h2>Visualizando Orçamento número <?=$id;?></h2>
<div class="row">
    <div class="col">
        <h1><?=$nome_cliente?></h3>
    </div>
    <div class="col">
        <h3><?=$endereco?></h3>
        <h4><?=$telefone?></h4>
    </div>
</div>
<a href="admin.php">Voltar</a>
<?php
mysqli_close($conexao);
include "rodape.php";
?>