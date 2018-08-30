/*
function validar() {
	var titulo, texto;
	titulo = document.getElementById("titulo").value;
	texto = document.getElementById("email").value;

if(titulo === "" || texto === "") {
	alert("Todos los campos son obligatorios");
	return false;
	
}	
	
}
$(document).ready(function(){
	$('.btnSend').click(function(){
		 var errores = '';
		 // Validado Nombre ==============================
        if( $('titulo').val() == '' ){
            errores += '<p>Escriba un titulo</p>';
            $('titulo').css("border-bottom-color", "#F14B4B")
        } else{
            $('titulo').css("border-bottom-color", "#d1d1d1")
        }
         // Validado apellido ==============================
        if( $('texto').val() == '' ){
            errores += '<p>Ingrese un correo</p>';
            $('texto').css("border-bottom-color", "#F14B4B")
        } else{
            $('texto').css("border-bottom-color", "#d1d1d1")
        }
        
        // ENVIANDO MENSAJE ============================
        if( errores == '' == false){
           
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }
        // CERRANDO MODAL ==============================
        $('.btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});
*/

var getData=function() {
    var titulo = document.getElementById("titulo").value;
    var texto = document.getElementById("texto").value;
    if (titulo == "") {
        document.getElementById("titulo").focus();
        }else{
            if (texto == "") {
                document.getElementById("texto").focus();
            }else{
                console.log(titulo+""+texto);
                document.getElementById("titulo").value = "";
                document.getElementById("texto").value = "";
                document.getElementById("tutilo").focus();
                }
            }

        }
        //console.log("holaa");