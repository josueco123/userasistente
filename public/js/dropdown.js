$(function(){
    $('#tipojuzgado').on('change',onSelectTipoJuzgado);
});

function onSelectTipoJuzgado(){
    var tipojuzgado = $(this).val();
    
    if(tipojuzgado == "1"){
        var html_select = '<option value="">seleciona</option>';
        html_select +='<option value="Juzgado Primero Civil Municipal">Juzgado Primero Civil Municipal</option>'
        html_select +='<option value="Juzgado Segundo Civil Municipal">Juzgado Segundo Civil Municipal</option>'
        html_select +='<option value="Juzgado Tercero Civil Municipal">Juzgado Tercero Civil Municipal</option>'
        html_select +='<option value="Juzgado Cuarto Civil Municipal">Juzgado Cuarto Civil Municipal</option>'
        html_select +='<option value="Juzgado Quinto Civil Municipal">Juzgado Quinto Civil Municipal</option>'
        html_select +='<option value="Juzgado Sexto Civil Municipal">Juzgado Sexto Civil Municipal</option>'
        html_select +='<option value="Juzgado Septimo Civil Municipal">Juzgado Septimo Civil Municipal</option>'
        html_select +='<option value="Juzgado Octavo Civil Municipal">Juzgado Octavo Civil Municipal</option>'
        html_select +='<option value="Juzgado Noveno Civil Municipal">Juzgado Noveno Civil Municipal</option>'
        html_select +='<option value="Juzgado Decimo Civil Municipal">Juzgado Decimo Civil Municipal</option>'
        html_select +='<option value="Juzgado Once Civil Municipal">Juzgado Once Civil Municipal</option>'
        html_select +='<option value="Juzgado Doce Civil Municipal">Juzgado Doce Civil Municipal</option>'
        html_select +='<option value="Juzgado Trece Civil Municipal">Juzgado Trece Civil Municipal</option>'
        html_select +='<option value="Juzgado Catorce Civil Municipal">Juzgado Catorce Civil Municipal</option>'
        html_select +='<option value="Juzgado Quince Civil Municipal">Juzgado Quince Civil Municipal</option>'
        html_select +='<option value="Juzgado Diesiseis Civil Municipal">Juzgado Diesiseis Civil Municipal</option>'
        html_select +='<option value="Juzgado Diecisiente Civil Municipal">Juzgado Diecisiente Civil Municipal</option>'
        html_select +='<option value="Juzgado Diesiocho Civil Municipal">Juzgado Diesiocho Civil Municipall</option>'
        html_select +='<option value="Juzgado Diesinueve Civil Municipal">Juzgado Diesinueve Civil Municipal</option>'
        html_select +='<option value="Juzgado Veinte Civil Municipal">Juzgado Veinte Civil Municipal</option>'
        html_select +='<option value="Juzgado Veintiuno Civil Municipal">Juzgado Veintiuno Civil Municipal</option>'
        html_select +='<option value="Juzgado Veintidos Civil Municipal">Juzgado Veintidos Civil Municipal</option>'
        html_select +='<option value="Juzgado Veintitres Civil Municipal">Juzgado Veintitres Civil Municipal</option>'
        html_select +='<option value="Juzgado Veinticuarto Civil Municipal">Juzgado Veinticuarto Civil Municipal</option>'
        html_select +='<option value="Juzgado Veinticinco Civil Municipal">Juzgado Veinticinco Civil Municipal</option>'
        html_select +='<option value="Juzgado Veintiseis Civil Municipal">Juzgado Veintiseis Civil Municipal</option>'
        html_select +='<option value="Juzgado Veintisiete Civil Municipal">Juzgado Veintisiete Civil Municipal</option>'
        html_select +='<option value="Juzgado Veintiocho Civil Municipal">Juzgado Veintiocho Civil Municipal</option>'
        html_select +='<option value="Juzgado Veintinueve Civil Municipal">Juzgado Veintinueve Civil Municipal</option>'
        html_select +='<option value="Juzgado Treinta Civil Municipal">Juzgado Treinta Civil Municipal</option>'
        html_select +='<option value="Juzgado Treinta Y Uno Civil Municipal">Juzgado Treinta Y Uno Civil Municipal</option>'
        html_select +='<option value="Juzgado Treinta Y Dos Civil Municipal">Juzgado Treinta Y Dos Civil Municipal</option>'
        html_select +='<option value="Juzgado Treinta Y Tres Civil Municipal">Juzgado Treinta Y Tres Civil Municipal</option>'
        html_select +='<option value="Juzgado Treinta Y Cuatro Civil Municipal">Juzgado Treinta Y Cuatro Civil Municipal</option>'
        html_select +='<option value="Juzgado Juzgado Treinta Y Cinco Civil Municipal">Juzgado Treinta Y Cinco Civil Municipal</option>'         
        $('#juzgado').html(html_select);
    }
    
    if(tipojuzgado == "2"){
    
        var html_select = '<option value="">seleciona</option>';
        html_select +='<option value="Juzgado Primero Laboral">Juzgado Primero Laboral</option>'
        html_select +='<option value="Juzgado Segundo Laboral">Juzgado Segundo Laboral</option>'
        html_select +='<option value="Juzgado Tercero Laboral">Juzgado Tercero Laboral</option>'
        html_select +='<option value="Juzgado Cuarto Laboral">Juzgado Cuarto Laboral</option>'
        html_select +='<option value="Juzgado Quinto Laboral">Juzgado Quinto Laboral</option>'
        html_select +='<option value="Juzgado Sexto Laboral">Juzgado Sexto Laboral</option>'
        html_select +='<option value="Juzgado Septimo Laboral">Juzgado Septimo Laboral</option>'
        html_select +='<option value="Juzgado Octavo Laboral">Juzgado Octavo Laboral</option>'
        html_select +='<option value="Juzgado Noveno Laboral">Juzgado Noveno Laboral</option>'
        html_select +='<option value="Juzgado Decimo Laboral">Juzgado Decimo Laboral</option>'
        html_select +='<option value="Juzgado Once Laboral">Juzgado Once Laboral</option>'
        html_select +='<option value="Juzgado Doce Laboral">Juzgado Doce Laboral</option>'
        html_select +='<option value="Juzgado Trece Laboral">Juzgado Trece Laboral</option>'
        html_select +='<option value="Juzgado Catorce Laboral">Juzgado Catorce Laboral</option>'
        html_select +='<option value="Juzgado Quince Laboral">Juzgado Quince Laboral</option>'
        html_select +='<option value="Juzgado Diesiseis Laboral">Juzgado Diesiseis Laboral</option>'
        html_select +='<option value="Juzgado Diesisiete Laboral">Juzgado Diesisiete Laboral</option>'
        html_select +='<option value="Juzgado Diesiocho Laboral">Juzgado Diesiocho Laboral</option>'

        $('#juzgado').html(html_select);
    }

    if(tipojuzgado == "3"){
    
        var html_select = '<option value="">seleciona</option>';
        html_select +='<option value="Juzgado Primero Civil del Circuito">Juzgado Primero Civil del Circuito</option>'
        html_select +='<option value="Juzgado Segundo Civil del Circuito">Juzgado Segundo Civil del Circuito</option>'
        html_select +='<option value="Juzgado Tercero Civil del Circuito">Juzgado Tercero Civil del Circuito</option>'
        html_select +='<option value="Juzgado Cuarto Civil del Circuito">Juzgado Cuarto Civil del Circuito</option>'
        html_select +='<option value="Juzgado Quinto Civil del Circuito">Juzgado Quinto Civil del Circuito</option>'
        html_select +='<option value="Juzgado Sexto Civil del Circuito">Juzgado Sexto Civil del Circuito</option>'
        html_select +='<option value="Juzgado Septimo Civil del Circuito">Juzgado Septimo Civil del Circuito</option>'
        html_select +='<option value="Juzgado Octavo Civil del Circuito">Juzgado Octavo Civil del Circuito</option>'
        html_select +='<option value="Juzgado Noveno Civil del Circuito">Juzgado Noveno Civil del Circuito</option>'
        html_select +='<option value="Juzgado Decimo Civil del Circuito">Juzgado Decimo Civil del Circuito</option>'
        html_select +='<option value="Juzgado Once Civil del Circuito">Juzgado Once Civil del Circuito</option>'
        html_select +='<option value="Juzgado Doce Civil del Circuito">Juzgado Doce Civil del Circuito</option>'
        html_select +='<option value="Juzgado Trece Civil del Circuitol">Juzgado Trece Civil del Circuito</option>'
        html_select +='<option value="Juzgado Catorce Civil del Circuito">Juzgado Catorce Civil del Circuito</option>'
        html_select +='<option value="Juzgado Quince Civil del Circuito">Juzgado Quince Civil del Circuito</option>'
        html_select +='<option value="Juzgado Diesiseis Civil del Circuito">Juzgado Diesiseis Civil del Circuito</option>'
        html_select +='<option value="Juzgado Diesisiete Civil del Circuito">Juzgado Diesisiete Civil del Circuito</option>'
        html_select +='<option value="Juzgado Disiocho Civil del Circuito">Juzgado Disiocho Civil del Circuito</option>'
        html_select +='<option value="Juzgado Diesinueve Civil del Circuito">Juzgado Diesinueve Civil del Circuito</option>'

        $('#juzgado').html(html_select);
    }

    if(tipojuzgado == "4"){
    
        var html_select = '<option value="">seleciona</option>';
        html_select +='<option value="Juzgado Primero de Familia">Juzgado Primero de Familia</option>'
        html_select +='<option value="Juzgado Segundo de Familia">Juzgado Segundo de Familia</option>'
        html_select +='<option value="Juzgado Tercero de Familia">Juzgado Tercero de Familia</option>'
        html_select +='<option value="Juzgado Cuarto de Familia">Juzgado Cuarto de Familia</option>'
        html_select +='<option value="Juzgado Quinto de Familia">Juzgado Quinto de Familia</option>'
        html_select +='<option value="Juzgado Sexto de Familia">Juzgado Sexto de Familia</option>'
        html_select +='<option value="Juzgado Septimo de Familia">Juzgado Septimo de Familia</option>'
        html_select +='<option value="Juzgado Octavo de Familia">Juzgado Octavo de Familia</option>'
        html_select +='<option value="Juzgado Noveno de Familia">Juzgado Noveno de Familia</option>'
        html_select +='<option value="Juzgado Decimo de Familia">Juzgado Decimo de Familia</option>'
        html_select +='<option value="Juzgado Once de Familia">Juzgado Once de Familia</option>'
        html_select +='<option value="Juzgado Doce de Familia">Juzgado Doce de Familia</option>'
        html_select +='<option value="Juzgado Trece de Familia">Juzgado Trece de Familia</option>'
        html_select +='<option value="Juzgado Catorce de Familia">Juzgado Catorce de Familia</option>'        

        $('#juzgado').html(html_select);
    }

    if(tipojuzgado == "5"){
    
        var html_select = '<option value="">seleciona</option>';
        html_select +='<option value="Sala Laboral">Sala Laboral</option>'
        html_select +='<option value="Sala Civil">Sala Civil</option>'
        html_select +='<option value="Sala Familia">Sala Familia</option>'                

        $('#juzgado').html(html_select);
    }

    if(tipojuzgado == "6"){
    
        var html_select = '<option value="">seleciona</option>';
        html_select +='<option value="Juzgado Primero de Pequeñas Causas Laborales">Juzgado Primero de Pequeñas Causas Laborales</option>'
        html_select +='<option value="Juzgado Segundo de Pequeñas Causas Laborales">Juzgado Segundo de Pequeñas Causas Laborales</option>'
        html_select +='<option value="Juzgado Tercero de Pequeñas Causas Laborales">Juzgado Tercero de Pequeñas Causas Laborales</option>'
        html_select +='<option value="Juzgado Cuarto de Pequeñas Causas Laborales">Juzgado Cuarto de Pequeñas Causas Laborales</option>'
        html_select +='<option value="Juzgado Quinto de Pequeñas Causas Laborales">Juzgado Quinto de Pequeñas Causas Laborales</option>'
        html_select +='<option value="Juzgado Sexto de Pequeñas Causas Laborales">Juzgado Sexto de Pequeñas Causas Laborales</option>'            

        $('#juzgado').html(html_select);
    }

    if(tipojuzgado == "7"){
        var html_select = '<option value="">seleciona</option>';
        html_select +='<option value="Juzgado Primero Administrativo de Oralidad">Juzgado Primero Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Segundo Administrativo de Oralidad">Juzgado Segundo Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Tercero Administrativo de Oralidad">Juzgado Tercero Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Cuarto Administrativo de Oralidad">Juzgado Cuarto Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Quinto Administrativo de Oralidad">Juzgado Quinto Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Sexto Administrativo de Oralidad">Juzgado Sexto Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Septimo Administrativo de Oralidad">Juzgado Septimo Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Octavo Administrativo de Oralidad">Juzgado Octavo Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Noveno Administrativo de Oralidad">Juzgado Noveno Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Decimo Administrativo de Oralidad">Juzgado Decimo Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Once Administrativo de Oralidad">Juzgado Once Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Doce Administrativo de Oralidad">Juzgado Doce Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Trece Administrativo de Oralidad">Juzgado Trece Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Catorce Administrativo de Oralidad">Juzgado Catorce Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Quince Administrativo de Oralidad">Juzgado Quince Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Diesiseis Administrativo de Oralidad">Juzgado Diesiseis Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Diecisiente Administrativo de Oralidad">Juzgado Diecisiente Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Diesiocho Administrativo de Oralidad">Juzgado Diesiocho Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Diesinueve Administrativo de Oralidad">Juzgado Diesinueve Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Veinte Administrativo de Oralidad">Juzgado Veinte Administrativo de Oralidad</option>'
        html_select +='<option value="Juzgado Veintiuno Administrativo de Oralidad">Juzgado Veintiuno Administrativo de Oralidad</option>'

        $('#juzgado').html(html_select);
    }

    if(tipojuzgado == "8"){
    
        var html_select = '<option value="">seleciona</option>';
        html_select +='<option value="Juzgado Primero Civil Municipal de Ejecución">Juzgado Primero Civil Municipal de Ejecución</option>'
        html_select +='<option value="Juzgado Segundo Civil Municipal de Ejecución">Juzgado Segundo Civil Municipal de Ejecución</option>'
        html_select +='<option value="Juzgado Tercero Civil Municipal de Ejecución">Juzgado Tercero Civil Municipal de Ejecución</option>'
        html_select +='<option value="Juzgado Cuarto Civil Municipal de Ejecución">Juzgado Cuarto Civil Municipal de Ejecución</option>'
        html_select +='<option value="Juzgado Quinto Civil Municipal de Ejecución">Juzgado Quinto Civil Municipal de Ejecución</option>'
        html_select +='<option value="Juzgado Sexto Civil Municipal de Ejecución">Juzgado Sexto Civil Municipal de Ejecución</option>'
        html_select +='<option value="Juzgado Septimo Civil Municipal de Ejecución">Juzgado Septimo Civil Municipal de Ejecución</option>'
        html_select +='<option value="Juzgado Octavo Civil Municipal de Ejecución">Juzgado Octavo Civil Municipal de Ejecución</option>'
        html_select +='<option value="Juzgado Noveno Civil Municipal de Ejecución">Juzgado Noveno Civil Municipal de Ejecución</option>'
        html_select +='<option value="Juzgado Decimo Civil Municipal de Ejecución">Juzgado Decimo Civil Municipal de Ejecución</option>'               

        $('#juzgado').html(html_select);
    }

    if(tipojuzgado == "9"){
    
        var html_select = '<option value="">seleciona</option>';
        html_select +='<option value="Juzgado Primero Civil del Circuito de Ejecución">Juzgado Primero Civil del Circuito de Ejecución</option>'
        html_select +='<option value="Juzgado Segundo Civil del Circuito de Ejecución">Juzgado Segundo Civil del Circuito de Ejecución</option>'
        html_select +='<option value="Juzgado Tercero Civil del Circuito de Ejecución">Juzgado Tercero Civil del Circuito de Ejecución</option>'         

        $('#juzgado').html(html_select);
    }
    



}