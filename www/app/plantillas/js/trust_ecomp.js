function fn_enviar_ecomp_trust(response) {
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "https://devcpe.trustusperu.com/api/v1/form-comprobantes");

    form.setAttribute("target", "view");

    $.each( response, function( key, value ) {
        if (key!="array_desc") {
            var campo = document.createElement("input");
            campo.setAttribute("type", "hidden");
            campo.setAttribute("name", key);
            campo.setAttribute("value", value);
            form.appendChild(campo);
            //console.log(key+":"+value);
        }
        else {
            a = JSON.parse(value);
            for (var i = 0; i < a.length; i++) {
                $.each( a[i], function( llave, valor ) {
                    var campo = document.createElement("input");
                    campo.setAttribute("type", "hidden");
                    campo.setAttribute("name", "ITM_"+(i+1)+"_"+(llave).toUpperCase());
                    campo.setAttribute("value", valor);
                    form.appendChild(campo);
                //console.log(llave+":"+valor);
                // console.log("ITEM_"+(i+1)+"_CODIGO"+a[i].codigo);
                // console.log("ITEM_"+(i+1)+"_CODIGO_SUNAT"+a[i].codigo_sunat);
                // console.log("ITEM_"+(i+1)+"_UNIDAD_MEDIDA"+a[i].cant);
                });
                var campo = document.createElement("input");
                campo.setAttribute("type", "hidden");
                campo.setAttribute("name", "ITM_"+(i+1)+"_TIPO_IGV");
                campo.setAttribute("value", "10");
                form.appendChild(campo);
                campo = document.createElement("input");
                campo.setAttribute("type", "hidden");
                campo.setAttribute("name", "ITM_"+(i+1)+"_UNIDAD_MEDIDA");
                campo.setAttribute("value", "NIU");
                form.appendChild(campo);
            }

        }
    });



    var campo = document.createElement("input");
    campo.setAttribute("type", "hidden");
    campo.setAttribute("name", "TOKEN_AUTORIZACION");
    campo.setAttribute("value", "<?php  echo $this->config->item('token_autorizacion');?>");
    form.appendChild(campo);

    console.log(form);
    document.body.appendChild(form);
    //
    // // window.location.replace('', 'view');
    //form.submit();
}


function Unidades(num){
    switch(num)
    {
        case 1: return "UN";
        case 2: return "DOS";
        case 3: return "TRES";
        case 4: return "CUATRO";
        case 5: return "CINCO";
        case 6: return "SEIS";
        case 7: return "SIETE";
        case 8: return "OCHO";
        case 9: return "NUEVE";
    }
    return "";
}//Unidades()

function Decenas(num){
    decena = Math.floor(num/10);
    unidad = num - (decena * 10);

    switch(decena)
    {
        case 1:
            switch(unidad)
            {
                case 0: return "DIEZ";
                case 1: return "ONCE";
                case 2: return "DOCE";
                case 3: return "TRECE";
                case 4: return "CATORCE";
                case 5: return "QUINCE";
                default: return "DIECI" + Unidades(unidad);
            }
        case 2:
            switch(unidad)
            {
                case 0: return "VEINTE";
                default: return "VEINTI" + Unidades(unidad);
            }
        case 3: return DecenasY("TREINTA", unidad);
        case 4: return DecenasY("CUARENTA", unidad);
        case 5: return DecenasY("CINCUENTA", unidad);
        case 6: return DecenasY("SESENTA", unidad);
        case 7: return DecenasY("SETENTA", unidad);
        case 8: return DecenasY("OCHENTA", unidad);
        case 9: return DecenasY("NOVENTA", unidad);
        case 0: return Unidades(unidad);
    }
}//Unidades()

function DecenasY(strSin, numUnidades) {
    if (numUnidades > 0)
    return strSin + " Y " + Unidades(numUnidades)

    return strSin;
}//DecenasY()

function Centenas(num) {
    centenas = Math.floor(num / 100);
    decenas = num - (centenas * 100);

    switch(centenas)
    {
        case 1:
            if (decenas > 0)
                return "CIENTO " + Decenas(decenas);
            return "CIEN";
        case 2: return "DOSCIENTOS " + Decenas(decenas);
        case 3: return "TRESCIENTOS " + Decenas(decenas);
        case 4: return "CUATROCIENTOS " + Decenas(decenas);
        case 5: return "QUINIENTOS " + Decenas(decenas);
        case 6: return "SEISCIENTOS " + Decenas(decenas);
        case 7: return "SETECIENTOS " + Decenas(decenas);
        case 8: return "OCHOCIENTOS " + Decenas(decenas);
        case 9: return "NOVECIENTOS " + Decenas(decenas);
    }

    return Decenas(decenas);
}//Centenas()

function Seccion(num, divisor, strSingular, strPlural) {
    cientos = Math.floor(num / divisor)
    resto = num - (cientos * divisor)

    letras = "";

    if (cientos > 0)
        if (cientos > 1)
            letras = Centenas(cientos) + " " + strPlural;
        else
            letras = strSingular;

    if (resto > 0)
        letras += "";

    return letras;
}//Seccion()

function Miles(num) {
    divisor = 1000;
    cientos = Math.floor(num / divisor)
    resto = num - (cientos * divisor)

    strMiles = Seccion(num, divisor, "UN MIL", "MIL");
    strCentenas = Centenas(resto);

    if(strMiles == "")
        return strCentenas;

        return strMiles + " " + strCentenas;
}//Miles()

function Millones(num) {
    divisor = 1000000;
    cientos = Math.floor(num / divisor)
    resto = num - (cientos * divisor)

    strMillones = Seccion(num, divisor, "UN MILLON DE", "MILLONES DE");
    strMiles = Miles(resto);

    if(strMillones == "")
        return strMiles;

    return strMillones + " " + strMiles;
}//Millones()

function NumeroALetras(num) {
    var data = {
        numero: num,
        enteros: Math.floor(num),
        centavos: (((Math.round(num * 100)) - (Math.floor(num) * 100))),
        letrasCentavos: "",
        letrasMonedaPlural: 'Córdobas',//"PESOS", 'Dólares', 'Bolívares', 'etcs'
        letrasMonedaSingular: 'Córdoba', //"PESO", 'Dólar', 'Bolivar', 'etc'

        letrasMonedaCentavoPlural: "CENTAVOS",
        letrasMonedaCentavoSingular: "CENTAVO"
    };

    if (data.centavos > 0) {
        data.letrasCentavos = "CON " + (function (){
            if (data.centavos == 1)
                return Millones(data.centavos) + " " + data.letrasMonedaCentavoSingular;
            else
                return Millones(data.centavos) + " " + data.letrasMonedaCentavoPlural;
            })();
        };

    if(data.enteros == 0)
        return "CERO " + data.letrasMonedaPlural + " " + data.letrasCentavos;
    if (data.enteros == 1)
        return Millones(data.enteros) + " " + data.letrasMonedaSingular + " " + data.letrasCentavos;
    else
        return Millones(data.enteros) + " " + data.letrasMonedaPlural + " " + data.letrasCentavos;
}//NumeroALetras()

console.log(NumeroALetras('1506'));
