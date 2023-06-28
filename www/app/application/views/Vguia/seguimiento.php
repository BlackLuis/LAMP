<style>
    #grilla_cuadre thead tr th{
        padding: 1rem 5.5rem 1rem 6rem;
    }
    #grilla_cuadre tbody tr td{
        padding: 3rem .5rem 1.5rem 1rem;
        text-align: center;
    }
</style>
 
 
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="modal_subir" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content panel-primary">
                <div class="modal-header panel-heading">
                    <button type="button"  class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                    IMAGEN DE LA GUIA
                </div> <!-- modal-header -->              
                <form id="submit" >
                    <div class="modal-body">
                        <input type="hidden" id="cod" name="cod" >
                        <input type='file' id="imgInp" name="file" />
                        <br>
                        <img id="blah" src="https://via.placeholder.com/150" alt="Tu imagen" style="width: 500px;  height: 500px;  margin-top: 25px; " />
                    </div> <!-- modal-body -->                         
                    <div class="modal-footer">
                        <button class="btn btn-primary" id="btn_upload" type="submit">Subir</button>
                    </div> 
                </form>                       
            </div> <!-- modal-content -->
        </div><!-- modal-dialog  -->
    </div> 
 
    <div id="page-wrapper">
        <section id="history">
            <div class="titulo2">
                <h1>Seguimiento<h1>
                <h2>ACTUALIZAR DESTINO</h2>
            </div>
        </section>

        <div class="panel panel-primary" >
            <div  class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title" >
                    Buscar Guia
                </h4>
            </div>
            <div class="panel-body" style="padding:0px;">
                <form id="form_bus" method="post" >      
                    <div class="form-row">
                        <div class="form-group col-md-3">
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
                        <div class="form-group col-md-3">
                            <label for="inputPassword4">N&#176; Documento</label>
                            <input type="text" required  id="ndo" name="ndo" class="form-control" >
                        </div>
                        <div class="form-group col-md-3">
                            <label><br></label>
                            <button type="submit"  class="form-control  btn btn-primary"  id="bus">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>  
        </div>
        <div class="panel panel-default">
            <div class="panel-body mitabla">
                <div class="table-responsive " >
                    <table class="table table-striped " id="grilla_cuadre" >
                        <thead>
                            <tr>                                            
                                <th>Cliente</th>
                                <th>Inicio</th>
                                <th>Fecha Ingreso</th>
                                <th>Hora Ingreso</th>
                                <th>Fecha Vuelo</th>
                                <th>Hora Vuelo</th>
                                <th>Destino</th>
                                <th>Fecha Llegada</th>
                                <th>Hora Llegada</th>
                                <th>Destinatario</th>
                                <th>Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>                              
                        </tbody>
                        <tfoot>  
                        </tfoot>
                    </table>
                </div><!-- /.table-responsive -->
            </div>
        </div>
    </div>

<script type="text/javascript">
    $(document).ready( function() {
	    var grilla_cuadre = $('#grilla_cuadre tbody');
        $("#form_bus").on("submit",function (e) {
            e.preventDefault();
            var request;
    
            if(request==true){
                request.abort();
            }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
            var formDataSerialized = $("#form_bus").serialize();
            request = $.ajax({
                url:"<?php  echo base_url('Cguia/busguia')?>",
                type:"Post",
                dataType: "json",
                data: formDataSerialized
            });

            request.done(function (response,textStatus,jqXHR){
                if(response!=null){
                    var cadena="";
                    for (var i = 0; i < response.length; i++) {
                        cadena +="<tr>";
                        cadena += "<td>"+response[i].cli_raz+"</td>";
                        cadena += "<td>"+response[i].inicio+"</td>";
                        //---- aumentado fechas y horas
                        cadena += "<td><input type='date' id='feching' name='feching' cod='"+response[i].gui_cod+"' value='"+response[i].fechaingreso+"'></td>";
                        cadena += "<td><input type='time' id='horaing' name='horaing' cod='"+response[i].gui_cod+"' value='"+response[i].horaingreso+"'></td>";
                        cadena += "<td><input type='date' id='fechvuel' name='fechvuel' cod='"+response[i].gui_cod+"' value='"+response[i].fechavuelo+"'></td>";
                        cadena += "<td><input type='time' id='horavuel' name='horavuel' cod='"+response[i].gui_cod+"' value='"+response[i].horavuelo+"'></td>";
                        //----
                        cadena += "<td>"+response[i].destino+"</td>";
                        //---- aumentado fechas y horas de llegada
                        cadena += "<td><input type='date' id='fechlleg' name='fechlleg' cod='"+response[i].gui_cod+"' value='"+response[i].fechallegada+"'></td>";
                        cadena += "<td><input type='time' id='horalleg' name='horalleg' cod='"+response[i].gui_cod+"' value='"+response[i].horallegada+"'></td>";
                        //----                       
                        cadena += "<td>"+response[i].destinatario+"</td>";
                        if(response[i].est_cod ==3){
                            cadena +=  "<td style='column-width: 100px;'> <select id='est' cod='"+response[i].gui_cod+"' class='form-control input-sm'><option value='3' selected>ALMACEN ORIGEN</option><option value='7'>EN TRANSITO</option><option value='6'>ALMACEN DESTINO</option><option value='8'>ENTREGADO</option></select></td>";
                        }else if(response[i].est_cod ==7){
                            cadena +=  "<td style='column-width: 100px;'> <select id='est' cod='"+response[i].gui_cod+"' class='form-control input-sm'><option value='3'>ALMACEN ORIGEN</option><option value='7' selected>EN TRANSITO</option><option value='6'>ALMACEN DESTINO</option><option value='8'>ENTREGADO</option></select></td>";
                        }else if(response[i].est_cod ==6){
                            cadena +=  "<td style='column-width: 100px;'> <select id='est' cod='"+response[i].gui_cod+"' class='form-control input-sm'><option value='3'>ALMACEN ORIGEN</option><option value='7' >EN TRANSITO</option><option value='6' selected>ALMACEN DESTINO</option><option value='8'>ENTREGADO</option></select></td>";
                        }else if(response[i].est_cod ==8){
                            cadena +=  "<td style='column-width: 100px;'> <select id='est' cod='"+response[i].gui_cod+"' class='form-control input-sm'><option value='3'>ALMACEN ORIGEN</option><option value='7'>EN TRANSITO</option><option value='6'>ALMACEN DESTINO</option><option value='8' selected>ENTREGADO</option></select></td>";
                        }
                        cadena +="<td><button type='button' class='form-control btn btn-coorp btn-xs cargar' id='"+response[i].gui_cod+"'><span class='fa fa-upload'></span> </button></td>";
                        cadena += "</tr>";                    
                    }
                    grilla_cuadre.html(cadena);                
                }else{
                    grilla_cuadre.html('');
                }
            });

            request.fail(function (jqXHR,textStatus,thrown) {
                console.log("Erros :" + textStatus);
            });

            request.always(function () {
                console.log("termino la ejecucion de ajax");
            });
        });

        // modificar la fecha de ingreso del seguimiento
        grilla_cuadre.on('change','#feching',function(){
            var id=$(this).attr('cod');
       		var feching=$(this).val();
       		var request;
    
            if(request==true){
                request.abort();
            }
            // console.log(feching);
            request = $.ajax({
                url:"<?php  echo base_url('Cguia/modfeching')?>",
                type:"Post",
                dataType: "json",
                data:  {'id':id,
                        'feching':feching
                        }
            });

            request.done(function (response,textStatus,jqXHR){
                if(response==true){
                    alert("Se Modifico La fecha de ingreso De La Guia");
                }
            });

            request.fail(function (jqXHR,textStatus,thrown) {
                console.log("Erros :" + textStatus);
            });

            request.always(function () {
                console.log("termino la ejecucion de ajax");
            });

        });

        // modificar la hora de ingreso de la guia 
        grilla_cuadre.on('change','#horaing',function(){
            var id=$(this).attr('cod');
       		var horaing=$(this).val();
       		var request;
    
            if(request==true){
                request.abort();
            }
            request = $.ajax({
                url:"<?php  echo base_url('Cguia/modhoraing')?>",
                type:"Post",
                dataType: "json",
                data:  {'id':id,
                        'horaing':horaing
                        }
            });

            request.done(function (response,textStatus,jqXHR){
                if(response==true){
                    alert("Se Modifico La Hora de ingreso De La Guia");
                }
            });

            request.fail(function (jqXHR,textStatus,thrown) {
                console.log("Erros :" + textStatus);
            });

            request.always(function () {
                console.log("termino la ejecucion de ajax");
            });

        });

        // modificar la fecha del vuelo del seguimiento
        grilla_cuadre.on('change','#fechvuel',function(){
            var id=$(this).attr('cod');
       		var fechvuel=$(this).val();
       		var request;
    
            if(request==true){
                request.abort();
            }
            request = $.ajax({
                url:"<?php  echo base_url('Cguia/modfechvuel')?>",
                type:"Post",
                dataType: "json",
                data:  {'id':id,
                        'fechvuel':fechvuel
                        }
            });

            request.done(function (response,textStatus,jqXHR){
                if(response==true){
                    alert("Se Modifico La fecha del Vuelo");
                }
            });

            request.fail(function (jqXHR,textStatus,thrown) {
                console.log("Erros :" + textStatus);
            });

            request.always(function () {
                console.log("termino la ejecucion de ajax");
            });

        });
        // modificar la hora del vuelo
        grilla_cuadre.on('change','#horavuel',function(){
            var id=$(this).attr('cod');
       		var horavuel=$(this).val();
       		var request;
    
            if(request==true){
                request.abort();
            }
            console.log(horavuel);
            request = $.ajax({
                url:"<?php  echo base_url('Cguia/modhoravuel')?>",
                type:"Post",
                dataType: "json",
                data:  {'id':id,
                        'horavuel':horavuel
                        }
            });

            request.done(function (response,textStatus,jqXHR){
                if(response==true){
                    alert("Se Modifico La Hora del vuelo");
                }
            });

            request.fail(function (jqXHR,textStatus,thrown) {
                console.log("Erros :" + textStatus);
            });

            request.always(function () {
                console.log("termino la ejecucion de ajax");
            });

        });

        // modificar la fecha de llegada 
        grilla_cuadre.on('change','#fechlleg',function(){
            var id=$(this).attr('cod');
       		var fechlleg=$(this).val();
       		var request;
    
            if(request==true){
                request.abort();
            }
            request = $.ajax({
                url:"<?php  echo base_url('Cguia/modfechlleg')?>",
                type:"Post",
                dataType: "json",
                data:  {'id':id,
                        'fechlleg':fechlleg
                        }
            });

            request.done(function (response,textStatus,jqXHR){
                if(response==true){
                    alert("Se Modifico La fecha de llegada");
                }
            });

            request.fail(function (jqXHR,textStatus,thrown) {
                console.log("Erros :" + textStatus);
            });

            request.always(function () {
                console.log("termino la ejecucion de ajax");
            });

        });
        // modificar la hora de llegada
        grilla_cuadre.on('change','#horalleg',function(){
            var id=$(this).attr('cod');
       		var horalleg=$(this).val();
       		var request;
    
            if(request==true){
                request.abort();
            }
            request = $.ajax({
                url:"<?php  echo base_url('Cguia/modhoralleg')?>",
                type:"Post",
                dataType: "json",
                data:  {'id':id,
                        'horalleg':horalleg
                        }
            });

            request.done(function (response,textStatus,jqXHR){
                if(response==true){
                    alert("Se Modifico La Hora de llegada");
                }
            });

            request.fail(function (jqXHR,textStatus,thrown) {
                console.log("Erros :" + textStatus);
            });

            request.always(function () {
                console.log("termino la ejecucion de ajax");
            });

        });

        // modificar el estado de la guia
        grilla_cuadre.on('change','#est',function () {
       		var id=$(this).attr('cod');
       		var est=$(this).val();
       		var request;
    
            if(request==true){
                request.abort();
            }
      

            request = $.ajax({
                url:"<?php  echo base_url('Cguia/modest')?>",
                type:"Post",
                dataType: "json",
                data:  {'id':id,
                        'est':est
                        }
            });

            request.done(function (response,textStatus,jqXHR){
                if(response==true){
                    alert("Se Modifico El Destino De La Guia");
                }
            });

            request.fail(function (jqXHR,textStatus,thrown) {
                console.log("Erros :" + textStatus);
            });

            request.always(function () {
                console.log("termino la ejecucion de ajax");
            });

        });
       
    //aca se modifica la imagen del seguimiento
    grilla_cuadre.on('click','.cargar',function () {
        $("#modal_subir").modal("show");
        $("#cod").val($(this).attr('id'));
    });

    function readImage (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result); // Renderizamos la imagen
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function () {
        // C¨®digo a ejecutar cuando se detecta un cambio de archivO
        readImage(this);
    });

    $('#submit').submit(function(e){
        e.preventDefault(); 
        $("#modal_subir").modal("hide");
        $("#modal_cargando").modal("show");
        $.ajax({
            url:'<?php echo base_url('Cguia/do_upload')?>',
            type:"post",
            data:new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function(data){
                location.reload();
            }
        });
    });
    //

});
</script>