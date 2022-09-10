<section id="content" class="content">

            <div class="content__boxed">
                <div class="content__wrap">


                    <!-- Table with toolbar -->
                    <div class="card">
                        <div class="card-header -4 mb-3">
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