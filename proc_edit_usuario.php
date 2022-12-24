<?php

session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT); //Int, pois o ID é um número inteiro.
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE usuarios SET nome='$nome', email='$email', modified=NOW() where id='$id' ";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_affected_rows($conn)) { //Informa se alguma linha foi afetada
    $_SESSION['msg'] = "<p style='color: LimeGreen'>Usuário editado com sucesso</p>";
    header("Location: index.php");
}else{
    $_SESSION['msg'] = "<p style='color: OrangeRed'>Usuário não foi editado com sucesso</p>";
    header("Location: editar.php?id=$id");
}