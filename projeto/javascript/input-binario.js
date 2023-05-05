function SomenteNumero(e) {
    var tecla = (window.event) ? e.key : e.which;
    if ((tecla == 48 || tecla == 49)) return true;
    else {
        return false;
    }
}