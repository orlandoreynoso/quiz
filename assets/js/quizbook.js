(function($){

$('#quizbook ul li .respuesta').on('click', function (){
	$(this).siblings().removeClass('seleccionada');
	$(this).siblings().removeAttr('data-seleccionada');
	$(this).addClass('seleccionada');
	$(this).attr('data-seleccionada', true);

});


$('#quizbook_enviar').on('submit', function (e){

	e.preventDefault();

	var respuestas = $('[data-seleccionada]');

	var respuestas_id = [];
	//console.log(respuestas);
	$.each(respuestas, function(llave, valor){

		respuestas_id.push(valor.id);
//		console.log(llave);

	});
	
	console.log(respuestas_id);

	var datos = {
		action: 'quizbook_resultados',
		data: respuestas_id
	}
	//console.log(datos);

	/*
	* Abrir conexión de Ajax
	*/

	$.ajax({
		url: admin_url.ajax_url,
		type: 'post',
		data: datos
	}).done(function (respuesta){
			console.log(respuesta);
	});
});

//console.log(admin_url);

})(jQuery);
