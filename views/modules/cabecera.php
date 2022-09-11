    <!-- PAGE CONTAINER -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<div id="root" class="root mn--max hd--expanded">
<header class="header">
            <div class="header__inner">

                <!-- Brand -->
                <div class="header__brand">
                    <div class="brand-wrap">

                        <!-- Brand logo -->
                        <a href="#" class="brand-img stretched-link">
                            <img src="./views/public/img/logo.gif" alt="Nifty Logo" class="Nifty logo" width="40" height="40">
                        </a>

                        <!-- Brand title -->
                        <div class="brand-title">UGEL Yunguyo</div>

                        <!-- You can also use IMG or SVG instead of a text element. -->

                    </div>
                </div>
                <!-- End - Brand -->

                <div class="header__content">

                    <!-- Content Header - Left Side: -->
                    <div class="header__content-start">

                        <!-- Navigation Toggler -->
                        <button type="button" class="nav-toggler header__btn btn btn-icon btn-sm" aria-label="Nav Toggler">
                            <i class="demo-psi-view-list"></i>
                        </button>

                    </div>
                    <!-- End - Content Header - Left Side -->

                    <!-- Content Header - Right Side: -->
                    <div class="header__content-end">

                        <!-- User dropdown -->
                        <div class="dropdown">

                            <!-- Toggler -->
                            <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="User dropdown" aria-expanded="false">
                                <i class="demo-psi-male"></i>
                            </button>

                            <!-- User dropdown menu -->
                            <div class="dropdown-menu dropdown-menu-end w-md-250px">

                                <!-- User dropdown header -->
                                <div class="d-flex align-items-center border-bottom px-3 py-2">

                                    <div class="flex-grow-1 ms-0">
                                        <h5 class="mb-0"><?php echo $_SESSION["nombres"]." ".$_SESSION["paterno"]." ".$_SESSION["materno"]; ?></h5>
                                        <span class="text-muted fst-italic"><?php echo $_SESSION["rol"];?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                    <div class="col">

                                        <!-- User menu link -->
                                        <div class="list-group list-group-borderless h-100 py-3">

                                            <a href="perfil" class="list-group-item list-group-item-action">
                                                <i class="demo-pli-male fs-5 me-2"></i> Mi Perfil
                                            </a>

                                            <a href="salir" class="list-group-item list-group-item-action">
                                                <i class="demo-pli-unlock fs-5 me-2"></i> Salir
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End - User dropdown -->


                    </div>
                </div>
            </div>
        </header>