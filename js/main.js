
$('.toggle').click(function(){ //al hacer click hace la function animacion en la class formulario
    $('.formulario').animate({
         height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    }, "slow");
});


var getData = function(){
	var nombre  = document.getElementById("nombre").value;
	var apellido = document.getElementById("apellido").value;
	var contraseña = document.getElementById("contraseña").value;
	var email = document.getElementById("email").value;
	console.log(name+""+apellido+""+apellido+""+contraseña+""+email);
	



}