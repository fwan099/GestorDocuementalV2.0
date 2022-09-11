<?php 

if ($_SESSION["rol"] != "Administrador") {

  echo '<script>
        window.location ="inicio"

  </script>';
  
}


 ?>
<section id="content" class="content">

            <div class="content__boxed">
                <div class="content__wrap">


                    <!-- Table with toolbar -->
                    <div class="card">
                        <div class="card-header ">
                            <h5 class="card-title mb-3">Resoluciones</h5>
                            <div class="row">

                                <!-- Left toolbar -->
                                <div class="col-md-6 d-flex gap-1 align-items-center mb-3">
                                    <button class="btn btn-primary hstack gap-2 align-self-center" data-bs-toggle="modal" data-bs-target="#RegistrarResolucion">
                                        <i class="demo-psi-add fs-5"></i>
                                        <span class="vr"></span>
                                        Registrar Resolucion
                                    </button>

                                </div>
                                <!-- END : Left toolbar -->


                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped TB pb-4" id="resoluciones-table" style="width:100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-center">Numero</th>
                                            <th>Fecha</th>
                                            <th>Motivo</th>
                                            <th>DNI</th>
                                            <th>Administrado</th>
                                            <th>Documento</th>
                                            <th>Editar/Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <!--   <tr>
                                            <td>1</td>
                                            <td>Juan Carlos</td>
                                            <td>Arocutipa</td>
                                            <td>Choquecota</td>
                                            <td>12547878</td>
                                            <td>12345678998789</td>
                                            <td>Administrador</td>
                                            <td>
                                            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#EditarU"><i class="fas fa-pencil-alt" ></i></button>
                                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                            </td>
                                        </tr>-->
                                        <?php 
                                             $verR = new ResolucionC();
                                             $verR->VerResolucionC();
                                             $item = null;
                                             $valor = null;
                             
                                             $editarR =  ResolucionC::EResolucionC($item,$valor);

                                         ?>
                                       
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                    <!-- END : Table with toolbar -->

                </div>
            </div>



<!-- Modal crar RESOLUCION -->
<div class="modal fade" role="dialog" id="RegistrarResolucion">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header d-block">
              <h5 class="modal-title text-center" id="exampleModalLabel">Registrar Resolucion</h5>
              <div class="form-group " >
                <h5>Consulta DNI</h5>
                <input type="text" class="form-control mb-3 " id="dni-buscar" autocomplete="off" >
                <button type="button" id="btn-buscar" class="btn btn-success w-100">Buscar en RENIEC</button>
              </div>
          </div>

          <div class="modal-body">
            <div class="box-body">
              <div class="d-md-flex ">
                <div class="form-group mb-2 flex-grow-1 me-md-2 ">
                <h5>Nombres</h5>
                <input type="text" class="form-control " name="nombresN" id="nombresN" autocomplete="off">
              </div>
              <div class="form-group mb-2 flex-grow-1 me-md-2">
                <h5>Apellido Paterno</h5>
                <input type="text" class="form-control " name="paternoN" id="paternoN" autocomplete="off" >
              </div>
              <div class="form-group mb-2 flex-grow-1">
                <h5>Apellido Materno</h5>
                <input type="text" class="form-control " name="maternoN" id="maternoN" autocomplete="off" >
              </div>
              </div>
              
              
              <div class="d-md-flex">
                <div class="form-group mb-2 flex-grow-1 me-md-2">
                <h5>DNI</h5>
                <input type="text" class="form-control " name="dniN" id="dniN" autocomplete="off" >
              </div>
              <div class="d-flex flex-grow-1">
                <div class="form-group mb-2 w-50  me-2 flex-grow-1">
                <h5>N° Resolucion</h5>
                <input type="text" class="form-control " name="numeroN" required autocomplete="off">
              </div>
              <div class="form-group mb-2 w-50 flex-grow-1">
                <h5 class="">Fecha</h5>
                <input type="date" class="form-control " name="fechaN" required >
                
              </div>
              </div>
                
              </div>
              
              <div class="form-group">
                <h5>Seleccionar Motivo</h5>
                <select class="form-select"  name="motivoN">
                <!--  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>-->
                  <?php 
                    $verML = new MotivosC();
                    $verML->VerMotivosListC();
                   ?>
                </select>
              </div>
              <div class="form-group mb-2">
              <h5>Documento</h5>
              <input type="file" class="" name="documentoN">
              </div>
            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Registrar</button>
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            
          </div>
          <?php 
            $crearR = new ResolucionC();
            $crearR->CrearResolucionC();
           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>


  <?php 
  $borrarR = new ResolucionC();
  $borrarR->BorrarResolucionC();
   ?>
<!-- Modal EDITAR RESOLUCION -->
<div class="modal fade" role="dialog" id="EditarR">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header d-block">
              <h5 class="modal-title text-center" id="exampleModalLabel">Actualizar Resolucion</h5>
            <!--  <div class="form-group" >
                <h5>Consulta DNI</h5>
                <input type="text" class="form-control mb-3 " id="dni-buscar" >
                <button type="button" id="btn-buscar" class="btn btn-lite w-100">Buscar en RENIEC</button>
              </div>-->
          </div>

          <div class="modal-body">
            <div class="box-body">
              <div class="">
                <div class="form-group mb-2">
                <h5>Nombres</h5>
                <input type="text" class="form-control " name="nombresE" id="nombresE"  >
                <input type="hidden" id="Uid" name="Uid">
              </div>
              <div class="form-group mb-2">
                <h5>Apellido Paterno</h5>
                <input type="text" class="form-control " name="paternoE" id="paternoE" >
              </div>
              <div class="form-group mb-2">
                <h5>Apellido Materno</h5>
                <input type="text" class="form-control " name="maternoE" id="maternoE" >
              </div>
              </div>
              
              <div class="d-md-flex">
                <div class="form-group mb-2 flex-grow-1 me-md-2">
                <h5>DNI</h5>
                <input type="text" class="form-control " name="dniE" id="dniE" >
              </div>
              <div class="d-flex flex-grow-1">
                <div class="form-group mb-2 w-50 me-2">
                <h5>N° de Resolucion</h5>
                <input type="text" class="form-control " name="numeroE" id="numeroE" required>
              </div>
              <div class="form-group mb-2 w-50">
                <h5 class="">Fecha</h5>
                <input type="date" class="form-control " name="fechaE" id="fechaE"required>
              </div>
              </div>
              </div>
              
              
              <div class="form-group">
                <h5>Seleccionar Motivo</h5>
                <select class="form-select"  name="motivoE" >
                  <option id="motivoE"></option>
                <!--  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>-->
                  <?php 
                    $verML = new MotivosC();
                    $verML->VerMotivosListC();
                   ?>
                </select>
              </div>
              <div class="form-group mb-2">
              <h5>Documento</h5>
              <input type="file" name="documentoE" id="documentoE">
              <input type="hidden" name="documentoActual" id="documentoActual">
              </div>
            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Actualizar</button>
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            
          </div>
          <?php 
            $actualizarR = new ResolucionC();
            $actualizarR->ActualizarResolucionC();
         
           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>
