<section id="content" class="content">

            <div class="content__boxed">
                <div class="content__wrap">


                    <!-- Table with toolbar -->
                    <div class="card">
                        <div class="card-header -4 mb-3">
                            <h5 class="card-title mb-3">Busqueda de Resoluciones Directorales</h5>
                            <div class="row justify-content-center">
                                <form method="post" role="form" enctype="multipart/form-data" class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 bg-search p-3 rounded">
                                    <div class=" mb-2 justify-content-center">
                                    <div class="form-check flex-grow-1 ">
                                        <input class="form-check-input" type="radio" name="tipo-buscar" id="flexRadioDefault1" value="DNI">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                        DNI
                                        </label>
                                    </div>
                                    <div class="form-check flex-grow-1">
                                        <input class="form-check-input" type="radio" name="tipo-buscar" id="flexRadioDefault2" value="Numero" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                        Numero
                                        </label>
                                    </div>
                                    <div class="form-check flex-grow-1">
                                        <input class="form-check-input" type="radio" name="tipo-buscar" id="flexRadioDefault3" value="Apellidos" >
                                        <label class="form-check-label" for="flexRadioDefault3">
                                        Apellidos
                                        </label>
                                    </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control form-control-sm " name="consultaN" id="consultaN" autocomplete="off" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                                    </div>
                                    <div class="form-group mb-2">
                                        <h5>Año</h5>
                                        <select class="form-select form-select-sm"  name="añoN" >

                                        <?php 
                                            echo "<option value='0'>Todo</option>";
                                            for($i=2012;$i<=date("Y");$i++)
                                                {
                                                    echo "<option value='".$i."'>".$i."</option>";
                                                }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="d-grid gap-2">
                                    <button type="submit" class=" mx-auto btn btn-primary btn-sm">Consultar</button>
                                    </div>
                                    
                                </form>




                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped TB">
                                    <thead>
                                        <tr class="text-center">
                                            <th >Item</th>
                                            <th >N° Resolucion</th>
                                            <th>Fecha</th>
                                            <th>Motivo</th>
                                            <th>Administrado</th>
                                            <th>Documento</th>
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
                                            $verC = new consultaC();
                                            $verC->VerconsultaC();

                                         ?>
                                       
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- END : Table with toolbar -->

                </div>
            </div>
