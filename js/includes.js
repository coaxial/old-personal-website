// fades out the form at formID and shows the feedback message at messageID
function fadeFeedback(formID, messageID) {
	$(formID).fadeOut('slow', function() {
		$(messageID).removeClass('hidden').css('display', 'block');
	});
}

function getURLArgs() {
	var hashes = {};
	var args = [];
	var hash = [];
	hashes = window.location.search.slice(1).split('&');
	for (var i = 0; i < hashes.length; i++) {
		hash = hashes[i].split('=');
		args.push(hash[0]);
		args[hash[0]] = hash[1];
	}
	return args;
}