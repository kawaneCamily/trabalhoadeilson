<?php
include 'read_produto.php';
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Painel</title>
</head>
<body>
    <header>
    <div >
        <h2>Lojinha do JÃO</h2>
</div>
   <div>
    <form action="cadastrar_cliente.php">
        <button type="submit">Cadastrar cliente</button>
    </form>
</div>
<div>
    <form action="cadastrar_vendedor.php">
        <button type="submit">Login vendedor</button>
    </form>
</div>
</header>    

<main>

<!-- Algumas funções eu não consegui descobrir o que estava errado -->