$(document).ready(function(){
	$('#title').on('keyup', function(){
		$('#titlechange').html('Your name is:'+ $(this).val());
	});
	$.ajax('localhost', {
		dataType: 'json', 
		contentType: 'application/json',
		cache: false
	})
	.done(function(res){
		
	})
	$('body').on('click', '.item-box button', function(event){
		event.preventDefault();

		var id = +$(this).closest('.item-box').data('id');

		$.ajax('addItem.json', {
			data: {id: id},
			type: 'post',
			dataType: 'json',
			contentType: 'application/json'
		}).done(function(res){
			console.log(res);
			cart += res.price;
			$('#total_lbl').text('Total $'+cart);
		})
	})


	$('#hasPets').on('change',  function(){
		if ($(this).is(':checked')) {
			$('#pets-if').show();

		}
		else {
			$('#pets-if').hide();
			$('#pet').val('');
			$('#pet-feedback').empty();

		}
	})
	$('#hasPets').trigger('change');//checkbox
	$('#pet').on('change', function(){
		var pet = $(this).val();
		if (pet == 'Dog') {
			$('#pet-feedback').text('Dogs are great!');
		}
		else if(pet == 'Cat'){
			$('#pet-feedback').text('Cats are fun!');
		}
		else {
			$('#pet-feedback').empty();
		}


	})
	$('#pet').trigger('change');//para que no se quede marcado nada
	$('#your-form').on('submit', function(event){
		event.preventDefault();//para que no se actualice la pagina
		$.ajax('formSubmit.json', {
			type: 'post',
			data: $('#your-form').serialize();

		})
		.done(function (res) {
			$('#result').text(res.message);
		})

	})
});