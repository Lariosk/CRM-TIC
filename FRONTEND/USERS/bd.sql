CREATE database 'USERS'


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