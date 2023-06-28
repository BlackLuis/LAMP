<div id="page-wrapper">
    <section id="history">
    <div class="titulo2">
        <h1>Reporte<h1>
        <h2>CUADRE DIARIO</h2>
    </div>
    </section>
    
   <div class="modal fade  bs-example-modal-lg" id="modal_det" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content panel-primary">
                        <div class="modal-header panel-primary">
                              <button type="button" class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              Detalle
                        </div> <!-- modal-header -->
                    
                        <div class="modal-body">
                            <div class="container-fluid">
                     <input type="hidden"   name="idusu" id="idusu"   class="form-control" >
                                <div class="row barra " >
                                    <div class="panel panel-primary">
                                        <div class="panel-body mitabla">
                                            <div class="table-responsive " >
                                                <table class="table table-striped " id="grilla_det">
                                                    <thead>
                                                        <tr>
                                                            <th>Fecha</th>
                                                    <th>N° Comprobante</th>
                                                    <th>Cliente</th>
                                                     <th>Detalle</th>
                                                     <th>Moneda</th>
                                                    <th>Monto Pagado</th>
                                                   <th>Medio Pago</th>
                                                   
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
                        
                                            <div class="modal-footer">
      
        <button type="button" class="btn btn-default" id="const" >Constancia Entrega</button>
          <button type="button" class="btn btn-success" id="repexcel" >Reporte Excel</button>
      </div>
                  <!-- modal-content -->
      </div><!-- modal-dialog  -->

 </div>
 
  </div>


              <div class="panel panel-primary">
                  
               <div class="panel-heading clearfix">
                    <div class="input-group pull-right">
                    <input type="date"  required  id="fec" value="<?php echo date("Y-m-d"); ?>" name="fec"  class="form-control" >
                   
                </div>
           
               
        </div>
                  
                                <div class="panel-body ">
                                    <div class="table-responsive " >
                                        <table class="table table-striped" border="1"  id="grilla_cuadre" >
                                            <thead>
                                                <tr>
                                            
                                                    <th rowspan="2" >Usuario</th>
                                                    <th colspan="2" class="text-center">Efect.</th>
                                                    <th colspan="2" class="text-center">Tarj.</th>
                                                    <th colspan="2" class="text-center">Depos.</th>
                                                    <th colspan="2" class="text-center">Transf.</th>
                                                    <th rowspan="2"></th>
                                                   
                                                </tr>
                                                
                                                <tr>
   <th>S/</th>
           <th>$</th>
             <th>S/</th>
           <th>$</th>
             <th>S/</th>
           <th>$</th>
             <th>S/</th>
              <th>$</th>
          
 
       
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
    
    </div>
    
    
     <script type="text/javascript">
$(document).ready( function() {
   var grilla_cuadre = $('#grilla_cuadre tbody');
     var modal_tabla = $("#grilla_det tbody");

   
   $("#fec").on("change",function(){
        repcuadre_diario();
   });
   
   repcuadre_diario();
    function repcuadre_diario(){
var fec = $("#fec").val();
        var request;
    
        if(request==true){
          request.abort();
        }


        request = $.ajax(
        {
            url:"<?php  echo base_url('Creportes/repcuadre_diario')?>",
            type:"Post",
            dataType: "json",
            data: {"fec":fec}
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if(response!=null){
                var cadena="";
                for (var i = 0; i < response.length; i++) {
                       cadena +="<tr>";
                    cadena += "<td>"+response[i].usuario+"</td>";
                   cadena += "<td>"+response[i].efectivo_soles+"</td>";
                   cadena += "<td>"+response[i].efectivo_dolares+"</td>";
                   cadena += "<td>"+response[i].tarjeta_soles+"</td>";
                   cadena += "<td>"+response[i].tarjeta_dolares+"</td>";
                   cadena += "<td>"+response[i].deposito_soles+"</td>";
                   cadena += "<td>"+response[i].deposito_dolares+"</td>";
                   cadena += "<td>"+response[i].transferencia_soles+"</td>";
                    cadena += "<td>"+response[i].transferencia_dolares+"</td>";
               cadena +="<td><button type='button' class='form-control btn btn-coorp btn-xs view_det' id='"+response[i].idusu+"'><span class='fa fa-eye'></span> </button></td>";

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

   
   
   grilla_cuadre.on('click','.view_det',function(){
    var id = $(this).attr('id');
    $("#idusu").val(id);
var fec = $("#fec").val();

   var request;
        if(request==true){
          request.abort();
        }

        request = $.ajax(
        {
            url: "<?php  echo base_url('Creportes/verdetpago')?>",
            type:"Post",
            dataType:'json',
            data: {"id":id,"fec":fec}
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if (response !=null)
            {
               var cadena="";
               
                for (var i = 0; i < response.length; i++) {
                    cadena += "<tr>";
                     cadena += "<td>"+response[i].coe_fec+"</td>";
                   
                   cadena += "<td>"+response[i].sec_ser+"-"+response[i].coe_num+"</td>";
                   cadena += "<td>"+response[i].cli_raz+"</td>";

                   cadena += "<td>"+response[i].coe_des+"</td>";
           
                   cadena += "<td>"+response[i].moneda+"</td>";
                   cadena += "<td>"+response[i].monto+"</td>";
                   cadena += "<td>"+response[i].medio+"</td>";

                    cadena += '</tr>';
            
                }
    

                modal_tabla.html(cadena);
   
          
            }else {
          modal_tabla.html('');
    
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
   
   
   
   
                          
                                            $("#const").on('click',function(){
 
 var fec = $("#fec").val();
var id = $("#idusu").val();
  var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Creportes/pdf_cuadrediarioUsuario')?>");
                       form.setAttribute("target", "view");
                       var campo1 = document.createElement("input");
                       campo1.setAttribute("type", "hidden");
                       campo1.setAttribute("name", "id");
                       campo1.setAttribute("value",id);
                       form.appendChild(campo1);
                       
                             var campo2 = document.createElement("input");
                       campo2.setAttribute("type", "hidden");
                       campo2.setAttribute("name", "fec");
                       campo2.setAttribute("value",fec);
                       form.appendChild(campo2);
                       
                   
                       
                       document.body.appendChild(form);
                       form.submit();
                       });
                       
                         
                                            $("#repexcel").on('click',function(){
 
 var fec = $("#fec").val();
var id = $("#idusu").val();
  var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Creportes/excel_cuadrediarioUsuario')?>");
                       form.setAttribute("target", "view");
                       var campo1 = document.createElement("input");
                       campo1.setAttribute("type", "hidden");
                       campo1.setAttribute("name", "id");
                       campo1.setAttribute("value",id);
                       form.appendChild(campo1);
                       
                             var campo2 = document.createElement("input");
                       campo2.setAttribute("type", "hidden");
                       campo2.setAttribute("name", "fec");
                       campo2.setAttribute("value",fec);
                       form.appendChild(campo2);
                       
                   
                       
                       document.body.appendChild(form);
                       form.submit();
                       });                   
                       
                       
                       
   
   
   
           });
</script>
    