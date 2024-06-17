<?php 
include "cabecalho.php";
include "conexao.php";

$id = $_GET["id"];
$nome = "nome";
$tipo = "tipo";
$foto = "foto";
$sql = "select * from tb_pokemon where id = $id";
$resultado = mysqli_query($conexao, $sql);
while($umPokemon = mysqli_fetch_assoc($resultado)):
    $nome = $umPokemon['nome'];
    $tipo = $umPokemon['tipo'];
    $foto = $umPokemon['foto'];
endwhile;    
?>
<h2>Visualizando pokemon número <?=$id;?></h2>
<div class="row">
    <div class="col">
        <img src="img/<?=$foto;?>" alt="<?=$foto;?>" class="img-fluid">
    </div>
    <div class="col">
        <h3><?=$nome?></h3>
        <h4><?=$tipo?></h4>
    </div>
</div>
<a href="admin.php">Voltar</a>
<?php
mysqli_close($conexao);
include "rodape.php";
?>