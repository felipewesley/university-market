use bancoum;
create table usuario(
id_usuario int auto_increment primary key,
nome varchar(40),
senha varchar(40),
email varchar(40),
telefone float(11,0),
nascimento date
);

select * from usuario;
insert into usuario values(1,"leonardo","12345","leo@gmail.com",996014579,20011211);

drop table usuario;