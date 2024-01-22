<?php
    //iniciando sessão
    include ('start_session.php');
    
    //Pegando informaçoes colocadas nos form
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $criarNome_sala = $_POST['criar_nome'];
    $criarSenha_sala = $_POST['criar_senha'];

    $conexao = new mysqli('127.0.0.1', 'root','','registro');

    if($conexao->connect_error){
        die('Falha da conexão: ' .$conexao->connect_error);
    }
    else{
        //pegando o id do usuario com o session
        $sql_idLogin = "SELECT id FROM login WHERE email = ?";
        $stmt = $conexao -> prepare($sql_idLogin);
        $stmt -> bind_param("s", $_SESSION['email']);
        $stmt -> execute();
        $stmt -> bind_result($id_login);
        $stmt -> fetch();
        $stmt-> close();

        //procurando se sala com mesmo nome ja existe
        $sql_verificarNome = "SELECT nome FROM sala WHERE id_login = ? and nome = ?";
        $stmt = $conexao -> prepare($sql_verificarNome);
        $stmt -> bind_param("is", $id_login, $criarNome_sala);
        $stmt -> execute();
        $stmt -> bind_result($verificarNome);
        $stmt -> fetch();
        $stmt-> close();


        //CRIANDO A SALA!!
        if($criarNome_sala != $verificarNome && $criarNome_sala != null){
            $stmt = $conexao->prepare("INSERT INTO sala (nome, senha, id_login) VALUES (?,?,?)");
            $stmt->bind_param("ssi", $criarNome_sala, $criarSenha_sala, $id_login);
            $stmt->execute();
            $stmt->close();
            
            //pegando id da sala recem criada
            $stmt = $conexao->prepare("SELECT id FROM sala WHERE nome = ? AND id_login = ?");
            $stmt->bind_param("si", $criarNome_sala, $id_login);
            $stmt->execute();
            $stmt->bind_result($id_sala);
            $stmt->fetch();
            $stmt->close();

            //ADICIONANDO A TABELA "PARTICIPANTES"
            $stmt = $conexao->prepare("INSERT INTO participantes (id_login, id_sala) VALUES (?,?)");
            $stmt->bind_param("ii", $id_login, $id_sala);
            $stmt->execute();
            $stmt->close();

            //pegando o id da sala para o session
            $_SESSION['sala'] = $id_sala;
            header('location: ../Sala.php');
            
        }else{
            echo "sala ja existe!";
        }
        $conexao->close();
    }
    }

?>