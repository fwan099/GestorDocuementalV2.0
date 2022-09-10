<?php
require_once "ConexionDB.php";
class UsuariosM extends ConexionDB{
	static public function IngresarUsuariosM($datosC, $tablaDB){
		$pdo = ConexionDB::cDB()->prepare("SELECT * FROM $tablaDB WHERE usuario=:usuario");

		$pdo ->bindParam(":usuario",$datosC["usuario"],PDO::PARAM_STR);

		$pdo->execute();

		return $pdo ->fetch();

		$pdo->close();
	}

	// ver usuarios

	static public function VerUsuariosM($tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT * FROM $tablaDB");

		$pdo->execute();

		return $pdo->fetchAll();

		$pdo->close;
	}

	//Crear Usuarios

	static public function CrearUsuariosM($tablaDB,$datosC){

		$pdo = ConexionDB::cDB()->prepare("INSERT INTO $tablaDB (nombres,paterno,materno,usuario,clave,rol) VALUES (:nombres,:paterno,:materno,:usuario, :clave, :rol)");

		$pdo->bindParam(":nombres",$datosC["nombres"],PDO::PARAM_STR);
		$pdo->bindParam(":paterno",$datosC["paterno"],PDO::PARAM_STR);
		$pdo->bindParam(":materno",$datosC["materno"],PDO::PARAM_STR);
		$pdo->bindParam(":usuario",$datosC["usuario"],PDO::PARAM_STR);
		$pdo->bindParam(":clave",$datosC["clave"],PDO::PARAM_STR);
		$pdo->bindParam(":rol",$datosC["rol"],PDO::PARAM_STR);

		if($pdo->execute()){
			return true;
		}else{
			return false;
		}

		$pdo->close();
	}


	//borrar usuarios

	static public function BorrarUsuariosM($tablaDB,$datosC){

		$pdo = ConexionDB::cDB()->prepare("DELETE FROM $tablaDB WHERE id_usuario = :id_usuario");

		$pdo ->bindParam(":id_usuario",$datosC,PDO::PARAM_INT);

		if($pdo->execute()){
			return true;
		}else{
			return false;
		}

		$pdo->close();

	}
	// LLamar datos para editarlos

	static public function EUsuariosM($tablaDB,$item,$valor){

		if($item!=null){
			$pdo = ConexionDB::cDB()->prepare("SELECT id_usuario,nombres,paterno,materno, usuario, clave,rol FROM $tablaDB WHERE $item = :$item ");
			$pdo ->bindParam(":".$item,$valor,PDO::PARAM_STR);

			$pdo->execute();


			return $pdo->fetch();


		}else{

			$pdo = ConexionDB::cDB()->prepare("SELECT id_usuario,nombres,paterno,materno, usuario, clave, rol  FROM $tablaDB  ");
		

			$pdo->execute();

			return $pdo->fetchAll();


		}

		$pdo->close();
	}

	//Actualizar Usuarios
	static public function ActualizarUsuariosM($tablaDB,$datosC){

		$pdo = ConexionDB::cDB()->prepare("UPDATE $tablaDB SET nombres=:nombres,paterno=:paterno,materno=:materno,  usuario =:usuario, clave=:clave, rol=:rol WHERE id_usuario=:id_usuario");

		$pdo->bindParam(":id_usuario", $datosC["id_usuario"],PDO::PARAM_INT);
		$pdo->bindParam(":nombres", $datosC["nombres"],PDO::PARAM_STR);
		$pdo->bindParam(":paterno", $datosC["paterno"],PDO::PARAM_STR);
		$pdo->bindParam(":materno", $datosC["materno"],PDO::PARAM_STR);
		$pdo->bindParam(":usuario", $datosC["usuario"],PDO::PARAM_STR);
		$pdo->bindParam(":clave", $datosC["clave"],PDO::PARAM_STR);
		$pdo->bindParam(":rol", $datosC["rol"],PDO::PARAM_STR);

		if($pdo->execute()){
			return true;
		}else{
			return false;
		}

		$pdo->close();

	}

	//Ver prefil del usuario

	static public function VerPerfilM($tablaDB,$id){

		$pdo = ConexionDB::cDB()->prepare("SELECT * FROM $tablaDB WHERE id_usuario=:id_usuario");

		$pdo->bindParam(":id_usuario",$id,PDO::PARAM_INT);

		$pdo->execute();

		return $pdo->fetch();

		$pdo->close;
	}

	
}
?>