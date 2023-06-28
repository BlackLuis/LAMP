<div id="page-wrapper">
    <section id="history">
    <div class="titulo2">
        <h1>Reporte<h1>
        <h2>USUARIO</h2>
    </div>
    </section>
 <div class="row">
  
                <div class="col-md-6">
          <div class="panel panel-primary" >
           <div  class="panel-heading" role="tab" id="headingThree">
               <h4 class="panel-title" >
                Agregar Usuario
               </h4>
           </div>
           <div class="panel-body" style="padding:0px;">

      
           <div class="form-row">
                   <form role="form" method="post" id="form">
           	      <div class="form-group col-md-3">
               	  
                 <label for="inputPassword4">Usuario</label>
                  <input type="text"  required  id="usu"  name="usu"  class="form-control" >
               </div>
               
                  <div class="form-group col-md-3">
               	  
                 <label for="inputPassword4">Password</label>
                  <input type="password"  required  id="pass"  name="pass"  class="form-control" >
               </div>
               
                   <div class="form-group col-md-4">

                 <label for="inputPassword4">Tipo</label>
                   <select id="tip" class="form-control" name='tip' >
                        <?php
                       $opt="<option value=''></option>";
                   foreach ($tip as $key){
                                    $opt .="<option value=".$key->idTipoUsuario.">".$key->descTipoUsu."</option>";
                                }
                                 echo $opt;
                    ?>
                      </select>
               </div>


   <div class="form-group col-md-2">
               <label><br></label>
            <button type="submit"  class="form-control " style="background-color:green;color:white;" id="agr">+</button>
             </div>
                 </form>
    </div>
   

</div>
</div>
         <div class="panel panel-default">
                                <div class="panel-body mitabla">
                                    <div class="table-responsive " >
                                        <table class="table table-striped " id="grilla_cuadre" >
                                            <thead>
                                                <tr>
                                            
                                                    <th>USUARIO</th>
                                                    <th>TIPO</th>
                                             
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
    
                    <div class="col-md-6">
          <div class="panel panel-primary" >
           <div  class="panel-heading" role="tab" id="headingThree">
               <h4 class="panel-title" >
               Usuario Guia
               </h4>
           </div>
           <div class="panel-body" style="padding:0px;">

      
           <div class="form-row">
                <form role="form" method="post" id="form1">
           	          <div class="form-group col-md-4">

                 <label for="inputPassword4">Usuario</label>
                   <select id="usu1" class="form-control" name='usu1' >
                        <?php
                       $opt="<option value=''></option>";
                   foreach ($usu as $key){
                                    $opt .="<option value=".$key->idUsuario.">".$key->usuario."</option>";
                                }
                                 echo $opt;
                    ?>
                      </select>
               </div>
               
                      <div class="form-group col-md-4">

                 <label for="inputPassword4">guia</label>
                   <select id="gui1" class="form-control" name='gui1' >
                        <?php
                       $opt="<option value=''></option>";
                   foreach ($guia as $key){
                                    $opt .="<option value=".$key->seg_cod.">".$key->seg_ser."</option>";
                                }
                                 echo $opt;
                    ?>
                      </select>
               </div>



   <div class="form-group col-md-2">
               <label><br></label>
            <button type="submit"  class="form-control " style="background-color:green;color:white;" id="agg1">+</button>
             </div>
             </form>
    </div>
   

</div>
</div>
         <div class="panel panel-default">
                                <div class="panel-body mitabla">
                                    <div class="table-responsive " >
                                        <table class="table table-striped " id="grilla_cuadre1" >
                                            <thead>
                                                <tr>
                                            
                                                    <th>USUARIO</th>
                                                    <th>N° GUIA</th>
                                         
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
    
    
                        <div class="col-md-6">
          <div class="panel panel-primary" >
           <div  class="panel-heading" role="tab" id="headingThree">
               <h4 class="panel-title" >
                Usuario Comprobante
               </h4>
           </div>
           <div class="panel-body" style="padding:0px;">

      
           <div class="form-row">
                <form role="form" method="post" id="form2">
           	          <div class="form-group col-md-4">

                 <label for="inputPassword4">Usuario</label>
                   <select id="usu2" class="form-control" name='usu2' >
                        <?php
                       $opt="<option value=''></option>";
                   foreach ($usu as $key){
                                    $opt .="<option value=".$key->idUsuario.">".$key->usuario."</option>";
                                }
                                 echo $opt;
                    ?>
                      </select>
               </div>
               
                      <div class="form-group col-md-4">

                 <label for="inputPassword4">Comprobantes</label>
                   <select id="com2" class="form-control" name='com2' >
                        <?php
                       $opt="<option value=''></option>";
                   foreach ($comp as $key){
                                    $opt .="<option value=".$key->sec_cod.">".$key->sec_ser."</option>";
                                }
                                 echo $opt;
                    ?>
                      </select>
               </div>



   <div class="form-group col-md-2">
               <label><br></label>
            <button type="submit"  class="form-control " style="background-color:green;color:white;" id="agg2">+</button>
             </div>
             </form>
    </div>
   

</div>
</div>
         <div class="panel panel-default">
                                <div class="panel-body mitabla">
                                    <div class="table-responsive " >
                                        <table class="table table-striped " id="grilla_cuadre2" >
                                            <thead>
                                                <tr>
                                            
                                                    <th>USUARIO</th>
                                                    <th>N° COMPROBANTE</th>
                                         
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
    
    
    
    </div>
    </div>


<script type="text/javascript">

$(document).ready( function() {
     var grilla_cuadre = $('#grilla_cuadre tbody');
      var grilla_cuadre1 = $('#grilla_cuadre1 tbody');
       var grilla_cuadre2 = $('#grilla_cuadre2 tbody');
    usuario();
    repguia();
    repcom();
    
     $("#form").on("submit",function (e) {
        e.preventDefault();
          var request;
        if(request==true){
          request.abort();
        }
        var formDataSerialized = $("#form").serialize();
          request = $.ajax(
        {
            url:"<?php  echo base_url('Aes/saveuse')?>",
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
          
        });

    })
    
        $("#form1").on("submit",function (e) {
        e.preventDefault();
          var request;
        if(request==true){
          request.abort();
        }
        var formDataSerialized = $("#form1").serialize();
          request = $.ajax(
        {
            url:"<?php  echo base_url('Aes/saveguia')?>",
            type:"Post",
            dataType: "json",
            data: formDataSerialized
        });

        request.done(function (response,textStatus,jqXHR)
        {//console.log(response);
            if (response!=null) {
              repguia();
            }
        });
        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Error :" + jqXHR+textStatus+thrown);
              alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
        });

        request.always(function () {
          
        });

    })
    
           $("#form2").on("submit",function (e) {
        e.preventDefault();
          var request;
        if(request==true){
          request.abort();
        }
        var formDataSerialized = $("#form2").serialize();
          request = $.ajax(
        {
            url:"<?php  echo base_url('Aes/savefac')?>",
            type:"Post",
            dataType: "json",
            data: formDataSerialized
        });

        request.done(function (response,textStatus,jqXHR)
        {//console.log(response);
            if (response!=null) {
             repcom();
            }
        });
        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Error :" + jqXHR+textStatus+thrown);
              alert("oops! ha ocurrido un imprevisto. Comuníquese con el Administrador");
        });

        request.always(function () {
          
        });
           });
        
        function usuario(){
 
 
      var request;
        if(request==true){
          request.abort();
        }

        request = $.ajax(
        {
            url: "<?php  echo base_url('Aes/repusu')?>",
            type:"Post",
            dataType:'json'
        
        });

        request.done(function (response,textStatus,jqXHR)
        {
         
                
            if (response !=null)
            {   cadena="";
            
           
            
                
                for (var i = 0; i < response.length; i++) {
                    

                    cadena += "<tr>";
                    cadena += '<td>' + response[i].usuario + '</td>';
                    cadena += '<td>' + response[i].descTipoUsu + '</td>';
          
             
                    cadena += '</tr>';
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

}

      function repguia(){
 
 
      var request;
        if(request==true){
          request.abort();
        }

        request = $.ajax(
        {
            url: "<?php  echo base_url('Aes/repguia')?>",
            type:"Post",
            dataType:'json'
        
        });

        request.done(function (response,textStatus,jqXHR)
        {
         
                
            if (response !=null)
            {   cadena="";
            
           
            
                
                for (var i = 0; i < response.length; i++) {
                    

                    cadena += "<tr>";
                    cadena += '<td>' + response[i].usuario + '</td>';
                    cadena += '<td>' + response[i].seg_ser + '</td>';
          
             
                    cadena += '</tr>';
                }
               
                     grilla_cuadre1.html(cadena);
            }else{
                grilla_cuadre1.html('');
            }
              
       
              

        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
        });

}  

      function repcom(){
 
 
      var request;
        if(request==true){
          request.abort();
        }

        request = $.ajax(
        {
            url: "<?php  echo base_url('Aes/repcom')?>",
            type:"Post",
            dataType:'json'
        
        });

        request.done(function (response,textStatus,jqXHR)
        {
         
                
            if (response !=null)
            {   cadena="";
            
           
            
                
                for (var i = 0; i < response.length; i++) {
                    

                    cadena += "<tr>";
                    cadena += '<td>' + response[i].usuario + '</td>';
                    cadena += '<td>' + response[i].sec_ser + '</td>';
          
             
                    cadena += '</tr>';
                }
               
                     grilla_cuadre2.html(cadena);
            }else{
                grilla_cuadre2.html('');
            }
              
       
              

        });

        request.fail(function (jqXHR,textStatus,thrown) {
              console.log("Erros :" + textStatus);
        });

        request.always(function () {
              console.log("termino la ejecucion de ajax");
        });

}  
    
});

</script>