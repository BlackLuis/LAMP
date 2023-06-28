    <!-- <div id="page-wrapper" style="min-height: 788px;"> -->
        <section id="login" style="min-height: 788px; ">
            <!-- background-image: url(<?=base_url()?>/plantillas/images/slider/bg8.jpg);background-size: cover;background-position: 50%;
        background-repeat: no-repeat;opacity:3; -->
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
                                        <input type="text" class="form-control" name="nickname" id="nickname" value="" placeholder="usuario">
                                        <input type="password" class="form-control" name="password" id="password" value="" placeholder="contrase&ntilde;a">
                                        <div class="form-group">
                                            <input type="submit" style='background-color:#337ab7;'   class='btn btn-success btn-block' value="Iniciar Sesi&oacute;n">
                                        </div>
                                        <div class="alert alert-danger alert-dismissible desactive">
                                            <strong>Hola!</strong> <span id="mensaje_error"></span>.
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- </div> -->
<script type="text/javascript">
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
            url:"<?php  echo base_url('Login/verificar_login')?>",
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
            else {
                window.location.replace("<?php  echo base_url('Intranet/index')?>");
            }
        });
    }

    $("#nickname").add("#password").on("keyup",function () {
         $('.alert').fadeOut(500);
    });
});
</script>
