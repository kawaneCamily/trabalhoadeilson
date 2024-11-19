<?php
 
include 'conexao.php';
$nome_produto = $_POST['nome_produto'];
$tipo_produto = $_POST['tipo_produto'];
$registro_produto = $_POST['registro_produto'];
$qntd_produto = $_POST['qntd_produto'];
$sql = mysqli_query($connectionBD, "INSERT INTO produto(nome_produto, tipo_produto, registro_produto, qntd_produto) VALUES ('$nome_produto', '$tipo_produto', '$registro_produto', '$qntd_produto')");

if ($sql){
    header('Location: tela_vendedor.php');

}


?>