<style>
    #grilla thead tr th{
        padding: 1rem 5.5rem 1rem 6rem;
        text-align: center;
    }
    #grilla tbody tr td{
        padding: 3rem .5rem 1.5rem 1rem;
        text-align: center;
    }
</style>

<div id="page-wrapper" style="margin:0;">
    <section id="history">
        <div class="titulo2">
            <h1>Traking Web<h1>
            <h2>Consulta</h2>
        </div>
    </section>    
    <div class=" modal fade bs-example-modal-lg" id="modal_gra" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                    <h4>Estas Seguro Que Desea Grabar</h4>
                </div> <!-- modal-header -->
                <form method="post" id="form_modgra">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-row">
                                <input type="hidden"   name="arrayDet" id="arrayDet"   class="form-control" >
                                <input type="hidden"  id="hpup" name="hpup"  class="form-control" >
                                <input type="hidden"  id="hpul" name="hpul"  class="form-control" >
                                <input type="hidden"  id="tot_peso" name="tot_peso"  class="form-control" >
                                <input type="hidden"  id="tot_cant" name="tot_cant"  class="form-control" >
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Fecha</label>
                                    <input type="date"  required  id="fec_tot" value="<?php echo date("Y-m-d"); ?>" name="fec_tot"  class="form-control" >
                                </div>               
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
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Orden de servicio</label>
                                    <input type="text"  required id="ordser"  name='ordser'  class="form-control" >
                                </div>                              
                                <div class="form-group col-md-4">
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
    
    <div class=" modal fade bs-example-modal-lg" id="modal_ori" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                    <h4>Origen</h4>
                </div> <!-- modal-header -->
                <form method="post" id="form_ori">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Ciudad</label>
                                    <select id="ciu" required class="form-control" name='ciu'>              
                                        <option></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Provincia</label>
                                    <select id="prov" required class="form-control" name='prov'>              
                                        <option></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Distrito</label>
                                    <select id="dis" class="form-control" required name='dis'>              
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
                <form method="post" id="form_des">
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
                                                    <th>N&#176;</th>
                                                    <th>Descripcion</th>
                                                    <th>Medida</th>
                                                    <th>Peso</th>
                                                    <th>Cantidad</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
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
               Detalle
            </h4>
        </div>
        <div class="panel-body" style="padding:0px;">
            <form id="form_det" method="post" >
                <div class="form-row">
                    <div class="form-group col-md-2" style="display:none;">
                        <label for="inputPassword4">Tipo Busqueda</label>
                        <select id="flag" class="form-control" name='flag' >
                            <!-- <option value="1">Consolidado</option> -->
                            <option value="2">Manual</option>            
                        </select>
                    </div>
                    <div class="form-group col-md-3 consoli desactive">
                        <label for="inputPassword4">Fecha</label>
                        <input type="date"    id="fecgui" name="fecgui"  class="form-control" >
                    </div>
                    <div class="form-group col-md-2 ">
                        <label for="inputPassword4">Serie (*)</label>
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
                    <div class="form-group col-md-2 manu">
                        <label for="inputPassword4">Guia (*)</label>
                        <input type="text"   id="gui" name="gui"  class="form-control" required>
                    </div>
                    <!-- Validar numero documento -->
                    <div class="form-group col-md-2">
                        <label for="inputPassword5">Tipo Cliente (*)</label>
                        <select id="tipocli" class="form-control" name='tipocli' onclick="tipoCli();" required>
                                <option value="0"></opcion>
                                <option value="1">Origen</opcion>
                                <option value="2">Destino</opcion>                       

                        </select>
                    </div>
                    <div class="form-group col-md-2" id="tdoc" name="tdoc" style="display:none;">
                        <label for="inputPassword6">Tipo Documento (*)</label>
                        <select id="tipdoc" class="form-control" name='tipdoc' onclick="tipoDoc();" required>
                            <?php
                                $opt="<option></option>";
                                foreach ($tipdoc as $key) {
                                    $opt .='<option  value="'.$key->tid_cod.'">'.$key->tid_des.'</option>';
                                }
                                echo $opt;
                            ?>

                        </select>
                    </div>
                    <div class="form-group col-md-2 manu" id="nruc" name="nruc" style="display:none;">
                        <label for="inputPassword7">N&#176; RUC (*)</label>
                        <input type="text"   id="numRuc" name="numRuc"  class="form-control">
                    </div>
                    <div class="form-group col-md-2 manu" id="ndoc" name="ndoc" style="display:none;">
                        <label for="inputPassword8">N&#176; Documento (*)</label>
                        <input type="text"   id="numDoc" name="numDoc"  class="form-control">
                    </div>
                    <!--  -->
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
                        <div class="panel-body">
                            <div class="table-responsive " >
                                <table class="table table-striped " id="grilla">
                                    <thead class="text-coorp">
                                        <tr>
                                            <th>Serie</th>
                                            <th>Guia</th>
                                            <th>Cliente</th>
                                            <th>Punto Partida</th>
                                            <th>Fecha y Hora Ingreso</th>
                                            <th>Fecha y Hora Vuelo</th>
                                            <th>Punto Llegada</th>
                                            <th>Fecha y Hora Llegada</th>                                            
                                            <th>Destinatario</th>
                                            <th>Cantidad</th>
                                            <th>Peso</th>
                                            <th>Estado</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>                        
                                    </tbody>
                                    <tfoot >
                                        <!-- <tr >
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
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
                                        </tr>  -->
                                    </tfoot>
                                </table>
                            </div><!-- /.table-responsive -->
                        </div><!-- /.panel-body -->
                    </div><!-- col-lg-7 -->
                </div><!--row derecha-->
            </div>
        <!-- <div class="form-row">
            <div class="col-md-5">
                <button type="button"  disabled class="form-control btn btn-primary" id="gra" >SIGUIENTE</button>
            </div>
        </div> -->
    </div>
</div>

<script type="text/javascript">

    function tipoCli(){
        let tipocli = document.getElementById('tipocli').value;
        if(tipocli==1){
            document.getElementById('tdoc').style.display = "block";
        }else if(tipocli==2){
            document.getElementById('tdoc').style.display = "block";
        }else{
            document.getElementById('tdoc').style.display = "none";
            document.getElementById('ndoc').style.display = "none";
            document.getElementById('nruc').style.display = "none";
        }
    }
   
    function tipoDoc(){
        let tipodoc = document.getElementById('tipdoc').value;

        
        if(tipodoc==1){
            document.getElementById('ndoc').style.display = "none";
            document.getElementById('nruc').style.display = "block";
            document.getElementById('numRuc').required = true;
            document.getElementById('numDoc').required = false;            
            document.getElementById('numDoc').value = "";
        }else if(tipodoc==2){
            document.getElementById('nruc').style.display = "none";
            document.getElementById('ndoc').style.display = "block";
            document.getElementById('numRuc').required = false;
            document.getElementById('numDoc').required = true;
            document.getElementById('numRuc').value = "";
        }else if(tipodoc==3){
            document.getElementById('nruc').style.display = "none";
            document.getElementById('ndoc').style.display = "block";
            document.getElementById('numRuc').required = false;
            document.getElementById('numDoc').required = true;
            document.getElementById('numRuc').value = "";
        }else if(tipodoc==4){
            document.getElementById('nruc').style.display = "none";
            document.getElementById('ndoc').style.display = "block";
            document.getElementById('numRuc').required = false;
            document.getElementById('numDoc').required = true;
            document.getElementById('numRuc').value = "";
        }

    }

    $(document).ready( function() {
        var tabla_detalle = $("#grilla tbody");
        var modal_tabla = $("#grilla_det tbody");
        var array=$("#arrayDet");
        ciudad();

        $("#form_det").on('submit', function(evt){            
            evt.preventDefault();     	
            var request;
            if(request==true){
                request.abort();
            }
            var formDataSerialized = $("#form_det").serialize()          
            request = $.ajax({
                url:"<?php  echo base_url('Seguimiento/veriguimani')?>",
                type:"Post",
                dataType: "json",
                data: formDataSerialized
            });            
            request.done(function (response,textStatus,jqXHR){
                if(response!=null){
                    for (var i = 0; i < response.length; i++) {                                             		
                        fn_adicionar_detalle(response[i].gui_cod, response[i].cli_raz, response[i].partida, response[i].fechaingreso,
                                    response[i].horaingreso, response[i].fechavuelo, response[i].horavuelo, response[i].llegada,
                                    response[i].fechallegada, response[i].horallegada, response[i].destinatario, response[i].gui_cto,
                                    response[i].gui_pto, response[i].seg_ser, response[i].gui_num, response[i].est_cod);
                    }
                }
            });

            request.fail(function (jqXHR,textStatus,thrown) {
                console.log("Erros :" + textStatus);
            });

            request.always(function () {
                console.log("termino la ejecucion de ajax1");
            });
        });

        function fn_adicionar_detalle(gui_cod,cli_raz,partida,fechaingreso,horaingreso,fechavuelo,horavuelo,
                                    llegada,fechallegada,horallegada,destinatario,gui_cto,gui_pto,seg_ser,
                                    gui_num,est_cod) {            
            var cadena='';   
            // var tot=parseFloat($("#tot").val());

            cadena +='<tr>';
            cadena +='<td >'+seg_ser+'</td>';
            cadena +='<td >'+gui_num+'</td>';
            cadena +='<td >'+cli_raz+'</td>';
            cadena +='<td >'+partida+'</td>';

            if(fechaingreso==null && horaingreso==null){
                cadena +='<td>-- -- -- --</td>';
            }else if(fechaingreso==null && horaingreso!=null){
                cadena +='<td>'+'-- -- '+horaingreso+'</td>';
            }else if(fechaingreso!=null && horaingreso==null){
                cadena +='<td>'+fechaingreso+' -- --'+'</td>';
            }else{
                cadena +='<td>'+fechaingreso+' '+horaingreso+'</td>';
            } 

            if(fechavuelo==null && horavuelo==null){
                cadena +='<td>-- -- -- --</td>';
            }else if(fechavuelo==null && horavuelo!=null){
                cadena +='<td>'+'-- -- '+horavuelo+'</td>';
            }else if(fechavuelo!=null && horavuelo==null){
                cadena +='<td>'+fechavuelo+' -- --'+'</td>';
            }else{
                cadena +='<td>'+fechavuelo+' '+horavuelo+'</td>';
            }

            cadena +='<td >'+llegada+'</td>';

            if(fechallegada==null && horallegada==null){
                cadena +='<td>-- -- -- --</td>';
            }else if(fechallegada==null && horallegada!=null){
                cadena +='<td>'+'-- -- '+horallegada+'</td>';
            }else if(fechallegada!=null && horallegada==null){
                cadena +='<td>'+fechallegada+' -- --'+'</td>';
            }else{
                cadena +='<td>'+fechallegada+' '+horallegada+'</td>';
            }

            cadena +='<td >'+destinatario+'</td>';
            cadena +='<td >'+gui_cto+'</td>';
            cadena +='<td >'+gui_pto+'</td>';

            if(est_cod ==3){
                cadena +=  "<td><a class='btn btn-warning' style='cursor: auto;'>ALMACEN ORIGEN</a></td>";
            }else if(est_cod ==7){
                cadena +=  "<td><a class='btn btn-primary' style='cursor: auto;'>EN TRANSITO</a></td>";
            }else if(est_cod ==6){
                cadena +=  "<td><a class='btn btn-info' style='cursor: auto;'>ALMACEN DESTINO</a></td>";
            }else if(est_cod ==8){
                cadena +=  "<td><a class='btn btn-success' style='cursor: auto;'>ENTREGADO</a></td>";
            }

            cadena +="<td ><button type='button' class='view_det btn btn-success btn-sm' id='"+gui_cod+"' ><span class='fa fa-eye'> VER</span></button></td>";
            cadena += '<td><input  type="hidden" class="form-control" value="'+gui_cod+'" ></td>';
            // cadena +='<td><a type="button"><span class="eliminar fa fa-trash"></span></a></td>';
            cadena +='</tr>';
            // tabla_detalle.append(cadena);
            tabla_detalle.html(cadena);
            // fn_llenarArray();
        }  


        tabla_detalle.on('click','.eliminar',function (){
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
            // var i =0;
            tr.each(function(index){
                // i++; //codigo_sunat,codigo,cant,descripcion, precio_unit,igv_unit,valor_unit,valor_total
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
            }else{
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
            $("#modal_det").modal("show");
            var request;
            if(request==true){
                request.abort();
            }

            request = $.ajax({
                url: "<?php  echo base_url('Seguimiento/mostrar_detmanif')?>",
                type:"Post",
                dataType:'json',
                data: {"id":id}
            });

            request.done(function (response,textStatus,jqXHR){
                if (response !=null){
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
                }else{
                    modal_tabla.html('');
                    $("#span_cantidad").html('0');
                    $("#span_peso").html('0.00');
                }
            });

            request.fail(function (jqXHR,textStatus,thrown) {
                console.log("Erros :" + textStatus);
            });

            request.always(function () {
                console.log("termino la ejecucion de ajax2");
            });   
        });

        function ciudad() {
            var request;
            if(request==true){
                request.abort();
            }
            request = $.ajax({
                url:"<?php  echo base_url('Seguimiento/ciudad')?>",
                type:"Post",
                dataType: "json"
            });
            request.done(function (response,textStatus,jqXHR){
                //console.log(response);
                if (response!=null) {
                    for (var i = 0; i < response.length; i++) {
                        $("#ciu").append('<option  value='+response[i].ciu_cod+'>'+response[i].ciu_des+'</option>');
                        $("#ciu2").append('<option  value='+response[i].ciu_cod+'>'+response[i].ciu_des+'</option>');
                    }
                }
            });
            request.fail(function (jqXHR,textStatus,thrown) {
                console.log("Error :" + jqXHR+textStatus+thrown);
                alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador1");
            });
        }

        $("#ciu").on('change',function () {
            var id=$(this).val();
            var request;
            if(request==true){
                request.abort();
            }
            request = $.ajax({
                url:"<?php  echo base_url('Seguimiento/provincia')?>",
                type:"Post",
                dataType: "json",
                data: {'id':id},
            });
            request.done(function (response,textStatus,jqXHR){
                //console.log(response);
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
                alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador2");
            });
        });

        $("#ciu2").on('change',function () {
            var id=$(this).val();
            var request;
            if(request==true){
                request.abort();
            }
            request = $.ajax({
                url:"<?php  echo base_url('Seguimiento/provincia')?>",
                type:"Post",
                dataType: "json",
                data: {'id':id},
            });
            request.done(function (response,textStatus,jqXHR){
                //console.log(response);
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
                alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador3");
            });
        });

        $("#prov").on('change',function () {
            var id=$(this).val();
            var request;
            if(request==true){
                request.abort();
            }
            request = $.ajax({
                url:"<?php  echo base_url('Seguimiento/distrito')?>",
                type:"Post",
                dataType: "json",
                data: {'id':id},
            });
            request.done(function (response,textStatus,jqXHR){
                //console.log(response);
                if (response!=null) {
                    $("#dis").html('<option></option>');
                    for (var i = 0; i < response.length; i++) {
                        $("#dis").append('<option  value='+response[i].dis_cod+'>'+response[i].dis_des+'</option>');
                    }
                }
            });

            request.fail(function (jqXHR,textStatus,thrown) {
                console.log("Error :" + jqXHR+textStatus+thrown);
                alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador4");
            });
        });

        $("#prov2").on('change',function () {
            var id=$(this).val();
            var request;
            if(request==true){
                request.abort();
            }
            request = $.ajax({
                url:"<?php  echo base_url('Seguimiento/distrito')?>",
                type:"Post",
                dataType: "json",
                data: {'id':id},
            });
            request.done(function (response,textStatus,jqXHR){
                //console.log(response);
                if (response!=null) {    
                    $("#dis2").html('<option></option>');
                    for (var i = 0; i < response.length; i++) {
                        $("#dis2").append('<option  value='+response[i].dis_cod+'>'+response[i].dis_des+'</option>');
                    }
                }
            });
            request.fail(function (jqXHR,textStatus,thrown) {
                console.log("Error :" + jqXHR+textStatus+thrown);
                alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador5");
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

        // $("#form_modgra").on("submit",function (e) {
        //     e.preventDefault();
        //     $("#modal_gra").modal("hide");
        //     $("#modal_cargando").modal("show");
        //     var request;
        //     if(request==true){
        //         request.abort();
        //     }
        //     request = $.ajax({
        //         url:"<?php  echo base_url('Cguia/grabmani')?>",
        //         type:"Post",
        //         dataType: "json",
        //         data: $("#form_modgra").serialize(),
        //     });
        //     request.done(function (response,textStatus,jqXHR){
        //         //console.log(response);
        //         if (response!=null) {
        //             location.reload();
        //         }
        //     });
        //     request.fail(function (jqXHR,textStatus,thrown) {
        //         console.log("Error :" + jqXHR+textStatus+thrown);
        //         alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador6");
        //     });
        // });

        $("#tit").on('change',function () {
            var id=$(this).val();
            var request;
            if(request==true){
                request.abort();
            }
            request = $.ajax({
                url:"<?php  echo base_url('Cguia/tran_emp')?>",
                type:"Post",
                dataType: "json",
                data: {'id':id}
            });
            request.done(function (response,textStatus,jqXHR){
                $("#emp_vi").html('<option></option>');
                //console.log(response);
                if (response!=null) {
                    for (var i = 0; i < response.length; i++) {
                        $("#emp_vi").append('<option  value='+response[i].trv_cod+'>'+response[i].trv_des+'</option>');
                    }
                }
            });
            request.fail(function (jqXHR,textStatus,thrown) {
                    console.log("Error :" + jqXHR+textStatus+thrown);
                    alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador7");
            });
        });

        // $("#flag").on("change",function(){
        //     if($(this).val()==1){
        //         $(".consoli").removeClass('desactive');
        //         $(".manu").addClass('desactive');
        //     }else{
        //         $(".consoli").addClass('desactive');
        //         $(".manu").removeClass('desactive');
        //     }
        // });
        $("#flag").on("change",function(){
            if($(this).val()==2){
                $(".consoli").addClass('desactive');
                $(".manu").removeClass('desactive');
               
            }else{
                $(".consoli").removeClass('desactive');
                $(".manu").addClass('desactive');
            }
        });
    });
</script>