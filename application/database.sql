

CREATE TABLE USUARIO(
   ID INTEGER PRIMARY KEY   AUTOINCREMENT,
   LOGIN            TEXT      NOT NULL,
   PASS           TEXT      NOT NULL
);

CREATE TABLE perfil(
   id INTEGER PRIMARY KEY   AUTOINCREMENT,
   id_usuario INTEGER,
   rol           TEXT      NOT NULL,
   direccion     TEXT      NOT NULL,
   nombre      TEXT      NOT NULL,
   telefono      TEXT      NOT NULL,
   FOREIGN KEY(id_usuario) REFERENCES USUARIO(ID)
);

CREATE TABLE amigos(
   id_amigo INTEGER,
   id_seguidor INTEGER,
   FOREIGN KEY(id_amigo) REFERENCES USUARIO(ID),
   FOREIGN KEY(id_seguidor) REFERENCES USUARIO(ID)
);