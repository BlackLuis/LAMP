<div class="modal fade  bs-example-modal-lg" id="modal_det" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content panel-primary">
                        <div class="modal-header panel-primary">
                              <button type="button" class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                        Reporte
                        </div> <!-- modal-header -->
                    
                        <div class="modal-body">
                            <div class="container-fluid">
                   
                                <div class="row barra " >
                                    <div class="panel panel-primary">
                                        <div class="panel-body mitabla">
                                            <div class="table-responsive " >
                                                <table class="table table-striped " id="grilla_repor">
                                                    <thead>
                                                        <tr>
                                                            <th>Fecha</th>
                                                    <th>Guia</th>
                                                    <th>Origen</th>
                                                    <th>Destino</th>
                                                    <th>Producto</th>
                                                    <th>Cantidad</th>
                                                    <th>Peso</th>
                                                    <th>Peso V.</th>
                                                    <th>P.U</th>
                                                    <th>Total</th>
                                                    </tr>
                                                   </thead>
                                                   <tbody >

                                                   </tbody>
                                                   <tfoot>
                                                      
                                                   </tfoot>
                                                </table>
                                            </div><!-- /.table-responsive -->
                                        </div><!-- /.panel-body -->

                                    </div><!-- col-lg-7 -->
                                </div><!--row derecha-->
                            </div>
                        </div> <!-- modal-body -->
   
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->

 </div>








<div class="modal fade" id="modalcli" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
            <div class="modal-content panel-primary">
                  <form role="form" action="" method="post" id="form_cli">
                        <div class="modal-header">
                              <button type="button" id="close_cli" class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              Cliente
                        </div> <!-- modal-header -->
                        <div class="modal-body">
                            <div class="container-fluid">
                                <input type= "hidden"  id="cod" val="" name="cod"  class= "form-control"  >
                                  <div class="col-md-4">
                                      
                                    <div class="input-group has-primary " >
                                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-credit-card"> </span> </span>
                                        <select class="form-control" name="tip_cod" id="tip_cod">

                                            <option value="1">PERSONA JURIDICA</option>
                                            <option value="2">PERSONA NATURAL</option>
                                            </select>
                                    </div>
                                </div>
                         

                                    <div  class= "col-lg-6 col-sm-12">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "nombre_span" ><span class=" fa fa-user"></span> </span>
                                        <input  type= "text"  name="cli_raz" id="cli_raz" class= "form-control"  placeholder= "Razon Social/Nombres y Apellidos"  aria-describedby= "basic-addon1" required="required">
                                        
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group has-primary " >
                                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-credit-card"> </span> </span>
                                        <select class="form-control" name="tid_cod" id="tid_cod">
                                            <option value="1">RUC</option>
                                            <option value="2">DNI</option>
                                            <option value="3">C.E.</option>
                                            <option value="4">PASAPORTE</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-5" >
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "basic-addon1" ><span class=" fa fa-credit-card"></span></span>
                                        <input type= "text"  id="cli_nud" val="" name="cli_nud"  class= "form-control"  placeholder= "Nro Documento"  aria-describedby= "basic-addon1" required="required" >
                                                      <!--        <span class="input-group-btn">
    <button id="con_ruc" class="btn btn-primary" type="button"> 
      <span class="fa fa-search icon"></span>
    </button>
  </span>-->

                                    </div>
                                </div>
                          
                             
                             
                                <div class="col-md-4">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "basic-addon1" >@</span>
                                        <input  type= "mail"  name="cli_cor" id="cli_cor" val=""  class= "form-control"  placeholder= "correo"  aria-describedby= "basic-addon1" >
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "basic-addon1" ><span class=" fa fa-tty"></span></span>
                                        <input  type= "number" step="1" name="cli_tel" id="cli_tel" val="" class= "form-control"  placeholder= "Tel&eacute;fono"  aria-describedby= "basic-addon1" >
                                    </div>
                                </div> <!-- col-lg-4 -->
                                <div class="col-md-7">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "basic-addon1" ><span class=" fa fa-mobile"></span></span>
                                        <input  type= "number" step="1" min="900000000" name="cli_cel" val="" id="cli_cel" class= "form-control"  placeholder= "Celular"  aria-describedby= "basic-addon1" >
                                    </div>
                                </div> <!-- col-lg-4 -->
                                <div class="col-md-12">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "basic-addon1" ><span class=" fa fa-home"></span></span>
                                        <input  type= "text"  name="cli_dir" id="cli_dir" val="" class= "form-control"  placeholder= "Direcci&oacute;n"  aria-describedby= "basic-addon1" >
                                    </div>
                                </div>

                               <div class="col-md-3">
                                    <div class="input-group has-primary " >
                                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-credit-card"> </span> </span>
                                        <select class="form-control" name="est_cod" id="est_cod">
                                            <option value="1">Activo</option>
                                            <option value="5">Eliminado</option>
                                       
                                            </select>
                                    </div>
                                </div>
                              
                         

                            </div>
                        </div> <!-- modal-body -->
                        <div class="modal-footer">
                               <button type="submit" class="btn  btn-primary " id="boton_modal" >Modificar</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                  </form>

            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->
</div>


















<div id="page-wrapper">
    <section id="history">
    <div class="titulo2">
        <h1>Reporte<h1>
        <h2>Clientes</h2>
    </div>
    </section>

          <div class="panel panel-primary" >
           <div  class="panel-heading" role="tab" id="headingThree">
               <h4 class="panel-title" >
                Buscar Cliente
               </h4>
           </div>
           <div class="panel-body" style="padding:0px;">

      
           <div class="form-row">
                <div class="form-group col-md-3">
               	  
                 <label for="inputPassword4">Buscar Por</label>
               <select class="form-control" name="bup" id="bup">

                                   <option value="1">Documento</option>
                                   <option value="2">Nombre o Razon</option>
                            </select>
               </div>
               
           	      <div class="form-group col-md-3">
               	  
                 <label for="inputPassword4" class="l">Nro documento</label>
                  <input type="text"  required  id="nrodoc" value="" name="nrodoc"  class="form-control" >
               </div>
               
 
    </div>
   

</div>
</div>
         <div class="panel panel-default">
                                <div class="panel-body mitabla">
                                    <div class="table-responsive " >
                                        <table class="table table-striped " style="font-size:10px;" id="grilla_cuadre" >
                                            <thead>
                                                <tr>
                                                    <th>Nro Documento</th>
                                                    <th>Razon Social/Cliente</th>
                                                    <th>Direccion</th>
                                                    <th>Telefono</th>
                                                    <th>Celular</th>
                                                    <th>Correo</th>
                                                    <th>Tipo Documento</th>
                                                    <th>Tipo Persona</th>
                                                    <th>Estado</th>
                                                 <th></th>
                                                 <th></th>
                                                 <th></th>
                                                    <th></th>
                                                     <th></th>
                                                </tr>
                                           </thead>
                                           <tbody >

                              
                                           </tbody>
                                           <tfoot >

                                                    
                                               
                                           </tfoot>
                                        </table>
                                    </div><!-- /.table-responsive -->

</div>
</div>
    </div>
    
  <script type="text/javascript">
$(document).ready( function() {
       var grilla_cuadre = $('#grilla_cuadre tbody');
          var grilla_repor = $('#grilla_repor tbody');
    verclientes();
    
    $("#bup").on("click",function(){
       var id=$(this).val();
       if(id==1){
           $(".l").html("Nro documento")
       }else{
           
              $(".l").html("Raz. social/Nombre")
       }
        
    });
        
     function verclientes(){

var bup = $("#bup").val();
var nrodoc= $("#nrodoc").val();
        var request;
    
        if(request==true){
          request.abort();
        }


        request = $.ajax(
        {
            url:"<?php  echo base_url('Creportes/vercliente')?>",
            type:"Post",
            dataType: "json",
            data: {"nrodoc":nrodoc,"bup":bup}
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if(response!=null){
                var cadena="";
                for (var i = 0; i < response.length; i++) {
                   cadena +="<tr>";
                   
                    cadena += "<td>"+response[i].cli_nud+"</td>";
                   cadena += "<td>"+response[i].cli_raz+"</td>";
                   cadena += "<td>"+response[i].cli_dir+"</td>";
                   cadena += "<td>"+response[i].cli_tel+"</td>";
                   cadena += "<td>"+response[i].cli_cel+"</td>";
                   cadena += "<td>"+response[i].cli_cor+"</td>";
                   cadena += "<td>"+response[i].tid_des+"</td>";
                   cadena += "<td>"+response[i].tip_des+"</td>";
                    cadena += "<td>"+response[i].estado+"</td>"; 
                     cadena += '<td><input type="hidden" value="'+response[i].tip_cod+'" class="form-control"></td>';
                      cadena += '<td><input type="hidden" value="'+response[i].tid_cod+'" class="form-control"></td>';
                      cadena += '<td><input type="hidden" value="'+response[i].est_cod+'" class="form-control"></td>';
                       cadena +="<td><button type='button' class='form-control btn btn-coorp btn-xs view_det' id='"+response[i].cli_cod+"'><span class='fa fa-eye'></span> </button></td>";
                       cadena +="<td><button type='button' class='form-control btn btn-primary btn-xs view_report' id='"+response[i].cli_cod+"'><span class='fa fa-line-chart'></span> </button></td>";

                   cadena += "</tr>";
                   
               }
               grilla_cuadre.html(cadena);
               
            }
            else {
                grilla_cuadre.html('');
            }
        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
        });
    }; 
   $("#nrodoc").on("keyup",function(){
verclientes();

});
 grilla_cuadre.on('click','.view_det',function(){
    var id = $(this).attr('id');
         var doc=$(this).parents('tr').find("td").eq(0).text();
          var raz=$(this).parents('tr').find("td").eq(1).text();
          var dir=$(this).parents('tr').find("td").eq(2).text();
          var tel=$(this).parents('tr').find("td").eq(3).text();
          var cel=$(this).parents('tr').find("td").eq(4).text();
          var cor=$(this).parents('tr').find("td").eq(5).text();
          var tip=$(this).parents('tr').find("td").eq(9).find("input").val();
        var tid=$(this).parents('tr').find("td").eq(10).find("input").val();
         var est=$(this).parents('tr').find("td").eq(11).find("input").val();
         $("#cod").val(id);
         $("#cli_nud").val(doc);
         $("#cli_raz").val(raz);
         $("#cli_dir").val(dir);
         $("#cli_tel").val(tel);
          $("#cli_cel").val(cel);
           $("#cli_cor").val(cor);
            $("#tip_cod").val(tip);
             $("#tid_cod").val(tid);
              $("#est_cod").val(est);
         
    $("#modalcli").modal("show");
});

$("#form_cli").on('submit', function(evt){
    evt.preventDefault();
      var request;
    
        if(request==true){
          request.abort();
        }
      

        request = $.ajax(
        {
            url:"<?php  echo base_url('Creportes/modicliente')?>",
            type:"Post",
            dataType: "json",
            data: $("#form_cli").serialize()
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if(response!=null){
                verclientes();
              $("#modalcli").modal("hide");
               
                
  		//location.reload();

            }
        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
        });
    
});


 grilla_cuadre.on('click','.view_report',function(){
    var id = $(this).attr('id');
   var request;
        if(request==true){
          request.abort();
        }

        request = $.ajax(
        {
            url: "<?php  echo base_url('Creportes/verguicli')?>",
            type:"Post",
            dataType:'json',
            data: {"id":id}
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if (response !=null)
            {
               var cadena="";
               
                for (var i = 0; i < response.length; i++) {
                    cadena += "<tr>";
                     cadena += "<td>"+response[i].gui_fec+"</td>";
                   
                   cadena += "<td>"+response[i].seg_ser+"-"+response[i].gui_num+"</td>";
                   cadena += "<td>"+response[i].partida+"</td>";

                   cadena += "<td>"+response[i].llegada+"</td>";
           
                   cadena += "<td>"+response[i].deg_des+"</td>";
                   cadena += "<td>"+response[i].deg_can+"</td>";
                   cadena += "<td>"+response[i].deg_pes+"</td>";
                    cadena += "<td>"+response[i].deg_pev+"</td>";
 cadena += "<td>"+response[i].deg_peu+"</td>";
  cadena += "<td>"+response[i].deg_sub+"</td>";

                    cadena += '</tr>';
            
                }
    

               grilla_repor.html(cadena);
   
          
            }else {
         grilla_repor.html('');
    
            }
       

        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
                  $("#modal_det").modal("show");
        });   

});


});
</script>
    