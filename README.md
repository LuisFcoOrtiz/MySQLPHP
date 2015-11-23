# MySQLPHP
(sp) Clase PHP para conexión con un servidor MySQL. Con la capacidad de hacer una inserción de datos, actualización, etc. 

(en) PHP class for connect with MySQL server. This class can insert data, update, etc into the database

Ejemplo de uso / example:

<?php

	//clase para la conexión de la base de datos 
	include("MySQLPHP.php");
	$dataBase = new Mysql();
	//inserta en la base de datos clientes el nombre y email del cliente
	$insertar = $dataBase->insertar("INSERT INTO clientes (id,nombre,email) VALUES ('NULL','$nombre','$email')");
	
?>
