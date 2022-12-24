<?php

session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_ususario = "DELETE FROM  usuarios WHERE  id ='$id' ";
$resultado_ususario = mysqli_query($conn, $result_ususario);