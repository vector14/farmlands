var graficaModelo = {
    listaArchivos: [],
    pos: -1
};

var gestionGraficas = {
    constructor: function () {
        $('#btnConsultar').on('click', gestionGraficas.consultarMuestra);
    },
    consultarMuestra: function () {
        //e.preventDefault();
        var data = {}; /*data = parametros*/
        data.id_muestra = $('#codigomuestra').val();
        if(data.id_muestra === ""){
            alert("Seleccione una muestra del grafico");
        }else{
        app.ajax('../controlador/GestionGraficoControlador.php?opcion=consultarMuestraGraf', data, gestionGraficas.respuestaConsultaMuestra);
        $('#consultaMuestra').modal('show');
        }
    }, respuestaConsultaMuestra: function (respuesta) {
        var cuerpo = $('.modal-body');
        cuerpo.empty();
        var datos = respuesta.datos;
        graficaModelo.listaArchivos = datos;//Hacer que la consulta sea igual a el arreglo dentro del objeto graficaModelo
        for (var i = 0; i < datos.length; i++) {
            var registro = datos[i];
            var resCon = "<strong>Id de la muestra: </strong><label style='color: green'>" + registro.ID_MUESTRA + "</label><br>" +
                    "<strong>PH: </strong><label style='color: green'>" + registro.PH + "</label><br>" +
                    "<strong>Temperatura del ambiente(C°): </strong><label style='color: green'>" + registro.TEMPERATURA_A + "°</label><br>" +
                    "<strong>Temperatura de la muestra (C°): </strong><label style='color: green'>" + registro.TEMPERATURA_M + "°</label><br>" +
                    "<strong>Humedad (%): </strong><label style='color: green'>" + registro.HUMEDAD + "%</label><br>" +
                    "<strong>Presion Atmosferica (hPa): </strong><label style='color: green'>" + registro.PRESION_ATMOSFERICA + "</label><br>" +
                    "<strong>Fecha de la muestra (yyyy/MM/dd): </strong><label style='color: green'>" + registro.FECHA_MUESTRA + "</label><br>" +
                    "<strong>Seccion de cultivo: </strong><label style='color: green'>" + registro.SECCION_CULTIVO + "</label><br>" +
                    "<strong>Color de la hoja de la muestra (hexadecimal): </strong><input type='color' value='"+ registro.COLOR_HOJA +"' disabled></input><label style='color: "+ registro.COLOR_HOJA +"; margin-left: 10px'>" + registro.COLOR_HOJA + "</label><br>";
            cuerpo.append(resCon);
        }

    }
};
gestionGraficas.constructor();




