$(document).ready(function() {
	var form = $("form#email_form");
	var status = $("#status");
	var status_text = $("#status .modal-content p");
	var email= $("form#email_form [name='email']");
	var nazwafirmy= $("form#email_form [name='nazwafirmy']");
	var nrtelefonu= $("form#email_form [name='nrtelefonu']");
	var url = $("form#email_form").attr("action");
	var loading_gif = $("#loading_ajax");

	$(document)
		.ajaxStart(function () {
			loading_gif.removeClass("invisible");
	})
		.ajaxStop(function () {
			loading_gif.addClass("invisible");
	});

  	form.submit(function(e) {
  		e.preventDefault();

	    //var formdata = form.serialize();//new FormData(form);
		//var formdata = new FormData(document.getElementById('email_form'));
		var formdata = $("form#email_form").serialize();

		status_text.html("");
		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
	            'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
	            'X-Requested-With': 'XMLHttpRequest'
	        }
	    });  
	    $.ajax({
	        url: url,//form.attr('action'),
	        type: "POST",    
	        data: formdata, 
            enctype:'multipart/form-data',
            dataType : 'json',
	        processData: false, 
		    success: function(data){
				status_text.html("");
				for (var index in data.message){
					// you can show both index and value to know how the array is indexed in javascript (but it should be the same way it was in the php script)
					status_text.append("<p>" + data.message[index]+'</p>');
				}
				/*
				for (var index in data.message){
					// you can show both index and value to know how the array is indexed in javascript (but it should be the same way it was in the php script)
					status.append("<p>" + data.message[index]+'</p>');
				}
				*/
				if (data != null && data.success) {
					//status.html('<p>' + data['message'] + '</p>');
					//form.reset();
					//form[0].reset();

					//status.removeClass("alert-danger");
					//status.addClass("alert-success");
					$("input[type=text], textarea").val("");
				}
				else
				{
					//status.removeClass("alert-success");
					//status.addClass("alert-danger");
				}
				//status.removeClass("invisible");
				status.css("display", "block");
		        },
	        error: function(data){
			    // Error...
				//status.removeClass("alert-success");
				//status.addClass("alert-danger");
				for (var index in data.message){
					// you can show both index and value to know how the array is indexed in javascript (but it should be the same way it was in the php script)
					status_text.append("<p>" + data.message[index]+'</p>');
				}
				//status.removeClass("invisible");
				status.css("display", "block");
			}
	    });

	});

	email.on("input", function() {
		if(!isEmail(email.val()))
		{
			email.addClass("wrong_input");
		}
		else
		{
			email.removeClass("wrong_input");
		}
		if(email.val().length==0) {
			email.removeClass("wrong_input");
		}
	});

	nrtelefonu.on("input", function() {
		if(nrtelefonu.val().length>7 && !isTelephoneNumber(nrtelefonu.val()))
		{
			nrtelefonu.addClass("wrong_input");
		}
		else
		{
			nrtelefonu.removeClass("wrong_input");
		}
		if(nrtelefonu.val().length==0) {
			nrtelefonu.removeClass("wrong_input");
		}
	});
});

function isEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}

function isTelephoneNumber(number) {
	var isTrue=false;
	var regex = /^[0-9]{3}(-|\s)?[0-9]{3}(-|\s)?[0-9]{3}$/;
	isTrue = regex.test(number);
	if(isTrue!=1)
	{
		regex = /^[0]?([0-9]{2})(-|\s)?[0-9]{3}(-|\s)?[0-9]{2}(-|\s)?[0-9]{2}$/;
		isTrue = regex.test(number);
	}
	return regex.test(number);
}