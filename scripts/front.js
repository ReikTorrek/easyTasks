$(document).ready(function () {
    let num = getUrlParameter('num');
    let phone = $('h1');

    phone.each(function () {
        let phoneVal = $(this).text();
        phone.text(phoneVal.replaceAll('DIGITS', num))
    })
})

function getUrlParameter(sParam) {
    let sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;
    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
}