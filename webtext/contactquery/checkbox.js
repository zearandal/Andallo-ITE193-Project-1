$(document).ready(function(){
    $("form").submit(function(){
 if ($('input:checkbox').filter(':checked').length < 1){
      $('.error').show();
 	return false;
 	}
 	else {
			$('.error').hide();
	return true;
		}
    });
});

