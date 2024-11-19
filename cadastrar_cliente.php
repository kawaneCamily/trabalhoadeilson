<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastrar Fã</title>
    <style>
        body {
            background-color: darkred;
        }
    </style>
</head >
<body>
    <div>
    <h1 class="a">FORMULÁRIO CADASTRO</h1>
    <h6 class="e">Bem vindo a lojinha do Jão! por favor conclua o cadastro</h6>
        <form action="save_cliente.php" method="post">
            <div class="row" class="b">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nome" name="nome_usuario" id=""> 
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="CPF" name="cpf_usuario" id=""> 
                </div>
                <div class="col">
                    <input type="date" class="form-control" placeholder="Data de nascimento" name="datanasc_usuario" id=""> 
                </div>
                
            </div> <br>
                <div> 
                    <button type="submit" class="btn btn-primary">SALVAR</button>
                </div>
           
        </form>

    </div>
</body>
</html>