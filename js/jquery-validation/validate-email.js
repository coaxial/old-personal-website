$(document).ready(function() {
	$.validator.setDefaults({
		errorElement: 'div',
		errorClass: 'alert alert-danger text-center',
	});

// fixes issue when more than 2 classes in errorClass
// https://github.com/magicxie/jquery-validation/commit/f1dd69b92da40b9d64945a35633fbcaac0667691#diff-0
	var fixMultiClassIssueEmail = $('#sendEmailForm').validate({
		debug: true,
		rules: {
			senderName: {
				required: true,
			},
			senderEmail: {
				required: true,
				email: true,
			},
			senderMessage: {
				required: true,
			},
		},
		messages: {
			senderName: {
				required: '<strong>Woops!</strong> Your name is probably not Bruce Wayne',
			},
			senderEmail: {
				required: '<strong>Woops!</strong> Chances are this is not your email',
				email: '<strong>Woops!</strong> This is not a valid email adress',
			},
			senderMessage: {
				required: '<strong>Woops!</strong> Your message cannot be empty',
			},
		},
		highlight: $.noop,
		validClass: '',
		submitHandler: function(form) {
			// puts the form in an array to save the user from retyping the message body when clicking the mailto link in case of an error
			var serializedForm = {};
			$.each($(form).serializeArray(), function(index, field) {
				serializedForm[field.name] = field.value;
			});
			$(form).ajaxSubmit({
				dataType: 'json',
				success: function(jsonAnswer) {
					if (jsonAnswer.mailSent) {
						fadeFeedback('#sendEmailForm', '#mailSent');
						$('#quoteSenderEmail').append(jsonAnswer.senderEmail);
					} else {
// Takes the message from the form and puts it in the mailto link so the user doesn't have to retype her message
						fadeFeedback('#sendEmailForm', '#mailNotSent');
						$('#contingencyEmail').attr('href', 'mailto:me@example.com?subject=A%20visitor&#39;s%20message&body='+encodeURIComponent(serializedForm.senderMessage));
					}
				},
				statusCode: {
					500: function() {
						fadeFeedback('#sendEmailForm', '#mailNotSent');
						console.log(serializedForm);
						$('#contingencyEmail').attr('href', 'mailto:me@example.com?subject=A%20visitor&#39;s%20message&body='+encodeURIComponent(serializedForm.senderMessage));
					},
					404: function() {
						fadeFeedback('#sendEmailForm', '#mailNotSent');
						$('#contingencyEmail').attr('href', 'mailto:me@example.com?subject=A%20visitor&#39;s%20message&body='+encodeURIComponent(serializedForm.senderMessage));
					},
				},
				error: function() {
					fadeFeedback('#sendEmailForm', '#mailNotSent');
					$('#contingencyEmail').attr('href', 'mailto:pme@example.com?subject=A%20visitor&#39;s%20message&body='+encodeURIComponent(serializedForm.senderMessage));
				},
			});
		}
	});

// fixes issue when more than 2 classes in errorClass
// https://github.com/magicxie/jquery-validation/commit/f1dd69b92da40b9d64945a35633fbcaac0667691#diff-0
	fixMultiClassIssueEmail.errors = function() {
		var errorClass = this.settings.errorClass.split(" ").join('.');
	    return $(this.settings.errorElement + "." + errorClass, this.errorContext);
	}
});