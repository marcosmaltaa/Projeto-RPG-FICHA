<?php
    //inciando sessão
    include ('PHP/start_session.php');
    //dando nome para variaveis
    $nome_participantes = array();

    $conexao = new mysqli('127.0.0.1', 'root','','registro');

    if($conexao->connect_error){
        die('Falha da conexão: ' . $conexao->connect_error);
    }
    else{
        //colocando uma variavel para o id da sala
        $id_sala = $_SESSION['sala'];

        //resgatar participantes
        $stmt= $conexao->prepare('SELECT login.nome FROM login INNER JOIN participantes 
        ON login.id = participantes.id_login WHERE participantes.id_sala = ?;');
        $stmt -> bind_param("i", $id_sala);
        $stmt -> execute();
        $stmt -> bind_result($participante);
        
        while ($stmt -> fetch()){
            $nome_participantes[]=$participante;
        }
        
        $stmt-> close();
        $conexao->close();
        
    }
    ?>