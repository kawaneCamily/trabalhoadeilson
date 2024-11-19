<?php
include 'read_produto.php';
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="telavendedor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tela vendedor</title>
</head>
<body>
    <header>  
        <div>
            <a href="index.php">Home</a>
        </div>
        <div>
            <h2>Tela do Vendedor</h2>
        </div>
        <div>
            <a href="cadastrar_produto.php">CADASTRAR PRODUTO</a>
        </div>
    </header>

    <main>
        <div class="container">
            <h3>Lista de Produtos</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do Produto</th>
                        <th>Tipo</th>
                        <th>Registro</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($produto = mysqli_fetch_assoc($listarSQLp)) {
                    ?>
                        <tr>
                            <td><?php echo $produto['id_produto']; ?></td>
                            <td><?php echo $produto['nome_produto']; ?></td>
                            <td><?php echo $produto['tipo_produto']; ?></td>
                            <td><?php echo $produto['registro_produto']; ?></td>
                            <td><?php echo $produto['qntd_produto']; ?></td>
                            <td>
                                <a href="delete.php?id_produto=<?php echo $produto['id_produto']; ?>" class="btn-excluir">Excluir</a>
                                <a href="update.php?id_produto=<?php echo $produto['id_produto']; ?>" class="btn-editar">Atualizar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>