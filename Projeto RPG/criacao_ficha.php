<?php    
    // startando a sessão
   session_start();
   // verificando se a sessão existe
   if(!isset($_SESSION['nome'])){
       header('location: /login.html');
       exit;
}?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/criarficha.css">
    <title>Criação de ficha</title>
</head>
<body>
    <div class="ficha">
        <form method="post" action="PHP/criar_ficha.php">
            
            <div class = "personagem">
                <div class= "nome_p">
                    <label for="nome_personagem">Nome do Personagem</label>
                    <input type="text" id="nome_personagem" name="nome_personagem">
                </div>
                <label for="classe_personagem">Classe</label>
                <input type="text" id="classe_personagem" name="classe_personagem">
                
                <label for="nivel_personagem">Nivel</label>
                <input type="number" id="nivel_personagem" name="nivel_personagem">

                <label for="antecedentes_personagem">Antecedentes</label>
                <input type="number" id="antecedentes_personagem" name="antecedentes_personagem">

                <label for="raca_personagem">Raça</label>
                <input type="text" id="raca_personagem" name="raca_personagem">

                <label for="tendencia_personagem">Tendencia</label>
                <input type="number" id="tendencia_personagem" name="tendencia_personagem">

                <label for="experiencia_personagem">EXP</label>
                <input type="number" id="experiencia_personagem" name="experiencia_personagem">
                
            </div>
            
            <div class = "atributos">
                <label for="forca_personagem">Força</label> 
                <input type="number" id="forca_personagem" name="forca_personagem">
                
                <label for="destreza_personagem">Destreza</label>
                <input type="number" id="destreza_personagem" name="destreza_personagem">
                
                <label for="const_personagem">Constituição</label>
                <input type="number" id="const_personagem" name="const_personagem">
                
                <label for="int_personagem">Inteligência</label>
                <input type="number" id="int_personagem" name="int_personagem">
                
                <label for="sab_personagem">Sabedoria</label>
                <input type="number" id="sab_personagem" name="sab_personagem">
                
                <label for="car_personagem">Carisma</label>
                <input type="number" id="car_personagem" name="car_personagem">
            </div>

            <div class = "bonus">
                <label for="inspiracao_personagem">Inspiração</label>
                <input type="number" id="inspiracao_personagem" name="inspiracao_personagem">

                <label for="b_proficiencia">Bônus de proficiência</label>
                <input type="number" id="b_proficiencia" name="b_proficiencia">
            </div>

            <div class = "resistencia">
                <label for="b_forca">Força</label> 
                <input type="number" id="b_forca" name="b_forca">
                
                <label for="b_destreza">Destreza</label>
                <input type="number" id="b_destreza" name="b_destreza">
                
                <label for="b_constituicao">Constituição</label>
                <input type="number" id="b_constituicao" name="b_constituicao">
                
                <label for="b_inteligencia">Inteligência</label>
                <input type="number" id="b_inteligencia" name="b_inteligencia">
                
                <label for="b_sabedoria">Sabedoria</label>
                <input type="number" id="b_sabedoria" name="b_sabedoria">
                
                <label for="b_carisma">Carisma</label>
                <input type="number" id="b_carisma" name="b_carisma">

            </div>
            <div class = "pericias">
                <label for="acrobacia">Acrobacia </label> 
                <input type="number" id="acrobacia " name="acrobacia ">
                
                <label for="arcanismo">Arcanismo</label>
                <input type="number" id="arcanismo" name="arcanismo">
                
                <label for="atletismo">Atletismo</label>
                <input type="number" id="atletismo" name="atletismo">
                
                <label for="atuacao">Atuação</label>
                <input type="number" id="atuacao" name="atuacao">
                
                <label for="blefar">Blefar</label>
                <input type="number" id="blefar" name="blefar">
                
                <label for="furtividade">Furtividade</label>
                <input type="number" id="furtividade" name="furtividade">

                <label for="historia">Historia</label>
                <input type="number" id="historia" name="historia">

                <label for="intimidacao">Intimidação</label>
                <input type="number" id="intimidacao" name="intimidacao">

                <label for="intuicao">Intuição</label>
                <input type="number" id="intuicao" name="intuicao">

                <label for="investigacao">Investigação</label>
                <input type="number" id="investigacao" name="investigacao">

                <label for="lidar_animais">Lidar com animais</label>
                <input type="number" id="lidar_animais" name="lidar_animais">

                <label for="medicina">Medicina</label>
                <input type="number" id="medicina" name="medicina">

                <label for="natureza">Natureza</label>
                <input type="number" id="natureza" name="natureza">

                <label for="percepcao">Percepção</label>
                <input type="number" id="percepcao" name="percepcao">

                <label for="persuasao">Persuasão</label>
                <input type="number" id="medicina" name="medicina">

                <label for="prestidigitacao">Prestidigitação</label>
                <input type="number" id="prestidigitacao" name="prestidigitacao">

                <label for="religiao">Religiao</label>
                <input type="number" id="religiao" name="religiao">

                <label for="sobrevivencia">Sobrevivência</label>
                <input type="number" id="sobrevivencia" name="sobrevivencia">
            </div>
            
            <div class="idiomas">
                <label for="idiomas">Idiomas</label>
                <textarea id="idiomas" name="idiomas" rows="5" cols="40"></textarea>
            </div>

            <div class="equipamentos">
                <label for="equipamentos">Equipamentos</label>
                <textarea id="equipamentos" name="equipamentos" rows="5" cols="40"></textarea>
            </div>

            <div class="vida">
                <label for="armadura">Armadura</label>
                <input type="number" id="armadura" name="armadura">

                <label for="iniciativa">Iniciativa</label>
                <input type="number" id="iniciativa" name="iniciativa">

                <label for="deslocamento">Deslocamento</label>
                <input type="number" id="deslocamento" name="deslocamento">
                
                <label for="pontos_vida">Pontos de vida</label>
                <input type="number" id="pontos_vida" name="pontos_vida">

                <label for="pv_atual">PV atual</label>
                <input type="number" id="pv_atual" name="pv_atual">

                <label for="pv_temp">PV temporario</label>
                <input type="number" id="pv_temp" name="pv_temp">

                <label for="dados_vida">Dados de vida</label>
                <input type="text" id="dados_vida" name="dados_vida">

                <label for="teste_viver">Viver</label>
                <input type="number" id="teste_viver" name="teste_viver">

                <label for="teste_morrer">Morrer</label>
                <input type="number" id="teste_morrer" name="teste_morrer">
            </div>

            <div class="ataques_magias">
                <label for="ataque_magia">Ataques e magias</label>
                <textarea id="ataque_magia" name="ataque_magia" rows="5" cols="40"></textarea>
            </div>

            <div class ="personalidade">
                <label for="traco_personalidade">Traço da personalidade</label>
                <textarea id="traco_personalidade" name="traco_personalidade" rows="5" cols="40"></textarea>

                <label for="ideais">Ideais</label>
                <textarea id="ideais" name="ideais" rows="5" cols="40"></textarea>

                <label for="ligacoes">Ligações</label>
                <textarea id="ligacoes" name="ligacoes" rows="5" cols="40"></textarea>

                <label for="defeitos">Defeitos</label>
                <textarea id="defeitos" name="defeitos" rows="5" cols="40"></textarea>
            </div>

            <div class = "caracteristicas_habilidades">
                <label for="caracteristicas_hab">Caracteristicas e Habilidades</label>
                <textarea id="caracteristicas_hab" name="caracteristicas_hab" rows="5" cols="40"></textarea>
            </div>

            <div class = "informacoes_personagens">
                <label for="idade">Idade</label>
                <input type="number" id="idade" name="idade">

                <label for="olhos">Olhos</label>
                <input type="text" id="olhos" name="olhos">

                <label for="altura">Altura</label>
                <input type="text" id="altura" name="altura">
                
                <label for="pele">Pele</label>
                <input type="text" id="pele" name="pele">

                <label for="peso">Peso</label>
                <input type="text" id="peso" name="peso">

                <label for="cabelo">Cabelo</label>
                <input type="text" id="cabelo" name="cabelo">
            </div>

            <div class ="foto">
                <label for="foto">Imagem do personagem</label>
                <input type="file" id="foto" name="foto">
            </div>

            <div class ="historia">
                <label for="aliados_orgs">Aliados e Organizações</label>
                <textarea id="aliados_orgs" name="aliados_orgs" rows="5" cols="40"></textarea>

                <label for="historia">Historia</label>
                <textarea id="historia" name="historia" rows="5" cols="40"></textarea>

                <label for="outras_caracteristicas">Outras caracteristicas</label>
                <textarea id="outras_caracteristicas" name="outras_caracteristicas" rows="5" cols="40"></textarea>

                <label for="tesouro">Tesouro</label>
                <textarea id="tesouro" name="tesouro" rows="5" cols="40"></textarea>
            </div>

            <div class = "info_conjurador">
                <label for="classe_conjurador">Classe do Conjurador</label>
                <input type="text" id="classe_conjurador" name="classe_conjurador">

                <label for="habilidade_chave">Habilidade chave</label>
                <input type="text" id="habilidade_chave" name="habilidade_chave">

                <label for="cd_tr">CD do TR</label>
                <input type="text" id="cd_tr" name="cd_tr">

                <label for="bonus_ataque">Bônus de ataque</label>
                <input type="number" id="bonus_ataque" name="bonus_ataque">
            </div>

            <div class = "magias">
                <label for="level_0">Level 0</label>
                <textarea id="level_0" name="level_0" rows="5" cols="40"></textarea>

                <label for="level_1">Level 1</label>
                <textarea id="level_1" name="level_1" rows="5" cols="40"></textarea>

                <label for="level_2">Level 2</label>
                <textarea id="level_2" name="level_2" rows="5" cols="40"></textarea>

                <label for="level_3">Level 3</label>
                <textarea id="level_3" name="level_3" rows="5" cols="40"></textarea>

                <label for="level_4">Level 4</label>
                <textarea id="level_4" name="level_4" rows="5" cols="40"></textarea>

                <label for="level_5">Level 5</label>
                <textarea id="level_5" name="level_5" rows="5" cols="40"></textarea>

                <label for="level_6">Level 6</label>
                <textarea id="level_6" name="level_6" rows="5" cols="40"></textarea>

                <label for="level_7">Level 7</label>
                <textarea id="level_7" name="level_7" rows="5" cols="40"></textarea>

                <label for="level_8">Level 8</label>
                <textarea id="level_8" name="level_8" rows="5" cols="40"></textarea>

                <label for="level_9">Level 9</label>
                <textarea id="level_9" name="level_9" rows="5" cols="40"></textarea>
            </div>
            

            <button>Criar ficha</button>

        </form>
    </div>
</body>
</html>