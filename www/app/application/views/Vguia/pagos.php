<div class="modal fade" id="modal_anula" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" id="close_modifica_solicitud" class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              <h4  class='text-coorp'>Anulacion</h4>
                        </div> <!-- modal-header -->
                        <form method="post" id='form_anula'>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group has-coorpinv">
                                                <span class="input-group-addon " id="basic-addon1"> Tipo Anulacion: </span>
                                                <input type="hidden" name="idanula" id='idanula' value="">
                                                     <select class="form-control" required="required" name="tipanula" id="tipanula">
                                               <option></option>
                                               <option value='11'> ANULADO CON NC</option>
                                               <option value='5'>ANULACION</option>
                                                </select>
                                            </div>
                                        </div>
                                  
                                    
                                        <div class="col-md-6">
                                            <div class="input-group has-primary">
                                                <span class="input-group-addon " id="basic-addon1"> Motivo / Nro NC: </span>
                                                <input type="text" id="motianula" name="motianula" class="form-control" required='required'>
                                            </div>
                                        </div>
                                        
                                          </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-8">
                                     
                                            <div class="input-group has-primary">
                                                <span class="input-group-addon " id="basic-addon1"><span class=" "></span> ¿Que Pasa con la Guia?</span>
                                                <select class="form-control" required="required" name="guianula" id="guianula">
                                                    <option></option>
                                                     <option value='5'>ANULAR GUIA</option>
                                                     <option value='6'>DESVINCULAR GUIA</option>
                                                </select>
                                            </div>
                                        </div>
                                    
                                    </div>
                   
                                </br>

               
                                    <br>
                                </div>
                            </div> <!-- modal-body -->
                            <div class="modal-footer">
                                    <button type="submit" class="  btn btn-info" id="reg"  ><span class="" > Registrar</span></button>
                                    <button type="button" class="  btn btn-danger"  data-dismiss="modal"><span class="" >Cerrar</span></button>
                            </div>
                        </form>

            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->
</div>

 <div id="page-wrapper">
    <section id="history">
    <div class="titulo2">
        <h1>Pagos<h1>
        <h2></h2>
    </div>
    </section>

          <div class="panel panel-primary" >
           <div  class="panel-heading" role="tab" id="headingThree">
               <h4 class="panel-title" >
                Buscar Comprobantes
               </h4>
           </div>
           <div class="panel-body" style="padding:0px;">

      
           <div class="form-row">
           	      <div class="form-group col-md-2">
               	  
                 <label for="inputPassword4">Fecha</label>
                  <input type="date"  required  id="fec" value="<?php echo date("Y-m-d"); ?>" name="fec"  class="form-control" >
               </div>
               
                  <div class="form-group col-md-2">
               	  
                 <label for="inputPassword4">Fecha Fin</label>
                  <input type="date"  required  id="fecfin" value="<?php echo date("Y-m-d"); ?>" name="fecfin"  class="form-control" >
               </div>
               
                             <div class="form-group col-md-2">
               	  
                 <label for="inputPassword4">Numero</label>
                  <input type="text"  required  id="numf" value="" name="numf"  class="form-control" >
               </div>
               
                                   <div class="form-group col-md-2">
                          
                 <label for="inputPassword4">Estado</label>
                   <select id="est_fac" class="form-control" name='est_fac' required>
                           <option></option>;
                           <option value='9'>Pendiente de Pago</option>;
                         <option value='10'>Pagados</option></option>;
                     
                             
                      </select>
                      
                       </div>
                      
                                   <div class="form-group col-md-2">
                          
                 <label for="inputPassword4">Cliente</label>
                   <select id="cli" class="form-control" name='cli' required>
                         
                     
                              
                      </select>

</div>


   <div class="form-group col-md-1">
               <label><br></label>
            <button type="button"  class="form-control " style="background-color:green;color:white;" id="bus">Buscar</button>
             </div>
             <div class="form-group col-md-1">
               <label><br></label>
            <button type="button"  class="form-control " style="background-color:blue;color:white;" id="exp">Exportar</button>
             </div>
    </div>
   

</div>
</div>
         <div class="panel panel-default">
                                <div class="panel-body mitabla">
                                    <div class="table-responsive " >
                                        <table class="table table-striped " id="grilla_cuadre" >
                                            <thead>
                                                <tr>
                                            
                                                    <th>Fecha Emision</th>
                                                    <th>Documento</th>
                                                    <th>Cliente</th>
                                                    <th>V.V.</th>
                                                    <th>IGV</th>
                                                    <th>P.V.</th>
                                                    <th>Efect.</th>
                                                    <th>Tarj.</th>
                                                    <th>Depos.</th>
                                                    <th>Transf.</th>
                                                    
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

  var modal_tabla = $("#grilla_det tbody");

verguiarep();
          
  function verguiarep(){

var cli =$("#cli").val()
var fec= $("#fec").val();
var fecfin= $("#fecfin").val();
var num= $("#numf").val();
var est_fac= $("#est_fac").val();
        var request;
    
        if(request==true){
          request.abort();
        }


        request = $.ajax(
        {
            url:"<?php  echo base_url('Cguia/ver_pagos')?>",
            type:"Post",
            dataType: "json",
            data: {"fec":fec,"num":num,"est_fac":est_fac,"cli":cli,"fecfin":fecfin}
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if(response!=null){
                var cadena="";
                for (var i = 0; i < response.length; i++) {
                   cadena +="<tr>";
                   cadena += "<td>"+response[i].coe_fec+"</td>";
                   
                   cadena += "<td>"+response[i].sec_ser+"-"+response[i].coe_num+"</td>";
                 cadena += "<td>"+response[i].cli_raz+"</td>";
                   cadena += "<td>"+response[i].coe_vve+"</td>";
                
                   cadena += "<td>"+response[i].coe_igv+"</td>";
                   cadena += "<td>"+response[i].coe_pve+"</td>";
                    cadena += "<td>"+response[i].efectivo+"</td>";
                    cadena += "<td>"+response[i].tarjeta+"</td>";
                     cadena += "<td>"+response[i].deposito+"</td>";
                    cadena += "<td>"+response[i].transferencia+"</td>";
                   
               
            if(response[i].est_cod == 9){
                       cadena +="<td><button type='button' class='form-control btn btn-coorp btn-xs view_det' id='"+response[i].coe_cod+"'><span >"+response[i].pendiente+"</span> </button></td>";
                        
               } else if(response[i].est_cod == 5){
                
                    cadena +="<td><button type='button' class='form-control btn btn-danger btn-xs view_pago' id='"+response[i].coe_cod+"'><span class=''>ANULADO</span> </button></td>";
                    
               } else if(response[i].est_cod == 11){
                
                    cadena +="<td><button type='button' class='form-control btn btn-danger btn-xs view_pago' id='"+response[i].coe_cod+"'><span class=''>NC</span> </button></td>";
            
            }else {

                          cadena +="<td><button type='button' class='form-control btn btn-success btn-xs view_pago' id='"+response[i].coe_cod+"'><span class=''>Cancelado</span> </button></td>";
                        }

   cadena +="<td><button type='button' class='form-control btn btn-coorp btn-xs view_reenvio' id='"+response[i].coe_cod+"'><span class='fa fa-eye'></span> </button></td>";
   cadena +="<td><button type='button' class='form-control btn btn-danger btn-xs view_pdf' id='"+response[i].coe_cod+"'><span class='fa fa-file-pdf-o'></span> </button></td>";
      cadena +="<td><button type='button' class='form-control btn btn-success btn-xs view_xml' id='"+response[i].coe_cod+"'><span class='fa fa-file-pdf-o'></span> </button></td>";
         cadena +="<td><button type='button' class='form-control btn btn-warning btn-xs view_cdr' id='"+response[i].coe_cod+"'><span class='fa fa-file-pdf-o'></span> </button></td>";
    if(response[i].est_cod == 5  || response[i].est_cod == 11){
             cadena +="<td><button type='button' disabled class='form-control btn btn-danger btn-xs ' id='"+response[i].coe_cod+"'><span class='fa fa-trash'></span> </button></td>";

    }else{
     cadena +="<td><button type='button' class='form-control btn btn-danger btn-xs view_anula' id='"+response[i].coe_cod+"'><span class='fa fa-trash'></span> </button></td>";
                }
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

$("#bus").on("click",function(){
verguiarep();

});


grilla_cuadre.on('click','.view_det',function(){
    var id = $(this).attr('id');
    $("#idcomppago").val(id);
    $("#monto_pagar").val( $(this).parents('tr').find("td").eq(10).find('span').html());

    $("#modal_medio_pago").modal("show");


});
$("#exp").on('click',function(){
    var cli =$("#cli").val()
var fec= $("#fec").val();
var num= $("#numf").val();
var fecfin= $("#fecfin").val();
var est_fac= $("#est_fac").val();
    var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Cguia/analifacexc')?>");
                       form.setAttribute("target", "view");
                       var campo1 = document.createElement("input");
                       campo1.setAttribute("type", "hidden");
                       campo1.setAttribute("name", "fec");
                       campo1.setAttribute("value",fec);
                       form.appendChild(campo1);
                       var campo2 = document.createElement("input");
                       campo2.setAttribute("type", "hidden");
                       campo2.setAttribute("name", "cli");
                       campo2.setAttribute("value",cli);
                       form.appendChild(campo2);
                        var campo3 = document.createElement("input");
                       campo3.setAttribute("type", "hidden");
                       campo3.setAttribute("name", "num");
                       campo3.setAttribute("value",num);
                       form.appendChild(campo3);
                        var campo4 = document.createElement("input");
                       campo4.setAttribute("type", "hidden");
                       campo4.setAttribute("name", "est_fac");
                       campo4.setAttribute("value",est_fac);
                       form.appendChild(campo4);
                        var campo5 = document.createElement("input");
                       campo5.setAttribute("type", "hidden");
                       campo5.setAttribute("name", "fecfin");
                       campo5.setAttribute("value",fecfin);
                       form.appendChild(campo5);
                       document.body.appendChild(form);
                       form.submit();
    
    
    
});

grilla_cuadre.on('click','.view_reenvio',function(){
    var id = $(this).attr('id');
  
 var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Cguia/reenvio_sunat_factpro')?>");
                       form.setAttribute("target", "view");
                       var campo1 = document.createElement("input");
                       campo1.setAttribute("type", "hidden");
                       campo1.setAttribute("name", "id");
                       campo1.setAttribute("value",id);
                       form.appendChild(campo1);
                       document.body.appendChild(form);
                       form.submit();

});

grilla_cuadre.on('click','.view_pdf',function(){
    var id = $(this).attr('id');
    var tag=1;
  
 var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Cguia/view_arch_est_factpro')?>");
                       form.setAttribute("target", "view");
                       var campo1 = document.createElement("input");
                       campo1.setAttribute("type", "hidden");
                       campo1.setAttribute("name", "id");
                       campo1.setAttribute("value",id);
                       form.appendChild(campo1);
                        var campo2 = document.createElement("input");
                       campo2.setAttribute("type", "hidden");
                       campo2.setAttribute("name", "tag");
                       campo2.setAttribute("value",tag);
                       form.appendChild(campo2);
                       document.body.appendChild(form);
                       form.submit();

});


grilla_cuadre.on('click','.view_xml',function(){
    var id = $(this).attr('id');
    var tag=2;
  
 var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Cguia/view_arch_est_factpro')?>");
                       form.setAttribute("target", "view");
                       var campo1 = document.createElement("input");
                       campo1.setAttribute("type", "hidden");
                       campo1.setAttribute("name", "id");
                       campo1.setAttribute("value",id);
                       form.appendChild(campo1);
                        var campo2 = document.createElement("input");
                       campo2.setAttribute("type", "hidden");
                       campo2.setAttribute("name", "tag");
                       campo2.setAttribute("value",tag);
                       form.appendChild(campo2);
                       document.body.appendChild(form);
                       form.submit();

});



grilla_cuadre.on('click','.view_cdr',function(){
    var id = $(this).attr('id');
    var tag=3;
  
 var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Cguia/view_arch_est_factpro')?>");
                       form.setAttribute("target", "view");
                       var campo1 = document.createElement("input");
                       campo1.setAttribute("type", "hidden");
                       campo1.setAttribute("name", "id");
                       campo1.setAttribute("value",id);
                       form.appendChild(campo1);
                        var campo2 = document.createElement("input");
                       campo2.setAttribute("type", "hidden");
                       campo2.setAttribute("name", "tag");
                       campo2.setAttribute("value",tag);
                       form.appendChild(campo2);
                       document.body.appendChild(form);
                       form.submit();

});



verclientes();
  function verclientes(){

        var request;
    
        if(request==true){
          request.abort();
        }


        request = $.ajax(
        {
            url:"<?php  echo base_url('Cguia/verclientes')?>",
            type:"Post",
            dataType: "json",
          
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if(response!=null){
               $("#cli").html('<option></option>');
            for (var i = 0; i < response.length; i++) {
            $("#cli").append('<option  value='+response[i].cli_cod+'>'+response[i].cli_raz+'</option>');
             }
               
            }
          
        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
        });
    };

grilla_cuadre.on('click','.view_anula',function(){
    var id = $(this).attr('id');
$("#idanula").val(id);

$("#modal_anula").modal("show")

});

$("#form_anula").on('submit', function(evt){
    evt.preventDefault();

     	
       		  var request;
    
        if(request==true){
          request.abort();
        }
      

        request = $.ajax(
        {
            url:"<?php  echo base_url('Cguia/companula')?>",
            type:"Post",
            dataType: "json",
            data: $("#form_anula").serialize()
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if(response!=null){
  		location.reload();

            }
        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
        });

  });



           });
</script>