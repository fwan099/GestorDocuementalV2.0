

<?php 

require_once "../controllers/motivoResC.php";
require_once "../models/motivoResM.php";


class MotivosA{
	public $Uid;

	public function EMotivosA(){
		$item ="id_tipo_resolucion";
		$valor = $this->Uid;



		$respuesta = MotivosC::EMotivosC($item,$valor);


		echo json_encode($respuesta);
	}
}


if(isset($_POST["Uid"])){

	$editarM = new MotivosA();

	$editarM->Uid = $_POST["Uid"];
	$editarM->EMotivosA();

}

 ?>