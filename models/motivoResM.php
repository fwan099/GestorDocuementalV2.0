<?php
require_once "ConexionDB.php";

class MotivosM extends ConexionDB{


	// ver MOTIVO

	static public function VerMotivosM($tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT id_tipo_resolucion, detalle FROM $tablaDB");

		$pdo->execute();

		return $pdo->fetchAll();

		$pdo->close;
	}

	// CREAR MOTIVO

	static public function CrearMotivosM($tablaDB,$datosC){

		$pdo = ConexionDB::cDB()->prepare("INSERT INTO $tablaDB (detalle) VALUES (:detalle)");


		$pdo->bindParam(":detalle",$datosC["detalle"],PDO::PARAM_STR);

		if($pdo->execute()){
			return true;
		}else{
			return false;
		}

		$pdo->close();
	}

	// LLamar datos para editarlos

	static public function EMotivosM($tablaDB,$item,$valor){

		if($item!=null){
			$pdo = ConexionDB::cDB()->prepare("SELECT id_tipo_resolucion, detalle FROM $tablaDB WHERE $item = :$item ");
			$pdo ->bindParam(":".$item,$valor,PDO::PARAM_STR);
			$pdo->execute();
			return $pdo->fetch();

		}else{
			$pdo = ConexionDB::cDB()->prepare("SELECT id_tipo_resolucion, detalle  FROM $tablaDB  ");
			$pdo->execute();

			return $pdo->fetchAll();
		}

		$pdo->close();
	}

	//Actualizar Motivos
	static public function ActualizarMotivosM($tablaDB,$datosC){

		$pdo = ConexionDB::cDB()->prepare("UPDATE $tablaDB SET  detalle =:detalle WHERE id_tipo_resolucion=:id_tipo_resolucion");

		$pdo->bindParam(":id_tipo_resolucion", $datosC["id_tipo_resolucion"],PDO::PARAM_INT);

		$pdo->bindParam(":detalle", $datosC["detalle"],PDO::PARAM_STR);

		if($pdo->execute()){
			return true;
		}else{
			return false;
		}

		$pdo->close();

	}

	//borrar motivos

	static public function BorrarMotivosM($tablaDB,$datosC){

		$pdo = ConexionDB::cDB()->prepare("DELETE FROM $tablaDB WHERE id_tipo_resolucion = :id_tipo_resolucion");

		$pdo ->bindParam(":id_tipo_resolucion",$datosC,PDO::PARAM_INT);

		if($pdo->execute()){
			return true;
		}else{
			return false;
		}

		$pdo->close();

	}

	
}
?>