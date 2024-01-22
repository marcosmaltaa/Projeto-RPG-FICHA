<?php
//iniciando sessão
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    //personagem
    $nome_pers = $_POST['nome_personagem'];
    $classe = $_POST[''];
    $nivel = $_POST[''];
    $antecedente = $_POST[''];
    $raca = $_POST[''];
    $tendencia = $_POST[''];
    $experiencia = $_POST[''];

    //atributos
    $forca = $_POST['forca_personagem'];
    $destreza = $_POST['destreza_personagem'];
    $const = $_POST['const_personagem'];
    $inteligencia = $_POST['int_personagem'];
    $sabedoria = $_POST['sab_personagem'];
    $carisma = $_POST['car_personagem'];

    //bonus
    $inspiracao = $_POST[''];
    $b_proficiencia = $_POST[''];

    //resistencia
    $forca_b = $_POST[''];
    $destreza_b = $_POST[''];
    $constituicao_b = $_POST[''];
    $inteligencia_b = $_POST[''];
    $sabedoria_b = $_POST[''];
    $carisma_b = $_POST[''];

    //pericias
    $acrobacia = $_POST[''];
    $arcanismo = $_POST[''];
    $atletismo = $_POST[''];
    $atuacao = $_POST[''];
    $blefar = $_POST[''];
    $furtividade = $_POST[''];
    $historia = $_POST[''];
    $intimidacao = $_POST[''];
    $intuicao = $_POST[''];
    $investigacao = $_POST[''];
    $lidar_animais = $_POST[''];
    $medicina = $_POST[''];
    $natureza = $_POST[''];
    $percepcao = $_POST[''];
    $persuasao = $_POST[''];
    $prestidigitacao = $_POST[''];
    $religiao = $_POST[''];
    $sobrevivencia = $_POST[''];

    //idiomas
    $idiomas = $_POST[''];

    //equipamento
    $equipamento = $_POST[''];

    //vida
    $armadura = $_POST[''];
    $iniciativa = $_POST[''];
    $desloc = $_POST[''];
    $pv = $_POST[''];
    $pv_atual = $_POST[''];
    $pv_temp = $_POST[''];
    $dados_vida = $_POST[''];
    $teste_viver = $_POST[''];
    $teste_morrer = $_POST[''];

    //ataques_magias
    $ataques_magias = $_POST[''];

    //personalidade
    $traco_personalidade = $_POST[''];
    $ideais = $_POST[''];
    $ligacoes = $_POST[''];
    $defeitos = $_POST[''];

    //caracteristicas_habilidades
    $caracteristicas_hab = $_POST[''];

    //informacoes_personagens
    $idade = $_POST[''];
    $olhos = $_POST[''];
    $altura = $_POST[''];
    $pele = $_POST[''];
    $peso = $_POST[''];
    $cabelo = $_POST[''];

    //foto
    $imagem = $_POST[''];

    //historia_personagem
    //???

    //info_conjurador
    $classe_conjurador = $_POST[''];
    $habilidade_chave = $_POST[''];
    $cd = $_POST[''];
    $bonus_ataque = $_POST[''];

    //magias
    $lvl_0 = $_POST[''];
    $lvl_1 = $_POST[''];
    $lvl_2 = $_POST[''];
    $lvl_3 = $_POST[''];
    $lvl_4 = $_POST[''];
    $lvl_5 = $_POST[''];
    $lvl_6 = $_POST[''];
    $lvl_7 = $_POST[''];
    $lvl_8 = $_POST[''];
    $lvl_9 = $_POST[''];

    //iniciando conexao
    $conexao = new mysqli('127.0.0.1', 'root','','registro');

    if($conexao->connect_error){
        die('Falha da conexão: ' . $conexao->connect_error);
    }
    else{
        //salvando as fichas no banco de dados

        //personagem
        $stmt = $conexao->prepare("INSERT INTO personagem (nome_personagem, classe, nivel, antecedente, raca, tendencia, experiencia)
        VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssissss", $nome_pers, $classe, $nivel, $antecedente, $raca, $tendencia, $experiencia);
        $stmt->execute();
        $stmt->close();

        //pegando o id do personagem que acabou de ser inserido
        $stmt = $conexao->prepare("SELECT id FROM personagem WHERE ???????????????????????????????????");
        $stmt->bind_param("? sei la", $nao_sei_oq);
        $stmt->execute();
        $stmt->bind_result($id_personagem);
        $stmt->fetch();
        $stmt->close();

        //atributos
        $stmt = $conexao->prepare("INSERT INTO atributos (personagem_id, forca, destreza, constituicao, inteligencia, sabedoria, carisma)
        VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iiiiii", $id_personagem, $forca, $destreza, $const, $sabedoria, $carisma);
        $stmt->execute();
        $stmt->close();

        //bonus
        $stmt = $conexao->prepare("INSERT INTO bonus (personagem_id, inspiracao, b_proficiencia)
        VALUES (?, ?, ?");
        $stmt->bind_param("iii", $id_personagem ,$inspiracao, $b_proficiencia);
        $stmt->execute();
        $stmt->close();

        //resistencia
        $stmt = $conexao->prepare("INSERT INTO resistencia (personagem_id, forca_b, destreza_b, constituicao_b, inteligencia_b, sabedoria_b, carisma_b);
        VALUES (?, ?, ?, ?, ?, ?, ?");
        $stmt->bind_param("iiiiiii", $id_personagem ,$forca_b, $destreza_b, $constituicao_b, $inteligencia_b, $sabedoria_b, $carisma_b);
        $stmt->execute();
        $stmt->close();

        //pericias
        $stmt = $conexao->prepare("INSERT INTO pericias (personagem_id, acrobacia, arcanismo, atletismo, atuacao, blefar, furtividade, historia, intimidacao, intuicao, investigacao, lidar_animais, medicina, natureza, percepcao, persuasao, prestidigitacao, religiao , sobrevivencia)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");
        $stmt->bind_param("iiiiiiiiiiiiiiiiiii", $id_personagem ,$acrobacia, $arcanismo, $atletismo, $atuacao, $blefar, $furtividade, $historia, $intimidacao, $lidar_animais, $medicina, $natureza, $percepcao, $persuasao, $prestidigitacao, $religiao, $sobrevivencia);
        $stmt->execute();
        $stmt->close();

        //idioma
        $stmt = $conexao->prepare("INSERT INTO idioma (personagem_id, idiomas)
        VALUES (?, ?");
        $stmt->bind_param("is", $id_personagem , $idiomas);
        $stmt->execute();
        $stmt->close();

        //equipamento
        $stmt = $conexao->prepare("INSERT INTO equipamento (personagem_id, equipamento)
        VALUES (?, ?");
        $stmt->bind_param("is", $id_personagem , $equipamento);
        $stmt->execute();
        $stmt->close();

        //vida
        $stmt = $conexao->prepare("INSERT INTO vida (personagem_id, armadura, iniciativa, desloc, pv, pv_atual, pv_temp, dados_vida, teste_viver, teste_morrer)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ");
        $stmt->bind_param("iiiiiiisii", $id_personagem , $armadura, $iniciativa, $desloc, $pv, $pv_atual, $pv_temp, $dados_vida, $teste_viver, $teste_morrer);
        $stmt->execute();
        $stmt->close();

        //ataques_magias
        $stmt = $conexao->prepare("INSERT INTO ataques_magias (personagem_id, ataques_magias)
        VALUES (?, ?");
        $stmt->bind_param("is", $id_personagem , $ataques_magias);
        $stmt->execute();
        $stmt->close();

        //personalidade
        $stmt = $conexao->prepare("INSERT INTO personalidade (personagem_id, traco_personalidade, ideais, ligacoes, defeitos)
        VALUES (?, ?, ?, ?, ?");
        $stmt->bind_param("issss", $id_personagem , $traco_personalidade, $ideais, $ligacoes, $defeitos);
        $stmt->execute();
        $stmt->close();

        //caracteristicas_habilidades
        $stmt = $conexao->prepare("INSERT INTO caracteristicas_habilidades (personagem_id, caracteristicas_hab)
        VALUES (?, ?");
        $stmt->bind_param("is", $id_personagem , $caracteristicas_hab);
        $stmt->execute();
        $stmt->close();

        //informacoes_personagem
        $stmt = $conexao->prepare("INSERT INTO iformacoes_personagem (personagem_id, idade, olhos, altura, pele, peso, cabelo)
        VALUES (?, ?, ?, ?, ?, ?, ?");
        $stmt->bind_param("iisssss", $id_personagem , $idade, $olhos, $altura, $pele, $peso, $cabelo);
        $stmt->execute();
        $stmt->close();

        //foto
        $stmt = $conexao->prepare("INSERT INTO foto (personagem_id, imagem)
        VALUES (?, ?");
        $stmt->bind_param("ib", $id_personagem , $imagem);
        $stmt->execute();
        $stmt->close();

        //historia_personagem
        $stmt = $conexao->prepare("INSERT INTO historia_personagem (personagem_id, aliados_org, historia, outras_caracteristicas, tesouro)
        VALUES (?, ?, ?, ?, ?");
       // $stmt->bind_param("isss", $id_personagem , ????????????????????????????????????????);
        $stmt->execute();
        $stmt->close();



        $conexao->close();
        header('location: ../Sala.php');


    }
}

?>