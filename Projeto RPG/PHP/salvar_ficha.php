<?php
//iniciando sessão
include('start_session.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){

    //recolhendo informação do formulario
    $id_ficha = $_POST['id_ficha'];
    $nome_pers = $_POST['nome_personagem'];
    $forca = $_POST['forca_personagem'];
    $destreza = $_POST['destreza_personagem'];
    $const = $_POST['const_personagem'];
    $inteligencia = $_POST['int_personagem'];
    $sabedoria = $_POST['sab_personagem'];
    $carisma = $_POST['car_personagem'];
    $id_sala = $_SESSION['sala'];
    

    //iniciando conexao
    $conexao = new mysqli('127.0.0.1', 'root','','registro');

    if($conexao->connect_error){
        die('Falha da conexão: ' . $conexao->connect_error);
    }
    else{
        //salvando as fichas no banco de dados
        $stmt = $conexao->prepare("UPDATE ficha SET nome=?, forca=?, destreza=?, constituicao=?, inteligencia=?, sabedoria=?, carisma=? 
        WHERE id = ?");
        $stmt->bind_param("siiiiiii", $nome_pers, $forca, $destreza, $const, $inteligencia, $sabedoria, $carisma, $id_ficha);
        $stmt->execute();
        $stmt->close();
        $conexao->close();

        header('location: ../todas_fichas.php');


    }
}

?>