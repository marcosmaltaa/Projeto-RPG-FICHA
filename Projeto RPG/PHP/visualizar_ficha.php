<?php
include ('start_session.php');

if (isset($_GET['ficha'])) {
    // Obtém o valor do parâmetro 'ficha'
    $id_ficha = $_GET['ficha'];
}
$id_sala= $_SESSION['sala'];
$id_login= $_SESSION['id_login'];

$conexao = new mysqli('127.0.0.1', 'root','','registro');

if($conexao->connect_error){
    die('Falha da conexão: ' . $conexao->connect_error);
}
else{
    $stmt = $conexao->prepare('SELECT nome, forca, destreza, constituicao, inteligencia, sabedoria, carisma 
    FROM ficha WHERE id = ?');
    $stmt->bind_param('i', $id_ficha);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $linha = $resultado->fetch_assoc();
    
    $nome = $linha['nome'];
    $forca = $linha['forca'];
    $destreza = $linha['destreza'];
    $constituicao = $linha['constituicao'];
    $inteligencia = $linha['inteligencia'];
    $sabedoria = $linha ['sabedoria'];
    $carisma = $linha ['carisma'];

    $stmt->close();
    $conexao->close();
}
?>