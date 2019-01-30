create database grupo2;
use grupo2;

create table aluno(
	id int not null primary key auto_increment,
    nome varchar(100) not null,
    cpf varchar(14) unique not null,
    rg varchar(10) not null unique,
    nasc date not null,
    sexo enum('Masculino', 'Feminino') not null,
    telefone varchar(14) null,
    celular varchar(15) not null,
    email varchar(100) not null,
    rua varchar(100) not null,
    bairro varchar(100) not null,
    numero varchar(10) not null,
    complemento varchar(50),
    cep varchar(9) not null,
    estado varchar(25),
    cidade varchar(50),
    tipo enum('A', 'B', 'C', 'D', 'E')
);

create table funcionario(
	id int not null primary key auto_increment,
    nome varchar(100) not null,
    cpf varchar(14) unique not null,
    rg varchar(10) not null unique,
    nasc date not null,
    sexo enum('Masculino', 'Feminino') not null,
    telefone varchar(14) null,
    celular varchar(15) not null,
    email varchar(100) not null,
    rua varchar(100) not null,
    bairro varchar(100) not null,
    numero varchar(10) not null,
    complemento varchar(50),
    cep varchar(9) not null,
    estado varchar(25) not null,
    cidade varchar(50) not null,
    placa varchar(8) null,
    funcao enum('Atendente', 'Professor de Leis', 'Professor de Carros'),
    senha varchar(32) not null
);

insert into funcionario (nome, cpf, rg, nasc, sexo, telefone, celular, email, rua, bairro, numero, complemento, cep, estado, cidade, placa, funcao, senha) values 
('admin', '000.000.000-00', '00.000.000', str_to_date('20-01-1985', '%d-%m-%Y'), 'Masculino', '32 0000-0000', '32 90000-0000', 'admin@gmail.com', 'Oliveira', 'Oliveira', '400', '', '00000-000', 'MG', 'Juiz de Fora', '', 'Atendente', 'root');


create table agenda(
	id int not null auto_increment primary key,
    aula enum('carro', 'moto', 'outros'),
    id_motorista int not null,
    id_aluno int not null,
    data_aula date not null,
    id_hora time,
    constraint fk_agenda_prof foreign key(id_motorista) references funcionario(id) on delete cascade on update cascade,
    constraint fk_agenda_aluno foreign key(id_aluno) references aluno(id) on delete cascade on update cascade,
    constraint fk_agenda_horario foreign key(id_hora) references horario(id_hora) on delete cascade on update cascade
);

create table horario(
	id int not null auto_increment primary key,
    hora time
);

insert into horario (hora) values("08:00");
insert into horario (hora) values("09:00");
insert into horario (hora) values("10:00");
insert into horario (hora) values("11:00");
insert into horario (hora) values("12:00");
insert into horario (hora) values("15:00");
insert into horario (hora) values("16:00");
insert into horario (hora) values("17:00");
insert into horario (hora) values("18:00");
insert into horario (hora) values("19:00");
insert into horario (hora) values("20:00");
