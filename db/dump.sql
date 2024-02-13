-- CREATE 

CREATE TABLE usuario (
	idUsuario		INT PRIMARY KEY AUTO_INCREMENT,  
    nome			VARCHAR(100) not null,
    email			VARCHAR(100) not null,
    dtNascimento	DATE not null,
    cidade			VARCHAR(100) not null,
    senha			VARCHAR(50) not null
);

CREATE TABLE modalidade (
  	idModalidade	INT PRIMARY KEY AUTO_INCREMENT,
    nome			VARCHAR(100) not null,
    descricao		VARCHAR(100) not null,
    imagem			VARCHAR(300) not null
);

CREATE TABLE plano (
  	idPlano			INT PRIMARY KEY AUTO_INCREMENT,
    nome			VARCHAR(100) not null,
    descricao		VARCHAR(100) not null,
    valor			DECIMAL(10,2) not null
);

CREATE TABLE itemPlano (
  	idItemPlano		INT PRIMARY KEY AUTO_INCREMENT,
    idModalidade	INT,
    idPlano			INT, 
    
    CONSTRAINT fkItemPlanoModalidade FOREIGN KEY (idModalidade) REFERENCES modalidade (idModalidade),
    CONSTRAINT fkItemPlanoPlano FOREIGN KEY (idPlano) REFERENCES plano (idPlano)
);

CREATE TABLE matricula (
  	idMatricula		INT PRIMARY KEY AUTO_INCREMENT,
    dtInicio		DATE not null,
    dtValidade		DATE not null,
    idPlano			INT,
    idUsuario		INT,
    
    CONSTRAINT fkMatriculaPlano FOREIGN KEY (idPlano) REFERENCES plano (idPlano),
    CONSTRAINT fkMatriculaUsuario FOREIGN KEY (idUsuario) REFERENCES usuario (idUsuario)
);

-- PROCEDURES

DELIMITER //

CREATE PROCEDURE piUsuario (
	IN _nome			VARCHAR(100),
    IN _email			VARCHAR(100),
    IN _dtNascimento	DATE,
    IN _cidade			VARCHAR(100),
    IN _senha			VARCHAR(50)
)
BEGIN
	INSERT INTO usuario (nome, email, dtNascimento, cidade, senha) 
    VALUES (_nome, _email, _dtNascimento , _cidade, _senha);
END //

DELIMITER // 

CREATE PROCEDURE psLoginUsuario(
	IN _email	VARCHAR(100),
    IN _senha	VARCHAR(50)
)

BEGIN
	SELECT * FROM usuario WHERE email = _email AND senha = _senha;
END //

DELIMITER //

CREATE PROCEDURE psUsuario (
  	IN _id		INT
)

BEGIN
SELECT * FROM usuario
WHERE idUsuario = _id;

END //

DELIMITER //

CREATE PROCEDURE psListarUsuario()

BEGIN
	SELECT * FROM usuario;
END //

DELIMITER //

CREATE PROCEDURE pdUsuario(
	IN _id		INT
)

BEGIN
	DELETE FROM usuario WHERE idUsuario = _id;
END //

DELIMITER //

CREATE PROCEDURE puUsuario(
	IN _id				INT,
    IN _nome			VARCHAR(100),
    IN _email			VARCHAR(100),
    IN _dtNascimento	DATE,
    IN _cidade			VARCHAR(100),
    IN _senha			VARCHAR(50)
)

BEGIN
	UPDATE usuario 
    SET nome = _nome, email = _email, dtNascimento = _dtNascimento, cidade = _cidade, senha = _senha
    WHERE idUsuario = _id;
END //

INSERT INTO modalidade(nome, descricao, imagem)
VALUES 
('Musculação', 'A musculação é um tipo de exercício realizado com pesos de diversas cargas, amplitude e tempo de contração, o que faz dela uma atividade física indicada para pessoas de diversas idades e com diferentes objetivos.', 'assets/musculacao.png')
('Ginástica', 'A ginástica, também chamada de gímnico é um conceito que engloba modalidades competitivas e não competitivas, envolvendo a prática de uma série de movimentos físicos exigentes de força, flexibilidade e coordenação motora com objetivo de aperfeiçoamento físico e mental.', 'assets/ginastica.png'),
('Yoga', 'Yoga ou ioga, significa controlar, unir. É um termo de origem sânscrita, uma língua presente na Índia, em especial na religião hinduísta. Yoga é um conceito é uma filosofia, que trabalha o corpo e a mente, através de disciplinas tradicionais de quem a pratica.', 'assets/yoga.png'),
('Pilates', 'Pilates é um método de exercícios desenvolvido por Joseph Pilates na década de 1920 que visa trabalhar a conexão entre mente e corpo, como uma unidade, de modo a melhorar a consciência corporal e dessa forma promover outros benefícios.', 'assets/pilates.jpg'),
('Boxe', 'O boxe ou pugilismo é um esporte de combate e arte marcial, no qual os lutadores usam apenas os punhos, tanto para a defesa, quanto para o ataque. Boxeadores se trocam golpes por um tempo predeterminado em um número de rodadas em uma arena elevada cercada de cordas, o Ringue.', 'assets/boxe.jpg')
