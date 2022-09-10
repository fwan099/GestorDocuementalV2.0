

<?php 

require_once "../controllers/usuariosC.php";
require_once "../models/usuariosM.php";


class UsuariosA{
	public $Uid;

	public function EUsuariosA(){
		$item ="id_usuario";
		$valor = $this->Uid;



		$respuesta = UsuariosC::EUsuariosC($item,$valor);


		echo json_encode($respuesta);
	}
}


if(isset($_POST["Uid"])){

	$editarU = new UsuariosA();

	$editarU->Uid = $_POST["Uid"];
	$editarU->EUsuariosA();

}

 ?>