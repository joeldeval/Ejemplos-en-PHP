
function Solo_Numerico(n2){
        Numer=parseInt(n2);
        if (isNaN(Numer)){
            return "";
        }
        return Numer;
    }
    function ValNumero(Control){
        Control.value=Solo_Numerico(Control.value);
    }
    
window.onload=carga;
