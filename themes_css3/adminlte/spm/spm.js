$(document).ready(function(){
	$('#intimation_mail').click(function(){
		var spm_id = $("#spm_id").val();
		$('#spm_modal_id').val(spm_id);
		$('#intimation_modal').modal("show");
	});
	$('#intimation_modal_btn').click(function(){
		var spm_id = $("#spm_modal_id").val();
		// alert(spm_id);
		$.ajax({
			url: "spm/list_of_spm_registration/send_email/"+ spm_id,
			type: "GET",
			success: function(resp)
					 {
					 	 // console.log(resp);
					 		$('#intimation_first_body').css('display','none');
					 		$('#intimation_modal_btn').css('display','none');
					 		$('#intimation_body').html(resp);
					 	 
					 },
			beforeSend: function()
					    {
					    	$('.loader_con').css('display','block');
					    }

		});
	});
});