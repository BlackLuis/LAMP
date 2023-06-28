 <div id="page-wrapper">
    <section id="history">
    <div class="titulo2">
        <h1>Manifiesto<h1>
        <h2>REGISTRAR</h2>
    </div>
    </section>
    
    <div class=" modal fade bs-example-modal-lg" id="modal_gra" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
                        <div class="modal-header">
           <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              <h4>Estas Seguro Que Desea Grabar</h4>
                        </div> <!-- modal-header -->
                        <form   method="post" id="form_modgra">
                        <div class="modal-body">
                            <div class="container-fluid">
                                 <div class="form-row">
                                  <input type="hidden"   name="arrayDet" id="arrayDet"   class="form-control" >
                                   <input type="hidden"   name="arraynDet" id="arraynDet"   class="form-control" >
                                       <input type="hidden"  id="hpup" name="hpup"  class="form-control" >
                  <input type="hidden"  id="hpul" name="hpul"  class="form-control" >
               <input type="hidden"  id="tot_peso" name="tot_peso"  class="form-control" >
                <input type="hidden"  id="tot_cant" name="tot_cant"  class="form-control" >
                  <input type="hidden"  id="flagten" name="flagten" value="0"  class="form-control" >
               <div class="form-group col-md-4 ">

                 <label for="inputPassword4">Fecha</label>
                  <input type="date"    id="fec_tot"  name="fec_tot" value="<?php echo date("Y-m-d");?>"  class="form-control "  required>
               </div>
               
                 <div class="form-group col-md-4 J">

                   <label for="inputPassword4">Transporte</label>
                     <select id="tit" class="form-control l" name='tit' required >
                       <option></option>
                                <option value="1">TERRESTRE</option>
                                <option value="2">AEREO</option>
                                <option value="3">FLUVIAL</option>
                          </select>           

                              </div>


                                <div class="form-group col-md-4 J">

                   <label for="inputPassword4">Empresa</label>
                     <select id="emp_vi" class="form-control l" name='emp_vi' required>
                               
                          </select>           

                              </div>
                              
                                     <div class="form-group col-md-4 J">

                   <label for="inputPassword4">Numero de factura</label>
                        <input type="text"   id="numfac"  name='numfac'  class="form-control l" required>
                  

                              </div>
                              
                                     <div class="form-group col-md-4 J">

                   <label for="inputPassword4">Orden de servicio</label>
                   <input type="text"   id="ordser"  name='ordser'  class="form-control l" required>
                        

                              </div>
                              
                                      <div class="form-group col-md-4 J">

                   <label for="inputPassword4">Costo</label>
                          <input type="number"   id="cost" step="0.01"  name='cost'  class="form-control l" required>     

                              </div>

          


    </div>
                            </div>
                        </div> <!-- modal-body -->
                        <div class="modal-footer">
                         
                            <div class="col-sm-3">
                                <button type="submit" class=" form-control btn btn-success" id="sig_gra"><span class="" >Grabar</span></button>
                            </div>
                              <div class="col-sm-5">
                                <button type="button" class=" form-control btn btn-primary" id="flagbot"><span class="" >Tengo los datos</span></button>
                            </div>
                            </div>

                        </form>
                          

                        </div>

            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->


<div class=" modal fade bs-example-modal-lg" id="modal_ori" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
                        <div class="modal-header">
           <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              <h4>Origen</h4>
                        </div> <!-- modal-header -->
                        <form   method="post" id="form_ori">
                        <div class="modal-body">
                            <div class="container-fluid">
                                 <div class="form-row">
                 <div class="form-group col-md-4">

                 <label for="inputPassword4">Ciudad</label>
                   <select id="ciu" required class="form-control" name='ciu' >
              
                    <option></option>

                      </select>
               </div>
               <div class="form-group col-md-4">

                 <label for="inputPassword4">Provincia</label>
                   <select id="prov" required class="form-control" name='prov' >
              
                    <option></option>

                      </select>
               </div>
               <div class="form-group col-md-4">

                 <label for="inputPassword4">Distrito</label>
                   <select id="dis" class="form-control" required name='dis' >
              
                    <option></option>

                      </select>
               </div>

          


    </div>
                            </div>
                        </div> <!-- modal-body -->
                        <div class="modal-footer">
                         
                            <div class="col-sm-3">
                                <button type="submit" class=" form-control btn btn-success" id="sig_des"><span class="" >Siguiente</span></button>
                            </div>
                            </div>

                        </form>
                          

                        </div>

            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->


<div class=" modal fade bs-example-modal-lg" id="modal_des" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
                        <div class="modal-header">
           <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              <h4>Destino</h4>
                        </div> <!-- modal-header -->
                        <form  method="post" id="form_des">
                        <div class="modal-body">
                            <div class="container-fluid">
                                 <div class="form-row">
                <div class="form-group col-md-4">

                 <label for="inputPassword4">Ciudad</label>
                   <select id="ciu2" required class="form-control" name='ciu2' >
              
                    <option></option>

                      </select>
               </div>
               <div class="form-group col-md-4">

                 <label for="inputPassword4">Provincia</label>
                   <select id="prov2" required  class="form-control" name='prov2' >
              
                    <option></option>

                      </select>
               </div>
               <div class="form-group col-md-4">

                 <label for="inputPassword4">Distrito</label>
                   <select id="dis2" required class="form-control" name='dis2' >
              
                    <option></option>

                      </select>
               </div>

          


    </div>
                            </div>
                        </div> <!-- modal-body -->
                        <div class="modal-footer">
                         
                            <div class="col-sm-3">
                                <button type="submit" class=" form-control btn btn-success" id="sig_trans"><span class="" >Siguiente</span></button>
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
                     
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                        </div>
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->

 </div>




 <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                
                    <input type="hidden"   name="idsindex" id="idsindex"   class="form-control" >
               Detalle
            </h4>
        </div>
        <div class="panel-body" style="padding:0px;">

            <form id="form_det" method="post" >

        <div class="form-row">


                     <div class="form-group col-md-2 ">
                 <label for="inputPassword4">Serie</label>
             <select id="ser" class="form-control" name='ser' >
              
                        <?php
                                $opt="<option></option>";
                                foreach ($guia as $key) {
                                    $opt .='<option  value="'.$key->seg_cod.'">'.$key->seg_ser.'</option>';
                                }
                                echo $opt;
                                 ?>

                      </select>
               </div>
                    <div class="form-group col-md-2 ">
                 <label for="inputPassword4">Guia</label>
             <input type="text"   id="gui" name="gui"  class="form-control" >
               </div>

          
            <div class="form-group col-md-1">
               <label><br></label>
            <button type="submit"  class="form-control btn btn-primary"  id="ver" >ver</button>
             </div>
    </div>
 </form>

    <div class="form-row">


     <div class="col-md-12">
         <br>
         <div class="panel panel-default">
             <div class="panel-body ">
                 <div class="table-responsive " >
                     <table class="table table-striped " id="grilla">
                         <thead class="text-coorp">
                             <tr>
                                
                                    <th >Serie</th>
                                 <th >Guia</th>
                                 <th >Cliente</th>
                                 <th >Punto Partida</th>
                                 <th >Punto Llegada</th>
                                 <th >Cantidad</th>
                                 <th >Peso</th>
                                 <th ></th>
                                 <th ></th>
                                                            
                             </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>

                        
                        <tfoot >
      <tr >
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                   </tr>
                               
                                       <tr >
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                        <td></td>
                                       <td align="right" style="background-color:#337ab7; border:solid 1px #183c5d; color:#fff"><b>Cantidad</b></td>
                                       <td align="right" colspan='2' style="border:solid 1px #183c5d;"><span id="span_cant">0</span></td>
                                   </tr>
                                      <tr >
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                        <td></td>
                                       <td align="right" style="background-color:#337ab7; border:solid 1px #183c5d; color:#fff"><b>Peso</b></td>
                                       <td align="right" colspan='2' style="border:solid 1px #183c5d;"><span id="span_pes">0.00</span></td>
                                   </tr>
 
                        </tfoot>
                   </table>
                     </div><!-- /.table-responsive -->
     
             </div><!-- /.panel-body -->

         </div><!-- col-lg-7 -->
     </div><!--row derecha-->
</div>
 <div class="form-row">
                <div class="col-md-5">
        <button type="button"  disabled class="form-control btn btn-primary" id="gra" >SIGUIENTE</button>
</div>
</div>
</div>

</div>
    </div>
    <script type="text/javascript">
$(document).ready( function() {
var arrayn=[];
	  var tabla_detalle = $("#grilla tbody");
	   var modal_tabla = $("#grilla_det tbody");
	   var array=$("#arrayDet");
	      var arraynDet=$("#arraynDet");
	    ciudad();

  
    $(".J").css("display", "none");
      $(".l").attr('required', false);
$("#flagbot").on('click',function(){
    if($("#flagten").val()==0){
        $("#flagten").val(1)
        $("#flagbot").html("No tengo los datos")
            $(this).css('background', 'red');
                   $(".J").css("display", "block");
                       $(".l").attr('required', true);
    }else{
        $("#flagten").val(0)
            $("#flagbot").html("Tengo los datos")
             $(this).css('background', 'blue');
               $(".J").css("display", "none");
                $(".l").attr('required', false);
    }
});


$("#form_det").on('submit', function(evt){
    evt.preventDefault();
    
     	var arraynndet=[];
       		  var request;
    
        if(request==true){
          request.abort();
        }
      

        request = $.ajax(
        {
            url:"<?php  echo base_url('Cguia/veriguimani')?>",
            type:"Post",
            dataType: "json",
            data: $("#form_det").serialize()
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if(response!=null){
  		  //    for (var i = 0; i < response.cab.length; i++) {
  		
    //    fn_adicionar_detalle(response.cab[i].gui_cod,response.cab[i].partida,response.cab[i].cli_raz,response.cab[i].llegada,response.cab[i].gui_cto,response.cab[i].gui_pto,response.cab[i].seg_ser,response.cab[i].gui_num);
              
                         
 
        // }
         
           for (var i = 0; i < response.det.length; i++) {
               
                arrayn.push(response.det[i].deg_cod);
               arraynndet.push(response.det[i].deg_cod);
           }
           arraynDet.attr('value',JSON.stringify(arrayn)); 
    fn_adicionar_detalle(response.cab.gui_cod,response.cab.partida,response.cab.cli_raz,response.cab.llegada,response.cab.gui_cto,response.cab.gui_pto,response.cab.seg_ser,response.cab.gui_num,JSON.stringify(arraynndet));

           
            }
        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
        });

  });

 function fn_adicionar_detalle(gui_cod,partida,cli_raz,llegada,gui_cto,gui_pto,seg_ser,gui_num,array) {
    var cadena='';
   
     var tot=parseFloat($("#tot").val());
    cadena +='<tr>';

cadena +='<td >'+seg_ser+'</td>';
     cadena +='<td >'+gui_num+'</td>';
          cadena +='<td >'+cli_raz+'</td>';
          cadena +='<td >'+partida+'</td>';
      cadena +='<td >'+llegada+'</td>';
      cadena +='<td >'+gui_cto+'</td>';
      cadena +='<td >'+gui_pto+'</td>';
      cadena +="<td ><button type='button' class='view_det btn btn-success btn-sm' id='"+gui_cod+"' ><span class='fa fa-eye'>  VER</span></button></td>";
       cadena += '<td><input  type="hidden" class="form-control" value="'+gui_cod+'" id="'+array+'"></td>';
    cadena +='<td><a type="button" ><span class="eliminar fa fa-trash"></span></a></td>';
       cadena += '<td><input  type="hidden" class="form-control" value='+array+' ></td>';
     cadena +='</tr>';
    tabla_detalle.append(cadena);
fn_llenarArray();

}  


tabla_detalle.on('click','.eliminar',function (){
    var ids  = $('#grilla tr').index($(this).closest('tr'))-1;
     var tr2 =tabla_detalle.children('tr');
        var cod2=tr2.eq(ids).find("td").eq(10).find("input").val();
        console.log(cod2);
       $.each(JSON.parse(cod2) , function(index, value) {
                            var index2 = arrayn.indexOf(value);
if (index2 > -1) {
  arrayn.splice(index2, 1);
}

   });
  arraynDet.attr('value',JSON.stringify(arrayn));
                         
    
   $(this).parents("tr").fadeOut("normal", function(){
       
       $(this).remove();
  fn_llenarArray();
});
});

function fn_llenarArray(){
      var tr =tabla_detalle.children('tr');
        var ids = [];

 var canttot=0;
    var pesotot=0;
    //    var i =0;
        tr.each(function(index){
    //        i++; //codigo_sunat,codigo,cant,descripcion, precio_unit,igv_unit,valor_unit,valor_total
     
             cod=tr.eq(index).find("td").eq(8).find("input").val();
           
           cant=tr.eq(index).find("td").eq(5).text();
          pes=tr.eq(index).find("td").eq(6).text();

            det = new Detalle(cod);
            ids.push(det);
          canttot += parseInt(cant);
            pesotot += parseFloat(pes);
         });

         if(ids.length==0){
            array.attr("value","");
            $("#gra").attr("disabled",true);
         }
        else{

            array.attr('value',JSON.stringify(ids));
         
          $("#gra").attr("disabled",false);
        }

                   $("#span_pes").html(pesotot.toFixed(2));
          $("#tot_peso").val(pesotot.toFixed(2));
           $("#span_cant").html(canttot);
          $("#tot_cant").val(canttot);
       

    console.log(array.val());

    }
function Detalle(cod){
    this.cod = cod;
   
}

tabla_detalle.on('click','.view_det',function(){
    var id = $(this).attr('id');
   //var row = $(this).closest('tr');
  var ids  = $('#grilla tr').index($(this).closest('tr'))-1;
$("#idsindex").val(ids);
//console.log(ids);

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
               var cantarray= response.length;
                 var flag=0
                 var pesoo=0.00;
                 var cantt=0;
                 
               
                for (var i = 0; i < response.length; i++) {
              
                    cadena += "<tr>";
                    cadena += '<td>' + (i+1) + '</td>';
                    cadena += '<td>' + response[i].deg_des + '</td>';
                    cadena += '<td>' + response[i].med_des + '</td>';
                    cadena += '<td>' + response[i].deg_pes + '</td>';
                    cadena += '<td>' + response[i].deg_can + '</td>';
                    if(cantarray>1){
                        
                        $.each(arrayn, function(index, value) {
                            if(value==response[i].deg_cod){
                                flag=1;
                            }
                            
                        
                        });
                        
                        if(flag==1){
                        cadena +="<td ><button type='button' class='bien btn btn-success btn-sm' id='"+response[i].deg_cod+"' tag=1><span class=' fa fa-check'> </span></button></td>";
                        pesoo=response[i].deg_pes;
                        cantt=response[i].deg_can;
                            }else{
                      cadena +="<td ><button type='button' class='bien btn btn-danger btn-sm' id='"+response[i].deg_cod+"' tag=2><span class=' fa fa-times'> </span></button></td>";
                                pesoo=0.00;
                        cantt=0;
                            }
                    }else{
                           pesoo=response[i].deg_pes;
                        cantt=response[i].deg_can;
                    }
                      flag=0;
              
                    cadena += '</tr>';
                    cant += parseInt(cantt);
                    peso += parseFloat(pesoo);
                }
            var pesdec=peso.toFixed(2);

                modal_tabla.html(cadena);
                $("#span_cantidad").html(cant);
                $("#span_peso").html(pesdec);
          
            }else {
          modal_tabla.html('');
         $("#span_cantidad").html('0');
                $("#span_peso").html('0.00');
            }
       

        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
            $("#modal_det").modal("show");
              console.log("termino la ejecucion de ajax");
        });   

});

modal_tabla.on('click','.bien',function(){
   var pes=0;
   var cant=0;
   var totpes=0;
   var totcant=0;
    
    if($(this).attr('tag')==1){
        
    var index = arrayn.indexOf($(this).attr('id'));
if (index > -1) {
  arrayn.splice(index, 1);
}
  arraynDet.attr('value',JSON.stringify(arrayn));
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
                
          
      tabla_detalle.children('tr').eq($("#idsindex").val()).find("td").eq(5).text(totcant);
     tabla_detalle.children('tr').eq($("#idsindex").val()).find("td").eq(6).text(totpes.toFixed(2));  
      fn_llenarArray();
    }else{
     
         arrayn.push($(this).attr('id'));
                     arraynDet.attr('value',JSON.stringify(arrayn));
     
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
                
                
     tabla_detalle.children('tr').eq($("#idsindex").val()).find("td").eq(5).text(totcant);   
       tabla_detalle.children('tr').eq($("#idsindex").val()).find("td").eq(6).text(totpes.toFixed(2));   
    fn_llenarArray();
    }
 
});

function ciudad() {
  var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Cguia/ciudad')?>",
        type:"Post",
        dataType: "json"
            });
    request.done(function (response,textStatus,jqXHR)
    {//console.log(response);
        if (response!=null) {
            for (var i = 0; i < response.length; i++) {
            $("#ciu").append('<option  value='+response[i].ciu_cod+'>'+response[i].ciu_des+'</option>');
            $("#ciu2").append('<option  value='+response[i].ciu_cod+'>'+response[i].ciu_des+'</option>');
             }
         }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });
    }

$("#ciu").on('change',function () {
var id=$(this).val();

 var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Cguia/provincia')?>",
        type:"Post",
        dataType: "json",
         data: {'id':id},
            });
    request.done(function (response,textStatus,jqXHR)
    {//console.log(response);

        if (response!=null) {
        $("#prov").html('<option></option>');
        $("#dis").html('<option></option>');
            for (var i = 0; i < response.length; i++) {
            $("#prov").append('<option  value='+response[i].prv_cod+'>'+response[i].prv_des+'</option>');
             }
         }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });

});

$("#ciu2").on('change',function () {
var id=$(this).val();

 var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Cguia/provincia')?>",
        type:"Post",
        dataType: "json",
         data: {'id':id},
            });
    request.done(function (response,textStatus,jqXHR)
    {//console.log(response);

        if (response!=null) {
        $("#prov2").html('<option></option>');
        $("#dis2").html('<option></option>');
            for (var i = 0; i < response.length; i++) {
            $("#prov2").append('<option  value='+response[i].prv_cod+'>'+response[i].prv_des+'</option>');
             }
         }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });

});

$("#prov").on('change',function () {
var id=$(this).val();

 var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Cguia/distrito')?>",
        type:"Post",
        dataType: "json",
         data: {'id':id},
            });
    request.done(function (response,textStatus,jqXHR)
    {//console.log(response);

        if (response!=null) {
    
        $("#dis").html('<option></option>');
            for (var i = 0; i < response.length; i++) {
            $("#dis").append('<option  value='+response[i].dis_cod+'>'+response[i].dis_des+'</option>');
             }
         }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });

});

$("#prov2").on('change',function () {
var id=$(this).val();

 var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Cguia/distrito')?>",
        type:"Post",
        dataType: "json",
         data: {'id':id},
            });
    request.done(function (response,textStatus,jqXHR)
    {//console.log(response);

        if (response!=null) {
    
        $("#dis2").html('<option></option>');
            for (var i = 0; i < response.length; i++) {
            $("#dis2").append('<option  value='+response[i].dis_cod+'>'+response[i].dis_des+'</option>');
             }
         }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });

});

$("#gra").on('click',function(){
$("#modal_ori").modal("show");
});


$("#form_ori").on("submit",function (e) {
    e.preventDefault();
    $("#hpup").val($("#dis").val());
 $("#modal_ori").modal("hide");

$("#modal_des").modal("show");
});

$("#form_des").on("submit",function (e) {
    e.preventDefault();
    $("#hpul").val($("#dis2").val());
 $("#modal_des").modal("hide");
$("#modal_gra").modal("show");
});

$("#form_modgra").on("submit",function (e) {
    e.preventDefault();
  $("#modal_gra").modal("hide");
 $("#modal_cargando").modal("show");


 var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:"<?php  echo base_url('Cguia/grabmani')?>",
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

$("#flag").on("change",function(){
if($(this).val()==1){
  $(".consoli").removeClass('desactive');
  $(".manu").addClass('desactive');
 

}else{
    $(".consoli").addClass('desactive');
  $(".manu").removeClass('desactive');

}
});

        });
</script>