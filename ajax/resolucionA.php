

<?php 

require_once "../controllers/resolucionesC.php";
require_once "../models/resolucionesM.php";


class ResolucionA{
	public $Uid;

	public function EResolucionA(){
		$item ="id_resolucion";
		$valor = $this->Uid;



		$respuesta = ResolucionC::EResolucionC($item,$valor);


		echo json_encode($respuesta);
	}
}


if(isset($_POST["Uid"])){

	$editarR = new ResolucionA();

	$editarR->Uid = $_POST["Uid"];
	$editarR->EResolucionA();

}

 ?>