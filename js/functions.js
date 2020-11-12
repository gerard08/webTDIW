function consultarPortatiles(){
    $(document).ready(function(){
        //$("#muestraportatiles").change(function(){
        $.ajax({url: "../controller/seccionportatiles.php?portatiles=" + $("#portatiles").val(), success:
                function(result){
                    $("#muestraportatiles").html(result);
                }});
       // });
    });
}

function registraUsuari(){

    var nom = document.getElementById("nom").value;
    var edat = document.getElementById("edat").value;
    var correu = document.getElementById("correu").value;
    var contra = document.getElementById("contra").value;
    var contra2 = document.getElementById("contra2").value;



    $(document).ready(function(){
        $.ajax({url: "../model/register.php?nom=" + nom +
                "&edat=" + edat +
                "&correu=" + correu +
                "&contra=" + contra +
                "&contra2=" + contra2, success:
                function(result){
                    $("#taulell").html(result);
                }});
    });
    return false;
}