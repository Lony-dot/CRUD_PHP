<?php

session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){ //Se for diferente de VAZIO, acessa esse IF.
    $result_ususario = "DELETE FROM  usuarios WHERE  id ='$id' ";
    $resultado_ususario = mysqli_query($conn, $result_ususario);
    
    if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "<p style='color: LimeGreen; '>Usuário apagado com sucesso</p>";
        header("Location: index.php");
    }else {
        $_SESSION['msg'] = "<p style='color: red; '>Usuário não foi apagado com sucesso</p>";
        header("Location: index.php");
    }
    
}else { //Caso a URL não tenha o ID, ou seja, sendo VAZIO, acesso esse ELSE.
    $_SESSION['msg'] = "<p style='color: red; '>Necessário selecionar um usuário</p>";
    header("Location: index.php");
}
