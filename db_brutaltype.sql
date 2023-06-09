CREATE DATABASE IF NOT EXISTS db_brutaltype;



USE db_brutaltype;





create table if not exists TB_USUARIO(
ID_USUARIO int primary key auto_increment,
EMAIL_USUARIO varchar(255) unique not null,
SENHA_USUARIO varchar(255) not null,

STATUS_USUARIO varchar(40) not null




);


CREATE TABLE IF NOT EXISTS TB_CLIENTE(
ID_CLIENTE INT PRIMARY KEY AUTO_INCREMENT,
EMAIL_CLIENTE VARCHAR(255) UNIQUE NOT NULL,
NOME_CLIENTE VARCHAR(255) NOT NULL,
CPF_CLIENTE CHAR(14) NOT NULL,
TEL_CLIENTE CHAR(16) NOT NULL,
DTA_NASC_CLIENTE DATE NOT NULL,
DTA_CAD_CLIENTE DATE NULL,
SENHA_CLIENTE varchar(40) NULL,
STATUS_CLIENTE VARCHAR(40) NULL,
ID_USUARIO int,
foreign key (ID_USUARIO)
references TB_USUARIO(ID_USUARIO)


) DEFAULT CHARSET=UTF8;






create table if not exists TB_FRETE(
ID_FRETE int primary key auto_increment,

UF char (2),
VALOR_FRETE numeric (5,2)



);





CREATE table if not exists TB_FORN(
ID_FORN int primary key auto_increment,

NOME_FORN varchar(80) not null,
RAZ_FORN  varchar(60) not null,
CNPJ_FORN char(16) unique not null,
EMAIL_FORN varchar(255) not null,
STATUS_FORN varchar(40) not null,



NOME_FANTASIA_FORN varchar (60) unique not null,
VALOR_PROD_FORN numeric (6,3) unsigned not null	
);






create table if not exists TB_LOGIN_ADM(
ID_LOGIN_ADM int primary key auto_increment,
NOME_USER_ADM varchar(255) not null,
Senha_LOGIN_ADM varchar(100) not null,
EMAIL_ADM varchar(255) not null,
DT_CAD_ADM date,
STATUS_LOGIN_ADM varchar(40)

);



create table if not exists TB_PAGTO(
ID_PAGTO int primary key auto_increment,
VALOR_PAGTO numeric(5,2) unsigned not null,
DESC_PAGTO varchar(30) not null
 




);

create table if not exists TB_CARTAO_CLIENTE(
ID_CARTAO int primary key auto_increment,
NUM_CARTAO char(19) unique not null,
DTA_VAL_CART date not null,
CSV int not null,
NOME_CART varchar(60) not null,
BANDEIRA_CARTAO varchar (40) not null,
AGENCIA_CARTAO varchar(12) not null,
ID_CLIENTE int,

foreign key (ID_CLIENTE)
references TB_CLIENTE(ID_CLIENTE)



);



create table if not exists TB_PRODUTO(
ID_PROD int primary key not null auto_increment,
COD_PROD int zerofill null,
QTD_PROD int null,
NOME_PROD varchar(80) null,
DESC_PROD text not null,
VALOR_COMP_PROD numeric (6,2) null,
VALOR_VENDA_PROD numeric (6,2) null,
COD_BARRAS_PROD varchar(120) null,
CATEGORIA_PROD char(30) null unique,
DES_CAT_PROD text null,
TAMANHO_PROD char(5) unique null,
ID_FORN int,
ID_CLIENTE int,

foreign key (ID_CLIENTE)
references TB_CLIENTE(ID_CLIENTE),

foreign key (ID_FORN)
references TB_FORN(ID_FORN)










);

create table if not exists TB_ITEM_VENDA(
ID_ITEM_VENDA int primary key auto_increment,
NUM_ITEM_VENDA int not null,
QTD_ITEM_VENDA numeric (3,1) unsigned not null,
VALOR_ITEM_VENDA numeric(6,1) unsigned not null,
DESCRIC_ITEM_VENDA text not null,
ID_PROD int,

foreign key (ID_PROD)
references TB_PRODUTO(ID_PROD)






);



create table if not exists TB_BOLETO(
ID_BOLETO int primary key auto_increment,
COD_BOLETO int unsigned not null,
DATA_BOLETO date not null,
NUMERO_BOLETO varchar(80) not null,
VALOR_BOLETO numeric(7,2) not null,
ID_PAGTO  int,

foreign key(ID_PAGTO)
references TB_PAGTO(ID_PAGTO)



);

create table if not exists  TB_PEDIDO_VENDA(
ID_PED_VENDA int primary key auto_increment,
VALOR_VENDA numeric (7,2) not null,
COD_PGTO_VENDA varchar(40) not null,
UF char(2) not null,
STATUS_VENDA varchar(40) not null,
PESO_VENDA numeric(7,2) not null,
EMPRESA_ENTREGA_VENDA varchar(40) not null,
ID_PAGTO int,
ID_CLIENTE int,
ID_FRETE int,

foreign key (ID_PAGTO)
references TB_PAGTO(ID_PAGTO),

foreign key (ID_CLIENTE)
references TB_CLIENTE(ID_CLIENTE),

foreign key (ID_FRETE)
references TB_FRETE(ID_FRETE)

















);




create table if not exists TB_PROMOCAO(
ID_PROM int primary key auto_increment,
DATA_ENT date not null,
DATA_SAIDA date not null,
VALOR_PROM decimal (7,2) not null,
DESC_PROM varchar(80) not null,
STATUS_PROM varchar(40) not null




);

alter table TB_PROMOCAO
add ID_PROD int,
add foreign key (ID_PROD)
references TB_PRODUTO(ID_PROD);









create table if not exists TB_CATEGORIA(
ID_CATEGORIA int unsigned primary key auto_increment,
DESC_CATEGORIA varchar(40) null,
STATUS_CATEGORIA varchar(40) null,
SEXO_CATEGORIA  varchar(40) null
);

alter table TB_CATEGORIA
add TAMANHO_CATEGORIA varchar(40);




select * from TB_CATEGORIA;

alter table TB_PRODUTO
add ID_CATEGORIA int unsigned,

add foreign key(ID_CATEGORIA)
references  TB_CATEGORIA  (ID_CATEGORIA);

alter table TB_PROMOCAO
add ID_CATEGORIA int unsigned,

add foreign key(ID_CATEGORIA)
references  TB_CATEGORIA  (ID_CATEGORIA);


desc TB_CATEGORIA;




