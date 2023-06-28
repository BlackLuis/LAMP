



<div class=" modal fade bs-example-modal-lg" id="modal_eli" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
                        <div class="modal-header">
           <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              <h4>Seguro que desea eliminar el manifiesto</h4>
                        </div> <!-- modal-header -->
                        <form   method="post" id="form_eli">
                  
                           
                                  <input type="hidden"   name="idmaneli" id="idmaneli"   class="form-control" >
      
                        <div class="modal-footer">
                         
                            <div class="col-sm-3">
                                <button type="submit" class=" form-control btn btn-danger" id="sig_eli"><span class="" >Eliminar</span></button>
                            </div>
                            </div>

                        </form>
                          

                        </div>

            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->  
  
  
  
  
  
  
  
  
  
  <div class=" modal fade bs-example-modal-lg" id="modal_gra" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
                        <div class="modal-header">
           <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              <h4>Registrar datos del transporte</h4>
                        </div> <!-- modal-header -->
                        <form   method="post" id="form_modgra">
                        <div class="modal-body">
                            <div class="container-fluid">
                                 <div class="form-row">
                                  <input type="hidden"   name="idman" id="idman"   class="form-control" >
       
               
               
                 <div class="form-group col-md-4">

                   <label for="inputPassword4">Transporte</label>
                     <select id="tit" class="form-control" name='tit' required>
                       <option></option>
                                <option value="1">TERRESTRE</option>
                                <option value="2">AEREO</option>
                                <option value="3">FLUVIAL</option>
                          </select>           

                              </div>


                                <div class="form-group col-md-4">

                   <label for="inputPassword4">Empresa</label>
                     <select id="emp_vi" class="form-control" name='emp_vi' required>
                               
                          </select>           

                              </div>
                              
                                     <div class="form-group col-md-4">

                   <label for="inputPassword4">Numero de factura</label>
                        <input type="text"  required id="numfac"  name='numfac'  class="form-control" >
                  

                              </div>
                              
                                     <div class="form-group col-md-6">

                   <label for="inputPassword4">Orden de servicio</label>
                   <input type="text"  required id="ordser"  name='ordser'  class="form-control" >
                        

                              </div>
                              
                                      <div class="form-group col-md-6">

                   <label for="inputPassword4">Costo</label>
                          <input type="number"  required id="cost" step="0.01"  name='cost'  class="form-control" >     

                              </div>

          


    </div>
                            </div>
                        </div> <!-- modal-body -->
                        <div class="modal-footer">
                         
                            <div class="col-sm-3">
                                <button type="submit" class=" form-control btn btn-success" id="sig_gra"><span class="" >Grabar</span></button>
                            </div>
                            </div>

                        </form>
                          

                        </div>

            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->

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
                                                            <th>Fecha</th>
                                                    <th>Guia</th>
                                                    <th>Cliente</th><!-- LACB_271022-->
                                                    <th>Origen</th>
                                                    <th>Destino</th>
                                                    <th>Cantidad</th>
                                                    <th>Peso</th>
                                                    <th>Desc.</th>
                                                    <th></th>
                                                            
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
                       <form   method="post" id="form_anadir">
                                     <div class="form-group col-md-2">
                           <input type="hidden"   id="maninum"   name='maninum'  class="form-control" >    
                 
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
                     
                                    <div class="form-group col-md-5">

                    
                          <input type="number"  required id="guinum"   name='guinum'  placeholder="Escribe agui la guia a ingresar" class="form-control" >     

                              </div>
                              
                                       <div class="col-sm-3">
                                <button type="submit" class=" form-control btn btn-success" id="aggui"><span class="" >Ver</span></button>
                            </div>
</form>
                        </div>
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->

 </div>
  <div class="modal fade  bs-example-modal-lg" id="modal_det2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content panel-primary">
                        <div class="modal-header panel-primary">
                              <button type="button" class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                                         <input type="hidden"   name="arraynDet" id="arraynDet"   class="form-control" >
                              Detalle
                        </div> <!-- modal-header -->
                    
                        <div class="modal-body">
                            <div class="container-fluid">
                   
                                <div class="row barra " >
                                    <div class="panel panel-primary">
                                        <div class="panel-body mitabla">
                                            <div class="table-responsive " >
                                                <table class="table table-striped " id="grilla_det2">
                                                    <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>Descripcion</th>
                                                            <th>Medida</th>
                                                            <th>Peso</th>
                                                            <th>Cantidad</th>
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
                                                           <th><span id="span_cantidad">0</span></th>
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
                      <button type="button" id="anadir_gui" name="anadir_gui"  class="btn btn-success" >Grabar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                         

                        </div>
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->

 </div>


<div id="page-wrapper">
    <section id="history">
    <div class="titulo2">
        <h1>Reporte<h1>
        <h2>MANIFIESTOS</h2>
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
           	      <div class="form-group col-md-3">
               	  
                 <label for="inputPassword4">Fecha</label>
                  <input type="date"  required  id="fec" value="<?php echo date("Y-m-d"); ?>" name="fec"  class="form-control" >
               </div>
               
                 <div class="form-group col-md-3">
               	  
                 <label for="inputPassword4">Fecha Fin</label>
                  <input type="date"  required  id="fecfin" value="<?php echo date("Y-m-d"); ?>" name="fecfin"  class="form-control" >
               </div>

   <div class="form-group col-md-2">
               <label><br></label>
            <button type="button"  class="form-control " style="background-color:green;color:white;" id="bus">Buscar</button>
             </div>
  
    
   <div class="form-group col-md-2">
               <label><br></label>
            <button type="button"  class="form-control " style="background-color:blue;color:white;" id="busiqui">Iquitos</button>
             </div>
    
    
   <div class="form-group col-md-2">
               <label><br></label>
            <button type="button"  class="form-control " style="background-color:red;color:white;" id="busotro">Otros</button>
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
                                            
                                                    <th>Numero</th>
                                                    <th>Fecha</th>
                                                    <th>Origen</th>
                                                    <th>Destino</th>
                                                    <th>Transporte</th>
                                                    <th>Via</th>
                                                    <th>Cantidad</th>
                                                    <th>Peso</th>
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
	      var arraynDet=$("#arraynDet");
  var modal_tabla = $("#grilla_det tbody");
    var modal_tabla2 = $("#grilla_det2 tbody");
 var flagg=[]; 
vermanirep();
          $("#tit").on('change',function () {
var id=$(this).val();
  var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Cguia/tran_emp')?>",
        type:"Post",
        dataType: "json",
        data: {'id':id}
            });
    request.done(function (response,textStatus,jqXHR)
    {
    $("#emp_vi").html('<option></option>');//console.log(response);
        if (response!=null) {

            for (var i = 0; i < response.length; i++) {
            $("#emp_vi").append('<option  value='+response[i].trv_cod+'>'+response[i].trv_des+'</option>');
         
             }
         }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });
    });
  function vermanirep(){

var fec= $("#fec").val();
var fecfin= $("#fecfin").val();
        var request;
    
        if(request==true){
          request.abort();
        }


        request = $.ajax(
        {
            url:"<?php  echo base_url('Creportes/vermanirep')?>",
            type:"Post",
            dataType: "json",
            data: {"fec":fec,"fecfin":fecfin}
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if(response!=null){
                var cadena="";
                for (var i = 0; i < response.length; i++) {
                   cadena +="<tr>";
                   cadena += "<td> M00"+response[i].man_cod+"</td>";
                    cadena += "<td>"+response[i].fecha+"</td>";
                   cadena += "<td>"+response[i].partida+"</td>";
                   cadena += "<td>"+response[i].llegada+"</td>";
                   cadena += "<td>"+response[i].trs_des+"</td>";
                   cadena += "<td>"+response[i].trv_des+"</td>";
                   cadena += "<td>"+response[i].man_can+"</td>";
                   cadena += "<td>"+response[i].man_pes+"</td>";
            
                       cadena +="<td><button  type='button' class='form-control btn btn-coorp btn-xs view_det' id='"+response[i].man_cod+"'><span class='fa fa-eye'></span> </button></td>";
                       cadena +="<td><button type='button' class='form-control btn btn-secondary  btn-xs view_exc2' id='"+response[i].man_cod+"'><span class='fa fa-download'></span> </button></td>";
                       cadena +="<td><button type='button' class='form-control btn btn-success btn-xs view_exc' id='"+response[i].man_cod+"'><span class='fa fa-download'></span> </button></td>";
                        cadena +="<td><button type='button' class='form-control btn btn-warning  btn-xs view_gra' id='"+response[i].man_cod+"'><span class='fa fa-edit'></span> </button></td>";
                        cadena +="<td><button  type='button' class='form-control btn btn-danger btn-xs eli' id='"+response[i].man_cod+"'><span class='fa fa-trash'></span> </button></td>";


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
vermanirep();

});

grilla_cuadre.on('click','.eli',function(){
    var id = $(this).attr('id');
$("#idmaneli").val(id);
    $("#modal_eli").modal("show");

 });
grilla_cuadre.on('click','.view_det',function(){
    var id = $(this).attr('id');
$("#maninum").val(id);
//var idd=[];
   var request;
        if(request==true){
          request.abort();
        }

        request = $.ajax(
        {
            url: "<?php  echo base_url('Creportes/verguiamani')?>",
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

                   cadena += "<td>"+response[i].razp+"</td>";//LACB_271022

                   cadena += "<td>"+response[i].partida+"</td>";

                   cadena += "<td>"+response[i].llegada+"</td>";
           
                   cadena += "<td>"+response[i].deg_can+"</td>";
                   cadena += "<td>"+response[i].deg_pes+"</td>";
                   cadena += "<td>"+response[i].deg_des+"</td>";
     cadena +="<td><button type='button' class='form-control btn btn-danger btn-xs eligui' id='"+response[i].deg_cod+"'><span class='fa fa-trash'></span> </button></td>";

             //       idd.push({"serie":response[i].seg_ser,"gui":response[i].gui_num})

                    cadena += '</tr>';
            
                }
    
//console.log(idd);
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




grilla_cuadre.on('click','.view_gra',function(){
    var id = $(this).attr('id');
    $("#idman").val(id);
    $("#modal_gra").modal("show");

   

});



modal_tabla.on('click','.eligui',function(){
    var id = $(this).attr('id');
var mani= $("#maninum").val();
 var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Creportes/eliguimani')?>",
        type:"Post",
        dataType: "json",
         data: {"id":id,"mani":mani},
            });
    request.done(function (response,textStatus,jqXHR)
    {//console.log(response);

        if (response>0) {
    
 location.reload();

         }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });




   });



grilla_cuadre.on('click','.view_exc',function(){
    var id = $(this).attr('id');
  var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Creportes/excel_mani')?>");
                       form.setAttribute("target", "view");
                       var campo1 = document.createElement("input");
                       campo1.setAttribute("type", "hidden");
                       campo1.setAttribute("name", "id");
                       campo1.setAttribute("value",id);
                       form.appendChild(campo1);
                       document.body.appendChild(form);
                       form.submit();
                       });
                       
                       
grilla_cuadre.on('click','.view_exc2',function(){
    var id = $(this).attr('id');
  var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Creportes/excel_manirep2')?>");
                       form.setAttribute("target", "view");
                       var campo1 = document.createElement("input");
                       campo1.setAttribute("type", "hidden");
                       campo1.setAttribute("name", "id");
                       campo1.setAttribute("value",id);
                       form.appendChild(campo1);
                       document.body.appendChild(form);
                       form.submit();
                       });                       
                       
                     $("#busiqui").on('click',function(){
                         var fec= $("#fec").val();
                         var fecfin= $("#fecfin").val();
    var id = 1;
  var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Creportes/excel_mani2')?>");
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
                       
                          var campo3 = document.createElement("input");
                       campo3.setAttribute("type", "hidden");
                       campo3.setAttribute("name", "fecfin");
                       campo3.setAttribute("value",fecfin);
                       form.appendChild(campo3);
                       
                       document.body.appendChild(form);
                       form.submit();
                       });
                       
                       
                                            $("#busotro").on('click',function(){
    var id = 2;
    var fec= $("#fec").val();
    var fecfin= $("#fecfin").val();
  var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Creportes/excel_mani2')?>");
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
                       
                        var campo3 = document.createElement("input");
                       campo3.setAttribute("type", "hidden");
                       campo3.setAttribute("name", "fecfin");
                       campo3.setAttribute("value",fecfin);
                       form.appendChild(campo3);
                       
                       document.body.appendChild(form);
                       form.submit();
                       });
                       

$("#form_modgra").on("submit",function (e) {
    e.preventDefault();

 var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Creportes/editmani')?>",
        type:"Post",
        dataType: "json",
         data: $("#form_modgra").serialize(),
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

$("#form_anadir").on("submit",function (e) {
    e.preventDefault();
    flagg=[];
   
     console.log(flagg);
    var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Creportes/verdetgui')?>",
        type:"Post",
        dataType: "json",
         data: $("#form_anadir").serialize(),
            });
    request.done(function (response,textStatus,jqXHR)
    {//console.log(response);

  if (response !=null)
            {
           var cadena="";
             var cant=0;
               var peso=0.00;
                for (var i = 0; i < response.length; i++) {
              
                    cadena += "<tr>";
                    cadena += '<td>' + (i+1) + '</td>';
                    cadena += '<td>' + response[i].deg_des + '</td>';
                    cadena += '<td>' + response[i].med_des + '</td>';
                    cadena += '<td>' + response[i].deg_pes + '</td>';
                    cadena += '<td>' + response[i].deg_can + '</td>';
    cadena +="<td ><button type='button' class='bien btn btn-success btn-sm' id='"+response[i].deg_cod+"' tag=1><span class=' fa fa-check'> </span></button></td>";

                     cant += parseInt(response[i].deg_can);
                    peso += parseFloat(response[i].deg_pes);
                
                flagg.push(response[i].deg_cod);    
                    
         }
         console.log(flagg);
               arraynDet.attr('value',JSON.stringify(flagg));
                 $("#span_cantidad").html(cant);
                $("#span_peso").html(peso.toFixed(2));
                 modal_tabla2.html(cadena);
            
            }else {
          modal_tabla2.html('');
         $("#span_cantidad").html('0');
                $("#span_peso").html('0.00');
            
            }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });

     request.always(function () {
            $("#modal_det2").modal("show");
              console.log("termino la ejecucion de ajax");
        });   

});



modal_tabla2.on('click','.bien',function(){
   var pes=0;
   var cant=0;
   var totpes=0;
   var totcant=0;
    
    if($(this).attr('tag')==1){
        
    var index = flagg.indexOf($(this).attr('id'));
if (index > -1) {
  flagg.splice(index, 1);
}
  arraynDet.attr('value',JSON.stringify(flagg));
     $(this).attr('tag',2);
 $(this).removeClass('btn-success');
  $(this).addClass('btn-danger');
         $(this).find('span').removeClass('fa fa-check');
      $(this).find('span').addClass('fa fa-times');
      
    pes= $(this).parents('tr').find("td").eq(3).text();
    cant=$(this).parents('tr').find("td").eq(4).text();
    
   totpes=  $("#span_peso").html()-pes;
    totcant =$("#span_cantidad").html()-cant;
         $("#span_cantidad").html(totcant);
                $("#span_peso").html(totpes.toFixed(2));

    }else{
     
         flagg.push($(this).attr('id'));
                     arraynDet.attr('value',JSON.stringify(flagg));
     
             $(this).attr('tag',1);
              $(this).removeClass('btn-danger');
 $(this).addClass('btn-success')
   $(this).find('span').removeClass('fa fa-times');
          $(this).find('span').addClass('fa fa-check');
          
       pes= $(this).parents('tr').find("td").eq(3).text();
    cant=$(this).parents('tr').find("td").eq(4).text();
    
   totpes=  parseFloat($("#span_peso").html()) + parseFloat(pes);
    totcant =parseInt($("#span_cantidad").html()) + parseInt(cant);
         $("#span_cantidad").html(totcant);
                $("#span_peso").html(totpes.toFixed(2));      

    }
 
});







$("#form_eli").on("submit",function (e) {
    e.preventDefault();
    var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Creportes/elimani')?>",
        type:"Post",
        dataType: "json",
         data: $("#form_eli").serialize(),
            });
    request.done(function (response,textStatus,jqXHR)
    {//console.log(response);

        if (response>0) {
    
 location.reload();

         }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });

  

});


$("#anadir_gui").on('click',function(){

var mani= $("#maninum").val();
var arraynDet= $("#arraynDet").val();
 var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Creportes/anadguimani')?>",
        type:"Post",
        dataType: "json",
         data: {"arraynDet":arraynDet,"mani":mani},
            });
    request.done(function (response,textStatus,jqXHR)
    {//console.log(response);

        if (response>0) {
    
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