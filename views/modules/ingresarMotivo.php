<section id="content" class="content">

            <div class="content__boxed">
                <div class="content__wrap">


                    <!-- Table with toolbar -->
                    <div class="card">
                        <div class="card-header -4 mb-3">
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

                                <!-- Right Toolbar -->
                                <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-end mb-3">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search..." class="form-control" autocomplete="off">
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-icon btn-outline-light"><i class="demo-pli-download-from-cloud fs-5"></i></button>
                                        <div class="btn-group dropdown">
                                            <button class="btn btn-icon btn-outline-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- END : Right Toolbar -->

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped TB">
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

                            <nav class="text-align-center mt-5" aria-label="Table navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link">Previous</a>
                                    </li>
                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">1</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
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
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            
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
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            
          </div>
           <?php 
            $actualizarM = new MotivosC();
            $actualizarM->ActualizarMotivosC();
         
           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>