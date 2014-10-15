$(function (){
	$('.showrandomname').click(function(){
		$.ajax({
			type: 'POST',
			url: 'modules/mod_randomname/ajax.php',
			data: {
				'button' : 'pressed'
			},
			success: function(data){
				$('.name_output').html(data).fadeIn();
			}
		});
	});
});