 <div class="modal fade  bs-example-modal-lg" id="modal_det" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content panel-primary">
                        <div class="modal-header panel-primary">
                              <button type="button" class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              Detalle
                        </div> <!-- modal-header -->
                    
                        <div class="modal-body">
                            <div class="container-fluid">
                   
                                <div class="row barra " >
                                    <div class="panel panel-primary">
                                        <div class="panel-body mitabla">
                                            <div class="table-responsive " >
                                                <table class="table table-striped " id="grilla_det">
                                                    <thead>
                                                        <tr>
                                                            <th>N째</th>
                                                            <th>Descripcion</th>
                                                            <th>Medida</th>
                                                            <th>Peso</th>
                                                            <th>Peso V.</th>
                                                            <th>Cantidad</th>
                                                            <th>Subtotal</th>
                                                             <th></th>
                                                            
                                                        </tr>
                                                   </thead>
                                                   <tbody >

                                                   </tbody>
                                                   <tfoot>
                                                       <tr>
                                                           <th></th>
                                                           <th></th>
                                                           <th>TOTAL: </th>
                                                           <th><span id="span_peso">0.00</span></th>
                                                           <th><span id="span_pesov">0.00</span></th>
                                                           <th><span id="span_cantidad">0</span></th>
                                                            <th><span id="span_subtotal">0.00</span></th>
                                                             <th></th>
                                                       </tr>
                                                   </tfoot>
                                                </table>
                                            </div><!-- /.table-responsive -->
                                        </div><!-- /.panel-body -->

                                    </div><!-- col-lg-7 -->
                                </div><!--row derecha-->
                            </div>
                        </div> <!-- modal-body -->
                        <div class="modal-footer">
                            	      <div class="form-group col-md-6">
                            	           <label for="inputPassword4">Obs.</label>
                                <input style="" type="text" class="form-control" id="obs_det">
                                </div>
                                	      <div class="form-group col-md-6">
                                	          <label for="inputPassword4">Guia Cliente</label>
                              <input type="text" class="form-control" id="guicli_det">
                              </div>
                        

                        </div>
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->

 </div> 
 
 
 
    <div class="modal fade" id="modal_modifidet" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content panel-primary">
                        <div class="modal-header panel-heading">
                              <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              Modificar Detalle
                        </div> <!-- modal-header -->
                      <form id="form_det" method="post" >
                        <div class="modal-body">
                            <div class="container-fluid">
                                  <div class="form-row">



    <div class="form-group col-md-12">
        <input type="hidden" required  id="codgui" name="codgui"  class="form-control" >
         <input type="hidden" required  id="coddetgui" name="coddetgui"  class="form-control" >
                 <label for="inputPassword4">Descripcion</label>
             <input type="text" required  id="desc" name="desc"  class="form-control" >
               </div>


    
    <div class="form-group col-md-12">
            <label for="inputPassword4">Med.</label>
         <select required id="med" class="form-control" name='med' >
              <option></option>
                      </select>
                    </div>
                     <div class="form-group col-md-12">
                 <label for="inputPassword4">Cant.</label>
             <input type="number"  required  id="can" name="can"  class="form-control" >
               </div>

                 <div class="form-group col-md-12">
                 <label for="inputPassword4">Tip.Peso</label>
            <select required id="tip" class="form-control" name='tip' >
              <option value="1">Peso</option>
              <option value="2">Longitud</option>
                      </select>
               </div>

                  <div class="form-group col-md-12">
                 <label for="inputPassword4">Peso</label>
             <input type="number" step="0.01" required   id="pes" name="pes"  class="form-control" >
               </div>
               
                <div class="form-group col-md-12">
                 <label for="inputPassword4">Peso volumen</label>
             <input type="number" step="0.01" required   id="psv" name="psv"  class="form-control" >
               </div>


               <div class="form-group col-md-12">
                 <label for="inputPassword4">Prec. Unit.</label>
             <input type="number" step="0.01" required   id="pru" name="pru"  class="form-control" >
               </div>
               
               <div class="form-group col-md-12">
                 <label for="inputPassword4">Sub Total</label>
             <input type="number" step="0.01" required   id="subtpt" name="subtpt"  class="form-control" >
               </div>
          
    </div>

             </div>
             </div>
                      
                    
               
                              
                             <!-- modal-body -->
                             <div class="modal-footer">
           <button type="submit"  class="btn btn-primary"  id="agreg" >Modificar</button>
</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
                       
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->

 </div>
     
 
 
 
 
 
 
 


 <div id="page-wrapper">
    <section id="history">
    <div class="titulo2">
        <h1>Reporte<h1>
        <h2>GUIAS</h2>
    </div>
    </section>

          <div class="panel panel-primary" >
           <div  class="panel-heading" role="tab" id="headingThree">
               <h4 class="panel-title" >
                Buscar Guia
               </h4>
           </div>
           <div class="panel-body" style="padding:0px;">

      
           <div class="form-row">
           	      <div class="form-group col-md-2">
               	  
                 <label for="inputPassword4">Fecha</label>
                  <input type="date"  required  id="fec" value="<?php echo date("Y-m-d"); ?>" name="fec"  class="form-control" >
               </div>
               
                    <div class="form-group col-md-2">
               	  
                 <label for="inputPassword4">Fecha</label>
                  <input type="date"  required  id="fecfin" value="<?php echo date("Y-m-d"); ?>" name="fecfin"  class="form-control" >
               </div>
               
               
                           <div class="form-group col-md-2">
                          
                 <label for="inputPassword4">Serie</label>
                   <select id="serg" class="form-control" name='serg' required>
              
                        <?php
                                $opt="<option></option>";
                                foreach ($guia as $key) {
                                    $opt .='<option  value="'.$key->seg_cod.'">'.$key->seg_ser.'</option>';
                                }
                                echo $opt;
                                 ?>

                      </select>

</div>
               
                <div class="form-group col-md-2">
               	  
                 <label for="inputPassword4">Numero</label>
                  <input type="text"  required  id="numg" value="" name="numg"  class="form-control" >
               </div>
               
                                   <div class="form-group col-md-2">
                          
                 <label for="inputPassword4">Estado</label>
                   <select id="est_fac" class="form-control" name='est_fac' required>
                           <option></option>;
                           <option value='1'>No facturados</option>;
                        <option value='2'>Pendiente de Pago</option></option>;
                         <option value='3'>Pagados</option></option>;
                     
                              
                      </select>

</div>
                                      <div class="form-group col-md-2">
                          
                 <label for="inputPassword4">Destinatario</label>
                   <select id="cli" class="form-control" name='cli' required>
                         
                     
                              
                      </select>

</div>
               
               



   <div class="form-group col-md-2">
                  <button type="button"  class="form-control " style="background-color:green;color:white;" id="bus">Buscar</button>
             </div>
    </div>
   

</div>
</div>
         <div class="panel panel-default">
                                <div class="panel-body mitabla">
                                    <div class="table-responsive " >
                                        <table class="table table-striped " id="grilla_cuadre" style="font-size:.7em; ">
                                            <thead>
                                                <tr>
                                                    <th>Guia</th>
                                                    <th>Fecha</th>
                                                    
                                                    <th>Origen</th>
                                                    <th>Cliente<br> Origen</th>
                                                    <th>Destino</th>
                                                    <th>Cliente<br> Destino</th>
                                                   
                                                    <th>Trans.</th>
                                                    <th>Tipo</th>
                                                    <th >Monto</th>
                                                    <th>Seguimiento</th>
                                                    <th>Comprobante</th>
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

medida();


 function medida() {
  var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Cguia/medida')?>",
        type:"Post",
        dataType: "json"
            });
    request.done(function (response,textStatus,jqXHR)
    {//console.log(response);
        if (response!=null) {
            for (var i = 0; i < response.length; i++) {
            $("#med").append('<option  value='+response[i].med_cod+'>'+response[i].med_des+'</option>');
             }
         }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });
    }











          
  function verguiarep(){

var fec= $("#fec").val();
var fecfin= $("#fecfin").val();
var ser= $("#serg").val();
var num= $("#numg").val();
var est_fac= $("#est_fac").val();
var cli =$("#cli").val();
        var request;
    
        if(request==true){
          request.abort();
        }


        request = $.ajax(
        {
            url:"<?php  echo base_url('Creportes/verguiarep')?>",
            type:"Post",
            dataType: "json",
            data: {"fec":fec,"ser":ser,"num":num,"est_fac":est_fac,"cli":cli,"fecfin":fecfin}
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if(response!=null){
                var cadena="";
                for (var i = 0; i < response.length; i++) {
                   cadena +="<tr>";
                   cadena +="<td><button type='button' class='form-control btn btn-coorp btn-xs view_det' obs='"+response[i].gui_obs+"' gcl='"+response[i].gui_gcl+"' id='"+response[i].gui_cod+"'>"+response[i].seg_ser+"-"+response[i].gui_num+" </button></td>";
                   cadena += "<td>"+response[i].gui_fec+"</td>";
                   
                   cadena += "<td>"+response[i].gui_pup+" ("+response[i].partida+")</td>";
                   cadena += "<td>"+response[i].razp+"</td>";
                   cadena += "<td>"+response[i].gui_pul+" ("+response[i].llegada+")</td>";
                   cadena += "<td>"+response[i].razl+"</td>";
                 
                   cadena += "<td>"+response[i].trs_des+"</td>";
                   cadena += "<td>"+response[i].tpa_des+"</td>";
                   cadena += '<td ><input size="100" type="text"  class="form-control" autofocus="false" required="required" value="'+response[i].gui_tot+'"></td>';
                   
                   
                   
                        if(response[i].segui==3){
                       cadena += "<td>ALMACEN ORIGEN</td>"; 
                   }else if(response[i].segui==7){
                       cadena += "<td>EN TRANSITO</td>"; 
                   }else if(response[i].segui==6){
                       cadena += "<td>ALMACEN DESTINO</td>";
                       
                   }else if(response[i].segui==5){
                       cadena += "<td>ELIMINADO</td>";
                   }else{
                       cadena += "<td>ENTREGADO</td>";
                   }
                   if(response[i].est_cod==9){
                       cadena +="<td><button type='button' class='form-control btn btn-warning btn-xs ' >"+response[i].fac+" </button></td>";
                    
                   }else if(response[i].est_cod==10){
                       cadena +="<td><button type='button' class='form-control btn btn-success btn-xs view_pag' id='"+response[i].coe_cod+"'>"+response[i].fac+" </button></td>";
                   }else{
                       
                       cadena +="<td><button type='button' class='form-control btn btn-danger btn-xs ' >NO TIENE </button></td>";
                   
                       
                   }
                   cadena +="<td><button type='button' class='form-control btn btn-coorp btn-xs view_exc' id='"+response[i].gui_cod+"'><span class='fa fa-eye'></span></button></td>";
                     cadena +="<td><button type='button' class='form-control btn btn-danger btn-xs modifi' id='"+response[i].gui_cod+"'><span class='fa fa-trash'></span></button></td>";
                   
                   
                 
                       
                        
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
    $("#guicli_det").val($(this).attr('gcl'));
    $("#obs_det").val($(this).attr('obs'));
   

   var request;
        if(request==true){
          request.abort();
        }

        request = $.ajax(
        {
            url: "<?php  echo base_url('Cguia/mostrar_detmanif')?>",
            type:"Post",
            dataType:'json',
            data: {"id":id}
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if (response !=null)
            {
               var cadena="";
               var cant=0;
               var peso=0.00;
               var pesov=0.00;
               var sub =0.00;
                for (var i = 0; i < response.length; i++) {
                    cadena += "<tr>";
                    cadena += '<td>' + (i+1) + '</td>';
                    cadena += '<td>' + response[i].deg_des + '</td>';
                    cadena += '<td>' + response[i].med_des + '</td>';
                    cadena += '<td>' + response[i].deg_pes + '</td>';
                    cadena += '<td>' + response[i].deg_pev + '</td>';
                    cadena += '<td>' + response[i].deg_can + '</td>';
                    cadena += '<td>' + response[i].deg_sub + '</td>';
                       cadena +="<td><button type='button' class='form-control btn btn-danger btn-xs modifidet' med='"+response[i].med_cod+"'  peu='"+response[i].deg_peu+"' gui='"+response[i].gui_cod+"' id='"+response[i].deg_cod+"'><span class='fa fa-pencil'></span></button></td>";
                    cadena += '</tr>';
                    cant += parseInt(response[i].deg_can);
                    peso += parseFloat(response[i].deg_pes);
                    pesov+=parseFloat(response[i].deg_pev);
                    sub += parseFloat(response[i].deg_sub);
                }
            var pesdec=peso.toFixed(2);
            var pesovdec =pesov.toFixed(2);
            var subdec = sub.toFixed(2);

                modal_tabla.html(cadena);
                $("#span_cantidad").html(cant);
                $("#span_peso").html(pesdec);
                 $("#span_subtotal").html(subdec);
                $("#span_pesov").html(pesovdec);
           $("#modal_det").modal("show");
            }else {
          modal_tabla.html('');
         $("#span_cantidad").html('0');
                $("#span_peso").html('0.00');
                 $("#span_subtotal").html('0.00');
                $("#span_pesov").html('0.00');
            }
       

        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
        });   

});

grilla_cuadre.on('click','.view_exc',function(){
     var id = $(this).attr('id');
 var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Cguia/excel_guia')?>");
                       form.setAttribute("target", "view");
                       var campo1 = document.createElement("input");
                       campo1.setAttribute("type", "hidden");
                       campo1.setAttribute("name", "id");
                       campo1.setAttribute("value",id);
                       form.appendChild(campo1);
                       document.body.appendChild(form);
                       form.submit();
});

grilla_cuadre.on('click','.modifi',function(){
     var id = $(this).attr('id');
     var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Creportes/eligui')?>",
        type:"Post",
        dataType: "json",
        data:{'id':id}
            });
    request.done(function (response,textStatus,jqXHR)
    {//console.log(response);
   
        location.reload();
         
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });
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
    
    modal_tabla.on('click','.modifidet',function(){
     
         var descrip= $(this).parents('tr').find("td").eq(1).text();
         var peso= $(this).parents('tr').find("td").eq(3).text();
         var pesov= $(this).parents('tr').find("td").eq(4).text();
         var cant= $(this).parents('tr').find("td").eq(5).text();
         var sub= $(this).parents('tr').find("td").eq(6).text();
         var codgui = $(this).attr('gui');
         var coddet =$(this).attr('id');
         var med=$(this).attr('med');
         var peu=$(this).attr('peu');
         $("#desc").val(descrip);
         $("#med").val(med);
         $("#can").val(cant);
          $("#pes").val(peso);
           $("#psv").val(pesov);
           $("#pru").val(peu);
           $("#subtpt").val(sub);
             $("#codgui").val(codgui);
           $("#coddetgui").val(coddet);
           $("#modal_modifidet").modal("show");    
           
           
         
         
         
        
    });
    
    $("#form_det").on("submit",function (e) {
    e.preventDefault();
    
    var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Creportes/modifidet')?>",
        type:"Post",
        dataType: "json",
        data:$("#form_det").serialize()
            });
    request.done(function (response,textStatus,jqXHR)
    {//console.log(response);
        if (response!=null) {
        location.reload();
         }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });
});

           });
</script>