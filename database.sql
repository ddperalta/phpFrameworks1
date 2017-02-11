CREATE TABLE productos (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	nombre TEXT,
	descripcion TEXT,
	precio REAL
);

CREATE TABLE usuarios(
   id INTEGER  PRIMARY KEY AUTOINCREMENT,
   login TEXT,
   password TEXT
);

CREATE TABLE perfil(
   id INTEGER  PRIMARY KEY  AUTOINCREMENT,
   id_usuario INTEGER,
   rol TEXT,
   direccion TEXT,
   nombre TEXT,
   telefono INTEGER,

   FOREIGN KEY(id_usuario) REFERENCES usuarios(id)
);

CREATE TABLE articulos(
   id INTEGER  PRIMARY KEY  AUTOINCREMENT,
   id_autor INTEGER,
   titulo TEXT,
   cuerpo TEXT,

   FOREIGN KEY(id_autor) REFERENCES usuarios(id)
);
