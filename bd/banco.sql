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
    tipo enum('praia', 'museu', 'praca', 'parque', 'centro historico', 'igreja', 'artesanato', 'hotel', 'pousada', 'hostel', 'restaurante', 'bar', 'cafe') not null default 'centro historico',
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

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Soul Lounge Bistro', 'Av. Litorânea - Calhau, São Luís - MA, 65071-377', 'comer', 'restaurante');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Cheiro Verde', 'Av. São Luís Rei de França, 131 - Olho D agua, São Luís - MA, 65065-470', 'comer', 'restaurante');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Bar do Leo', ' R. Cento e Quatro, 138 - Vinhais, São Luís - MA, 65074-380', 'comer', 'bar');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Lampiões Boteco e Petiscaria', 'Praça Antônio Lobo, 15 - Centro, São Luís - MA, 65010-050', 'comer', 'bar');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Buriteco Café', 'R. Portugal, 188 - Centro, São Luís - MA, 65010-480', 'comer', 'café');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Café do Forte', 'Forte Santo Antonio da Barra-Espigão - R. Boninas, s/n - Ponta Da areia, São Luís - MA, 65077-554', 'comer', 'café');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Igreja da Sé Catedral Metropolitana de São Luis - Nossa Senhora da Vitória', 'fazer', 'igreja');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Espigão Costeiro', 'R. do Forte, 953 - Ponta Daareia, São Luís - MA', 'fazer', 'Ponto Turistico');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Teatro Arthur Azevedo', 'R. do Sol, S/n - Centro, São Luís - MA, 65010-120', 'fazer', 'Teatro');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Museu Histórico e Artístico do Maranhão', 'R. do Sol, 302 - Centro, São Luís - MA, 65020-590', 'fazer', 'museu');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Praça Gonçalves Dias', 'Centro, São Luís - MA', 'fazer', 'praça');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Casa do Maranhão', 'R. do Trapiche Praia Grande, São Luís, Maranhão 65058-268', 'fazer', 'museu');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Convento das Merces', 'Centro Histórico', 'fazer', 'museu');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Feirinha de Sâo Luis', 'Centro Histórico', 'fazer', 'artesanato');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Centrp do Comercialização de Produtos Artesanais do Maranhão-CEPRAMA ', 'R. São Pantaleão, 1212 - Me. Deus, São Luís - MA, 65015-460', 'fazer', 'artesanato');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Parque do Bom Menino', 'Av. Alexandre de Moura, Centro. São Luís, 65025-470', 'fazer', 'parque');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Parque Estadual do Sítio do Rangedor', 'R. dos Búzios, Quadra 35 - Lote 18, São Luís - MA', 'fazer', 'parque');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('Shopping da Ilha', 'Av. Daniel de La Touche, 987 - Cohama, São Luís - MA, 65074-115', 'fazer', 'shopping');

INSERT INTO locais (nome, endereco, categoria, tipo) 
VALUES ('São Luis Shopping', 'Av. Prof. Carlos Cunha, 1000 - Jaracaty, São Luís - MA, 65076-907', 'fazer', 'shopping');