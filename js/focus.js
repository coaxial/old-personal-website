$(document).ready(function() {
	var mode = window.location.pathname;
	if (/^\/contact\/callme\/?$/.test(mode)) {
		$('#callerNumber').focus();
	}
	if (/^\/contact\/emailme\/?$/.test(mode)) {
		$('#senderName').focus();
	}
});

