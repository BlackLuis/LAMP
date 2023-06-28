
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

            <ul class="nav" id="side-menu">

                <!-- <li>
                    <a href="<?= base_url()?>home"><i class="fa fa-th-large fa-fw"></i> Inicio</a>
                </li> -->


               <?php
                if($this->session->userdata('login')){
                 $estructura="";
                 $control = '';
                 $nivel_medio = null;
                 $sw_cambio = 0;
                 foreach ($permiso as $key) {
                     if($control != $key->controlador )
                     {
                         if ($control !='') {
                             if ($sw_cambio==1) {
                                 $estructura .='</ul>';
                                 $estructura .='</li>';
                                 $sw_cambio =0;
                             }
                             $estructura .='</ul>';
                             $estructura .='</li>';

                         }

                         $control = $key->controlador;

                         $estructura .='<li>';
                         $estructura .='<a href="#" style="color:#270b0b;">'.$key->icono. $key->p_nivel.'<span class="fa fa-arrow"></span></a>';
                         $estructura .='<ul class="nav nav-second-level">';
                     }

                     if($nivel_medio != $key->nivel)
                     {
                         if ($sw_cambio ==1) {
                             $estructura .='</ul>';
                             $estructura .='</li>';
                             $sw_cambio =0;
                         }

                         if($key->nivel != null)
                         {
                             $estructura .='<li>';
                             $estructura .='<a href="#" style="color:#000;">'.$key->nivel.' <span class="fa arrow" ></span></a>';
                             $estructura .='<ul class="nav nav-third-level">';
                             $nivel_medio = $key->nivel;
                             $sw_cambio=1;
                         }
                     }
                        $estructura .='<li>';
                            $estructura .='<a style="color:#000;" href="'.base_url().$key->controlador.'/'.$key->funcion.'">'.$key->u_nivel.'</a>';
                        $estructura .='</li>';
                 }
                 $estructura .='</ul>';
                 $estructura .='</li>';
                      echo $estructura;
                  }
                  ?>


                  <li>
                      <a href="#" style="color:#000;"><span class="fa fa-key fa-fw" style='color:#f03e66' ></span>Seguridad<span class="fa fa-arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="<?= base_url()?>Intranet/cambio_clave">Cambiar Contrase&ntilde;a</a>
                          </li>
                          <li>
                              <a href="<?= base_url()?>login/logout">Cerrar Sesi&oacute;n</a>
                          </li>
                      </ul>
                  </li>
                </ul>
            </div>
        </div>
      </nav>
<script>
function mostrar() {
    $(".sidebar").css("width","250px");
    $(".sidebar").css("display","block");

    $("#page-wrapper").css("margin-left","250px");
    //$("contenido").marginLeft = "0";
    $("#cerrar").css("display","inline");
    $("#abrir").css("display","none");

    $("#abrir").addClass("desactive");
    $("#cerrar").removeClass("desactive");
}

function ocultar() {
    $(".sidebar").css("width","0");
    $(".sidebar").css("display","none");

    $("#page-wrapper").css("margin","0");
    //$("contenido").marginLeft = "0";
    $("#abrir").css("display","inline");
    $("#cerrar").css("display","none");

    $("#abrir").removeClass("desactive");
    $("#cerrar").addClass("desactive");
}
</script>
