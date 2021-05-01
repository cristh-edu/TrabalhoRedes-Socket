CREATE DATABASE SUPERLIGA;
USE SUPERLIGA;

CREATE TABLE IF NOT EXISTS tbTime (
  id int not null auto_increment,
  nome varchar(50) not null,
  partidasJogadas int not null,
  partidasVencidas int not null,
  partidasPerdidas int not null,
  sets varchar(10) not null,
  pontos int not null,
  PRIMARY KEY (id));
  
INSERT INTO tbTime(nome, partidasJogadas, partidasVencidas, partidasPerdidas, sets, pontos) VALUES ("Sada Cruzeiro", 22, 20, 2, "62:11", 60);

INSERT INTO tbTime(nome, partidasJogadas, partidasVencidas, partidasPerdidas, sets, pontos) VALUES ("Vôlei Taubaté", 22, 20, 2, "61:15", 58);

INSERT INTO tbTime(nome, partidasJogadas, partidasVencidas, partidasPerdidas, sets, pontos) VALUES ("Vôlei Renata", 22, 17, 5, "57:22", 47);

INSERT INTO tbTime(nome, partidasJogadas, partidasVencidas, partidasPerdidas, sets, pontos) VALUES ("Minas", 22, 17, 5, "52:26", 47);

INSERT INTO tbTime(nome, partidasJogadas, partidasVencidas, partidasPerdidas, sets, pontos) VALUES ("APAN Blumenau", 22, 11, 11, "39:39", 33);

INSERT INTO tbTime(nome, partidasJogadas, partidasVencidas, partidasPerdidas, sets, pontos) VALUES ("Academia do Volêi", 22, 10, 12, "38:44", 30);

INSERT INTO tbTime(nome, partidasJogadas, partidasVencidas, partidasPerdidas, sets, pontos) VALUES ("América", 22, 9, 13, "38:45", 27);

INSERT INTO tbTime(nome, partidasJogadas, partidasVencidas, partidasPerdidas, sets, pontos) VALUES ("Vôlei Itapetininga", 22, 8, 14, "34:49", 26);

INSERT INTO tbTime(nome, partidasJogadas, partidasVencidas, partidasPerdidas, sets, pontos) VALUES ("Corinthians", 22, 7, 15, "32:50", 23);

INSERT INTO tbTime(nome, partidasJogadas, partidasVencidas, partidasPerdidas, sets, pontos) VALUES ("Sesi-SP", 22, 5, 17, "24:55", 17);

INSERT INTO tbTime(nome, partidasJogadas, partidasVencidas, partidasPerdidas, sets, pontos) VALUES ("Caramuru", 22, 5, 17, "20:57", 13);

INSERT INTO tbTime(nome, partidasJogadas, partidasVencidas, partidasPerdidas, sets, pontos) VALUES ("Vôlei Ribeirão", 22, 3, 19, "17:61", 11);

SELECT * FROM tbTime;