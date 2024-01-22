create database registro;
use registro;

create table login (
	id int primary key auto_increment not null,
    nome varchar(50) not null,
    email varchar(50) not null,
    senha varchar(30) not null
    );

create table sala(
	id int primary key not null auto_increment,
    nome varchar(50) not null,
    senha varchar(50),
    id_login int not null,
    foreign key (id_login) references login(id)
);

create table participantes (
	id_participantes int primary key not null auto_increment,
	id_login int not null,
	foreign key (id_login) references login(id),
	id_sala int not null,
	foreign key (id_sala) references sala(id)
);

CREATE TABLE personagem(
	id int auto_increment primary key not null,
    nome_personagem varchar(60),
    classe varchar(50),
    nivel int,
    antecedente varchar(20),
    raca varchar(20),
    tendencia varchar(20),
    experiencia varchar(20),
    id_login int not null,
	foreign key (id_login) references login(id),
    id_sala int not null,
    foreign key (id_sala) references sala(id)
    );

CREATE TABLE atributos(
	personagem_id int primary key,
	forca int,
    destreza int,
    constituicao int,
    inteligencia int,
    sabedoria int,
    carisma int,
    foreign key (personagem_id) references personagem(id)
    );
    
CREATE TABLE bonus(
	personagem_id int primary key,
    inpiracao int,
    b_proficiencia int,
    foreign key (personagem_id) references personagem(id)
    );
   
CREATE TABLE resistencia(
	personagem_id int primary key,
    forca_b int,
	destreza_b int,
	constituicao_b int,
	inteligencia_b int,
	sabedoria_b int,
	carisma_b int,
    foreign key (personagem_id) references personagem(id)
    );
    
CREATE TABLE pericias(
	personagem_id int primary key,
    acrobacia int,
	arcanismo int,
	atletismo int,
	atuacao int,
	blefar int,
	furtividade int, 
	historia int,
	intimidacao int,
	intuicao int,
	investigacao int,
	lidar_animais int,
	medicina int,
	natureza int,
	percepcao int,
	persuasao int,
	prestidigitacao int,
	religiao int,
	sobrevivencia int,
	foreign key (personagem_id) references personagem(id)
);

CREATE TABLE idioma(
	personagem_id int primary key,
    idiomas VARCHAR(300),
    foreign key (personagem_id) references personagem(id)
);

CREATE TABLE equipamentos(
	personagem_id int primary key,
    equipamento TEXT,
    foreign key (personagem_id) references personagem(id)
);

CREATE TABLE vida(
	personagem_id int primary key,
    armadura int,
    iniciativa int,
    desloc int,
    pv int,
    pv_atual int,
    pv_temp int,
    dados_vida varchar(10),
    teste_viver int,
    teste_morrer int,
    foreign key (personagem_id) references personagem(id)
);

CREATE TABLE ataques_magias(
	personagem_id int primary key,
    ataques_magias varchar(300),
    foreign key (personagem_id) references personagem(id)
);

CREATE TABLE personalidade(
	personagem_id int primary key,
    traco_personalidade varchar(300),
    ideais varchar (300),
    ligacoes varchar(300),
    defeitos varchar(300),
    foreign key (personagem_id) references personagem(id)
);

CREATE TABLE caracteristicas_habilidades(
	personagem_id int primary key,
    carcteristicas_hab TEXT,
    foreign key (personagem_id) references personagem(id)
);

CREATE TABLE informacoes_personagens(
	personagem_id int primary key,
    idade INT,
    olhos VARCHAR(50),
    altura VARCHAR(50),
    pele VARCHAR(50),
    peso VARCHAR(50),
    cabelo VARCHAR(50),
    foreign key (personagem_id) references personagem(id)
);

CREATE TABLE foto(
	personagem_id int primary key,
    imagem LONGBLOB,
    foreign key (personagem_id) references personagem(id)
);

CREATE TABLE historia_personagem(
	personagem_id int primary key,
    aliados_orgs TEXT,
    historia TEXT,
    outras_caracteristicas TEXT,
    tesouro TEXT,
    foreign key (personagem_id) references personagem(id)
);

CREATE TABLE info_conjurador(
	personagem_id int primary key,
    classe VARCHAR(50),
    habilidade_chave VARCHAR(50),
    cd VARCHAR(50),
    bonus_ataque VARCHAR(50),
    foreign key (personagem_id) references personagem(id)
);

CREATE TABLE magias(
	personagem_id int primary key,
	level_0 VARCHAR(500),
    level_1 VARCHAR(500),
    level_2 VARCHAR(500),
    level_3 VARCHAR(500),
    level_4 VARCHAR(500),
    level_5 VARCHAR(500),
    level_6 VARCHAR(500),
    level_7 VARCHAR(500),
    level_8 VARCHAR(500),
    level_9 VARCHAR(500),
    foreign key (personagem_id) references personagem(id)
);

drop table resitencia;
select*from login;
select*from sala;
select*from participantes;
SELECT login.nome FROM login INNER JOIN participantes ON login.id = participantes.id_login WHERE participantes.id_sala = 1;
select*from ficha;
select nome, forca, destreza FROM ficha WHERE id_login=1 and id_sala=11;


