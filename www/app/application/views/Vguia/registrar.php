 <div id="page-wrapper">
    <section id="history">
    <div class="titulo2">
        <h1>Guia<h1>
        <h2>REGISTRAR</h2>
    </div>
    </section>
    
    
    
    
    
    <div class="modal fade" id="modal_abrirdet" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content panel-primary">
                        <div class="modal-header panel-heading">
                              <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              LLene Los Datos
                        </div> <!-- modal-header -->
                      <form id="form_det" method="post" >
                        <div class="modal-body">
                            <div class="container-fluid">
                                  <div class="form-row">



    <div class="form-group col-md-12">
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
           <button type="submit"  class="btn btn-primary"  id="agreg" >Agregar</button>
</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
                       
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->

 </div>
    
  
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="modal_excel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content panel-primary">
                        <div class="modal-header panel-heading">
                        
                              Informacion !
                        </div> <!-- modal-header -->
                     
                        <div class="modal-body">
                  <h4 id="guireg"></h4>
                        </div> <!-- modal-body -->
                             <div class="modal-footer">

        <button type="button" class=" btn btn-primary" id="exc" >Aceptar</button>

      </div>
                       
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->
</div>




<div class="modal fade" id="modal_conf" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content panel-primary">
                        <div class="modal-header panel-heading">
                              <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              Elija y Confirme
                        </div> <!-- modal-header -->
                      <form id="form_conf" method="post" >
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group col-md-3">

                 <label for="inputPassword4">Fecha Emitida</label>
                  <input type="date"  id="fecemi" name="fecemi" value="<?php echo date("Y-m-d");?>" class="form-control" required>
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
                  <input type="number" readonly id="numgia" name="numgia" class="form-control" >
             </div>



              <div class="form-group col-md-3">

                 <label for="inputPassword4">Transporte</label>
                     <select id="tit" class="form-control" name='tit' required>
                         <option value="2">AEREO</option>
                                <option value="1">TERRESTRE</option>
                                
                                <option value="3">FLUVIAL</option>
                          </select>
             </div>

                <div class="form-group col-md-2">

                 <label for="inputPassword4">Pago</label>
                     <select id="pag" class="form-control" name='pag' required>
                                <option value="1">INMEDIATO</option>
                                <option value="2">COLLET</option>
                                <option value="7">CREDITO</option>
                                  <option value="8">5 DIAS</option>
                                <option value="9">10 DIAS</option>
                                <option value="3">15 DIAS</option>
                                <option value="4">30 DIAS</option>
                                 <option value="5">45 DIAS</option>
                                <option value="6">60 DIAS</option>
                                 
                          </select>
             </div>

                  <div class="form-group col-md-6">

                 <label for="inputPassword4">Guia Cliente</label>
                  <input type="text"  id="gcli" name="gcli" class="form-control" >
             </div>
                 <div class="form-group col-md-6">

                 <label for="inputPassword4">Observacion</label>
                  <input type="text"  id="obs" name="obs" class="form-control" >
             </div>

             </div>
             </div>
                      
                    </form>
               
                              
                             <!-- modal-body -->
                             <div class="modal-footer">
        <button type="button" class=" btn btn-primary" id="conf" >Confirmar</button>

        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
                       
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->

 </div>



        <div class="modal fade" id="modal_abrirgui" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content panel-primary">
        
                                <div class="panel-body ">
                                    <div class="table-responsive " >
                                        <table class="table  " border="1" style="font-size:8px;" id="grilla_abrirgui" >
                                        
                                        </table>
                                    </div><!-- /.table-responsive -->

</div>


    
                       
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->

 </div>
    


<div class="modal fade" id="modal_clip" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content panel-primary">
                        <div class="modal-header panel-heading">
                              <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              BUSCAR CLIENTE
                        </div> <!-- modal-header -->
                     
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- <input  type="hidden"  name="arrayCie" id="arrayCie" > -->
                                    <div id="mostrar_div">
                                        <div class="col-md-offset-8 col-md-4 ">
                                            <div class="input-group has-primary">
                                                <span class="input-group-addon">Search:  </span>
                                                <input type="text" id="clip_search" class="form-control" required="required" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row" >
                                    <div class="panel panel-coorp">
                                        <div class="panel-body">
                                            <div class="table-responsive " >
                                                <table class="table table-striped " id="grilla_clip">
                                                    <thead class='text-info'>
                                                        <tr>
                                                            <th>Razon Social</th>
                                                            <th>Direccion</th>
                                                            <th>Ubicacion</th>
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

<div class="modal fade" id="modal_clil" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content panel-primary">
                        <div class="modal-header panel-heading">
                              <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                             BUSCAR CLIENTE
                        </div> <!-- modal-header -->
                     
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- <input  type="hidden"  name="arrayCie" id="arrayCie" > -->
                                   
                                        <div class="col-md-offset-8 col-md-4 ">
                                            <div class="input-group has-primary">
                                                <span class="input-group-addon">Search:  </span>
                                                <input type="text" id="clil_search" class="form-control" required="required" autocomplete="off">
                                            </div>
                                        </div>
                                   
                                </div>
                                <br>
                                <div class="row" >
                                    <div class="panel panel-coorp">
                                        <div class="panel-body">
                                            <div class="table-responsive " >
                                                <table class="table table-striped " id="grilla_clil">
                                                    <thead class='text-info'>
                                                        <tr>
                                                            <th>Razon Social</th>
                                                            <th>Direccion</th>
                                                            <th>Ubicacion</th>
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

       <div class="modal fade" data-backdrop="static" data-keyboard="false" id="modal_cargando2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
                        <div class="modal-header">
                              <h4 style="text-align:center;">ESPERANDO RESPUESTA DEL SERVIDOR...</h4>
                              <br>
                              <img class="media-object" src="<?=base_url()?>img/cargando2.gif" alt="..." style=" margin-left: auto;
                                margin-right: auto;
                                display: block;">
                                <br>
                        </div> <!-- modal-header -->
        </div>
    </div>
</div>




          
         <!--   <div class="container"> --> 
               <div class="panel-group">
                <div class="row">
                <div class="col-md-6">
                 <div class="panel panel-primary" >
           <div  class="panel-heading" role="tab" id="headingThree">
               <h4 class="panel-title" >
                Remitente
               </h4>
           </div>
           <div class="panel-body" style="padding:0px;">

               <form id="form_rem" method="post" >
                <input type="hidden"  id="tot_general" name="tot_general"  class="form-control" >
                   <input type="hidden"  id="tot_peso" name="tot_peso"  class="form-control" >
                   <input type="hidden"  id="tot_psv" name="tot_psv"  class="form-control" >
                <input type="hidden"  id="tot_cant" name="tot_cant"  class="form-control" >
 <input type="hidden"   name="arrayDet" id="arrayDet"   class="form-control" >
  <input type="hidden"   name="clicod" id="clicod"   class="form-control" >
 <input type="hidden"   name="clicod2" id="clicod2"   class="form-control" >
           <div class="form-row">

  <div class="form-group col-md-12">

                 <label for="inputPassword4">Cliente</label>
                  <input type="text" readonly  id="clip" name="clip" class="form-control" >
               </div>

               <div class="form-group col-md-12">

                 <label for="inputPassword4">Punto de Partida</label>
             <input type="text"   id="pup" name="pup" class="form-control" >
               </div>
               <div class="form-group col-md-4">

                 <label for="inputPassword4">Ciudad</label>
                   <select id="ciu" class="form-control" name='ciu' >
              
                    <option></option>

                      </select>
               </div>
               <div class="form-group col-md-4">

                 <label for="inputPassword4">Provincia</label>
                   <select id="prov" class="form-control" name='prov' >
              
                    <option></option>

                      </select>
               </div>
               <div class="form-group col-md-4">

                 <label for="inputPassword4">Distrito</label>
                   <select id="dis" class="form-control" name='dis' >
              
                    <option></option>

                      </select>
               </div>

             
             


       </div>
    </form>

</div>
</div>
</div>

<div class="col-md-6">
                 <div class="panel panel-primary" >
           <div  class="panel-heading"  id="headingThree">
               <h4 class="panel-title" >
                Destinatario
               </h4>
           </div>
           <div class="panel-body" style="padding:0px;">

              <form id="form_des" method="post" >
            
           <div class="form-row">

  <div class="form-group col-md-12">

                 <label for="inputPassword4">Cliente</label>
               <input type="text" readonly  id="clil" name="clil" class="form-control" >
               </div>

               <div class="form-group col-md-12">

                 <label for="inputPassword4">Punto de LLegada</label>
             <input type="text"   id="pup2" name="pup2" class="form-control" >
               </div>
               <div class="form-group col-md-4">

                 <label for="inputPassword4">Ciudad</label>
                   <select id="ciu2" class="form-control" name='ciu2' >
              
                    <option></option>

                      </select>
               </div>
               <div class="form-group col-md-4">

                 <label for="inputPassword4">Provincia</label>
                   <select id="prov2" class="form-control" name='prov2' >
              
                    <option></option>

                      </select>
               </div>
               <div class="form-group col-md-4">

                 <label for="inputPassword4">Distrito</label>
                   <select id="dis2" class="form-control" name='dis2' >
              
                    <option></option>

                      </select>
               </div>

             
             


       </div>
    </form>

</div>
</div>

</div>
</div>
</div>

 <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
 <button type="submit"  class="form-control " style="background-color:#337ab7;color:white;" id="abrirdet" >AGREGAR DETALLE</button>
            </h4>
        </div>
        <div class="panel-body" style="padding:0px;">

       <!-- /     <form id="form_det" method="post" >

        <div class="form-row">



    <div class="form-group col-md-3">
                 <label for="inputPassword4">Descripcion</label>
             <input type="text" required  id="desc" name="desc"  class="form-control" >
               </div>


    
    <div class="form-group col-md-1">
            <label for="inputPassword4">Med.</label>
         <select required id="med" class="form-control" name='med' >
              <option></option>
                      </select>
                    </div>
                     <div class="form-group col-md-1">
                 <label for="inputPassword4">Cant.</label>
             <input type="number"  required  id="can" name="can"  class="form-control" >
               </div>

                 <div class="form-group col-md-2">
                 <label for="inputPassword4">Tip.Peso</label>
            <select required id="tip" class="form-control" name='tip' >
              <option value="1">Peso</option>
              <option value="2">Longitud</option>
                      </select>
               </div>

                  <div class="form-group col-md-2">
                 <label for="inputPassword4">Peso</label>
             <input type="number" step="0.01" required   id="pes" name="pes"  class="form-control" >
               </div>


               <div class="form-group col-md-2">
                 <label for="inputPassword4">Prec. Unit.</label>
             <input type="number" step="0.01" required   id="pru" name="pru"  class="form-control" >
               </div>
            <div class="form-group col-md-1">
               <label><br></label>
            <button type="submit"  class="form-control " style="background-color:#337ab7;color:white;" id="agreg" >+</button>
             </div>
    </div>
 </form>--> 

    <div class="form-row">


     <div class="col-md-12">
         <br>
         <div class="panel panel-default">
             <div class="panel-body ">
                 <div class="table-responsive " >
                     <table class="table table-striped " id="grilla">
                         <thead class="text-coorp">
                             <tr>
                                
                                 <th >Descripcion</th>
                                 <th >Medida</th>
                                 <th >Cantidad</th>
                                  <th >Tipo</th>
                                 <th >Peso</th>
                                  <th >Peso vol.</th>
                                 <th >P.U</th>
                                 <th >Subtotal</th>
                            
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
                                       <td></td>
                                   </tr>
                                    <tr >
                                       <td></td>
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
                                        <td></td>
                                       <td align="right" style="background-color:#337ab7; border:solid 1px #183c5d; color:#fff"><b>Peso</b></td>
                                       <td align="right" colspan='2' style="border:solid 1px #183c5d;"><span id="span_peso">0.00</span></td>
                                   </tr>
                                                                         <tr >
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                        <td></td>
                                        <td></td>
                                       <td align="right" style="background-color:#337ab7; border:solid 1px #183c5d; color:#fff"><b>Peso vol</b></td>
                                       <td align="right" colspan='2' style="border:solid 1px #183c5d;"><span id="span_psv">0.00</span></td>
                                   </tr>
                                   
                                    <tr >
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                        <td></td>
                                        <td></td>
                                       <td align="right" style="background-color:#337ab7; border:solid 1px #183c5d; color:#fff"><b>Total</b></td>
                                       <td align="right" colspan='2' style="border:solid 1px #183c5d;"><span id="span_total">0.00</span></td>
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
        <button type="button"  disabled class="form-control btn btn-primary" id="gra" >Registrar</button>
</div>
</div>
</div>

</div>

</div>
       <!--</div> --> 

      <script>

$(document).ready(function() {
  var tabla_detalle = $("#grilla tbody");
  var tabla_clip = $("#grilla_clip tbody");
      var grilla_abrirgui = $('#grilla_abrirgui');
      
      $("#numgia").on('click',function(){
        
         var serg= $("#serg").val();
          
                var request;
    
        if(request==true){
          request.abort();
        }


        request = $.ajax(
        {
            url:"<?php  echo base_url('Cguia/guiafalt')?>",
            type:"Post",
            dataType: "json",
           data: {'ser':serg}
        });

        request.done(function (response,textStatus,jqXHR)
        {
         
                
            
           var TAM=1;
          var $n=10000;
          var cadena="";
          var flag=0
             for (var i = 0; i < response.length; i++) {
       
          cadena += "<tr>";
   for (var j = 0; j < 10; j++) {
       
       if(i < response.length){
      
                    cadena += "<td class='lr' style='background-color:green;color:white ; font-size: 15px'>"+response[i].cog_gui+"</td>";
           
     i++
       }
   }
   i--
     //creamos una celda y mostramos el número
 
   cadena += "</tr>";
 //sumamos 1 al número mostrado para la siguiente vuelta del bucle
 }

 cadena += "</table>"; 
 //cerramos la fila


//cerramos la tabla

         grilla_abrirgui.html(cadena);   
       
           
        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
                    $("#modal_abrirgui").modal("show");
        });
           
       });
          
          
           $("#grilla_abrirgui").on('click','td',function () {
          
$("#numgia").val($(this).text())
           $("#modal_abrirgui").modal("hide");
           });
           
           
           $("#serg").on("change",function(){
                $("#numgia").val('')
              
               
           });
      
      
  var array=$("#arrayDet");
medida();
ciudad();
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

$("#pes,#pru").on("keyup",function(){
     var pes=parseFloat($("#pes").val());
     var pru=parseFloat($("#pru").val());
     var tot=parseFloat((pes*pru).toFixed(2));
     $("#subtpt").val(tot);
});

  function fn_adicionar_detalle() {
    var cadena='';
    var cont=0;
   
     
    cadena +='<tr>';

     cadena +='<td >'+$("#desc").val()+'</td>';
      cadena +='<td >'+$("#med option:selected").text()+'</td>';
      cadena +='<td >'+$("#can").val()+'</td>';
       cadena +='<td >'+$("#tip option:selected").text()+'</td>';
       cadena +='<td >'+$("#pes").val()+'</td>';
       cadena +='<td >'+$("#psv").val()+'</td>';
      cadena +='<td >'+$("#pru").val()+'</td>';
      cadena +='<td >'+$("#subtpt").val()+'</td>';
       cadena += '<td><input  type="hidden" class="form-control" value="'+$("#med").val()+'" ></td>';
         cadena += '<td><input  type="hidden" class="form-control" value="'+$("#tip").val()+'"></td>';
    cadena +='<td><a type="button"><span class="eliminar fa fa-trash"></span></a></td>';
     cadena +='</tr>';
    tabla_detalle.append(cadena);
fn_llenarArray();

}  
$("#form_det").on("submit",function (e) {
    e.preventDefault();
    fn_adicionar_detalle();
    $("#modal_abrirdet").modal("hide");
});

$("#clip").on('click',function () {
$("#modal_clip").modal("show");

});
$("#clil").on('click',function () {
$("#modal_clil").modal("show");

});

    $("#clip_search").on('keyup',function () {
        var search_clip=$(this).val();
        var url = "<?php  echo base_url('Cguia/mostrar_clientes')?>";
        var cad='';
       $.ajax({
          type: "POST",
          url: url,
          dataType: "JSON",
          data: {search:search_clip},
          beforeSend: function () {
                  // $("#resultado").html("Procesando, espere por favor...");
          },
          success: function(data)
          {console.log(data);
              if (data!=null) {
              var cadena="";
                  for (var i = 0; i < data.length; i++) {
                  cadena += "<tr>";

                  cadena += '<td>'+ data[i].razon+'</td>';
                  cadena += '<td>'+data[i].direccion+'</td>';
                  cadena += '<td>'+data[i].ubicacion+'</td>';
                 cadena += '<td><input type="hidden" value="'+data[i].ciu_cod+'" class="form-control"></td>';
                 cadena +=  '<td><input type="hidden" value="'+data[i].prv_cod+'" class="form-control"></td>';
                  cadena += '<td><input type="hidden" value="'+data[i].dis_cod+'" class="form-control"></td>';
                  cadena += '<td><input type="hidden" value="'+data[i].prv_des+'" class="form-control"></td>';
                  cadena += '<td><input type="hidden" value="'+data[i].dis_des+'" class="form-control"></td>';
                   cadena += '<td><input type="hidden" value="'+data[i].cli_cod+'" class="form-control"></td>';

                  cadena += '</tr>';
              }
               cadena += "<tr>";

                  cadena += '<td>OTRO</td>';
          
                  cadena += '</tr>';
              $("#grilla_clip tbody").html(cadena);
               }
               else {
                cadena += "<tr>";

                  cadena += '<td>OTRO</td>';
          
                  cadena += '</tr>';
              $("#grilla_clip tbody").html(cadena);
               }

          }
      });
    });

    $("#clil_search").on('keyup',function () {
        var search_clil=$(this).val();
        var url = "<?php  echo base_url('Cguia/mostrar_clientes')?>";
        var cad='';
       $.ajax({
          type: "POST",
          url: url,
          dataType: "JSON",
          data: {search:search_clil},
          beforeSend: function () {
                  // $("#resultado").html("Procesando, espere por favor...");
          },
          success: function(data)
          {console.log(data);
              if (data!=null) {
              var cadena="";
                  for (var i = 0; i < data.length; i++) {
                  cadena += "<tr>";

                  cadena += '<td>'+ data[i].razon+'</td>';
                  cadena += '<td>'+data[i].direccion+'</td>';
                  cadena += '<td>'+data[i].ubicacion+'</td>';
                 cadena += '<td><input type="hidden" value="'+data[i].ciu_cod+'" class="form-control"></td>';
                 cadena +=  '<td><input type="hidden" value="'+data[i].prv_cod+'" class="form-control"></td>';
                  cadena += '<td><input type="hidden" value="'+data[i].dis_cod+'" class="form-control"></td>';
                    cadena += '<td><input type="hidden" value="'+data[i].prv_des+'" class="form-control"></td>';
                  cadena += '<td><input type="hidden" value="'+data[i].dis_des+'" class="form-control"></td>';
                  cadena += '<td><input type="hidden" value="'+data[i].cli_cod+'" class="form-control"></td>';

                  cadena += '</tr>';
              }
               cadena += "<tr>";

                  cadena += '<td>OTRO</td>';
          
                  cadena += '</tr>';

              $("#grilla_clil tbody").html(cadena);
               }
               else {
                  cadena += "<tr>";

                  cadena += '<td>OTRO</td>';
          
                  cadena += '</tr>';
              $("#grilla_clil tbody").html(cadena);
               }

          }
      });
    });

    $("#grilla_clip tbody").on('click','td',function () {
        var razon= $(this).parents('tr').find("td").eq(0).text();
        var direccion= $(this).parents('tr').find("td").eq(1).text();
        var ciudad=$(this).parents('tr').find("td").eq(3).find("input").val();
        var provincia=$(this).parents('tr').find("td").eq(4).find("input").val();
        var distrito=$(this).parents('tr').find("td").eq(5).find("input").val();
         var cli=$(this).parents('tr').find("td").eq(8).find("input").val();

          if(razon=="OTRO"){
          $("#modal_clip").modal("hide");
             $("#modalcli").modal("show");

        }else{

        $("#clip").val(razon);
        $("#pup").val(direccion);
        $("#ciu").val(ciudad);
       
      $("#prov").html('<option  value='+provincia+'>'+$(this).parents('tr').find("td").eq(6).find("input").val()+'</option>');
      
       $("#dis").html('<option  value='+distrito+'>'+$(this).parents('tr').find("td").eq(7).find("input").val()+'</option>');
       $("#clicod").val(cli);
        $("#modal_clip").modal("hide");
    };    
    });

      $("#grilla_clil tbody").on('click','td',function () {
        var razon= $(this).parents('tr').find("td").eq(0).text();
        var direccion= $(this).parents('tr').find("td").eq(1).text();
        var ciudad=$(this).parents('tr').find("td").eq(3).find("input").val();
        var provincia=$(this).parents('tr').find("td").eq(4).find("input").val();
        var distrito=$(this).parents('tr').find("td").eq(5).find("input").val();
        var cli=$(this).parents('tr').find("td").eq(8).find("input").val();
           if(razon=="OTRO"){
          $("#modal_clil").modal("hide");
             $("#modalcli").modal("show");

        }else{
        $("#clil").val(razon);
        $("#pup2").val(direccion);
        $("#ciu2").val(ciudad);
       $("#clicod2").val(cli);
     $("#prov2").html('<option  value='+provincia+'>'+$(this).parents('tr').find("td").eq(6).find("input").val()+'</option>');
     
     $("#dis2").html('<option  value='+distrito+'>'+$(this).parents('tr').find("td").eq(7).find("input").val()+'</option>');  
        $("#modal_clil").modal("hide");
        };
    });

function fn_llenarArray(){
        var tr =tabla_detalle.children('tr');
        var ids = [];
    var total_general =0;
    var tot =0;
     var canttot=0;
    var pesotot=0;
     var psvtot=0;

    //    var i =0;
        tr.each(function(index){
    //        i++; //codigo_sunat,codigo,cant,descripcion, precio_unit,igv_unit,valor_unit,valor_total
             des=tr.eq(index).find("td").eq(0).text();
            codmed=tr.eq(index).find("td").eq(8).find("input").val();
            cant=tr.eq(index).find("td").eq(2).text();
             codpes=tr.eq(index).find("td").eq(9).find("input").val();
             pes=tr.eq(index).find("td").eq(4).text();
             pu=tr.eq(index).find("td").eq(6).text();
              tot=parseFloat(tr.eq(index).find("td").eq(7).text());
              psv=tr.eq(index).find("td").eq(5).text();

            det = new Detalle(des,codmed,cant,codpes,pes,pu,tot,psv);
            ids.push(det);
            total_general += tot;
           canttot += parseInt(cant);
            pesotot += parseFloat(pes);
            psvtot += parseFloat(psv);
         });

         if(ids.length==0){
            array.attr("value","");
            $("#gra").attr("disabled",true);
         }
        else{

            array.attr('value',JSON.stringify(ids));
         
          $("#gra").attr("disabled",false);
        }
           $("#span_total").html(parseFloat(total_general).toFixed(2));
          $("#tot_general").val(parseFloat(total_general).toFixed(2));
          $("#span_peso").html(pesotot.toFixed(2));
          $("#tot_peso").val(pesotot.toFixed(2));
           $("#span_cant").html(canttot);
          $("#tot_cant").val(canttot);
          $("#span_psv").html(psvtot.toFixed(2));
          $("#tot_psv").val(psvtot.toFixed(2));
          
    console.log(array.val());
    
    }





tabla_detalle.on('click','.eliminar',function (){
   $(this).parents("tr").fadeOut("normal", function(){
       $(this).remove();
  fn_llenarArray();
});
});


function Detalle(des,codmed,cant,codpes,pes,pu,tot,psv){
    this.des = des;
    this.codmed = codmed;
    this.cant =cant;
    this.codpes =codpes;
    this.pes =pes;
    this.pu =pu;
    this.tot =tot;
    this.psv =psv;

}

$("#gra").on('click',function (){
$("#modal_conf").modal("show");
   });

//aca me quede falta configurar

$("#conf").on('click',function (){

            var request;
            if(request==true){
              request.abort();
            }
            
            $("#modal_cargando").modal("show");
            var formDataSerialized = $("#form_conf,#form_rem,#form_des").serialize();
            request = $.ajax(
            {
                url:"<?php  echo base_url('Cguia/registrar')?>",
                type:"Post",
                dataType: "json",
                data: formDataSerialized
            });

            request.done(function (response,textStatus,jqXHR)
            {console.log(response);
            $("#modal_cargando").modal("hide");
            if(response!=null){
                      $("#modal_conf").modal("hide");

                       var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Cguia/excel_guia')?>");
                       form.setAttribute("target", "view");
                       var campo1 = document.createElement("input");
                       campo1.setAttribute("type", "hidden");
                       campo1.setAttribute("name", "id");
                       campo1.setAttribute("value",response.gui_cod);
                       form.appendChild(campo1);
                       document.body.appendChild(form);
                       form.submit();


          $("#guireg").html("Se registro la guia N° "+response.gui);
          $("#modal_excel").modal("show");
            }else{

        

                    $("#numgia").css("border","2px solid red");
        }
            });
            request.fail(function (jqXHR,textStatus,thrown) {
                  console.log("Error :" + jqXHR+textStatus+thrown);
                 
            });

            request.always(function () {
                  console.log("termino la ejecucion de ajax");
               // $("#modal_cargando").modal("hide");
            });
        

    });
$("#exc").on('click',function (){
location.reload();

   });
   
   $("#abrirdet").on('click',function(){
       $("#modal_abrirdet").modal("show");
   });

    });

</script>
