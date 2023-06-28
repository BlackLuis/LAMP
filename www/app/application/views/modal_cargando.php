<style media="screen">
#cargando_full {

    margin: 0;
    width: 100%;
    height: 100%;
    padding: 0;

}

#cont_cargando {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;

    border-radius: 0;
    box-shadow: none;
}
</style>

<div class="modal fade" data-backdrop="static" data-keyboard="false" id="modal_cargando" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog " id="cargando_full" role="document">
        <div class="modal-content" id="cont_cargando">
                      
                        <div class="modal-body">
                   <h4 style="text-align:center;">ESPERANDO RESPUESTA DEL SERVIDOR...</h4>
                              <br>
                              <img class="media-object" src="<?=base_url()?>plantillas/images/cargando2.gif" alt="..." style=" margin-left: auto;
                                margin-right: auto;
                                display: block;">
                        </div> <!-- modal-body -->
        </div>
    </div>
</div>