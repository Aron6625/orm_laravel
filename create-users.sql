CREATE DATABASE manaco;
CREATE DATABASE tiky;
CREATE DATABASE taxi;

CREATE USER manaco WITH ENCRYPTED PASSWORD 'manaco';
CREATE USER tiky WITH ENCRYPTED PASSWORD 'tiky';
CREATE USER taxi WITH ENCRYPTED PASSWORD 'taxi';
CREATE USER test WITH ENCRYPTED PASSWORD 'test';
GRANT ALL PRIVILEGES ON DATABASE manaco TO manaco;
GRANT ALL PRIVILEGES ON DATABASE tiky TO tiky;
GRANT ALL PRIVILEGES ON DATABASE taxi TO taxi;
GRANT ALL PRIVILEGES ON DATABASE test TO test;

GRANT ALL ON schema public TO manaco;
GRANT ALL ON schema public TO tiky;
GRANT ALL ON schema public TO taxi;
GRANT ALL ON SCHEMA public TO test;
CREATE TABLE materias(
  id SERIAL PRIMARY KEY,
  nombre VARCHAR(200),
);
INSERT INTO materias VALUES(1,"Aso");
INSERT INTO materias VALUES(2,"Tso");
ALTER USER manaco WITH PASSWORD '1234'
CREATE USER amazon WITH ENCRYPTED PASSWORD 'amazon'

  INSERT INTO menu VALUES(1,'saltena_picantes',6);
  INSERT INTO menu VALUES(2,'saltena_dulces',5);
  INSERT INTO menu VALUES(3,'jugos',2);
  CREATE TABLE menu(
    id serial PRIMARY key,
    nombre VARCHAR(50),
    precio INTEGER
  );


  CREATE USER 'manaco'@'localhost' IDENTIFIED WITH authentication_plugin BY 'manaco';
  GRANT PRIVILEGE ON database.table TO 'manaco'@'localhost';