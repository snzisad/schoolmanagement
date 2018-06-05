
$(function () {
 	$('.edit-notice-button').on('click',function(e){
 		var notice=$(this).parent().parent().parent().children("p");
 		
 		$('#notice-text-textarea').text(notice.text());
 		$('#display-field').val("0");
 		$('#id-field').val(notice.attr('notice-id'));

 		return true;
 	})

 	$('.edit-current-notice-button').on('click',function(e){
 		var notice=$('.current-notice-text').text();
 		
 		$('#notice-text-textarea').text(notice);
 		$('#display').val("1");

 		return true;
 	})

 	$('#catagory-selection').on('change',function(e){
 		var value=$(this).val();
 		if(value=='add-catagory')
 			$('#new-catagory-modal').modal('toggle');
 	});

});

function readLogoURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
		console.log(e.target.result);
            $('#uploaded-logo').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}


