   <title>Login</title>
<body>

    <div class="container">
        <h2>Iniciar Sesion</h2>
         <hr>
    <section id="login" style="min-height: 788px; ">
          
            <div class="container">
                <br>
                <br>
                <div class="row">
                    <div class="col-md-5 col-md-offset-4">
                        <div class=" panel ">
                            <div class="panel-heading">
                                <h3 class="panel-title">Por favor ingrese: </h3>
                            </div>
                            <div class="panel-body">
                                <div >
                                    <form id='form_login' method="post">
                                        <input type="text" class="form-control" name="usua" id="usua" value="" placeholder="usuario" required>
                                        <input type="password" class="form-control" name="passw" id="passw" value="" placeholder="contrase&ntilde;a" required>
                                        <div class="form-group">
                                            <input type="submit" class='btn btn-success btn-block' value="Iniciar Sesi&oacute;n">
                                        </div>
                                        <div class="alert alert-danger alert-dismissible desactive">
                                          <span id="mensaje_error"></span>.
                                        </div>
                                    </form>
                                    <a href="">Registrese aqui </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          </div>
      </body>
    <!-- </div> -->
<script type="text/javascript">
    $('.alert').fadeOut();
$(document).ready(function () {
    $("#form_login").on("submit",function (e) {
        e.preventDefault();
        fn_consultar_login();
    });


    function fn_consultar_login() {
        var request;
        if(request==true){
          request.abort();
        }

        request = $.ajax(
        {
            url:"<?php  echo base_url('Clogin/login')?>",
            type:"Post",
            dataType: "json",
            data: $("#form_login").serialize()
        });

        request.done(function (response,textStatus,jqXHR)
        {//console.log(response);
            if (response==null) {
                $("#mensaje_error").html("Usuario o contraseña es incorrecta");
                $('.alert').show(500);
                // $("#").focus();
            }
            else  {
                window.location.replace("<?php  echo base_url('Cmenu/Menucli')?>");
            }   
        });
    }

    $("#usua").add("#passw").on("keyup",function () {
         $('.alert').fadeOut(500);
    });


$("a").on("click",function (e) {
    e.preventDefault();
 $("#infor").modal("show");
    $("#bus").css('display','none');
    $("#buscar").css('display','none');
$("#grabar").css('display','block');
var p=$("#reg_per").find("input,select");
p.removeAttr("readonly");
});


$("#ver_produc").on('click',function () {

location.reload();

    });

});
</script>
