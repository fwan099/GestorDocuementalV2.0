<section id="content" class="content">

            <div class="content__boxed">
                <div class="content__wrap">


                    <!-- Table with toolbar -->
                    <div class="card">
           
                        <div class="card-body">
                            <div class="table-responsive">
                            <div class="col-md-6 mb-3">
                                <div class="card h-100" id="perfilmy">
                                    <div class="card-body">

                                        <h5 class="card-title">Informacion de Mi Perfil</h5>

                                        <!-- Block styled form -->
                                        <?php   
                                                $perfil = new UsuariosC();
                                                $perfil->VerPerfilC();
                                        ?>
                                           <!-- END : Block styled form -->

                                    </div>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                    <!-- END : Table with toolbar -->

                </div>
            </div>

            
      <!-- Modal Editar usuarios -->
<div class="modal fade" role="dialog" id="EditarU">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header">
              <h5 class="modal-title text-center w-100" id="exampleModalLabel">Editar Mi Informacion</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="box-body">
            <div class="form-group mb-3">
                    <h5>Nombres</h5>
                    <input type="text" class="form-control" name="nombresE" id="nombresE" required autocomplete="off" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="off">
                    <input type="hidden" id="Uid" name="Uid">
                </div>
                <div class="form-group mb-3">
                    <h5>Apellido Paterno</h5>
                    <input type="text" class="form-control" name="paternoE" id="paternoE" required autocomplete="off" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="off">
                </div>
                <div class="form-group mb-3">
                    <h5>Apellido Materno</h5>
                    <input type="text" class="form-control" name="maternoE" id="maternoE" required autocomplete="off" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="off">
                </div>
                <div class="d-md-flex">
                    <div class="form-group flex-grow-1 me-md-2">
                        <h5>Usuario</h5>
                        <input type="text" class="form-control" id="usuarioE" name="usuarioE" required autocomplete="off">
                        
                    </div>
                    <div class="form-group flex-grow-1">
                        <h5>Contraseña</h5>
                        <input type="text" class="form-control " id="claveE" name="claveE" required autocomplete="off">
                    </div>
                </div>
                
                <div class="form-group d-none">
                    <h5>Seleccion el Rol</h5>
                    <select class="form-select " name="rolE">
                    <option id="rolE"></option>
                    <option value="Administrador">Administrador</option>
                    <option value="Buscador">Buscador</option>
                    
                    </select>
                    
                </div>
            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            
          </div>
          <?php 
            $actualizarU = new UsuariosC();
            $actualizarU->ActualizarUsuariosC();
         
           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>