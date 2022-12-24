<?php

session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id ='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario); //Conexão + Query
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Editar</title>
</head>
<body>
    <a href="index.php">Cadastrar</a><br>
    <a href="listar.php">Listar</a><br>
    <h1>Editar Usuário</h1>
    <?php
        if(isset($_SESSION['msg'])) { // Se(isset) existir essa variável global(variável ['msg'] 
        echo $_SESSION['msg'];       //(a global $_SESSION) acesse a if onde irá imprimir a variável global )
        unset($_SESSION['msg']);
    }
    ?>
    <form method="POST" action="proc_edit_usuario.php">
    <input type="hidden" name="id"  value="<?php  echo $row_usuario ['id']; ?>">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite seu nome completo" value="<?php  echo $row_usuario ['nome']; ?>"> </br></br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Digite seu e-mail" value="<?php  echo $row_usuario ['email']; ?>" ></br></br>

        <input type="submit" value="Editar">
    </form>

</body>
</html>