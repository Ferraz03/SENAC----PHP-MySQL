/*
INSERT INTO curso (Nome, Horário, Data_de_início, Data_de_conclusão, Ativo)
VALUES ('PHP e MySQL', '18:20', '2022-08-29', '2022-09-16', 1);

INSERT INTO curso (Nome, Horário, Data_de_início, Data_de_conclusão, Ativo)
VALUES ('Java Básico', '21:20', '2022-08-29', '2022-09-16', 1);

INSERT INTO curso (Nome, Horário, Data_de_início, Data_de_conclusão, Ativo)
VALUES ('HTML, CSS e JS', '08:20', '2022-08-15', '2022-09-26', 1);

SELECT * FROM curso;

INSERT INTO alunos (nome, sexo, matrícula, cpf, telefone, email, nota, curso_id)
VALUES ('João da Silva', 'M', '00001', '123.456.789.66', '(83) 988665524', 'teste@teste.com', null, 2); 

INSERT INTO alunos (nome, sexo, matrícula, cpf, telefone, email, nota, curso_id)
VALUES ('Maria da Silva', 'F', '00002', '842.965.512.99', '(83) 981543684', 'teste@teste2.com', null, 2); 

INSERT INTO alunos (nome, sexo, matrícula, cpf, telefone, email, nota, curso_id)
VALUES ('Pedro da Silva', 'M', '00003', '741.258.369.66', '(83) 998745264', 'teste@teste3.com', null, 3); 


-- Junção 

SELECT *
FROM curso c, alunos a
WHERE c.id = a.Curso_Id
AND c.id = 2;


-- Joins

SELECT *
FROM curso
INNER JOIN alunos
ON curso.id = alunos.Curso_Id
WHERE curso.id = 2;
*/