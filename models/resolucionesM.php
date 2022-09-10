<?php 

require_once "ConexionDB.php";

 class ResolucionM extends ConexionDB{

    //Crear Oficios

 	static public function CrearResolucionM($tablaDB,$datosC){

 		$pdo = ConexionDB::cDB()->prepare("INSERT INTO $tablaDB (fecha, doc_url,id_tipo_resolucion,numero_res,dni,nombres,paterno,materno) VALUES (:fecha, :doc_url,:id_tipo_resolucion,:numero_res,:dni,:nombres,:paterno,:materno)");


 		$pdo->bindParam(":fecha",$datosC["fecha"],PDO::PARAM_STR);
 		$pdo->bindParam(":doc_url",$datosC["doc_url"],PDO::PARAM_STR);
        $pdo->bindParam(":id_tipo_resolucion",$datosC["id_tipo_resolucion"],PDO::PARAM_INT);
        $pdo->bindParam(":numero_res",$datosC["numero_res"],PDO::PARAM_STR);
        $pdo->bindParam(":dni",$datosC["dni"],PDO::PARAM_STR);
        $pdo->bindParam(":nombres",$datosC["nombres"],PDO::PARAM_STR);
        $pdo->bindParam(":paterno",$datosC["paterno"],PDO::PARAM_STR);
        $pdo->bindParam(":materno",$datosC["materno"],PDO::PARAM_STR);


 			if ($pdo->execute()) {
 			
 			return true;
 		}else{

 			return false;
 		}

 		$pdo->close();
 	}

 	//ver comunicados
    // ver usuarios

    static public function VerResolucionM($tablaDB){

        $pdo = ConexionDB::cDB()->prepare("SELECT *, DATE_FORMAT(fecha,'%d-%m-%Y') AS data FROM $tablaDB join tipo_resolucion on resolucion.id_tipo_resolucion = tipo_resolucion.id_tipo_resolucion ORDER BY fecha DESC");

        $pdo->execute();

        return $pdo->fetchAll();

        $pdo->close;
    }
    //borrar RESOLUCION

    static public function BorrarResolucionM($tablaDB,$datosC){

        $pdo = ConexionDB::cDB()->prepare("DELETE FROM $tablaDB WHERE id_resolucion = :id_resolucion");

        $pdo ->bindParam(":id_resolucion",$datosC,PDO::PARAM_INT);

        if($pdo->execute()){
            return true;
        }else{
            return false;
        }

        $pdo->close();

    }

    // LLamar datos para editarlos

    static public function EResolucionM($tablaDB,$item,$valor){

        if($item!=null){
            $pdo = ConexionDB::cDB()->prepare("SELECT * FROM $tablaDB join tipo_resolucion on resolucion.id_tipo_resolucion = tipo_resolucion.id_tipo_resolucion WHERE $item = :$item ");
            $pdo ->bindParam(":".$item,$valor,PDO::PARAM_STR);

            $pdo->execute();


            return $pdo->fetch();


        }else{

            $pdo = ConexionDB::cDB()->prepare("SELECT * FROM $tablaDB join tipo_resolucion on resolucion.id_tipo_resolucion = tipo_resolucion.id_tipo_resolucion");
        

            $pdo->execute();

            return $pdo->fetchAll();


        }

        $pdo->close();
    }

    //Actualizar Resolucion
    static public function ActualizarResolucionM($tablaDB,$datosC){

        $pdo = ConexionDB::cDB()->prepare("UPDATE $tablaDB SET  fecha =:fecha, doc_url=:doc_url, id_tipo_resolucion=:id_tipo_resolucion,numero_res=:numero_res,dni=:dni,nombres=:nombres,paterno=:paterno,materno=:materno WHERE id_resolucion=:id_resolucion");


        $pdo->bindParam(":id_resolucion", $datosC["id_resolucion"],PDO::PARAM_INT);
        $pdo->bindParam(":fecha",$datosC["fecha"],PDO::PARAM_STR);
        $pdo->bindParam(":doc_url",$datosC["doc_url"],PDO::PARAM_STR);
        $pdo->bindParam(":id_tipo_resolucion",$datosC["id_tipo_resolucion"],PDO::PARAM_INT);
        $pdo->bindParam(":numero_res",$datosC["numero_res"],PDO::PARAM_STR);
        $pdo->bindParam(":dni",$datosC["dni"],PDO::PARAM_STR);
        $pdo->bindParam(":nombres",$datosC["nombres"],PDO::PARAM_STR);
        $pdo->bindParam(":paterno",$datosC["paterno"],PDO::PARAM_STR);
        $pdo->bindParam(":materno",$datosC["materno"],PDO::PARAM_STR);

        if($pdo->execute()){
            return true;
        }else{
            return false;
        }

        $pdo->close();

    }


 }


 ?>