<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastrar Produto</title>
</head>
<body>
    <div>
    <h1 class="c">CADASTRO DE PRODUTOS - JÃO</h1>
        <form action="save_produto.php" method="post">
            <div class="row" class="b">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nome" name="nome_produto" id="">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Tipo" name="tipo_produto" id="">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Registro" name="registro_produto" id="">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Quantidade" name="qntd_produto" id="">
                </div>
            </div> <br>
                <div> 
                    <button type="submit" class="btn btn-danger">Salvar</button>
                </div>
           
        </form>

    </div>
</body>
</html>