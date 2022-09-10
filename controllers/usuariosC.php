<?php
	class UsuariosC{
		public function IngresoUsuariosC(){
			if(isset($_POST["usuario-ing"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario-ing"]) && preg_match('/^[a-zA-Z0-9]+$/',$_POST["clave-ing"])){

				$datosC = array("usuario"=>$_POST["usuario-ing"],"clave"=>$_POST["clave-ing"]);

				$tablaDB = "usuario";

				$respuesta = UsuariosM::IngresarUsuariosM($datosC, $tablaDB);
				if(is_array($respuesta)){
					if($respuesta["usuario"]==$_POST["usuario-ing"] && $respuesta["clave"]==$_POST["clave-ing"]  ){

					$_SESSION["Ingreso"]=true;

					$_SESSION["id_usuario"]=$respuesta["id_usuario"];
					$_SESSION["usuario"]=$respuesta["usuario"];
					$_SESSION["clave"]=$respuesta["clave"];
                    $_SESSION["nombres"]=$respuesta["nombres"];
                    $_SESSION["paterno"]=$respuesta["paterno"];
                    $_SESSION["materno"]=$respuesta["materno"];
					$_SESSION["rol"]=$respuesta["rol"];


					echo '<script> 

					window.location= "inicio"; 


					</script>';
				}else{
					echo '<div class="alert alert-danger text-center" role="alert">
  							Ups! Usuario o contraseña incorrecta
						</div>';
				}
			}else{
				echo '<div class="alert alert-danger text-center" role="alert">
  							Ups! Usuario o contraseña incorrecta
						</div>';
			}

				
				
			}
		}
		}

		//Ver usuarios
	public function VerUsuariosC(){
		$tablaDB = "usuario";
		$respuesta = UsuariosM::VerUsuariosM($tablaDB);

		foreach($respuesta as $key => $value){
			echo '<tr class="text-center">
	                <td>'.($key+1).'</td>
					<td>'.($value["nombres"]).'</td>
					<td>'.($value["paterno"]).'</td>
					<td>'.($value["materno"]).'</td>
	                <td>'.($value["usuario"]).'</td>
	                <td>'.($value["clave"]).'</td>';
	                
	            echo ' <td>'.($value["rol"]).'</td>
	                <td>
	                  <div class="btn-group">
                		<button class="btn btn-secondary EditarU" data-bs-toggle="modal" data-bs-target="#EditarU" Uid="'.($value["id_usuario"]).'"><i class="fas fa-pencil-alt" ></i></button>
               			<button class="btn btn-danger BorrarU" Uid="'.($value["id_usuario"]).'" ><i class="fa-solid fa-trash-can"></i></button>
            		  </div>
	                </td>
              </tr>';
		}
	}
		// Crear Usuarios

	public function CrearUsuariosC(){

		if(isset($_POST["usuarioN"])){

			$tablaDB = "usuario";

			$datosC = array("nombres"=>$_POST["nombresN"],"paterno"=>$_POST["paternoN"],"materno"=>$_POST["maternoN"],"usuario"=>$_POST["usuarioN"],"clave"=>$_POST["claveN"],"rol"=>$_POST["rolN"]);

			$respuesta = UsuariosM::CrearUsuariosM($tablaDB,$datosC);

			if($respuesta==true){

				echo '<script> 

					window.location= "usuarios"; 


					</script>';
			}else{
				echo 'ERROR AL CREAR USUARIO';
			}
		}
	}

	//Borrar usuarios
	public function BorrarUsuariosC(){

		if(isset($_GET["Uid"])){
			$tablaDB = "usuario";
			$datosC = $_GET["Uid"];


			$respuesta = UsuariosM::BorrarUsuariosM($tablaDB,$datosC);


			if($respuesta==true){

				echo '<script> 

					window.location= "usuarios"; 


					</script>';
			}else{
				echo 'ERROR AL BORRAR USUARIO';
			}
		}
	}
	//Llamar datos para editarlos
	static public function EUsuariosC($item,$valor){

		$tablaDB = "usuario";

		$respuesta = UsuariosM::EUsuariosM($tablaDB,$item,$valor);

		return $respuesta;

	}
	//Actualizar Usuarios
	public function ActualizarUsuariosC(){

		if(isset($_POST["Uid"])){

			$tablaDB = "usuario";

			$datosC = array("id_usuario"=>$_POST["Uid"],"nombres"=>$_POST["nombresE"],"paterno"=>$_POST["paternoE"],"materno"=>$_POST["maternoE"],"usuario"=>$_POST["usuarioE"],"clave"=>$_POST["claveE"],"rol"=>$_POST["rolE"]);

			$respuesta = UsuariosM::ActualizarUsuariosM($tablaDB,$datosC);

			if($respuesta==true){
				if($_GET["url"]=="usuarios"){
					echo '<script> 
						window.location= "usuarios"; 
						</script>';
				}else{
					echo '<script> 
						window.location= "perfil"; 
						</script>';
				}
				
			}else{
				echo 'ERROR AL EDITAR USUARIO';
			}



		}
	}


	//ver perfil del usuario actual

	public function VerPerfilC(){

		$tablaDB = "usuario";

		$id = $_SESSION["id_usuario"];

		$respuesta = UsuariosM::VerPerfilM($tablaDB,$id);


		echo '<div class="row g-3 TB">
		<div class="col-12">
			<label for="_dm-inputAddress01" class="form-label">Nombres</label>
			<input id="_dm-inputAddress01" value="'.($respuesta["nombres"]).'" disabled type="text" class="form-control"  >
		</div>
		<div class="col-12">
			<label for="_dm-inputAddress02" class="form-label">Apellido Paterno</label>
			<input id="_dm-inputAddress02" value="'.($respuesta["paterno"]).'" disabled type="text" class="form-control" >
		</div>
		<div class="col-12">
			<label for="_dm-inputAddress03" class="form-label">Apellido Materno</label>
			<input id="_dm-inputAddress03" value="'.($respuesta["materno"]).'" disabled type="text" class="form-control" >
		</div>
		<div class="col-md-6">
			<label for="_dm-inputEmail2" class="form-label">Usuario</label>
			<input id="_dm-inputEmail2" value="'.($respuesta["usuario"]).'" disabled type="email" class="form-control">
		</div>

		<div class="col-md-6">
			<label for="_dm-inputPassword2" class="form-label">Contraseña</label>
			<input id="_dm-inputPassword2" value="'.($respuesta["clave"]).'" disabled type="password" class="form-control">
		</div>

		

		<div class="col-12">
			<label for="_dm-inputAddress2" class="form-label">Rol</label>
			<input id="_dm-inputAddress2" value="'.($respuesta["rol"]).'" disabled type="text" class="form-control" placeholder="Apartment, studio, or floor">
		</div>

		<div class="col-12">
			<button class="btn btn-success EditarU" Uid="'.($respuesta["id_usuario"]).'" data-bs-toggle="modal" data-bs-target="#EditarU">Editar Información</button>
		</div>
	</div>';
	}

	}
?>