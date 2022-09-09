<section id="content" class="content">
            <div class="content__header content__boxed">
                <div class="content__wrap">

                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="./layouts.html">Layouts</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mini Navigation</li>
                        </ol>
                    </nav>
                    <!-- END : Breadcrumb -->

                    <h1 class="page-title mb-0 mt-2">Mini Navigation</h1>

                    <p class="lead">
                        The navigation will transform into a small vertical bar that will save you space for the content to be displayed on the screen.
                    </p>

                </div>

            </div>

            <div class="content__boxed">
                <div class="content__wrap">
                    <div class="card text-center mb-4 col-xl-8 offset-xl-2">
                        <div class="card-header">Header</div>
                        <div class="card-body">

                            <h5 class="card-title">Card Title Here</h5>

                            <p class="mb-5">Start putting content on grids or panels, you can also use different combinations of grids.
                                <br>Please check out the dashboard and other pages.
                            </p>

                            <button class="nav-toggler btn btn-warning btn-lg mb-3">Toggle Navigation</button>
                            <button class="sidebar-toggler btn btn-danger btn-lg mb-3">Toggle Sidebar</button><br>
                            <button class="btn btn-light" onclick="disableRoundedHeader()">Rounded header</button>
                            <button class="btn btn-primary" onclick="changeContentHeader()">Overlapping</button>

                            <script>
                                function changeContentHeader() {
                                    document.querySelector("#content > .content__header").classList.toggle("overlapping");
                                }

                                function disableRoundedHeader() {
                                    document.querySelector("#content > .content__header").classList.toggle("rounded-0");
                                }
                            </script>

                        </div>
                    </div>

                </div>
            </div>

