<?php
	
	//Clase Mysql para la conexion con la base de datos
	class Mysql {
		private $conexion;
		private $consultas_totales;

		public function Mysql() {
			if (!isset($this->conexion)) {
				$this->conexion = (mysql_connect("ServerName","userName","userPass")) or die (mysql_error());
				mysql_select_db("databaseName",$this->conexion) or die (mysql_error());				
			}
		} //fin de la funcion Mysql
		
		//Funcion para realizar consultas y mostrar por pantalla resultados
		public function consulta($consulta) {
			$this->consultas_totales++;
			$resultado = mysql_query($consulta,$this->conexion);
			if (!$resultado) {
				echo 'Hubo un error en la conexión con la base de datos. Contacte con webmaster';
				exit;
			}
			return $resultado;
		} //fin de la funcion consulta

		//Funcion para insertar datos en la base de datos
		public function insertar($query) {
			$insercionDatos = mysql_query($query,$this->conexion);
			if (!$insercionDatos) {
				echo "Los datos no pudieron ser enviados a la base de datos. Contacte con el webmaster <br>";
				//echo mysql_error();  Muestra el error a la hora de acceder a la BD
			} else {
				echo "Datos introducidos correctamente en la base de datos";
			}
		} //Fin de funcion insertar para insertar datos en la base de datos

		public function fetch_array($consulta) {
			return mysql_fetch_array($consulta);
		} // fin de la funcion fetch array

		public function num_rows($consulta) {
			return mysql_num_rows($consulta);
		} // fin de la funcion num_rows

		//Devuelve el numero de consultas que hay en total
		public function getConsultasTotales() {
			return $this->consultas_totales;
		} // fin de la funcion getConsultasTotales		

	} //Fin de clase MYsql

?>