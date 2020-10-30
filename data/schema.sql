CREATE TABLE clientes (
    nif varchar(20) PRIMARY KEY, 
    nome varchar(100) NOT NULL, 
    email varchar(20) NOT NULL, 
    contacto varchar(20) NOT NULL);

CREATE TABLE eventos (
    id_evento varchar(20) PRIMARY KEY, 
    nome_evento varchar(100), 
    data_evento DATE NOT NULL, 
    descricao TEXT NOT NULL, 
    nif_cliente varchar(20), 
    CONSTRAINT fk_nif FOREIGN KEY (nif_cliente) REFERENCES clientes (nif));


CREATE TABLE servicos (
    id_servico varchar(20) PRIMARY KEY, 
    nome_servico varchar(20), 
    descricao TEXT NOT NULL, 
    title varchar(100) NOT NULL);


CREATE TABLE ofertas (
    data_oferta DATE PRIMARY KEY, 
    id_servico varchar(100) NOT NULL, 
    nif_cliente varchar(100) NOT NULL, 
    CONSTRAINT fk_servico FOREIGN KEY (id_servico) REFERENCES servicos (id_servico), 
    CONSTRAINT fk_nif FOREIGN KEY (nif_cliente) REFERENCES clientes (nif) );