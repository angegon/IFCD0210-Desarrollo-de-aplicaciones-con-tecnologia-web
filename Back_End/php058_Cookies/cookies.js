function setCookie (nombre_cookie, valor_cookie, dias){
    let fecha = new Date();
    fecha.setTime( fecha.getTime() + dias * 24 * 60 * 60 * 1000);
    document.cookie = 
        `${nombre_cookie}=${valor_cookie};expires=${fecha.toUTCString()}`;
}
function getCookie(nombre_cookie) {
    // SEPARAR LAS COOKIES
    const cookies_separadas = document.cookie.split("; ");
    // RECORRER LAS COOKIES
    for (i = 0; i < cookies_separadas.length; i++) {
        // SEPARO EL NOMBRE DE LA COOKIE DE SU VALOR
        const nombre_valor = cookies_separadas[i].split("=");
        // SI EL NOMBRE QUE ME PIDES ES EN EL QUE ESTOY, DEVUELVO EL VALOR
        if (nombre_cookie == nombre_valor[0]) {
            return nombre_valor[1];
        }
    }
    return null;
}
function borrarCookie( nombre_cookie ){
    cookie_buscada = getCookie(nombre_cookie);
    if (cookie_buscada != null ){
        setCookies(nombre_cookie, "", -Number.MAX_VALUE);
    }
}
function borrarCookiesAll(){
    const cookies_separadas = document.cookie.split("; ");
    for (i = 0; i < cookies_separadas.length; i++) {
        const nombre_valor = cookies_separadas[i].split("=");
        borrarCookie( nombre_valor[0] );
    }
}