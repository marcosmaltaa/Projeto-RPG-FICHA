<?php
include ('start_session.php');

if (isset($_GET['id'])) {
    // Obtenha e sanitize o ID da ficha
    $id_ficha = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $id_login = $_SESSION['id_login'];

    $conexao = new mysqli('127.0.0.1', 'root','','registro');

    if ($conexao -> connect_error){
        die('Falha da conexão: ' .$conexao -> connect_error);
    }else{
        $stmt = $conexao -> prepare('DELETE FROM ficha WHERE id = ?');
        $stmt -> bind_param("i", $id_ficha);
        $stmt -> execute();
        $stmt -> fetch();
        $stmt-> close();
        $conexao ->close();
        header('location: ../todas_fichas.php');
}
}
?>