<?php
require_once "conexionDB.php";

class ConsultaM extends ConexionDB{
	static public function VerConsultaM($tablaDB,$consulta,$año,$opcion){
		if($opcion == "DNI"){
			if( $año == "0"){
		 	$pdo = ConexionDB::cDB()->prepare("SELECT *, DATE_FORMAT(fecha,'%d-%m-%Y') as data FROM $tablaDB join tipo_resolucion on resolucion.id_tipo_resolucion = tipo_resolucion.id_tipo_resolucion 	WHERE dni= $consulta ORDER BY fecha DESC");
		 }else{
		 	$pdo = ConexionDB::cDB()->prepare("SELECT *, DATE_FORMAT(fecha,'%d-%m-%Y') as data FROM $tablaDB join tipo_resolucion on resolucion.id_tipo_resolucion = tipo_resolucion.id_tipo_resolucion 	WHERE dni= $consulta AND year(fecha)=$año ORDER BY fecha DESC");
		 }
		}elseif ($opcion == "Numero") {

			if( $año == "0"){
		 	$pdo = ConexionDB::cDB()->prepare("SELECT *, DATE_FORMAT(fecha,'%d-%m-%Y') as data FROM $tablaDB join tipo_resolucion on resolucion.id_tipo_resolucion = tipo_resolucion.id_tipo_resolucion 	WHERE numero_res= $consulta ORDER BY fecha DESC");
		 }else{
		 	$pdo = ConexionDB::cDB()->prepare("SELECT *, DATE_FORMAT(fecha,'%d-%m-%Y') as data FROM $tablaDB join tipo_resolucion on resolucion.id_tipo_resolucion = tipo_resolucion.id_tipo_resolucion 	WHERE numero_res= $consulta AND year(fecha)=$año ORDER BY fecha DESC");
		 }
		}elseif($opcion == "Apellidos"){
			if( $año == "0"){
		 	$pdo = ConexionDB::cDB()->prepare("SELECT *, DATE_FORMAT(fecha,'%d-%m-%Y') as data FROM $tablaDB join tipo_resolucion on resolucion.id_tipo_resolucion = tipo_resolucion.id_tipo_resolucion 	WHERE concat(paterno,' ',materno) LIKE '$consulta' ORDER BY fecha DESC");
		 }else{
		 	$pdo = ConexionDB::cDB()->prepare("SELECT *, DATE_FORMAT(fecha,'%d-%m-%Y') as data FROM $tablaDB join tipo_resolucion on resolucion.id_tipo_resolucion = tipo_resolucion.id_tipo_resolucion 	WHERE concat(paterno,' ',materno) LIKE '$consulta' AND year(fecha)=$año ORDER BY fecha DESC");
		 }
		}


		 
		 

        $pdo->execute();

        return $pdo->fetchAll();

        $pdo->close;
	}

} 
?>