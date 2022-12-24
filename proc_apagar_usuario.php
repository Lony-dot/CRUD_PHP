<?php

session_start();
include_once("conexao.php");
$id = 1;
$result_ususario = "DELETE FROM  usuarios WHERE  id ='$id' ";
$resultado_ususario = mysqli_query($conn, $result_ususario);