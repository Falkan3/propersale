$(document).ready(function() {
	var form = $("form#email_form");
	var status = $("#email_form_response");

  	form.submit(function(e) {
  		e.preventDefault();
	    //var formdata = form.serialize();//new FormData(form);
		//var formdata = new FormData(document.getElementById('email_form'));
		var formdata = $("form#email_form").serialize();

	    status.html("");

		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
	            'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
	            'X-Requested-With': 'XMLHttpRequest'
	        }
	    });  
	    $.ajax({
	        url: "/mail",//form.attr('action'),
	        type: "POST",    
	        data: formdata, 
            enctype:'multipart/form-data',
            dataType : 'json',
	        processData: false, 
		    success: function(data){
				status.html("");
				console.log(data)
				if (data != null && data.success) {
					//status.html('<p>' + data['message'] + '</p>');
					//form.reset();
					//form[0].reset();

					for (var index in data.message){
						// you can show both index and value to know how the array is indexed in javascript (but it should be the same way it was in the php script)
						status.append('<p>' + data.message[index] + '</p>');
					}
					$("input[type=text], textarea").val("");
				}
				else
				{
					status.html('<p>' + data['message'] + '</p>');
				}
				status.removeClass("invisible");
		        },
	        error: function(data){
			    // Error...
				//status.html('<p>' + data['message'] + '</p>');
				status.removeClass("invisible");
			}
	    });

	});
});