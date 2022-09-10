<?php 

 class ResolucionC{

 	//crear resolucion
 	public function CrearResolucionC(){

 		if(isset($_POST["fechaN"])){

 			$rutaPdf="";

 			if(isset($_FILES["documentoN"]["tmp_name"]) && !empty($_FILES["documentoN"]["tmp_name"])){

 				if($_FILES["documentoN"]["type"] == "application/pdf"){

 					$nombre ="RESN°".$_POST["numeroN"]."-".$_POST["dniN"]."_".mt_rand(10,999);
 					$rutaPdf = "views/public/docs/".$nombre.".pdf";
 					$documento = $_FILES["documentoN"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf);


 				}
 			}

 			$tablaDB = "resolucion";

 			$datosC = array("fecha"=>$_POST["fechaN"],"doc_url"=>$rutaPdf,"id_tipo_resolucion"=>$_POST["motivoN"],"numero_res"=>$_POST["numeroN"],"dni"=>$_POST["dniN"],"nombres"=>$_POST["nombresN"],"paterno"=>$_POST["paternoN"],"materno"=>$_POST["maternoN"]);

 			$respuesta = ResolucionM::CrearResolucionM($tablaDB,$datosC);

 			if($respuesta == true){

				echo ' <script>

					window.location = "cargarRes";

				</script>';
			}else{

				echo 'ERROR AL CREAR RESOLUCION';
			}

 		}
 	}


	public function VerResolucionC(){
		$tablaDB = "resolucion";
		$respuesta = ResolucionM::VerResolucionM($tablaDB);

		foreach($respuesta as $key => $value){
			echo '<tr class="text-center">
	                <td>'.($value["numero_res"]).'</td>
	                <td>'.($value["data"]).'</td>
	                <td>'.($value["detalle"]).'</td>
	                <td>'.($value["dni"]).'</td>
	                <td>'.($value["nombres"]). ' ' .($value["paterno"]).' ' .($value["materno"]).'</td>
	                
	                <td class="text-center"><a class="link-doc " download="" href="'.($value["doc_url"]).'"><i class="fa-solid fa-file-pdf"></i></a></td>';
	                
	            echo ' 
	                <td>
	                  <div class="btn-group">
                		<button class="btn btn-secondary EditarR" Uid="'.($value["id_resolucion"]).'" data-bs-toggle="modal" data-bs-target="#EditarR"><i class="fas fa-pencil-alt" ></i></button>
               			<button class="btn btn-danger BorrarR" Uid="'.($value["id_resolucion"]).'" ><i class="fa-solid fa-trash-can"></i></button>
            		  </div>
	                </td>
              </tr>';
		}
	}
	//Borrar resolucion
	public function BorrarResolucionC(){

		if(isset($_GET["Uid"])){
			$tablaDB = "resolucion";
			$datosC = $_GET["Uid"];


			$respuesta = ResolucionM::BorrarResolucionM($tablaDB,$datosC);


			if($respuesta==true){

				echo '<script> 

					window.location= "cargarRes"; 


					</script>';
			}else{
				echo 'ERROR AL BORRAR RESOLUCION';
			}
		}
	}


	//Llamar datos para editarlos
	static public function EResolucionC($item,$valor){

		$tablaDB = "resolucion";

		$respuesta = ResolucionM::EResolucionM($tablaDB,$item,$valor);

		return $respuesta;

	}
	//Actualizar Resolucion
	public function ActualizarResolucionC(){

		if(isset($_POST["Uid"])){

			$rutaPdf = $_POST["documentoActual"];

	 		if(isset($_FILES["documentoE"]["tmp_name"]) &&!empty($_FILES["documentoE"]["tmp_name"])){

	 			if(!empty($_POST["documentoActual"])){

	 				unlink($_POST["documentoActual"]);
	 			}else{
	 				mkdir($direc,0755);
	 			}

	 			if($_FILES["documentoE"]["type"]=="application/pdf"){

	 				$nombre ="RESN°".$_POST["numeroE"]."-".$_POST["dniE"]."_".mt_rand(10,999);

					$rutaPdf = "views/public/docs/".$nombre.".pdf";

					$documento = $_FILES["documentoE"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf);
	 			}

	 			
	 		}
	 			
	 		

 			$tablaDB = "resolucion";

 			$datosC = array("id_resolucion"=>$_POST["Uid"],"fecha"=>$_POST["fechaE"],"doc_url"=>$rutaPdf,"id_tipo_resolucion"=>$_POST["motivoE"],"numero_res"=>$_POST["numeroE"],"dni"=>$_POST["dniE"],"nombres"=>$_POST["nombresE"],"paterno"=>$_POST["paternoE"],"materno"=>$_POST["maternoE"]);

 			$respuesta = ResolucionM::ActualizarResolucionM($tablaDB,$datosC);

 			if($respuesta == true){

				echo ' <script>

					window.location = "cargarRes";

				</script>';
			}else{

				echo ' ERROR ';
			}


		}
	}



 }

 ?>