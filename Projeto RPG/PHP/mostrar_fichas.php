<?php 
//iniciando sessão
include('start_session.php');

//criando variaveis
$todas_fichas= array();
$email= $_SESSION['email'];
$id_sala = $_SESSION['sala'];
$id_login = $_SESSION['id_login'];
//fazendo conexão
$conexao = new mysqli('127.0.0.1', 'root','','registro');

if($conexao->connect_error){
    die('Falha da conexão: ' .$conexao->connect_error);
}
else{
    $stmt = $conexao->prepare('SELECT nome, id FROM ficha WHERE id_login = ? and id_sala = ?');
    $stmt->bind_param('ii', $id_login, $id_sala);
    $stmt->execute();
    $resultado = $stmt->get_result();
    while($row = $resultado->fetch_assoc()){
        $todas_fichas[] = $row;
    }
}
?>