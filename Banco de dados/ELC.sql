CREATE TABLE Cadastro_Empresa (
 CNPJ_Empresa VARCHAR(15) NOT NULL,
 Nome_Empresarial  VARCHAR(100) NOT NULL,
 Nome_Fantasia VARCHAR(50) NOT NULL,
 Endereco_Empresa VARCHAR(100) NOT NULL,
 Bairro_Empresa VARCHAR(50) NOT NULL,
 Cidade_Empresa VARCHAR(50) NOT NULL,
 Numero_Empresa VARCHAR(10) NOT NULL,
 CEP_Empresa VARCHAR(9) NOT NULL,
 CNAE VARCHAR(8) NOT NULL,
 Inscricao_Estadual VARCHAR(12) NOT NULL,
 Telefone VARCHAR(11) NOT NULL,
 Descricao_Atividade VARCHAR(200),
 Grau_de_Risco CHAR(2) NOT NULL
);

ALTER TABLE Cadastro_Empresa ADD CONSTRAINT PK_Cadastro_Empresa PRIMARY KEY (CNPJ_Empresa);


CREATE TABLE Empresa_Setor (
 id_setor INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 CNPJ_Empresa VARCHAR(15) NOT NULL,
 Setor VARCHAR(50) NOT NULL,
 Funcao VARCHAR(50) NOT NULL,
 Qtd_Trabalhadores INT  NOT NULL
);




CREATE TABLE Extintores (
 id_Extintor INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 CNPJ_Empresa VARCHAR(15) NOT NULL,
 Produto VARCHAR(15) NOT NULL,
 Quant_Extintores INT NOT NULL,
 Composicao VARCHAR(15) NOT NULL,
 Durabilidade INT NOT NULL,
 Vencimento_Extintores DATE NOT NULL,
 Localizacao CHAR(150) NOT NULL
);



CREATE TABLE Funcionarios (
 CPF CHAR(10) NOT NULL,
 CNPJ_Empresa VARCHAR(15) NOT NULL,
 Nome_Func VARCHAR(60) NOT NULL,
 Matricula_Func INT NOT NULL,
 Identidade_Func VARCHAR(10) NOT NULL,
 Funcao_Func VARCHAR(50) NOT NULL,
 Setor_Func VARCHAR(50) NOT NULL,
 Data_Nasc DATE NOT NULL,
 Data_Adimi DATE NOT NULL,
 Data_Demissional DATE,
 Carteira_de_trabalho VARCHAR(7) NOT NULL,
 Serie VARCHAR(4) NOT NULL,
 Salario_Inicial NUMERIC(15,2) NOT NULL,
 Titulo_de_Eleitor VARCHAR(12) NOT NULL,
 PIS_PASEP VARCHAR(11) NOT NULL,
 CBO VARCHAR(6) NOT NULL,
 Nacionalidade VARCHAR(30) NOT NULL,
 Data_ASO DATE ,
 Vencimento_ASO DATE,
 Periodico DATE,
 Vencimento_Periodico DATE
);

ALTER TABLE Funcionarios ADD CONSTRAINT PK_Funcionarios PRIMARY KEY (CPF,CNPJ_Empresa);


CREATE TABLE HHT (
 id_HHT INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 CNPJ_Empresa VARCHAR(15) NOT NULL,
 Setor_hht VARCHAR(50) NOT NULL ,
 Data_hht DATE NOT NULL,
 Num_Funcionarios_hht INT NOT NULL,
 HHT FLOAT(10) NOT NULL,
 Num_ACPT INT NOT NULL,
 Num_ASPT INT NOT NULL,
 Val_Ref_Acidente NUMERIC(15,2) NOT NULL,
 Num_Ates_Sup15 INT NOT NULL,
 Num_Atestado INT NOT NULL,
 Num_dias_Perd_Acid_Tipico INT NOT NULL,
 Num_Acid_Tipico INT NOT NULL,
 Num_Acidente_Trajeto INT NOT NULL,
 Num_Dias_Perd_Acid_Trajeto INT NOT NULL,
 Danos_Materiais INT NOT NULL,
 Valor_Ref_Danos NUMERIC(15,2) NOT NULL
);



CREATE TABLE Incidentes (
 id_Incidentes INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 CNPJ_Empresa VARCHAR(15) NOT NULL,
 CPF CHAR(10) NOT NULL,
 Data_Incid DATE NOT NULL,
 Ocorrencia_Incid VARCHAR(20) NOT NULL,
 Observacao_Incid VARCHAR(200) NOT NULL
);



CREATE TABLE Relatar_Medidas (
 id_Relatar_Medidas INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 id_Incidentes INT NOT NULL,
 CNPJ_Empresa VARCHAR(15) NOT NULL,
 CPF CHAR(10) NOT NULL,
 Medidas_Administrativas VARCHAR(150) NOT NULL,
 Medidas_Coletivas VARCHAR(150) NOT NULL,
 Medidas_Individuis VARCHAR(150) NOT NULL
);



CREATE TABLE Acidente (
 id_Acidente INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 CPF CHAR(10) NOT NULL,
 CNPJ_Empresa VARCHAR(15) NOT NULL,
 Data_Acidente DATE NOT NULL,
 Ocorrencia_Acidente VARCHAR(24) NOT NULL,
 Perda_de_Tempo VARCHAR(3) NOT NULL,
 Quant_Dias_Acidente INT NOT NULL,
 Data_de_Retorno DATE NOT NULL,
 CAT VARCHAR(3) NOT NULL,
 Valor_Acidente NUMERIC(15,2) NOT NULL, 
 Relato_Acidente VARCHAR(200)
);




ALTER TABLE `Empresa_Setor` ADD FOREIGN KEY (`CNPJ_Empresa`) REFERENCES `Cadastro_Empresa` (`CNPJ_Empresa`) ON DELETE CASCADE;



ALTER TABLE Extintores ADD FOREIGN KEY (CNPJ_Empresa) REFERENCES Cadastro_Empresa (CNPJ_Empresa) ON DELETE CASCADE;


ALTER TABLE Funcionarios ADD FOREIGN KEY (CNPJ_Empresa) REFERENCES Cadastro_Empresa (CNPJ_Empresa) ON DELETE CASCADE;


ALTER TABLE HHT ADD  FOREIGN KEY (CNPJ_Empresa) REFERENCES Cadastro_Empresa (CNPJ_Empresa) ON DELETE CASCADE;


ALTER TABLE Incidentes ADD  FOREIGN KEY (CNPJ_Empresa) REFERENCES Cadastro_Empresa (CNPJ_Empresa) ON DELETE CASCADE;


ALTER TABLE Incidentes ADD  FOREIGN KEY (CPF,CNPJ_Empresa) REFERENCES Funcionarios (CPF,CNPJ_Empresa) ON DELETE CASCADE;


ALTER TABLE Relatar_Medidas ADD FOREIGN KEY (id_Incidentes) REFERENCES Incidentes (id_Incidentes) ON DELETE CASCADE;


ALTER TABLE Relatar_Medidas ADD FOREIGN KEY (CNPJ_Empresa) REFERENCES Incidentes (CNPJ_Empresa) ON DELETE CASCADE;


ALTER TABLE Relatar_Medidas ADD FOREIGN KEY (CPF) REFERENCES Incidentes (CPF) ON DELETE CASCADE;

ALTER TABLE Acidente ADD  FOREIGN KEY (CPF,CNPJ_Empresa) REFERENCES Funcionarios (CPF,CNPJ_Empresa) ON DELETE CASCADE;


