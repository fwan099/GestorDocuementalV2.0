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
                        <div class="card-header -4 ">
                            <h5 class="card-title mb-3">Motivos de Resoluciones</h5>
                            <div class="row">

                                <!-- Left toolbar -->
                                <div class="col-md-6 d-flex gap-1 align-items-center mb-3">
                                    <button class="btn btn-primary hstack gap-2 align-self-center" data-bs-toggle="modal" data-bs-target="#RegistrarMotivo">
                                        <i class="demo-psi-add fs-5"></i>
                                        <span class="vr"></span>
                                        Ingresar Motivo
                                    </button>

                                </div>
                                <!-- END : Left toolbar -->

             

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped TB pb-4" id="motivos-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">N°</th>
                                            <th>Descripcion Motivo</th>

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
                                            $verM = new MotivosC();
                                            $verM->VerMotivosC();
                                
                                            $item = null;
                                            $valor = null;
                                
                                            $editarM =  MotivosC::EMotivosC($item,$valor);
                                          
                                         ?>
                                       
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- END : Table with toolbar -->

                </div>
            </div>


<!-- Modal crar Motivo -->
<div class="modal fade" role="dialog" id="RegistrarMotivo">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Registrar Motivo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <h5>Motivo</h5>
                <input type="text" class="form-control " name="motivoN" required style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="off">
              </div>

            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            
          </div>
            <?php 
            $crearM = new MotivosC();
            $crearM->CrearMotivosC();
           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>
  <?php 
  $borrarM = new MotivosC();
  $borrarM->BorrarMotivosC();
   ?>

<!-- Modal Editar Motivo -->
<div class="modal fade" role="dialog" id="EditarM">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Motivo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <h5>Motivo</h5>
                <input type="text" class="form-control " id="motivoE" name="motivoE" required style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
                <input type="hidden" id="Uid" name="Uid">
              </div>

            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Gurdar Cambios</button>
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            
          </div>
           <?php 
            $actualizarM = new MotivosC();
            $actualizarM->ActualizarMotivosC();
         
           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>