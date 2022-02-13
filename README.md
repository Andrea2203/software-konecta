# software-konecta
Prueba de conocimiento Konecta

#Para ejecutar la prueba debe contrar con version PHP superior a 5
Los pasos que debe seguir son:
1. Clonar el repositorio,
2. Crear base de datos con el siguiente script 
```
CREATE DATABASE konecta
    DEFAULT CHARACTER SET = 'utf8mb4';

CREATE TABLE productos(
 id INT (10) AUTO_INCREMENT PRIMARY KEY,
 nombreProducto VARCHAR(200) NOT NULL,
 referencia VARCHAR(200) NOT NULL,
 precio INT(10) NOT NULL,
 peso INT(10) NOT NULL,
 categoria VARCHAR(200) NOT NULL, 
 stock INT NOT NULL,
 fechaCreacion DATE NOT NULL
);

CREATE TABLE ventas(
 id INT (10) AUTO_INCREMENT PRIMARY KEY,
 idProducto INT (10) NOT NULL,
 cantidad INT (10) NOT NULL,
 precio INT (10) NOT NULL,
 fecha DATE NOT NULL
);
```
3. Ejecutar el programa.
4. Encontrara el menu donde puede ver las opciones que puede realizar dentro del programa
