<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastrar</title>
</head>
<body>
    <a href="cad_usuario.php">Cadastrar</a><br>
    <a href="index.php">Listar</a><br>
    <h1>Cadastrar Usuário</h1>
    <?php
        if(isset($_SESSION['msg'])) { // Se(isset) existir essa variável global(variável ['msg'] 
       //(a global $_SESSION) acesse a if onde irá imprimir a variável global )
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form method="POST" action="proc_cad_usuario.php">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite seu nome completo" required> </br></br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Digite seu e-mail" required></br></br>

        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>