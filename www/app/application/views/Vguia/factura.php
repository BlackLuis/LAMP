 <div id="page-wrapper">
    <section id="history">
    <div class="titulo2">
        <h1>Facturacion<h1>
        <h2>REGISTRAR</h2>
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
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="modal_ok" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content panel-info">
                      <div class="modal-header panel-heading">
                        
                              <h4 class="text-coorp">LA OPERACION SE REALIZAO CON EXITO</h4>
                                   
                        </div> <!-- modal-header -->
                     
                        <div class="modal-body">
                  <h4 id="comemireg"></h4>
                        </div> <!-- modal-body -->
                             <div class="modal-footer">

        <button type="button" class=" btn btn-success" id="facpago" >PAGAR</button>
        <button type="button" class=" btn btn-primary" id="facok" >NO PAGAR</button>

      </div>
                       
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->
</div>

    <div class=" modal fade bs-example-modal-lg" id="modal_grab" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
                        <div class="modal-header">
           <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              <h4>VERIFIQUE SU DETALLE QUE IRA EN LA FACTURA</h4>
                        </div> <!-- modal-header -->
                        <form  action="index.html" method="post" id="form_grabfac">
                        <div class="modal-body">
                            <div class="container-fluid">
                                 <div class="form-row">
                  <div class="col-md-14 col-sm-14">
                    <div class="input-group has-primary">
                        <span class="input-group-addon">Descripci&oacute;n: </span>
       <textarea id="desarea" name="desarea" value="" class="form-control" autofocus="false" required="required" rows="3" ></textarea>
                    </div>
                </div>
              
   <div class="col-md-14 col-sm-14">
                    <div class="input-group has-primary">
                        <span class="input-group-addon">Observaci&oacute;n: </span>
       <textarea id="obsarea" name="obsarea" value="" class="form-control" autofocus="false" required="required" rows="3" ></textarea>
                    </div>
                </div>

    </div>
          <div class="input-group has-primary">
                            <span class="input-group-addon" id="basic-addon1"><span class="fa fa-file-text"></span> Tipo: </span>
                            <select class="form-control" name="tip_mon" id="tip_mon" required="required">
                              
                                <option value="PEN">SOLES</option>
                                <option value="USD">DOLARES</option>
                            </select>
                        </div>
                        
                         <div class="input-group has-primary">
                            <span class="input-group-addon" id="basic-addon1"><span class="fa fa-file-text"></span> Met. Pago: </span>
                            <select class="form-control" name="mep" id="mep" required="required">
                                <option value="0">Al Contado</option>
                                <option value="1">Credito</option>
                            </select>
                        </div>
                            </div>
                        </div> <!-- modal-body -->
                        <div class="modal-footer">
                         
                            <div class="col-sm-3">
                                <button type="button" class=" form-control btn btn-primary" id="grafac"><span class="" >GRABAR</span></button>
                            </div>
                            </div>

                        </form>
                          

                        </div>

            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->
      
      
      
      
      
          
        <div class="modal fade  bs-example-modal-lg" id="modal_cre" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content panel-primary">
                        <div class="modal-header panel-primary">
                           <!--   <button type="button" class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>-->
                              Registro De Cuotas
                        </div> <!-- modal-header -->
                    
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form id="form_cuo" method="post" >
                                       <div class="col-md-2 col-sm-2">
                        <div class="input-group has-primary">
                            <span class="input-group-addon"><span ></span> N: </span>
                            <input type="number" id="inicuo" name="inicuo"  class="form-control" aria-describedby="basic-addon1" value="1" required="required">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-2">
                        <div class="input-group has-primary">
                            <span class="input-group-addon"><span class=" fa fa-calendar"></span> Fecha : </span>
                            <input type="date" id="feccuo" name="feccuo" data-date-language="es" class="form-control" aria-describedby="basic-addon1" value="<?php $oldDate=date("Y-m-d"); echo date("Y-m-d", strtotime($oldDate.'+ 1 days'));?>" required="required">
                        </div>
                    </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="input-group has-primary " >
                            <span class="input-group-addon"><span class=""></span> S/. : </span>
                         
                            <input type="number" step="0.01"  id="moncuo"  name="moncuo" value="" class="form-control" autofocus="false">
                        </div>
                    </div>
                        <div class="col-md-1 col-sm-1">
                                   <button type="submit" class=" form-control btn btn-primary" id="agregcuo"><span class="" >+</span></button>
                        </div>
                        </form>
                        
                        <br>
                    <br>
                     <br>
         <div class="col-md-12 col-sm-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-body mitabla">
                                            <div class="table-responsive " >
                                                <table class="table table-striped " id="grilla_cuo">
                                                    <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>Fecha</th>
                                                            <th>Monto</th>
                                                             <th></th>
                                                            </tr>
                                                   </thead>
                                                   <tbody >

                                                   </tbody>
                                                   <tfoot>
                                                       <tr>
                                                      
                                                           <th>TOTAL: </th>
                                                           <th></th>
                                                           <th><span id="span_moncuo">0.00</span></th>
                                                
                                                       </tr>
                                                   </tfoot>
                                                </table>
                                            </div><!-- /.table-responsive -->
                                        </div><!-- /.panel-body -->

                                    </div><!-- col-lg-7 -->
                        
                            </div>
                             </div>
                        </div> <!-- modal-body -->
                        <div class="modal-footer">
                                      <div class="col-md-3">
                                 <button type="button" class="btn btn-danger" id="mod_pas_cont" name="mod_pas_cont" data-dismiss="modal">Regresar a pago al Contado</button>
                        </div>
                          <div class="col-md-3">
                                 <button type="button" class="btn btn-default" id="mod_gra_cuo" disabled name="mod_gra_cuo" data-dismiss="modal">Grabar cuotas</button>
                        </div>
                          
                    

                        </div>
            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->

 </div>
    
    
      
      

<div class="modal fade" id="modal_tabcli" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content panel-info">
                        <div class="modal-header panel-heading">
                              <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              <h4 class="text-coorp">BUSCAR CLIENTE</h4>
                        </div> <!-- modal-header -->
                     
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- <input  type="hidden"  name="arrayCie" id="arrayCie" > -->
                                   
                                        <div class="col-md-offset-8 col-md-4 ">
                                            <div class="input-group has-info">
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
                                                            <th>Dni</th>
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

    
<div class=" modal fade bs-example-modal-lg" id="modal_guia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
                        <div class="modal-header">
           <button type="button" id="close_guia" class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              <h4>VERIFIQUE SI ES LA GUIA A FACTURAR</h4>
                        </div> <!-- modal-header -->
                        <form  action="index.html" method="post" id="form_guia">
                        <div class="modal-body">
                            <div class="container-fluid">
                                 <div class="form-row">
                                 	<input type="hidden" readonly required  id="cog" name="cog"  class="form-control" >
                     <div class="form-group col-md-12">
                 <label for="inputPassword4">Cliente</label>
             <input type="text" readonly required  id="clg" name="clg"  class="form-control" >
               </div>
                    <div class="form-group col-md-12">
                 <label for="inputPassword4">Punto Partida</label>
             <input type="text" readonly  required  id="pup" name="pup"  class="form-control" >
               </div>
                 <div class="form-group col-md-12">
                 <label for="inputPassword4">Punto Llegada</label>
             <input type="text" readonly required  id="pul" name="pul"  class="form-control" >
               </div>
                 <div class="form-group col-md-12">
                 <label for="inputPassword4">Total</label>
             <input type="text" readonly required  id="tot" name="tot"  class="form-control" >
               </div>


    </div>
                            </div>
                        </div> <!-- modal-body -->
                        <div class="modal-footer">
                         
                            <div class="col-sm-3">
                                <button type="submit" class=" form-control btn btn-primary" id="agreg"><span class="" >AGREGAR</span></button>
                            </div>
                            </div>

                        </form>
                          

                        </div>

            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->


    <div class="panel panel-primary">
        <div class="panel-heading" >
            <b>DATOS DEL COMPROBANTE: </b>
        </div>
        <form  action="index.html" method="post" id="form_comprobante">
        	<input type="hidden"   name="arrayDet" id="arrayDet"   class="form-control" >
        	<input type="hidden"   name="array_cuo" id="array_cuo"   class="form-control" >
        
        	<input type="hidden"   name="detcom" id="detcom"   class="form-control" >
        	<input type="hidden"   name="clicod" id="clicod"   class="form-control" >
        	<input type="hidden"   name="vvece" id="vvece"   class="form-control" >
        	<input type="hidden"   name="igvce" id="igvce"   class="form-control" >
        	<input type="hidden"   name="pvece" id="pvece"   class="form-control" >
            <div class="panel-body">
                
                    <div class="col-md-6 col-sm-6 ">
                        <div class="input-group has-primary">
                            <span class="input-group-addon" id="basic-addon1"><span class="fa fa-tags"></span> L&iacute;nea de Negocio: </span>
                            <select  name="lin" id="lin" required="required" data-toggle="popover" data-placement="bottom"
                                data-content="Elija ac&aacute; la l&iacute;nea de negocio y el tipo de documento v&aacute;lido"
                                class="form-control">
                                <?php
                                    $cadena ='<option value=""></option>';
                                    foreach ($linea as $key) {
                                        $cadena .='<option value="'.$key->lin_cod.'">'.$key->lin_des.'</option>';
                                    }
                                    echo $cadena;
                                ?>
                            </select>
                        </div>
                    </div>


                        <div class="col-md-6 col-sm-6 ">
                        <div class="input-group has-primary">
                            <span class="input-group-addon" id="basic-addon1"><span class="fa fa-tags"></span> Item </span>
                            <select  name="ite" id="ite" required="required" data-toggle="popover" data-placement="bottom"
                                data-content="Elija ac&aacute; la l&iacute;nea de negocio y el tipo de documento v&aacute;lido"
                                class="form-control">
                               
                                    <option value=""></option>
                              
                            </select>
                        </div>
                    </div>


                    <div class="col-md-6 col-sm-6">
                        <div class="input-group has-primary">
                            <span class="input-group-addon" id="basic-addon1"><span class="fa fa-file-text"></span> Tipo: </span>
                            <select class="form-control" name="tic" id="tic" required="required">
                                <option value=""></option>
                                <option value="2">BV</option>
                                <option value="1">FT</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                         <div class="input-group has-primary">
                            <span class="input-group-addon" id="basic-addon1"><span class="fa fa-file-text"></span> Series: </span>
                            <select class="form-control" name="sec" id="sec" required="required">
                                <option value=""></option>
                             
                            </select>
                        </div>
                    </div>
                  

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group has-primary " >
                            <span class="input-group-addon"><span class="fa fa-circle-o"></span> RUC/DNI: </span>
                         
                            <input type="number" id="tip" max="99999999999" readonly="readonly" min="1" name="tip" value="" class="form-control" autofocus="false">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="input-group has-primary " >
                            <span class="input-group-addon" ><span class="fa fa-building"></span> Emp/Cli: </span>
                            <input type="text" id="cli"  name="cli"  value="" class="form-control" autofocus="false" readonly="readonly" >
                            <input type="hidden" id="numdocum"  name="numdocum"  value="" class="form-control" autofocus="false" readonly="readonly" >
                            <input type="hidden" id="tipperso"  name="tipperso"  value="" class="form-control" autofocus="false" readonly="readonly" >
                        </div>
                    </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="input-group has-primary">
                            <span class="input-group-addon"><span class=" fa fa-calendar"></span> Fecha emisi&oacute;n: </span>
                            <input type="date" id="fec" name="fec" data-date-language="es" class="form-control" aria-describedby="basic-addon1" value="<?php echo date("Y-m-d");?>" required="required">
                        </div>
                    </div>
                    
                   
              
              
            </div>
        </form>
    </div>


 <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
               Detalle
            </h4>
        </div>
        <div class="panel-body" style="padding:0px;">

            <form id="form_det" method="post" >

        <div class="form-row">

                     <div class="form-group col-md-2">
                 <label for="inputPassword4">Serie</label>
             <select id="ser" class="form-control" name='ser' required>
              
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
                 <label for="inputPassword4">Guia</label>
             <input type="text"  required  id="gui" name="gui"  class="form-control" >
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
                                 <th >Subtotal</th>
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
                                       <td align="right" style="background-color:#337ab7; border:solid 1px #183c5d; color:#fff"><b>Subtotal</b></td>
                                       <td align="right" colspan='2' style="border:solid 1px #183c5d;"><span id="span_sub">0.00</span></td>
                                   </tr>
                                       <tr >
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                        <td></td>
                                       <td align="right" style="background-color:#337ab7; border:solid 1px #183c5d; color:#fff"><b>Igv(18%)</b></td>
                                       <td align="right" colspan='2' style="border:solid 1px #183c5d;"><span id="span_igv">0.00</span></td>
                                   </tr>
                                      <tr >
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
        <button type="button"  disabled class="form-control btn btn-primary" id="gra" >SIGUIENTE</button>
</div>
</div>
</div>

</div>
    </div>
    <script type="text/javascript">
$(document).ready( function() {
	  var tabla_detalle = $("#grilla tbody");
	  var modal_tabla = $("#grilla_det tbody");
	  
	  	  var modal_cuot = $("#grilla_cuo tbody");
	   var array=$("#arrayDet");
	   
	$("#mep").on("change",function(){
	    var id=$(this).val();
	    if(id==1){
	       $("#modal_cre").modal("show");
	        
	    }
	    
	    
	});
	
	$("#sec").on("change",function(){
	    var id=$(this).val();
	    if(id==1 || id==2){
	        $("#ser").val(1);
	    } else  if(id==3 || id==4){
	        $("#ser").val(2);
	    }else  if(id==5 || id==6){
	        $("#ser").val(5);
	    } else {
	         $("#ser").val('');
	    }
	});
	
	$("#ser").on("change",function(){
	      $("#ser").val('');
	        $("#sec").val('');
	});
	
	
		$("#mod_pas_cont").on("click",function(){
	  
	    	$("#mep").val(0);
	    
	});
	
	
	 $("#form_cuo").submit(function(e) {
      e.preventDefault();
     
      fn_adicionar_cuo();
    });


    function fn_adicionar_cuo() {
     
        cadena = "<tr>";
        cadena = cadena + "<td>"+$("#inicuo").val()+"</td>";
        cadena = cadena + "<td>"+$("#feccuo").val()+"</td>";
          cadena = cadena + "+<td>"+$("#moncuo").val()+"</td>";
      
        cadena = cadena + "<td><a class='elimina fa fa-trash'></a></td>";
        cadena = cadena + "</tr>";
       modal_cuot.append(cadena);
       $("#inicuo").val(parseInt($("#inicuo").val())+1);
       
      fn_llenarArray2();
   }

   modal_cuot.on('click','.elimina',function (){
       $(this).parents("tr").fadeOut("normal", function(){
          $(this).remove();
         fn_llenarArray2();
       })
   });
	
	
	
   function fn_llenarArray2(){
       //alert("hola");
       var tr =modal_cuot.children('tr');
       var ids = [];
       var total_general =0;

       tr.each(function(index){
           var item=tr.eq(index).find("td").eq(0).text();
           var fecha = tr.eq(index).find("td").eq(1).text();
           var monto = tr.eq(index).find("td").eq(2).text();
           

           prod = new Detalle_cuo(item,fecha,monto);//,hora,fecha
           ids.push(prod);
           total_general = total_general +parseFloat(monto);
        });

        if(ids.length==0){
            $("#array_cuo").val('');
            $("#mod_gra_cuo").attr("disabled",true);
             $("#mod_pas_cont").attr("disabled",false);
        }
        else
        {
            $("#array_cuo").attr('value',JSON.stringify(ids));
              $("#mod_gra_cuo").attr("disabled",false);
                $("#mod_pas_cont").attr("disabled",true);
        }

       console.log($("#array_cuo").val());
       $("#span_moncuo").html(total_general.toFixed(2));
   }

   function Detalle_cuo(item,fecha,monto){
       this.item = item;
        this.fecha = fecha;
       this.monto = monto;
  
   }	
	
	
	
	
	
	
	
	
	
	   
	   
$("#tic").on("change",function(){

       		var id=$(this).val();
       		  var request;
    
        if(request==true){
          request.abort();
        }
      

        request = $.ajax(
        {
            url:"<?php  echo base_url('Cguia/serie_comprobante')?>",
            type:"Post",
            dataType: "json",
            data: {'id':id}
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if(response!=null){
  			  $("#sec").html('<option></option>');
            for (var i = 0; i < response.length; i++) {
            $("#sec").append('<option  value='+response[i].sec_cod+'>'+response[i].sec_ser+'</option>');
             }
            }else{
            	  $("#sec").html('<option></option>');
            }
        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
        });

});

$("#form_det").on('submit', function(evt){
    evt.preventDefault();

     	
       		  var request;
    
        if(request==true){
          request.abort();
        }
      

        request = $.ajax(
        {
            url:"<?php  echo base_url('Cguia/verigui')?>",
            type:"Post",
            dataType: "json",
            data: $("#form_det").serialize()
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if(response!=null){
  			$("#cog").val(response.gui_cod);
  			$("#pup").val(response.partida);
  			$("#clg").val(response.cli_raz);
  			$("#pul").val(response.llegada);
  			$("#tot").val(response.gui_tot);
  			$("#modal_guia").modal("show");

            }else{

  $("#gui").css("border","2px solid red");
            }
        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
        });

  });
   function fn_revisar_duplicidad(id){
       var sw=true;
       var tr =tabla_detalle.children('tr');
       tr.each(function(index){
           if(tr.eq(index).find("td").eq(1).text()==id){
                   sw = false;
           }
       });
       return sw;
    };

 function fn_adicionar_detalle() {
        var sw = fn_revisar_duplicidad($("#gui").val());
        if(sw){
    var cadena='';
   
     var tot=parseFloat($("#tot").val());
    cadena +='<tr>';

cadena +='<td >'+$("#ser option:selected").text()+'</td>';
     cadena +='<td >'+$("#gui").val()+'</td>';
          cadena +='<td >'+$("#clg").val()+'</td>';
          cadena +='<td >'+$("#pup").val()+'</td>';
      cadena +='<td >'+$("#pul").val()+'</td>';
      cadena +='<td >'+tot+'</td>';
       cadena += '<td><input  type="hidden" class="form-control" value="'+$("#cog").val()+'" ></td>';
        cadena +="<td ><button type='button' class='view_det btn btn-success btn-sm' id='"+$("#cog").val()+"' ><span class='fa fa-eye'>  VER</span></button></td>";
    cadena +='<td><a type="button"><span class="eliminar fa fa-trash"></span></a></td>';
     cadena +='</tr>';
    tabla_detalle.append(cadena);
fn_llenarArray();
}else{
    $("#gui").val('')
}
}  
$("#form_guia").on("submit",function (e) {
    e.preventDefault();
    fn_adicionar_detalle();
    $("#modal_guia").modal("hide");
});

tabla_detalle.on('click','.eliminar',function (){
   $(this).parents("tr").fadeOut("normal", function(){
       $(this).remove();
  fn_llenarArray();
});
});

function fn_llenarArray(){
        var tr =tabla_detalle.children('tr');
        var ids = [];
    var total_general =0;
    var gui2="";
    var tot =0;

    //    var i =0;
        tr.each(function(index){
    //        i++; //codigo_sunat,codigo,cant,descripcion, precio_unit,igv_unit,valor_unit,valor_total
     
             cod=tr.eq(index).find("td").eq(6).find("input").val();
             ser=tr.eq(index).find("td").eq(0).text();
             gui=tr.eq(index).find("td").eq(1).text();
              tot=parseFloat(tr.eq(index).find("td").eq(5).text());

            det = new Detalle(cod,ser,gui);
            ids.push(det);
            total_general += tot;
          gui2+=ser+"-"+gui+",";
         });
$("#detcom").val($("#ite option:selected").text()+" DE LA(S) GUIA(S): "+gui2.slice(0,-1));
         if(ids.length==0){
            array.attr("value","");
            $("#gra").attr("disabled",true);
         }
        else{

            array.attr('value',JSON.stringify(ids));
         
          $("#gra").attr("disabled",false);
        }

        var sub=parseFloat(total_general)/1.18;
        var igv =parseFloat(total_general)-parseFloat(sub);
           $("#span_total").html(parseFloat(total_general).toFixed(2));
             $("#span_sub").html(sub.toFixed(2));
         $("#span_igv").html(igv.toFixed(2));
          $("#pvece").val(parseFloat(total_general).toFixed(2));
           $("#vvece").val(sub.toFixed(2));
           $("#igvce").val(igv.toFixed(2));
       

    console.log(array.val());
    
    }
function Detalle(cod,ser,gui){
    this.cod = cod;
    this.ser = ser;
    this.gui =gui;
}


$("#lin").on("change",function(){

       		var id=$(this).val();
       		  var request;
    
        if(request==true){
          request.abort();
        }
      

        request = $.ajax(
        {
            url:"<?php  echo base_url('Cguia/item_lnegocio')?>",
            type:"Post",
            dataType: "json",
            data: {'id':id}
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if(response!=null){
  			  $("#ite").html('<option></option>');
            for (var i = 0; i < response.length; i++) {
            $("#ite").append('<option  value='+response[i].lnc_cod+'>'+response[i].lnc_des+'</option>');
             }
            }else{
            	  $("#ite").html('<option></option>');
            }
        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
        });

});

$("#tip").on("click",function(){

$("#modal_tabcli").modal("show");

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
                  cadena += '<td>'+data[i].cli_nud+'</td>';
                    cadena += '<td><input type="hidden" value="'+data[i].tid_cod+'" class="form-control"></td>';
          
                  cadena += '</tr>';
              }
                   cadena += "<tr>";

                  cadena += '<td>OTRO</td>';
          
                  cadena += '</tr>';

              $("#grilla_clil tbody").html(cadena);
               }
               else {
                   $("#grilla_clil tbody").html('');
               }

          }
      });
    });


      $("#grilla_clil tbody").on('click','td',function () {
        var razon= $(this).parents('tr').find("td").eq(0).text();
        var doc=$(this).parents('tr').find("td").eq(9).text();
        var cli=$(this).parents('tr').find("td").eq(8).find("input").val();
         var tid=$(this).parents('tr').find("td").eq(10).find("input").val();

        if(razon=="OTRO"){
        	$("#modal_tabcli").modal("hide");
        	   $("#modalcli").modal("show");

        }else{
        $("#cli").val(razon);
        $("#tip").val(doc);

       $("#clicod").val(cli);
         $("#tipperso").val(tid);
         $("#numdocum").val(doc.length);
        $("#modal_tabcli").modal("hide");
        }
    });

$("#gra").on("click",function(){
    	$("#desarea").html($("#detcom").val());
    if($("#tic").val()!='1'){
$("#modal_grab").modal("show");
}else if($("#tic").val()=='1' && parseInt($("#numdocum").val())==11  && $("#tipperso").val()==1){
    $("#modal_grab").modal("show");
}else{
    alert("Es una Factura y tu tipo de documento no es ruc o  tu tipo de persona no es persona jurdica o el numero de documento no es igual 11 por favor modificar ");
}

});

$("#grafac").on('click',function (){
    $("#modal_grab").modal("hide");
   $("#modal_cargando").modal("show");
            var request;
            if(request==true){
              request.abort();
            }
            //$("#modal_cargando").modal("show");
            var formDataSerialized = $("#form_grabfac,#form_comprobante").serialize();
            request = $.ajax(
            {
                url:"<?php  echo base_url('Cguia/registrar_comproemit')?>",
                type:"Post",
                dataType: "json",
                data: formDataSerialized
            });
  request.done(function (response,textStatus,jqXHR)
            {console.log(response);
            if (response !=null){
            
          $("#modal_grab").modal("hide");
         
        // $("#faccod").val(response.cod);
        $("#idcomppago").val(response.cod);
    $("#monto_pagar").val( $("#span_total").html());
         envio_sunat(response.cod);
        

          $("#comemireg").html("Se emitio el comprobante N° "+response.comemit);
          $("#modal_ok").modal('show');
            }else{
                $("#modal_grab").modal("hide");
                  alert("Verifica la(s) guias ya tienen comprobantes");
            }
        
            });
            request.fail(function (jqXHR,textStatus,thrown) {
                  console.log("Error :" + jqXHR+textStatus+thrown);
                  alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
            });

            request.always(function () {
                  console.log("termino la ejecucion de ajax");
                //  $("#modal_cargando").modal("hide");
            });
        

    });

  function envio_sunat(id){




             var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Cguia/envio_sunat_factpro')?>");
                       form.setAttribute("target", "view");
                       var campo1 = document.createElement("input");
                       campo1.setAttribute("type", "hidden");
                       campo1.setAttribute("name", "id");
                       campo1.setAttribute("value",id);
                       form.appendChild(campo1);
                       document.body.appendChild(form);
                       form.submit();


  };

$("#facok").on("click",function(){
location.reload();
});
$("#facpago").on("click",function(){
  $("#modal_ok").modal('hide');
$("#modal_medio_pago").modal("show");
});

//-----------------------------------------------------------------------------------------------
$("#faccab").on('click',function (){
//location.reload();
 cab($("#faccod").val());

 //$("#facxml").attr("disabled",false);
 // $("#facpdf").attr("disabled",true);
  

   });


$("#facdet").on('click',function (){

 deta($("#faccod").val());


     });


    function cab(id){
 var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Cguia/text_cab')?>");
                       form.setAttribute("target", "view");
                       var campo1 = document.createElement("input");
                       campo1.setAttribute("type", "hidden");
                       campo1.setAttribute("name", "id");
                       campo1.setAttribute("value",id);
                       form.appendChild(campo1);
                       document.body.appendChild(form);
                       form.submit();

  };

      function deta(id){
 var form = document.createElement("form");
                       form.setAttribute("method", "post");
                       form.setAttribute("action", "<?php  echo base_url('Cguia/text_det')?>");
                       form.setAttribute("target", "view");
                       var campo1 = document.createElement("input");
                       campo1.setAttribute("type", "hidden");
                       campo1.setAttribute("name", "id");
                       campo1.setAttribute("value",id);
                       form.appendChild(campo1);
                       document.body.appendChild(form);
                       form.submit();

  };
  
    tabla_detalle.on('click','.view_det',function(){
    var id = $(this).attr('id');
    $("#modal_det").modal("show");

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
                for (var i = 0; i < response.length; i++) {
                    cadena += "<tr>";
                    cadena += '<td>' + (i+1) + '</td>';
                    cadena += '<td>' + response[i].deg_des + '</td>';
                    cadena += '<td>' + response[i].med_des + '</td>';
                    cadena += '<td>' + response[i].deg_pes + '</td>';
                    cadena += '<td>' + response[i].deg_can + '</td>';

                    cadena += '</tr>';
                    cant += parseInt(response[i].deg_can);
                    peso += parseFloat(response[i].deg_pes);
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
              console.log("termino la ejecucion de ajax");
        });   
        
        

});

        });
</script>