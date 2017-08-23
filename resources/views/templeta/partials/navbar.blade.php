<header>
            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                <div class="container">
                    <div class="navbar-header">

                        <a class="navbar-brand home" href="{!! route('index') !!}">
                            <img src="img/logo.png" alt="Universal logo" class="hidden-xs hidden-sm logo">
                            <img src="img/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
                        </a>
                        <div class="navbar-buttons">
                            <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-align-justify"></i>
                            </button>
                        </div>
                    </div>
                    <!--/.navbar-header -->

                    <div class="navbar-collapse collapse" id="navigation">

                        <ul class="nav navbar-nav navbar-right">
                            <li class="active">
                                <a href="{!! route('index') !!}">Inicio</a>
                            </li>
                            <li class="dropdown use-yamm yamm-fw">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h5>Kubota</h5>
                                                    <ul>
                                                        <li><a href="">B2320</a>
                                                        </li>
                                                        <li><a href="">L3800</a>
                                                        </li>
                                                        <li><a href="">MX5100</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h5>Jacto</h5>
                                                    <ul>
                                                        <li><a href="">Arbus 500</a>
                                                        </li>
                                                        <li><a href="">Arbus 1000</a>
                                                        </li>
                                                        <li><a href="">Arbus 2000</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h5>Agroenzimas</h5>
                                                    <ul>
                                                        <li><a href="">AgroMil plus</a>
                                                        </li>
                                                        <li><a href="">Rooting</a>
                                                        </li>
                                                        <li><a href="">AgrexF</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h5>Echo</h5>
                                                    <ul>
                                                        <li><a href="">Shp-800-2</a>
                                                        </li>
                                                        <li><a href="">DM4610</a>
                                                        </li>
                                                    </ul>
                                                    <h5>Shindaiwa</h5>
                                                    <ul>
                                                        <li><a href="#">T230XR</a>
                                                        </li>
                                                        <li><a href="">T270</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{!! route('servicios.index') !!}">Servicios</b></a>
                            </li>
                            <!-- ========== FULL WIDTH MEGAMENU END ================== -->

                            <li>
                                <a href="{!! route('contactanos.index') !!}">Contacto</a>
                            </li>
                        </ul>

                    </div>
                    <!--/.nav-collapse -->



                    <div class="collapse clearfix" id="search">

                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                            </div>
                        </form>

                    </div>
                    <!--/.nav-collapse -->

                </div>


            </div>
            <!-- /#navbar -->

            <!-- *** NAVBAR END *** -->

        </header>