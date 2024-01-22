<?php
    //ja iniciou
    include('PHP/visualizar_ficha.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha</title>
</head>
<body>
    <form method = "post" action = "PHP/salvar_ficha.php">
        <label for="id_ficha">Id da ficha</label>
        <input type="text" id="id_ficha" name="id_ficha" value='<?php echo $id_ficha;?>' readonly>

        <label for="nome_personagem">Nome do Personagem</label>
        <input type="text" id="nome_personagem" name="nome_personagem" value='<?php echo $nome;?>' readonly>

        <input type="text" id= "classe_personagem" name= "classe_personagem">
                
        <label for="forca_personagem">Força</label> 
        <input type="number" id="forca_personagem" name="forca_personagem" value='<?php echo $forca;?>' readonly>
                
        <label for="destreza_personagem">Destreza</label>
        <input type="number" id="destreza_personagem" name="destreza_personagem" value='<?php echo $destreza;?>' readonly>
                
        <label for="const_personagem">Constituição</label>
        <input type="number" id="const_personagem" name="const_personagem" value='<?php echo $constituicao;?>' readonly>
                
        <label for="int_personagem">Inteligência</label>
        <input type="number" id="int_personagem" name="int_personagem" value='<?php echo $inteligencia;?>' readonly>
                
        <label for="sab_personagem">Sabedoria</label>
        <input type="number" id="sab_personagem" name="sab_personagem" value='<?php echo $sabedoria;?>' readonly>
                
        <label for="car_personagem">Carisma</label>
        <input type="number" id="car_personagem" name="car_personagem" value='<?php echo $carisma;?>' readonly>

    </form>
    <button onclick = "editar_ficha()" id = "editar_botao">Editar ficha</button>
    <a href='PHP/excluir_ficha.php?id=<?php echo urlencode($id_ficha); ?>'><button>Excluir ficha</button></a>
    
    <script>
        function criar_botao(){
            var botao_salvar = document.createElement("button");
            botao_salvar.innerHTML="Salvar Alterações";
            document.querySelector("form").appendChild(botao_salvar);
        
        }

        function editar_ficha(){
            document.getElementById('nome_personagem').readOnly = false;
            document.getElementById('forca_personagem').readOnly = false;
            document.getElementById('destreza_personagem').readOnly = false;
            document.getElementById('const_personagem').readOnly = false;
            document.getElementById('int_personagem').readOnly = false;
            document.getElementById('sab_personagem').readOnly = false;
            document.getElementById('car_personagem').readOnly = false;
            
            var delet_botao = document.getElementById("editar_botao");
            delet_botao.remove();

            criar_botao();
        }
    </script>
</body>
</html>