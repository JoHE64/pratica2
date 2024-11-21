DROP DATABASE pratica2;
CREATE DATABASE pratica2;
USE pratica2;

CREATE TABLE clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    telefone VARCHAR(15) UNIQUE NOT NULL
);

CREATE TABLE funcionarios (
    id_funcionario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE solicitações (
    id_solicitacao INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    id_funcionario INT,
    descricao_servico VARCHAR(500) NOT NULL,
    urgencia ENUM('baixa', 'média', 'alta') DEFAULT 'baixa',
    status ENUM('pendente', 'em andamento', 'finalizada') DEFAULT 'pendente',
    data_abertura DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
    FOREIGN KEY (id_funcionario) REFERENCES funcionarios(id_funcionario)
);
