CREATE TABLE categoria(
    id INT NOT NULL AUTO_INCREMENT,
    descricao VARCHAR(50) NOT NULL,

    CONSTRAINT pk_categoria PRIMARY KEY (id)
);

CREATE TABLE despesa (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(100) NOT NULL,
    valor INT NOT NULL,
    `data` DATE NOT NULL,
    id_categoria INT,

    FOREIGN KEY (id_categoria) REFERENCES categoria(id) 
);