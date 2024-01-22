<?php
   if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];
   
    //conexão base de dados

    $conexao = new mysqli('127.0.0.1', 'root','','registro');

    //verificando se o email pertence a base de dados
    if ($conexao -> connect_error){
        die('Falha da conexão: ' .$conexao -> connect_error);
    }else{
        $sqlemail = "select email from login where email = ?";
        $stmt = $conexao -> prepare($sqlemail);
        $stmt -> bind_param("s", $email);
        $stmt -> execute();
        $stmt -> bind_result($resultado);
        $stmt -> fetch();
        $stmt-> close();
    }
        
    //fazendo registro no banco de dados
    if ($senha == $senha2){
        if($email != $resultado){
            $stmt = $conexao -> prepare("insert into login (nome, email, senha) values (?,?,?)");
            $stmt -> bind_param("sss", $nome, $email, $senha);
            $stmt -> execute();
            $stmt-> close();
            $conexao -> close();
        }else{
            echo "Email ja registrado";
        }
        }
     else{
    echo "senhas não batem";
    }
}
?>