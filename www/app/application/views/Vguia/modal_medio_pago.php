<div class="modal fade" id="modal_medio_pago" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" id="close_modifica_solicitud" class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              <h4  class='text-coorp'>REGISTRAR MEDIO DE PAGO</h4>
                        </div> <!-- modal-header -->
                        <form method="post" id='form_medio_pago'>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group has-coorpinv">
                                                <span class="input-group-addon " id="basic-addon1"> Monto a Pagar: </span>
                                                <input type="text" id='monto_pagar' value="" readonly='readonly' class="form-control">
                                            </div>
                                        </div>
                                            <div class="col-md-3">
                                            <div class="input-group has-primary">
                                                <span class="input-group-addon " id="basic-addon1"> Moneda: </span>
                                               <select class="form-control" required="required" name="mp_mone" id="mp_mone">
                                                   <option value="soles">S/</option>
                                                   <option value="dolares">$</option>
                                                   </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="hidden" id='tipo_transaccion' value="">
                                            <input type="hidden" name="array_pago" id='array_pago' value="">
                                            <input type="hidden" name="idcomppago" id='idcomppago' value="">
                                             <input type="hidden" name="flagest" id='flagest' value="">
                                            <div class="input-group has-primary">
                                                <span class="input-group-addon " id="basic-addon1"><span class=" "></span> Medio de Pago</span>
                                                <select class="form-control" required="required" name="idMedio_pago" id="idMedio_pago">
                                                    <?php
                                                    $opt="<option value=''></option>";
                                                    foreach ($medio_pago as $key){
                                                        $opt .="<option value=".$key->idTipo.">".$key->descripcion."</option>";
                                                    }
                                                    echo $opt;
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group has-primary">
                                                <span class="input-group-addon " id="basic-addon1"> Monto: </span>
                                                <input type="text" id="mp_monto" class="form-control" required='required'>
                                            </div>
                                        </div>
                                              <div class="col-md-4">
                                            <div class="input-group has-primary">
                                                <span class="input-group-addon " id="basic-addon1"> Fecha: </span>
                                                <input type="date" id="mp_fecha" name="mp_fecha" class="form-control" value="<?php echo date("Y-m-d");?>" required='required'>
                                            </div>
                                        </div>
                                          
                                    </div>
                                    <div id='div_no_efectivo'>
                                        <div class="row">
                                            <div class="col-md-6" id='div_tarjeta'>
                                                <div class="input-group has-primary" id="div_tipo_tarjeta" >
                                                    <span class="input-group-addon " id="basic-addon1"><span class='fa fa-credit-card'></span> Tipo: </span>
                                                    <select class="form-control" required="required" id='idTipo_tarjeta' name="idTipo_tarjeta">
                                                        <?php
                                                        $opt="";
                                                        foreach ($tipo_tarjeta as $key){
                                                            $opt .="<option value=".$key->idTipo.">".$key->descripcion."</option>";
                                                        }
                                                        echo $opt;
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group has-primary">
                                                    <span class="input-group-addon" id="basic-addon1"><span class='fa fa-bank'></span> Banco: </span>
                                                    <select class="form-control" required="required" id="idBanco" name="idBanco">
                                                        <?php
                                                        $opt="<option value=''></option>";
                                                        foreach ($banco as $key){
                                                            $opt .="<option value=".$key->idBanco.">".$key->descripcion."</option>";
                                                        }
                                                        echo $opt;
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group has-primary">
                                                    <span class="input-group-addon" id="basic-addon1"><span class='fa fa-slack'></span id='span_descripcion_id'> Nro de Voucher: </span>
                                                    <input type="text" class="form-control" maxlength="100" required='required' id='nro_id' name="nro_id" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group has-primary">
                                                    <span class="input-group-addon" id="basic-addon1"><span class='glyphicon glyphicon-time'></span > Hora de emisi&oacute;n: </span>
                                                    <input type="time" class="form-control" required='required' name="hora_emision" id="hora_emision" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group has-primary">
                                                    <span class="input-group-addon " id="basic-addon1"><span class='fa fa-calendar'></span > Fecha de emisi&oacute;n: </span>
                                                    <input type="text" class="form-control" required='required' name="fecha_emision" id="fecha_emision" name="nro_doc" value="">
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-md-offset-10">
                                            <div class="input-group has-primary">
                                                <button type="submit" class='form-control btn btn-primary' name="button"><span class='fa fa-plus'></span> Adicionar</button>
                                            </div>
                                        </div>
                                    </div>
                                </br>

                                    <div class="col-md-12 ">
                                        <div class="row" >
                                            <div class="panel panel-default">
                                                <div class="panel-body mitabla">
                                                    <div class="table-responsive " >
                                                        <table class="table table-striped " id="grilla_pago" style="font-size:.8em">
                                                            <thead>
                                                                <tr>
                                                                    <th>Medio Pago</th>
                                                                    <th>Monto</th>
                                                                    <th>Tipo Tarjeta</th>
                                                                    <th>Banco</th>
                                                                    <th>Voucher</th>
                                                                    <th>Fecha</th>
                                                                    <th>s/.</th> -->
                                                                    <th></th>
                                                                </tr>
                                                           </thead>
                                                           <tbody >

                                                           </tbody>
                                                           <tfoot >
                                                               <tr>
                                                                   <th style="text-align:right; padding-right:10px;">Total :</th>
                                                                   <th style="text-align:center; padding-right:20px;"><span id="mp_total"></span> </th>
                                                                   <th></th>
                                                                   <th></th>
                                                                   <th></th>
                                                                     <th></th>
                                                                   <th></th>
                                                                   <!-- <th></th>
                                                                   <th></th> -->
                                                                   <th></th>
                                                               </tr>
                                                           </tfoot>
                                                        </table>
                                                    </div><!-- /.table-responsive -->
                                                </div><!-- /.panel-body -->

                                            </div><!-- col-lg-7 -->
                                        </div><!--row derecha-->
                                    </div>
                                    <br>
                                </div>
                            </div> <!-- modal-body -->
                            <div class="modal-footer">
                                    <button type="button" class="  btn btn-info" id="registrar_medio"  ><span class="" > Registrar</span></button>
                                    <button type="button" class="  btn btn-danger"  data-dismiss="modal"><span class="" >Cerrar</span></button>
                            </div>
                        </form>

            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->
</div>
<script type="text/javascript">
$(document).ready( function() {
    var now = new Date();
    var idMedio_pago = $("#idMedio_pago");
    var idBanco = $("#idBanco");
    var monto = $("#mp_monto");
    var div_no_efectivo = $("#div_no_efectivo");
    var div_tarjeta = $("#div_tarjeta");
    var idTipo_tarjeta = $("#idTipo_tarjeta");
    var span_descripcion_id = $("#span_descripcion_id");
    var grilla_pago = $("#grilla_pago tbody");
    // var fecha_emision = $('#fecha_emision');
    var today = now.getFullYear() + '-' + (now.getMonth() + 1) + '-' + now.getDate();

    // fecha_emision.attr('value',today);
    //
    // fecha_emision.datepicker({
    //   format: 'yyyy-mm-dd',
    //   startDate: '-7d',
    //   endDate:'0d'
    // });


    idMedio_pago.on('change',function () {
        var val = $(this).val();
        if (val=='1') {
            div_no_efectivo.find('input,select').removeAttr('required');
            div_no_efectivo.addClass('desactive');
        }
        else {
            div_no_efectivo.find('input,select').attr('required','required');
            div_no_efectivo.removeClass('desactive');
            if (val=='4') {
                span_descripcion_id.html('Nro de Cheque');
                div_tarjeta.addClass('desactive');
                idTipo_tarjeta.removeAttr('required');
            }
            else {
                span_descripcion_id.html('Nro de Voucher');
                div_tarjeta.removeClass('desactive');
                idTipo_tarjeta.attr('required','required');
            }
        }
    });

    $("#form_medio_pago").submit(function(e) {
      e.preventDefault();
      fn_adicionar_pago();
    });

    function fn_adicionar_pago() {
        cadena = "<tr>";
        cadena = cadena + "<td><input class='form-control' idMedio_pago='"+idMedio_pago.val()+"' value='" + $("#idMedio_pago option:selected").text() + "' readonly='readonly'></td>";
        cadena = cadena + "<td><input class='form-control' value='" + monto.val() + "' readonly='readonly'></td>";
        if (idMedio_pago.val()=='1' || idMedio_pago.val()=='4') {
            cadena = cadena + "<td><input class='form-control' idTipo_tarjeta='' value='' readonly='readonly'></td>";
        }
        else {
            cadena = cadena + "<td><input class='form-control' idTipo_tarjeta='"+idTipo_tarjeta.val()+"' value='"+$("#idTipo_tarjeta option:selected").text()+"' readonly='readonly'></td>";
        }
        cadena = cadena + "<td><input class='form-control' idBanco='"+idBanco.val()+"' value='"+$("#idBanco option:selected").text()+"' readonly='readonly'></td>";
        cadena = cadena + "<td><input class='form-control' value='"+$("#nro_id").val()+"' readonly='readonly'></td>";
         cadena = cadena + "<td><input class='form-control' value='"+$("#mp_fecha").val()+"' readonly='readonly'></td>";
        cadena = cadena + "<td><input class='form-control' value='"+$("#mp_mone").val()+"' readonly='readonly'></td>";
        cadena = cadena + "<td><a class='elimina fa fa-trash'></a></td>";
        cadena = cadena + "</tr>";
        grilla_pago.append(cadena);
        fn_llenarArray();
   }

   grilla_pago.on('click','.elimina',function (){
       $(this).parents("tr").fadeOut("normal", function(){
           $(this).remove();
           fn_llenarArray();
       })
   });

   function fn_llenarArray(){
       //alert("hola");
       var tr =grilla_pago.children('tr');
       var ids = [];
       var total_general =0;

       tr.each(function(index){
           var medio_pago=tr.eq(index).find("td").eq(0).find('input').attr('idMedio_pago');
           var monto = tr.eq(index).find("td").eq(1).find('input').attr('value');
           var tipo_t = tr.eq(index).find("td").eq(2).find('input').attr('idTipo_tarjeta');
           var banco = tr.eq(index).find("td").eq(3).find('input').attr('idBanco');
           var nro_doc = tr.eq(index).find("td").eq(4).find('input').attr('value');
           var fecha = tr.eq(index).find("td").eq(5).find('input').attr('value');
           var moneda = tr.eq(index).find("td").eq(6).find('input').attr('value');

           prod = new Detalle_pago(medio_pago,monto,tipo_t,banco,nro_doc,fecha,moneda);//,hora,fecha
           ids.push(prod);
           total_general = total_general +parseFloat(monto);
        });

        if(ids.length==0){
            $("#array_pago").val('');
        }
        else
        {
            $("#array_pago").attr('value',JSON.stringify(ids));
        }

       console.log($("#array_pago").val());
       $("#mp_total").html(total_general.toFixed(2));
   }

   function Detalle_pago(medio_pago,monto,tipo_tarjeta,banco,nro_doc,fecha,moneda){
       this.medio_pago = medio_pago;
       this.monto = monto;
       this.tipo_tarjeta = tipo_tarjeta;
       this.banco = banco;
       this.nro_doc = nro_doc;
       this.fecha = fecha;
        this.moneda = moneda;
   }


   $("#registrar_medio").on("click",function(){
   if (parseFloat($("#mp_total").html())<=parseFloat($("#monto_pagar").val())) {
        if (parseFloat($("#mp_total").html())<parseFloat($("#monto_pagar").val())) {
            $("#flagest").val(9);
                    
}else{

$("#flagest").val(10);
}
       
  var request;
        if(request==true){
          request.abort();
        }
        $("#modal_cargando").modal("show");
        //juan
        var formDataSerialized = $("#form_medio_pago").serialize();
      

        request = $.ajax(
        {
            url:"<?php  echo base_url('Cguia/registrar_pago')?>",
            type:"Post",
            dataType: "json",
            data: formDataSerialized
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

        request.always(function () {
              console.log("termino la ejecucion de ajax");
          
              $("#modal_cargando").modal("hide");
        });

         }
   });



});
</script>
