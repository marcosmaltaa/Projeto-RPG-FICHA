<?php
    //Ja esta iniciando a sessão
    include('PHP/mostrar_fichas.php');

        ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de ficha</title>
</head>
<body>
    <div class="ficha" >
        <table>
            <tr>
                <th>Fichas Criadas</th>
                <th>Selecionar ficha</th>
            </tr>
            <?php
                foreach($todas_fichas as $ficha){
                echo "<tr>";
                echo "<td>";
                echo $ficha['nome'] . "<br>";
                echo "</td>";
                echo "<td>";
                echo "<a href= 'ficha.php?ficha=" . urlencode($ficha['id']) . "'><button> Ver ficha </button></a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>