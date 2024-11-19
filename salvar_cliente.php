<?php
 
include 'conexao.php';
$nome_usuario = $_POST['nome_usuario'];
$cpf_usuario = $_POST['cpf_usuario'];
$datanasc_usuario = $_POST['datanasc_usuario'];
$sql = mysqli_query($connectionBD, "INSERT INTO cliente(nome_usuario, cpf_usuario, datanasc_usuario) VALUES ('$nome_usuario', '$cpf_usuario','$datanasc_usuario')");

if ($sql){
    header('Location: index.php');

}


?>