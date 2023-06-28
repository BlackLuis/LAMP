<div class="modal fade" id="modal_confi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
            <div class="modal-content panel-primary">
             
                        <div class="modal-header">
                              <button type="button" id="close_mod" class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                       
                        </div> <!-- modal-header -->
                        <div class="modal-body">
                    <div class="container-fluid f">
                    
                        </div>
                                            </div> <!-- modal-body -->
                        <div class="modal-footer">
                               <button type="button" class="btn  btn-primary " id="boton_agg" >Agregar</button>
                               
                 
                        </div>
               

            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->
</div>






<div class="modal fade" id="modalcli" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
            <div class="modal-content panel-primary">
                  <form role="form" action="" method="post" id="form_cli">
                        <div class="modal-header">
                              <button type="button" id="close_cli" class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                             Elija la serie
                        </div> <!-- modal-header -->
                        <div class="modal-body">
                            <div class="container-fluid">
                            

                                  <div class="form-group col-md-4 ">

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
                         

                            </div>
                        </div> <!-- modal-body -->
                        <div class="modal-footer">
                               <button type="submit" class="btn  btn-primary " id="boton_modal" >Buscar</button>
                               
                 
                        </div>
                  </form>

            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->
</div>




<div id="page-wrapper">
    <section id="history">
    <div class="titulo2">
        <h1 class='mm'>Reporte<h1>
        <h2>Seguimiento de guias <button type="button" class="btn  btn-danger " id="boton_5" >Agregar 50 guias mas </button></h2> 
    </div>
    </section>

 
         <div class="panel panel-default">
                                <div class="panel-body ">
                                    <div class="table-responsive " >
                                        <table class="table  " border="1" style="font-size:8px;" id="grilla_cuadre" >
                                        
                                        </table>
                                    </div><!-- /.table-responsive -->

</div>
</div>
<button type="button" class="btn  btn-primary " id="boton_2" >Ver Otra Serie</button>
    </div>
    
      <script type="text/javascript">
$(document).ready( function() {
      $("#modalcli").modal("show");
       var grilla_cuadre = $('#grilla_cuadre');
      
      $("#form_cli").on('submit', function(evt){
    evt.preventDefault();
    $("#boton_modal").html('Procesando...')
     var serie = $("#serg option:selected").text();
      var request;
    
        if(request==true){
          request.abort();
        }


        request = $.ajax(
        {
            url:"<?php  echo base_url('Creportes/guiastot')?>",
            type:"Post",
            dataType: "json",
           data: $("#form_cli").serialize()
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
           if(response[i].cog_est==12){
     cadena += "<td style='background-color:green; color:white ; font-size: 10px;text-align:center'>"+response[i].NumerosFaltantes+"</td>";
           }else{
                    cadena += "<td style='background-color:red;color:white ; font-size: 10px;text-align:center'>"+response[i].NumerosFaltantes+"</td>";
           }
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

          grilla_cuadre.html(cadena);   
          
         $(".mm").html("Reporte De La Serie "+serie)
           
        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
                   $("#modalcli").modal("hide");
        });
           
       });
       $("#boton_2").on("click",function(){
                   $("#modalcli").modal("show");
                     $("#boton_modal").html('Buscar')
       });
       
          $("#boton_5").on("click",function(){
              var serie = $("#serg option:selected").text()
                 
                   
                   $(".f").html("Agregar 50 guias mas a la serie "+serie);
                    $(".f").css("color","red");
                    $(".f").css('font-weight', 'bold');
                     $("#modal_confi").modal("show");
                   
                   
       });
       
            $("#boton_agg").on("click",function(){
              var serie = $("#serg").val()
                 var request;
    
        if(request==true){
          request.abort();
        }


        request = $.ajax(
        {
            url:"<?php  echo base_url('Creportes/agguia')?>",
            type:"Post",
            dataType: "json",
           data: {"ser":serie}
        });
 
                   request.done(function (response,textStatus,jqXHR)
        {
         
                location.reload();
        
           
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