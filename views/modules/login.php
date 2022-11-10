        
    <!-- CONTENTS -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section id="content" class="content">
           
            <div class="content__boxed w-100 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <div class="content__wrap col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3">
                    <h1 class="text-center">SGRD VERSION 2.0</h1>
                    <!-- Login card -->
                    <div class="card shadow-lg ">
                        <div class="card-body">

                            <div class="text-center">
                                <h1 class="h3">UGEL YUNGUYO</h1>
                                <p>Inicio de Sesion</p>
                            </div>
                            <?php
                                $ingreso = new UsuariosC();
                                $ingreso-> IngresoUsuariosC();
                            ?>
                            <form class="mt-4"  method="post">

                                <div class="mb-3">
                                    <input type="text" class="form-control" name="usuario-ing" placeholder="Usuario"   autofocus>
                                </div>

                                <div class="mb-3">
                                    <input type="password" class="form-control" name="clave-ing" placeholder="Contraseña">
                                </div>


                                <div class="d-grid mt-4">
                                    <button class="btn btn-primary btn-lg" type="submit">Ingresar</button>
                                </div>
                            </form>



                        </div>
                    </div>
                    <!-- END : Login card -->



                </div>
            </div>
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - CONTENTS -->