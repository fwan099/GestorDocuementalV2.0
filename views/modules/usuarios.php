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
                            <h5 class="card-title mb-3">Usuarios</h5>
                            <div class="row">

                                <!-- Left toolbar -->
                                <div class="col-md-6 d-flex gap-1 align-items-center mb-3">
                                    <button class="btn btn-primary hstack gap-2 align-self-center" data-bs-toggle="modal" data-bs-target="#CrearUsuarios">
                                        <i class="demo-psi-add fs-5"></i>
                                        <span class="vr"></span>
                                        Crear Usuario
                                    </button>

                                </div>
                                <!-- END : Left toolbar -->

                                <!-- Right Toolbar -->


                            </div>
                        </div>

                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table table-striped TB pb-4" id="usuarios-table" style="width:100%" >
                                    <thead id="thead">
                                        <tr class="text-center">
                                            <th >N°</th>
                                            <th>Nombres</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Usuario</th>
                                            <th>Contraseña</th>
                                            <th>Rol</th>
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
                                            $verU = new UsuariosC();
                                            $verU->VerUsuariosC();

                                            $item = null;
                                            $valor = null;

                                            $editarU =  UsuariosC::EUsuariosC($item,$valor);

                                         ?>
                                       
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- END : Table with toolbar -->

                </div>
            </div>


  <!-- Modal crar usuarios -->
    <div class="modal fade" role="dialog" id="CrearUsuarios">
        <div class="modal-dialog ">
        <div class="modal-content">
            <form method="post" role="form" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center " id="exampleModalLabel">Crear Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="box-body">
                <div class="form-group mb-3">
                    <h5>Nombres</h5>
                    <input type="text" class="form-control" name="nombresN" id="_dm-vCustomLastname" required style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="off">

                </div>
                <div class="form-group mb-3">
                    <h5>Apellido Paterno</h5>
                    <input type="text" class="form-control" name="paternoN" required style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="off">
                </div>
                <div class="form-group mb-3">
                    <h5>Apellido Materno</h5>
                    <input type="text" class="form-control" name="maternoN" required style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" autocomplete="off">
                </div>
                <div class="d-md-flex">
                    <div class="form-group mb-3 flex-grow-1  me-md-2">
                        <h5>Usuario</h5>
                        <input type="text" class="form-control" name="usuarioN" required  autocomplete="off">
                    </div>
                    <div class="form-group mb-3 flex-grow-1 ">
                        <h5>Contraseña</h5>
                        <input type="text" class="form-control " name="claveN" required autocomplete="off">
                    </div>
                </div>
                
                <div class="form-group">
                    <h5>Seleccion el Rol</h5>
                    <select class="form-select " name="rolN">
                    <option value="Administrador">Administrador</option>
                    <option value="Buscador">Buscador</option>
                    
                    </select>
                    
                </div>
                </div>
                
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Crear</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                
            </div>
            <?php 
                $crearU = new UsuariosC();
                $crearU->CrearUsuariosC();
            ?>
            
            </form>
            
        </div>
        
        </div>
        
    </div>
    <?php 
  $borrarU = new UsuariosC();
  $borrarU->BorrarUsuariosC();
   ?>
          <!-- Modal Editar usuarios -->
    <div class="modal fade" role="dialog" id="EditarU">
        <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title  w-100 text-center" id="exampleModalLabel">Editar Usuario</h5>
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
                
                <div class="form-group">
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
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                
            </div>
            <?php 
                $actualizarU = new UsuariosC();
                $actualizarU->ActualizarUsuariosC();
            
            ?>
            
            </form>
            
        </div>
        
        </div>
        
    </div>