/*!
 * Start Bootstrap - SB Admin v6.0.0 (https://startbootstrap.com/templates/sb-admin)
 * Copyright 2013-2020 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-sb-admin/blob/master/LICENSE)
 */
(function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path

    
    $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {

        if (this.href === path) {
            sessionStorage.setItem("lasTUrl", path);
            $(this).addClass("active");
        }
    });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });


})(jQuery);

function getAbsolutePath() {
    var loc = window.location;

    //var pathNamecsdfswfdfsdfdf = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    var pathName = loc.pathname.substring(0, 7);
    // var pathName = loc.pathname.substring(0, 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
}
function hoy() {
    var hoy = new Date();
    var hoyAno = hoy.getFullYear();
    var hoyMes = hoy.getMonth() + 1;
    var hoyDia = hoy.getDate();

    return hoyDia + "-" + hoyMes + "-" + hoyAno;
}

/**
 * validacion*/
function expRegular(texto, contenido) {
    let letras_latinas;
    let letras_Frm;
    let ercorreo;
    let phonearray;
    let mesaje;
    let pass;
    let varif;
    let decimal;
    let fecha;
    let rfc;
    let neg;

    switch (texto) {
        case "nombre":
            letras_latinas = /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ/-_-\s]+$/;
            varif = letras_latinas;
            break;

        case "frm":
            letras_Frm = /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/;
            varif = letras_Frm;
            break;

        case "email":
            ercorreo = /^[^@\s]+@[^@\.\s]+(\.[^@\.\s]+)+$/;
            varif = ercorreo;
            break;

        case "phone":
            phonearray = /^[0-9]+$/;
            varif = phonearray;
            break;
        case "negativo":
            neg = /^\-?[0-9]+$/;
            varif = neg;
            break;
        case "decimales":
            decimal = /^([0-9]+\.?[0-9]{0,3})$/;
            varif = decimal;
            break;

        case "messagge":
        case "dir":
            mesaje = /^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_/;,.()¿$?\s]+$/;
            varif = mesaje;
            break;

        case "date":
            fecha = /^\d{1,2}\-\d{1,2}\-\d{2,4}$/;
            varif = fecha;
            break;

        case "dateUs":
            fecha = /^\d{2,4}\-\d{1,2}\-\d{1,2}$/;
            varif = fecha;
            break;

        case "dateSlash":
            fecha = /^\d{2,4}\-\d{1,2}\-\d{1,2}$/;
            varif = fecha;
            break;
        case "rfc":
            rfc = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
            varif = rfc;
            break;

        case "pass":
            pass = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
            varif = pass;
            /*La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula.
  NO puede tener otros símbolos.
  Ejemplo:
  w3Unpocodet0d0 */
            break;

    }
    if (!(varif.test(contenido))) {
        return 0;
    } else {
        return texto;
    }

}
// funcion para limpiar formularios
function limpiarFormulario(formulario) {
    document.getElementById(formulario).reset();
}
// funcion para limpiar inputs
function limpiarInput(idInput) {
    let idInputFuntion = document.getElementById(idInput).value;
    if (idInputFuntion.length > 0) {
        document.getElementById(idInput).value = '';
    }

}

function lipiarDiv(elemento) {
    let idBorder = document.getElementById(elemento);
    idBorder.style.border = '1px solid green';
    document.getElementsByClassName(elemento)[0].innerHTML = '';
}


// funcion para colocar el cursor en un inpucon focus
function focusInput(idInput) {
    document.getElementById(idInput).focus();
}






 