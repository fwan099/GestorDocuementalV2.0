<?php
class ConsultaC{
	public function VerConsultaC(){

		if(isset($_POST["consultaN"]) && isset($_POST["añoN"])){
			$consulta = $_POST["consultaN"];
			$año = $_POST["añoN"];
			$opcion = $_POST["tipo-buscar"];


		}else{
			$consulta = "";
			$año = "";
			$opcion ="Numero";
		}
		$tablaDB = "resolucion";
		$respuesta = ConsultaM::VerConsultaM($tablaDB,$consulta,$año,$opcion);

		foreach($respuesta as $key => $value){
			echo '
					<tr class="text-center">
						<td>'.($key+1).'</td>
						<td>'.($value["numero_res"]).'</td>
	               		<td>'.($value["data"]).'</td>
	                	<td>'.($value["detalle"]).'</td>
	                	<td>'.($value["nombres"]). ' ' .($value["paterno"]).' ' .($value["materno"]).'</td>
	                	<td class="text-center">
	                	<a class="link-doc "  download="" href="'.($value["doc_url"]).'"><i class="fa-solid fa-file-pdf"></i></a>

	                	</td>
					</tr>

			';
		}
	}
}
?>