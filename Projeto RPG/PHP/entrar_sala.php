<?php
//iniciando sessão
include ('start_session.php');
//pegando id e senha digitada no site
$id_sala = $_POST['entrar_id'];
$senha_sala = $_POST['entrar_senha'];

//conexão sendo feita
$conexao = new mysqli('127.0.0.1', 'root','','registro');

if ($conexao -> connect_error){
    die('Falha da conexão: ' .$conexao -> connect_error);
}else{
    //verificando se tem algo escrito
if($id_sala){
            //verificando se a sala existe
            $sqlID = "SELECT id FROM sala WHERE id = ?";
            $stmt = $conexao->prepare($sqlID);
            $stmt->bind_param("i", $id_sala);
            $stmt->execute();
            $stmt->bind_result($resultado);
            $stmt->fetch();
            $stmt->close();
            
            //verificando se existe senha
            $sqlSenha = "SELECT senha FROM sala WHERE id = ?";
            $stmt = $conexao->prepare($sqlSenha);
            $stmt->bind_param("i", $id_sala);
            $stmt->execute();
            $stmt->bind_result($senha_resultado);
            $stmt->fetch();
            $stmt->close();

            //pegando o id do login
            $stmt = $conexao->prepare("SELECT id FROM login WHERE email = ?");
            $stmt->bind_param("s", $_SESSION['email']);
            $stmt->execute();
            $stmt->bind_result($id_login);
            $stmt->fetch();
            $stmt->close();
            
            //fazendo as comparações
            if($resultado == $id_sala && $senha_resultado == $senha_sala){
                
                //verificando se participante esta na sala
                $stmt = $conexao->prepare("SELECT id_login FROM participantes WHERE id_login = ? AND id_sala = ?");
                $stmt->bind_param("ii", $id_login, $id_sala);
                $stmt->execute();
                $stmt->bind_result($registrado);
                $stmt->fetch();
                $stmt->close();
                
                //entrar id sala
                $_SESSION['sala'] = $id_sala;
                header('location: ../Sala.php');

                //adicionando a lista de participante caso nao esteja na sala
                if($registrado == NULL){

                $stmt = $conexao->prepare("INSERT INTO participantes (id_login, id_sala) VALUES (?, ?)");
                $stmt -> bind_param("ii", $id_login, $id_sala);
                $stmt -> execute();
                $stmt -> fetch();
                $stmt-> close();

                
            }

            }
            else{
                echo "sala não existe";
            }
        
        }
        $conexao->close();

    }

?>