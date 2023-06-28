<div class="modal fade" id="modalcli" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
            <div class="modal-content panel-primary">
                  <form role="form" action="" method="post" id="form_cli">
                        <div class="modal-header">
                              <button type="button" id="close_cli" class = "close" data-dismiss="modal" aria-hidden="true" name="button">&times</button>
                              Cliente
                        </div> <!-- modal-header -->
                        <div class="modal-body">
                            <div class="container-fluid">
                                  <div class="col-md-4">
                                    <div class="input-group has-primary " >
                                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-credit-card"> </span> </span>
                                        <select class="form-control" name="tip_cod" id="tip_cod">

                                            <option value="1">PERSONA JURIDICA</option>
                                            <option value="2">PERSONA NATURAL</option>
                                            </select>
                                    </div>
                                </div>
                                <div  class= "col-lg-6 col-sm-12">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "apPaterno_span" ><span class=" fa fa-user"></span> </span>
                                        <input  type= "text"  class= "form-control" id="cli_app" val="" readonly placeholder= "Ap. Paterno"  name ="cli_app" aria-describedby= "basic-addon1" >
                                    </div>
                                </div>
                                <div  class= "col-lg-6 col-sm-12">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "apMaterno_span" ><span class=" fa fa-user"></span> </span>
                                        <input  type= "text"  class= "form-control" id="cli_apm" val="" readonly placeholder= "Ap. Materno"  name ="cli_apm" aria-describedby= "basic-addon1" >
                                    </div>
                                </div>
                                <div  class= "col-lg-6 col-sm-12">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "nombre_span" ><span class=" fa fa-user"></span> </span>
                                        <input  type= "text"  name="cli_nom" id="cli_nom" class= "form-control"  readonly placeholder= "Nombre(s)"  aria-describedby= "basic-addon1" >
                                        
                                    </div>
                                </div>

                                    <div  class= "col-lg-6 col-sm-12">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "nombre_span" ><span class=" fa fa-user"></span> </span>
                                        <input  type= "text"  name="cli_raz" id="cli_raz" class= "form-control"  placeholder= "Razon Social/Nombres y Apellidos"  aria-describedby= "basic-addon1" required="required">
                                        
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group has-primary " >
                                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-credit-card"> </span> </span>
                                        <select class="form-control" name="tid_cod" id="tid_cod">
                                            <option value="1">RUC</option>
                                            <option value="2">DNI</option>
                                            <option value="3">C.E.</option>
                                            <option value="4">PASAPORTE</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-5" >
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "basic-addon1" ><span class=" fa fa-credit-card"></span></span>
                                        <input type= "text"  id="cli_nud" val="" name="cli_nud"  class= "form-control"  placeholder= "Nro Documento"  aria-describedby= "basic-addon1" required="required" >
                                                      <!--        <span class="input-group-btn">
    <button id="con_ruc" class="btn btn-primary" type="button"> 
      <span class="fa fa-search icon"></span>
    </button>
  </span>-->

                                    </div>
                                </div>
                          
                             
                             
                                <div class="col-md-4">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "basic-addon1" >@</span>
                                        <input  type= "mail"  name="cli_cor" id="cli_cor" val=""  class= "form-control"  placeholder= "correo"  aria-describedby= "basic-addon1" >
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "basic-addon1" ><span class=" fa fa-tty"></span></span>
                                        <input  type= "number" step="1" name="cli_tel" id="cli_tel" val="" class= "form-control"  placeholder= "Tel&eacute;fono"  aria-describedby= "basic-addon1" >
                                    </div>
                                </div> <!-- col-lg-4 -->
                                <div class="col-md-7">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "basic-addon1" ><span class=" fa fa-mobile"></span></span>
                                        <input  type= "number" step="1" min="900000000" name="cli_cel" val="" id="cli_cel" class= "form-control"   placeholder= "Celular"  aria-describedby= "basic-addon1" >
                                    </div>
                                </div> <!-- col-lg-4 -->
                                <div class="col-md-12">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "basic-addon1" ><span class=" fa fa-home"></span></span>
                                        <input  type= "text"  name="cli_dir" id="cli_dir" val="" class= "form-control"  required="required"  placeholder= "Direcci&oacute;n"  aria-describedby= "basic-addon1" >
                                    </div>
                                </div>

                                 <div class="col-md-3">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "basic-addon1" ><span class=" fa ">/</span></span>
                                       <select id="ciucli" class="form-control" name='ciucli' >
                                        <option></option>
                                       </select>
                                    </div>
                                </div>
                            
                                <div class="col-md-3">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "basic-addon1" ><span class=" fa ">/</span></span>
                                           <select id="provcli" class="form-control" name='provcli' >
                                            </select>
                                    </div>
                                </div>

                                    <div class="col-md-3">
                                    <div class="input-group has-primary " >
                                        <span  class= "input-group-addon" id= "basic-addon1" ><span class=" fa ">/</span></span>
                                         <select id="dis_cod" class="form-control" name='dis_cod' >
                                            </select>
                                    </div>
                                </div>
                              
                         

                            </div>
                        </div> <!-- modal-body -->
                        <div class="modal-footer">
                               <button type="submit" class="btn  btn-primary " id="boton_modal" >Registrar</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                  </form>

            </div> <!-- modal-content -->
      </div><!-- modal-dialog  -->
</div>




<script>

$(document).ready(function() {

ciudadcli();
$("#provcli").on('change',function () {
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
    
        $("#dis_cod").html('<option></option>');
            for (var i = 0; i < response.length; i++) {
            $("#dis_cod").append('<option  value='+response[i].dis_cod+'>'+response[i].dis_des+'</option>');
             }
         }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });

});


$("#ciucli").on('change',function () {
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
        $("#provcli").html('<option></option>');
        $("#dis_cod").html('<option></option>');
            for (var i = 0; i < response.length; i++) {
            $("#provcli").append('<option  value='+response[i].prv_cod+'>'+response[i].prv_des+'</option>');
             }
         }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });

});


 function ciudadcli() {
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
            $("#ciucli").append('<option  value='+response[i].ciu_cod+'>'+response[i].ciu_des+'</option>');
        
             }
         }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });
    }

  /*  $("#tip_cod").on('change',function () {
if($(this).val()==2){
$("#cli_app").attr("readonly",false);
$("#cli_apm").attr("readonly",false);
$("#cli_nom").attr("readonly",false);
$("#cli_raz").attr("readonly",true);
$("#cli_raz").val("");
}else{
$("#cli_app").attr("readonly",true);
$("#cli_apm").attr("readonly",true);
$("#cli_nom").attr("readonly",true);
$("#cli_raz").attr("readonly",false);
$("#cli_app").val("");
$("#cli_apm").val("");
$("#cli_nom").val("");


}
});*/

$("#form_cli").on("submit",function (e) {
    e.preventDefault();
       var request;
            if(request==true){
              request.abort();
            }
            //$("#modal_cargando").modal("show");
            var formDataSerialized = $("#form_cli").serialize();
            request = $.ajax(
            {
                url:"<?php  echo base_url('Cguia/regcliente')?>",
                type:"Post",
                dataType: "json",
                data: formDataSerialized
            });

            request.done(function (response,textStatus,jqXHR)
            {console.log(response);
                   // $("#modal_tabcli").modal("show");
                   $('#form_cli')[0].reset();
               $("#modalcli").modal("hide");
   
            });
            request.fail(function (jqXHR,textStatus,thrown) {
                  console.log("Error :" + jqXHR+textStatus+thrown);
                  alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
            });

            request.always(function () {
                  console.log("termino la ejecucion de ajax");
             
            });

});

    $("#con_ruc").on("click",function(){
      var tip =  $("#tid_cod").val();
        
        if(tip==1){
            var url = "<?php  echo base_url('Cguia/ruc')?>";
        }else{
            var url = "<?php  echo base_url('Cguia/dni')?>";
        }
                    var ruc = $('#cli_nud').val();
            
        var request;
    if(request==true){
      request.abort();
    }
    request = $.ajax(
    {
        url:url,
        type:"Post",
        dataType: "json",
         data: {'ruc':ruc},
            });
    request.done(function (response,textStatus,jqXHR)
    {console.log(response);

        if (response!=null) {
            if(tip == 1){
            
        $('#cli_raz').val(response.nombre_o_razon_social);
              $('#cli_dir').val(response.direccion);
         
        }else{
                $('#cli_raz').val(response.nombre);
              
        }
        }
    });
    request.fail(function (jqXHR,textStatus,thrown) {
          console.log("Error :" + jqXHR+textStatus+thrown);
          alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
    });         	
                	
                	
                	



                });

   });

</script>