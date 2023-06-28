<title>Menu</title>
<body>

    <div class="container">
        <h2>Bienvenido &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>Clogin/logout" ><img src="<?php echo base_url(); ?>img/cerrar.png"  title="Cerrar Sesion" style="width: 30px"></a></h2>
         <hr>
    <section id="login" style="min-height: 788px; ">
          
            <div class="container">
                <br>
                <br>
                <div class="row">
                  
                        <div class=" panel ">
                            <div class="panel-heading">
                                <h3 class="panel-title">Por favor Elija una Opcion: </h3>
                            </div>
                            <div class="panel-body">
                                 <div class="table-responsive " >

                                    <?php if($this->session->userdata('rol')=='1') {?>
                     <table class="table table-striped " >
                         <thead class="text-coorp">
                             <tr>

                                 <th style="width: 400px"><a href="<?php echo base_url(); ?>Creg_ped/index" ><img src="<?php echo base_url(); ?>img/registro.png"  title="Registre su pedido" style="width: 200px"></a></th>
                               <th ><a href="<?php echo base_url(); ?>Crep_ped_cli/index" ><img src="<?php echo base_url(); ?>img/seguimiento.jpg"  title="Reporte de pedidos" style="width: 200px"></a></th>
                               



                             </tr>
                        </thead>
               
                   </table>
               <?php }else if($this->session->userdata('rol')=='2') {?>

                    <table class="table table-striped " >
                         <thead class="text-coorp">
                             <tr>
                                 <th ><a href="<?php echo base_url(); ?>Creg_ped/index" ><img src="<?php echo base_url(); ?>img/registro.png"  title="Registre su pedido" style="width: 200px"></a></th>
                           
                               <th ><a href="<?php echo base_url(); ?>Cpedido/index" ><img src="<?php echo base_url(); ?>img/confirmar.png"  title="Confirmacion de pedidos" style="width: 200px"></a></th>

                               <th ><a href="<?php echo base_url(); ?>Ccontrol/control" ><img src="<?php echo base_url(); ?>img/control.png"  title="Control de pedidos" style="width: 200px"></a></th>

                               <th ><a href="<?php echo base_url(); ?>Creportediario/index" ><img src="<?php echo base_url(); ?>img/diario.png"  title="Reporte Diario" style="width: 250px"></a></th>
                                  
                               <th ><a href="<?php echo base_url(); ?>Creportes/index" ><img src="<?php echo base_url(); ?>img/reporte.jpg"  title="Reportes" style="width: 200px"></a></th>
                           



                             </tr>
                        </thead>
               
                   </table>


                    <?php }else if($this->session->userdata('rol')=='4') {?>

                    <table class="table table-striped " >
                         <thead class="text-coorp">
                             <tr>

                                 <th style="width: 400px"><a href="<?php echo base_url(); ?>Cdespachar/control" ><img src="<?php echo base_url(); ?>img/confirmados.png"  title="Pedidos confirmados" style="width: 200px"></a>
                                    <th ><a href="<?php echo base_url(); ?>Cmotorizados/control" ><img src="<?php echo base_url(); ?>img/entregar.png"  title="Entregar pedido" style="width: 260px"></a>
                                 </th>
                             
                               



                             </tr>
                        </thead>
               
                   </table>



                    <?php }else if($this->session->userdata('rol')=='3') {?>

                    <table class="table table-striped " >
                         <thead class="text-coorp">
                             <tr>

                                 <th ><a href="<?php echo base_url(); ?>Cmotorizados/control" ><img src="<?php echo base_url(); ?>img/entregar.png"  title="Entregar pedido" style="width: 260px"></a>
                                 </th>
                             
                               
<?php }?>


                             </tr>
                        </thead>
               
                   </table>



                     </div><!-- /.table-responsive -->
                            </div>
                      
                    </div>
                </div>
            </div>
        </section>
          </div>
      </body>