$(document).ready(function() {
	$.validator.setDefaults({
		errorElement: 'div',
		errorClass: 'alert alert-danger text-center',
	});

// fixes issue when more than 2 classes in errorClass
// https://github.com/magicxie/jquery-validation/commit/f1dd69b92da40b9d64945a35633fbcaac0667691#diff-0
	var fixMultiClassIssueCallMe = $('#callMeForm').validate({
		rules: {
			callerNumber: {
				required: true,
				phoneUS: true,
			},
		},
		messages: {
			callerNumber: {
				required: '<strong>Woops!</strong> Your phone number is required.',
				phoneUS: '<strong>Woops!</strong> Your phone number must be in North America.',
			},
		},
		// prevents the input from receiving the errorClass
		highlight: $.noop,
		validClass: '',
		submitHandler: function(form) {
			$(form).ajaxSubmit({
				dataType: 'json',
				success: function(jsonAnswer) {
					console.log(jsonAnswer);
					if (jsonAnswer.callSpooled) {
						fadeFeedback('#callMeForm', '#phoneRingingAlert');
					} else {
						fadeFeedback('#callMeForm', '#errorAlert');
					}
				},
				statusCode: {
					500: function() {
						fadeFeedback('#callMeForm', '#errorAlert');
					},
					404: function() {
						fadeFeedback('#callMeForm', '#errorAlert');
					},
				},
				error: function() {
					fadeFeedback('#callMeForm', '#errorAlert');
				},
			});

		}
	});

// fixes issue when more than 2 classes in errorClass
// https://github.com/magicxie/jquery-validation/commit/f1dd69b92da40b9d64945a35633fbcaac0667691#diff-0
	fixMultiClassIssueCallMe.errors = function() {
		var errorClass = this.settings.errorClass.split(" ").join('.');
	    return $(this.settings.errorElement + "." + errorClass, this.errorContext);
	}

});