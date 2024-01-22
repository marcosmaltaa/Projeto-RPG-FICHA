<?php 
include('PHP/participante_sala.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala da ficha</title>
</head>
<body>
    <h1>ID da sala: <?php echo $id_sala; ?></h1>
    
    <table>
        <tr>
            <th>Participantes: </th>
        </tr>
            <?php 
            foreach($nome_participantes as $pessoas){
                echo "<tr>";
                echo "<td>";
                echo $pessoas . "<br>";
                echo "</tr>";
                echo "</td>";
            }
            ?>
    </table>

    <a href="criacao_ficha.php"><button>Criar ficha</button></a>
    <a href="todas_fichas.php"><button>Visualizar fichas</button></a>
    
</body>
</html>