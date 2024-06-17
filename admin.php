<?php include "cabecalho.php"; ?>

<h2>Ambiente Administrativo</h2>
<a href="form-inserir.php" class="btn btn-primary">NOVO ORÇAMENTO</a>

<?php include "conexao.php"; ?>

<table class="table mt-3">
    <thead>
        <tr>
            <th>Número</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "select * from tb_orcamentos";
        $resultado = mysqli_query($conexao, $sql);
        while($umCliente = mysqli_fetch_assoc($resultado)):
        ?>
            <tr>
                <td><?=$umCliente['id'];?></td>
                <td><?=$umCliente['nome_cliente'];?></td>
                <td><?=$umCliente['endereco'];?></td>
                <td><?=$umCliente['telefone'];?></td>
                <td>
                    <a href="form-alterar.php?id=<?=$umCliente['id'];?>">Editar</a>
                    <a href="excluir.php?id=<?=$umCliente['id'];?>">Excluir</a>
                    <a href="visualizar.php?id=<?=$umCliente['id'];?>">Ver</a>
                </td>
            </tr>
        <?php endwhile; 
        mysqli_close($conexao);
        ?>
    </tbody>
</table>

<?php include "rodape.php" ?>