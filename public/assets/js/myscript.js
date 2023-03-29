$(document).ready(function(){
	$('#btnLoad').click(function(){
		$.get("http://127.0.0.1:8000/json3").done(function (data){
			console.table(data);
			$.each(data, function(key,product){
				//alert(key+": "+product.name);
				$('#tblProducts > tbody:last-child').append(
					'<tr>'+
					'<td>'+ product.id + '</td>' +
					'<td>'+ product.name + '</td>' +
					'<td>'+ product.description + '</td>' +
					'<td>'+ product.price + '</td>' +
					'<td>'+ product.category_id + '</td>' +
					'</tr>'
					
				);
			})
		})
	});
});