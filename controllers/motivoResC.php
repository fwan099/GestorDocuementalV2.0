<?php 
class MotivosC{
	//Ver motivos resolucion
	public function VerMotivosC(){
        $tablaDB = "tipo_resolucion";
		$respuesta = MotivosM::VerMotivosM($tablaDB);

		foreach($respuesta as $key => $value){
			echo '<tr>
	                <td>'.($key+1).'</td>
	                <td>'.($value["detalle"]).'</td>';
	                
	            echo '
	                <td>
	                  <div class="btn-group">
                		<button class="btn btn-secondary EditarM" data-bs-toggle="modal" data-bs-target="#EditarM" Uid="'.($value["id_tipo_resolucion"]).'"><i class="fas fa-pencil-alt" ></i></button>
               			<button class="btn btn-danger BorrarM" Uid="'.($value["id_tipo_resolucion"]).'" ><i class="fa-solid fa-trash-can"></i></button>
            		  </div>
	                </td>
              </tr>';
		}

	}
//crear motivos resolucion
	public function CrearMotivosC(){

		if(isset($_POST["motivoN"])){

			$tablaDB = "tipo_resolucion";

			$datosC = array("detalle"=>$_POST["motivoN"]);

			$respuesta = MotivosM::CrearMotivosM($tablaDB,$datosC);

			if($respuesta==true){

				echo '<script> 

					window.location= "ingresarMotivo"; 


					</script>';
			}else{
				echo 'ERROR AL CREAR MOTIVO';
			}
		}

	}

	//Llamar datos para editarlos
	static public function EMotivosC($item,$valor){

		$tablaDB = "tipo_resolucion";

		$respuesta = MotivosM::EMotivosM($tablaDB,$item,$valor);

		return $respuesta;

	}

	//Actualizar motivos
	public function ActualizarMotivosC(){

		if(isset($_POST["Uid"])){

			$tablaDB = "tipo_resolucion";

			$datosC = array("id_tipo_resolucion"=>$_POST["Uid"],"detalle"=>$_POST["motivoE"]);

			$respuesta = MotivosM::ActualizarMotivosM($tablaDB,$datosC);

			if($respuesta==true){

					echo '<script> 
						window.location= "ingresarMotivo"; 
						</script>';		
			}else{
				echo 'ERROR AL EDITAR MOTIVO';
			}



		}
	}

	//Borrar motivos
	public function BorrarMotivosC(){

		if(isset($_GET["Uid"])){
			$tablaDB = "tipo_resolucion";
			$datosC = $_GET["Uid"];


			$respuesta = MotivosM::BorrarMotivosM($tablaDB,$datosC);


			if($respuesta==true){

				echo '<script> 

					window.location= "ingresarMotivo"; 


					</script>';
			}else{
				echo 'ERROR AL BORRAR MOTIVO';
			}
		}
	}


//LISTA DE MOTIVOS PARA REGSITRO DE RESAOLUCION
	public function VerMotivosListC(){

		$tablaDB = "tipo_resolucion";
		$respuesta = MotivosM::VerMotivosM($tablaDB);

		foreach($respuesta as $key => $value){
			
			echo ' <option value="'.($value["id_tipo_resolucion"]).'">'.($value["detalle"]).'</option>';
	                
		}
	}


}


 ?>