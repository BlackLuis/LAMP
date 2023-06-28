    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="<?= base_url()?>intranet"><img src="<?=base_url()?>/plantillas/images/logoPage2.png"></a> -->
                <br>
                <div class="row ocultar_metis_menu">
                        <a id="abrir" class="fa fa-fw navbar-toogle desactive" href="javascript:void(0)" onclick="mostrar()" style="margin-left:15px;">
                            <button class=" btn btn-info fa fa-bars"> Abrir</button>
                        </a>

                        <a id="cerrar" class="" href="javascript:void(0)" onclick="ocultar()" style="margin-left:15px;">
                            <button class=" btn fa fa-bars"> Cerrar</button>
                        </a>
                </div>
            </div>

            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right"style="color:#fff">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url()?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <li>
                    <a style="font-size:.8em">User: <?php echo $this->session->userdata('usuario') ?></a>
                </li>
                <!-- /.dropdown -->

            </ul>

            <!-- /.navbar-top-links -->
