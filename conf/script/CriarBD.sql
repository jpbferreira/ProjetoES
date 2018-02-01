/* 
UFLA        Universidade Federal de Lavras
DCC         Departamento de Ciência da Computação
Disciplina  Engenharia de Software I
Alunos   	João Pedro Batista Ferreira, Igor Moraes

*/

CREATE SCHEMA  ControleHospital; 
USE ControleHospital;

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Table Funcionario
-- -----------------------------------------------------
CREATE TABLE Funcionario(
	  cod_Func INT NOT NULL AUTO_INCREMENT,
	  cpf CHAR(11) NOT NULL,
	  data_nascimento DATE NOT NULL,
	  nome VARCHAR(45) NOT NULL,
	  salario FLOAT NOT NULL,
	  sexo CHAR(1) NOT NULL,
	  CONSTRAINT pk_func PRIMARY KEY (cod_Func),
	  CONSTRAINT ck_sexo CHECK (Sexo='M' or Sexo='F'),
      CONSTRAINT pk_cpf UNIQUE (cpf));
      
-- -----------------------------------------------------
-- Table Secretaria
-- -----------------------------------------------------
CREATE TABLE Secretaria (
  cod_Func INT NOT NULL,
  setor_responsavel VARCHAR(30) NOT NULL,
  PRIMARY KEY (cod_Func),
  CONSTRAINT fk_Secretaria_Funcionario
    FOREIGN KEY (cod_Func)
    REFERENCES Funcionario (cod_Func)
    ON DELETE CASCADE
    ON UPDATE CASCADE);

-- -----------------------------------------------------
-- Table Enfermeira
-- -----------------------------------------------------
CREATE TABLE Enfermeira (
  cod_Func INT NOT NULL,
  setor_atuacao VARCHAR(30) NOT NULL,
  PRIMARY KEY (cod_Func),
  CONSTRAINT fk_Enfermeira_Funcionario
    FOREIGN KEY (cod_Func) REFERENCES Funcionario (cod_Func)
    ON DELETE CASCADE
    ON UPDATE CASCADE);

-- -----------------------------------------------------
-- Table Medico
-- -----------------------------------------------------
CREATE TABLE Medico (
  cod_Func INT NOT NULL,
  registro INT NOT NULL,
  area_atuacao VARCHAR(30) NOT NULL,
  CONSTRAINT pk_medico PRIMARY KEY (cod_Func),
  CONSTRAINT pk_medico_func UNIQUE (registro),
  CONSTRAINT fk_Medico_Funcionario
    FOREIGN KEY (cod_Func)
    REFERENCES Funcionario (cod_Func)
    ON DELETE CASCADE
    ON UPDATE CASCADE);
    
-- -----------------------------------------------------
-- Table Paciente
-- -----------------------------------------------------
CREATE TABLE Paciente (
  cod_paciente INT NOT NULL auto_increment,
  cpf CHAR(11) NOT NULL,
  sexo CHAR(1) NOT NULL,
  nome VARCHAR(30) NOT NULL,
  data_nascimento DATE NOT NULL,
  CONSTRAINT cpf_unique UNIQUE (cpf),
  CONSTRAINT pk_paciente PRIMARY KEY (cod_paciente),
  CONSTRAINT ck_sexo CHECK (sexo='M' or sexo='F'));