<?php
    //iniciando sessão
    session_start();

    //recolhendo informações digitadas
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email && $senha){ 
        $conexao = new mysqli('127.0.0.1', 'root','','registro') ;
        
        if ($conexao -> connect_error){
            die('Falha da conexão: ' .$conexao -> connect_error);
        }else{
            // pegando a senha do banco de dados de acordo com o email
            $sqlsenha = "select senha from login where email = ?";
            $stmt = $conexao -> prepare($sqlsenha);
            $stmt -> bind_param("s", $email);
            $stmt -> execute();
            $stmt -> bind_result($resultado);
            $stmt -> fetch();
            $stmt-> close();

            // pegando o nome do banco de dados de acordo com o email
            $sqlnome = "select nome from login where email = ?";
            $stmt = $conexao -> prepare($sqlnome);
            $stmt -> bind_param("s", $email);
            $stmt -> execute();
            $stmt -> bind_result($nome_sessao);
            $stmt -> fetch();
            $stmt-> close();

            //pegando id no banco de dados de acordo com email
            $stmt = $conexao -> prepare("select id from login where email = ?");
            $stmt -> bind_param("s", $email);
            $stmt -> execute();
            $stmt -> bind_result($id_usuario);
            $stmt -> fetch();
            $stmt-> close();
            // comparando a senha digitada com a senha no banco de dados
            if($senha==$resultado){
                // colocando o email e o nome da sessão nos session
                $_SESSION['nome'] = $nome_sessao;
                $_SESSION['email'] = $email;
                $_SESSION['id_login'] = $id_usuario;

                header('location: ../criar_entrar_sala.php');
            }else{
                echo "email ou senha errados";
            }
            $conexao -> close();
        }
    }
}
    ?>