<?php 

    $nome_vendedor = $_POST["nome_vendedor"];
    $senha_vendedor = $_POST["senha_vendedor"];


    $query = "SELECT * FROM vendedor WHERE nome_vendedor='$nome_vendedor' and senha_vendedor='$senha_vendedor'";
    $conexao = new PDO('mysql:host=localhost; dbname=lojinha', 'root', '');
    $resultado = $conexao->query($query);
    $logado = $resultado->fetch();
    $id_usuario = $logado['id_usuario'];

    if($logado == null){
        header('Location: usuarioerro.php');
    }else {
        session_start();
        $_SESSION['usuario_logado'] = $id_logado;
        header('Location: tela_vendedor.php');
 
        die();
    }
    ?>