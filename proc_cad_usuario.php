<?php

session_start();

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuarios(nome, email, created) VALUE ('$nome', '$email', NOW() )";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)) { 
    $_SESSION['msg'] = "<p style='color: LimeGreen'>Usuário cadastrado com sucesso</p>";
    header("Location: index.php");
}else{
    $_SESSION['msg'] = "<p style='color: OrangeRed'>Usuário não foi cadastrado com sucesso</p>";
    header("Location: cad_usuario.php");
}