

 
    <div id="page-wrapper" style="margin:0;">
        <section id="history">
            <div class="titulo2">
                <h1>Seguimiento<h1>
                <h2>ACTUALIZAR DESTINO</h2>
            </div>
        </section>
        <div class="panel panel-primary" >
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title" >
                    Buscar Guia
                </h4>
           </div>
           <div class="panel-body" style="padding:0px;">
                <form id="form_bus" method="post">      
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
                                <th>Destino</th>
                                <th>Estado</th>
                                <!-- <th></th> -->
                            </tr>
                        </thead>
                        <tbody >
                        </tbody>
                        <tfoot >
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
    <script type="text/javascript">
    /*------- BUSQUEDA DE GUIA SEGUIMIENTO ------*/
    $(document).ready( function() {
	    var grilla_cuadre = $('#grilla_cuadre tbody');
        $("#form_bus").on("submit",function (e) {
        e.preventDefault();
        var request;
    
        if(request==true){
            request.abort();
        }
         var formDataSerialized = $("#form_bus").serialize();

        request = $.ajax(
        {
            url:"<?php  echo base_url('Seguimiento/busguia')?>",
            type:"Post",
            dataType: "json",
            data: formDataSerialized
        });

        request.done(function (response,textStatus,jqXHR)
        {
            if(response!=null){
                var cadena="";
                for (var i = 0; i < response.length; i++) {
                    cadena +="<tr>";
                    cadena += "<td>"+response[i].cli_raz+"</td>";
                    cadena += "<td>"+response[i].inicio+"</td>";
                    cadena += "<td>"+response[i].destino+"</td>";
                    // if(response[i].est_cod ==3){
                    //     cadena +=  "<td> <select id='est' cod='"+response[i].gui_cod+"' class='form-control input-sm'><option value='3' selected>ALMACEN ORIGEN</option><option value='7'>EN TRANSITO</option><option value='6'>ALMACEN DESTINO</option><option value='8'>ENTREGADO</option></select></td>";
                    // }else if(response[i].est_cod ==7){
                    //     cadena +=  "<td> <select id='est' cod='"+response[i].gui_cod+"' class='form-control input-sm'><option value='3'>ALMACEN ORIGEN</option><option value='7' selected>EN TRANSITO</option><option value='6'>ALMACEN DESTINO</option><option value='8'>ENTREGADO</option></select></td>";
                    // }else if(response[i].est_cod ==6){
                    //     cadena +=  "<td> <select id='est' cod='"+response[i].gui_cod+"' class='form-control input-sm'><option value='3'>ALMACEN ORIGEN</option><option value='7' >EN TRANSITO</option><option value='6' selected>ALMACEN DESTINO</option><option value='8'>ENTREGADO</option></select></td>";
                    // }else if(response[i].est_cod ==8){
                    //     cadena +=  "<td> <select id='est' cod='"+response[i].gui_cod+"' class='form-control input-sm'><option value='3'>ALMACEN ORIGEN</option><option value='7'>EN TRANSITO</option><option value='6'>ALMACEN DESTINO</option><option value='8' selected>ENTREGADO</option></select></td>";
                    // }

                    if(response[i].est_cod ==3){
                        cadena +=  "<td><a class='btn btn-warning' style='cursor: auto;'>ALMACEN ORIGEN</a></td>";
                    }else if(response[i].est_cod ==7){
                        cadena +=  "<td><a class='btn btn-primary' style='cursor: auto;'>EN TRANSITO</a></td>";
                    }else if(response[i].est_cod ==6){
                        cadena +=  "<td><a class='btn btn-info' style='cursor: auto;'>ALMACEN DESTINO</a></td>";
                    }else if(response[i].est_cod ==8){
                        cadena +=  "<td><a class='btn btn-success' style='cursor: auto;'>ENTREGADO</a></td>";
                    }

                    // cadena +="<td><button type='button' class='form-control btn btn-coorp btn-xs cargar' id='"+response[i].gui_cod+"'><span class='fa fa-upload'></span> </button></td>";
                    cadena += "</tr>";                   
                }
                grilla_cuadre.html(cadena);
               
            }else {
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
    /*------- FIN BUSQUEDA DE GUIA SEGUIMIENTO ------*/

       grilla_cuadre.on('change','#est',function () {
       		var id=$(this).attr('cod');
       		var est=$(this).val();
       		  var request;
    
        if(request==true){
          request.abort();
        }
      

        request = $.ajax(
        {
            url:"<?php  echo base_url('Cguia/modest')?>",
            type:"Post",
            dataType: "json",
            data: {'id':id,'est':est}
        });

        request.done(function (response,textStatus,jqXHR)
        {
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
       
       //aca
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
    // Código a ejecutar cuando se detecta un cambio de archivO
    readImage(this);
  });

  $('#submit').submit(function(e){
            e.preventDefault(); 
            $("#modal_subir").modal("hide");
               $("#modal_cargando").modal("show");
                 $.ajax({
                     url:'<?php  echo base_url('Cguia/do_upload')?>',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                         location.reload();
;                   }
                 });
            });
//

        });
</script>


