<?php 
       // startando a sessão
   session_start();
   // verificando se a sessão existe
   if(!isset($_SESSION['nome'])){
       header('location: login.html');
       exit;
   }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/inicio.css">
    <title>Pagina inicial</title>
</head>
<body>

<div class="sala">
    <div class="criar">
        <h1>Criar Sala</h1>
        <form method="post" action="PHP/criar_sala.php">
            <input type="text" id="nome_criarSala" name = "criar_nome" placeholder="Nome da sala">
            <input type="text" id="senha_criarSala" name="criar_senha" placeholder = "Senha da sala">
            <a href=""><button>Criar sala</button></a>
        </form>
    </div>
    <div class="entrar">
            <h1>Entrar Sala</h1>
            <form method="post" action="PHP/entrar_sala.php">
                <input type="number" id="id_entrarSala" name="entrar_id" placeholder = "ID sala">
                <input type="password" id="senha_entrarSala" name="entrar_senha" placeholder = "Senha da sala">
                <a href=""><button>Entrar</button></a>
            </form>

    </div>

</div>

</body>
</html>