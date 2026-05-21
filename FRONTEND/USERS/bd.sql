CREATE database USERS;


CREATE TABLE USERS (
    id_user  int not null,
    name varchar(50),
    email varchar(50),
    password varchar(50),
    PRIMARY KEY (id_user)               

)
CREATE TABLE ticket (
    id_folio  int not null,
    fecha DATE,
    motivo varchar(50),
    STATUS varchar(20),
    PRIMARY KEY (id_folio),
    FOREIGN KEY (id_user) REFERENCES USERS(id_user)              
atendio_ticket varchar(50),

)
USE USERS;
INSERT INTO USERS (id_user, name, email, password) VALUES (1, 'John Doe', 'john.doe@example.com', 'password123');
INSERT INTO USERS (id_user, name, email, password) VALUES (2, 'Jane Smith', 'jane.smith@example.com', 'password456');

use ticket;
INSERT INTO ticket (id_folio, fecha, motivo, STATUS, atendio_ticket) VALUES (1, '2024-06-01', 'Problema con el producto', 'Abierto', 'John Doe');
INSERT INTO ticket (id_folio, fecha, motivo, STATUS, atendio_ticket) VALUES (2, '2024-06-02', 'Consulta sobre el servicio', 'Cerrado', 'Jane Smith');   