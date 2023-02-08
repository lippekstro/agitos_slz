create database agitos_slz;

create table usuarios (
    id_usuario int not null auto_increment,
    nome_usuario varchar(200) not null,
    email varchar(200) not null,
    senha varchar(200) not null,
    primary key (id_usuario)
);

INSERT INTO usuarios (nome_usuario, email, senha) VALUES ('Admin', 'admin@mail.com', '$2y$10$dE0FnEqee2fdxfKhWddFpOt55BgTw5oj7OsAq0xfXXyLBV1HKVVAi');

create table imagens (
    id_imagem int not null auto_increment,
    imagem_inicio longblob not null,
    data_upload timestamp default current_timestamp,
    primary key (id_imagem)
);

create table postagens (
    id_post int not null auto_increment,
    titulo varchar(250) not null,
    conteudo longtext not null,
    imagem_post longblob,
    data_publicacao timestamp default current_timestamp on update current_timestamp,
    id_usuario int not null,
    primary key (id_post),
    foreign key (id_usuario) references usuarios(id_usuario)
);

create table locais (
    id_local int not null auto_increment,
    nome varchar(250) not null,
    endereco varchar(250) not null,
    categoria enum('fazer', 'ficar', 'comer') not null default 'fazer',
    tipo enum('praia', 'museu', 'praca', 'parque', 'centro historico', 'igreja', 'artesanato', 'shopping', 'pontos turisticos', 'teatro', 'hotel', 'pousada', 'hostel', 'restaurante', 'bar', 'cafe') not null default 'centro historico',
    coordenada varchar(250),
    primary key (id_local)
);

create table eventos (
    id_evento int not null auto_increment,
    nome_evento varchar(250) not null,
    imagem_evento longblob,
    local_evento varchar(500) not null,
    hora time not null,
    data_evento date not null,
    descricao_evento longtext,
    primary key(id_evento)
);

/* alguns registros */

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Palácio dos Leões', 'R. Dom Pedro II, S/N - Centro, São Luís - MA, 65010-070', 'fazer', 'centro historico', '-2.5274785590839044, -44.30674790014954');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Museu do Reggae', 'R. da Estrela, 124 - Centro Histórico, São Luís - MA, 65010-200', 'fazer', 'centro historico', '-2.5288613469663748, -44.30556623234304');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Praia do Araçagy', 'Av. Atlântica, 1088 - Araçagy, São José de Ribamar - MA, 65110-000', 'fazer', 'praia', '-2.4652476586322494, -44.19756878081535');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ("Praia Do Olho D'água", "Av. São Carlos, 20 - Olho D'agua, São Luís - MA, 65067-430", 'fazer', 'praia', '-2.4784405248290278, -44.22489719043034');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Hotel Luzeiros', ' R. João Damasceno, 2 - Ponta do Farol, São Luís - MA, 65077-630', 'ficar', 'hotel', '-2.4877524584760686, -44.297854979626095');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Calhau Praia Hotel', 'Av. Litorânea, 1 - Calhau, São Luís - MA, 65067-430', 'ficar', 'hotel', '-2.4832907978967254, -44.2571394598263');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Pousada Portas Da Amazonia', 'R. do Giz, 129 - Centro, São Luís - MA, 65010-680', 'ficar', 'pousada', '-2.5296484592088184, -44.30468267331912');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Pousada Tambaú', ' Av. Litorânea, 1183 - Calhau, São Luís - MA, 65076-170', 'ficar', 'pousada', '-2.483362498039098, -44.25383527331915');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Reviver Hostel', ' R. de Nazaré, 200 - Centro Historico, São Luís - MA, 65010-410', 'ficar', 'hostel', '-2.5286279555019693, -44.3051354352935');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Palma Hostel São Luis', 'R. do Giz, 129 - Centro, São Luís - MA, 65010-680', 'ficar', 'hostel', '-2.529711015726314, -44.304670161677066');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Soul Lounge Bistro', 'Av. Litorânea - Calhau, São Luís - MA, 65071-377', 'comer', 'restaurante','-2.4834481498061036, -44.24894599629702');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Cheiro Verde', 'Av. São Luís Rei de França, 131 - Olho D agua, São Luís - MA, 65065-470', 'comer', 'restaurante','-2.497410501681241, -44.22883328898354');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Bar do Leo', ' R. Cento e Quatro, 138 - Vinhais, São Luís - MA, 65074-380', 'comer', 'bar','-2.5140074410631543, -44.2524570388672');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Lampiões Boteco e Petiscaria', 'Praça Antônio Lobo, 15 - Centro, São Luís - MA, 65010-050', 'comer', 'bar','-2.5270940901691255, -44.30021784642101');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Buriteco Café', 'R. Portugal, 188 - Centro, São Luís - MA, 65010-480', 'comer', 'café','-2.5292357878534557, -44.30663604642095');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Café do Forte', 'Forte Santo Antonio da Barra-Espigão - R. Boninas, s/n - Ponta Da areia, São Luís - MA, 65077-554', 'comer', 'café','-2.5053109353365044, -44.31798799059965');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Igreja da Sé','Centro, São Luís - MA, 65000-000', 'fazer', 'igreja','-2.523778058618957, -44.2959490780187');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Nossa Senhora dos Remédios','Av. Pedro II - Centro, São Luís - MA 65010-450', 'fazer', 'igreja','-2.52816700851755, -44.30463398080647');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Paróquia e Convento Nossa Senhora do Carmo','Praça João Lisboa, 350 - Centro, São Luís - MA, 65010-310', 'fazer', 'igreja','-2.529694026479104, -44.303558755046005');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Espigão Costeiro', 'R. do Forte, 953 - Ponta Daareia, São Luís - MA', 'fazer', 'ponto turistico','-2.501264916791447, -44.321649229228306');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Teatro Arthur Azevedo', 'R. do Sol, S/n - Centro, São Luís - MA, 65010-120', 'fazer', 'teatro', '-2.5287805568628805, -44.30251348899402');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Museu Histórico e Artístico do Maranhão', 'R. do Sol, 302 - Centro, São Luís - MA, 65020-590', 'fazer', 'museu','-2.5286271281250565, -44.30069698714231');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Praça Gonçalves Dias', 'Centro, São Luís - MA, 65000-000', 'fazer', 'praça','-2.5220714396398467, -44.29612905777805');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Casa do Maranhão', 'Centro, São Luís - MA, 65010-480', 'fazer', 'museu', '-2.5285884219020134, -44.30748682208981');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Convento das Merces', 'R. da Palma, 502 - Desterro, São Luís - MA, 65010-620', 'fazer', 'museu','-2.5338286183462326, -44.30501113748655');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Feirinha de Sâo Luis', 'R. do Giz, 533-585 - Centro, São Luís - MA, 65010-120', 'fazer', 'artesanato', '-2.52837839814861, -44.30476173132219');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Centro do Comercialização de Produtos Artesanais do Maranhão -CEPRAMA ', 'R. São Pantaleão, 1212 - Me. Deus, São Luís - MA, 65015-460', 'fazer', 'artesanato', '-2.540811850677537, -44.299991517829945');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Parque do Bom Menino', 'Av. Alexandre de Moura, Centro. São Luís, 65025-470', 'fazer', 'parque', '-2.534516006442661, -44.292957931322356');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Parque Estadual do Sítio do Rangedor', 'R. dos Búzios, Quadra 35 - Lote 18, São Luís - MA', 'fazer', 'parque', '-2.497765138931414, -44.26807841782992');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Shopping da Ilha', 'Av. Daniel de La Touche, 987 - Cohama, São Luís - MA, 65074-115', 'fazer', 'shopping','-2.528153167495129, -44.254542954907656');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('São Luis Shopping', 'Av. Prof. Carlos Cunha, 1000 - Jaracaty, São Luís - MA, 65076-907', 'fazer', 'shopping','-2.5104301161860363, -44.28747190801163');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Projeto Reviver', 'R. da Estrela, 242-216 - Centro, São Luís - MA, 65010-440', 'fazer', 'centro histórico','-2.529520193768646, -44.30559050248633');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Casa do Tambor de Crioula', 'R. da Estrela, 308-282 - Centro, São Luís - MA, 65010-440', 'fazer', 'museu', '-2.5302000469004056, -44.305511473650306');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Praça Deodoro','Centro, São Luís - MA, 65020-180', 'fazer', 'praça', '-2.5298574208892664, -44.29595255485889' );

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Praça Benedito Leite', 'Av. Dom Pedro ll - Centro, São Luís - MA, 65065-545', 'fazer', 'praça', '-2.5284170712601957, -44.30452152887838');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Praia de São Marcos', 'Av. Litorânea - São Marcos, São Luís - MA, 65075-832', 'fazer', 'praia', '-2.488594492841513, -44.287205073650426');

INSERT INTO locais (nome, endereco, categoria, tipo, coordenada) 
VALUES ('Praia da Guia', 'R. José Sarney, 145 - Bonfim, São Luís - MA, 65075-832', 'fazer', 'praia', '-2.531746481209352, -44.33077774973395');