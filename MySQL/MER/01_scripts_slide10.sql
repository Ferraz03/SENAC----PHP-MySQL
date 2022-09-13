-- selecionar o banco de dados:

-- USE cadastro;

/*
------------ Inserindo Dados -----------
INSERT INTO pessoas(nome, data_nascimento)
VALUES ("João da Silva", "1910-10-25");

INSERT INTO pessoas(nome, data_nascimento)
VALUES ("Maria da Silva", "1920-11-02");

INSERT INTO pessoas(nome, data_nascimento)
VALUES ("Pedro da Silva", "1930-07-15");
*/

/*
---------- Selecionando/Buscando Dados ---------

SELECT * FROM pessoas;
SELECT * FROM pessoas WHERE id = 1; 
SELECT * FROM pessoas WHERE nome = "João da Silva";
SELECT nome as Nome,id as Identificador FROM pessoas; 

SELECT * FROM pessoas WHERE nome LIKE "%Silva%";
*/

