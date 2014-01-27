<!doctype html>
<html lang="en">
<head>
	<?php require 'includes/head.php'; ?>
	<link rel="stylesheet" href="/css/contact.css">
	<title>Pierre-Yves Poujade, junior developer — Contact</title>
</head>
<body>
	<?php require 'includes/navbar.php'; ?>


    <div class="container">
    	<div class="page-header">
    		<h1>Let’s get in touch!</h1>
    	</div>

    	<div class="col-sm-6 col-md-6" id="emailMe">
    		<h2>Send me an email</h2>
	    	<form class="form-horizontal" id="sendEmailForm" role="form" method="post" action="/api/sendemail.php">
	    		<div class="form-group">
	    			<label for="senderName" class="col-md-4 control-label">Your name</label>
	    			<div class="col-md-8">
	    				<input type="text" class="form-control" name="senderName" id="senderName" placeholder="Bruce Wayne" required>
	    			</div>
	    		</div>
	    		<div class="form-group">
	    			<label for="senderEmail" class="col-md-4 control-label">Your email address</label>
	    			<div class="col-md-8">
	    				<input type="email" class="form-control" name="senderEmail" id="senderEmail" placeholder="bruce@wayneenterprises.com" required>
	    			</div>
	    		</div>
	    		<div class="form-group">
	    			<label for="senderMessage" class="col-md-4 control-label">Your message</label>
	    			<div class="col-md-8">
	    				<textarea class="form-control" name="senderMessage" id="senderMessage" rows="8" placeholder="Enter your message here." required></textarea>
	    			</div>
	    		</div>
	    		<div class="form-group">
	    			<div class="col-md-offset-4 col-md-8">
		    			<button type="submit" class="btn btn-default btn-lg btn-block">Send</button>
	    			</div>
	    		</div>
	    	</form>
	    	<div class="alert alert-success text-center hidden" id="mailSent"><strong>Geat!</strong> Your email was sent!<br>You will receive an answer on your <span id="quoteSenderEmail" class="italic"></span> soon.</div>
	    	<div class="alert alert-danger text-center hidden" id="mailNotSent"><strong>Woops!</strong> Something went wrong on our end, the email wasn’t sent.<br>Your message has been saved, press <a id="contingencyEmail">here</a> to send it with your favorite mail application.</div>
	    </div>

	    <div class="col-sm-2 col-md-2">
	    	<h2 class="text-center">Or</h2>
	    </div>

	    <div class="col-sm-4 col-md-4">
	    	<h2>Give me a call</h2>
	    	<form class="form" id="callMeForm" role="form" method="post" action="/api/arrangecallback.php">
	    		<div class="form-group">
	    			<label for="callerNumber" class="control-label">Enter you phone number below and be connected to me in a few seconds: </label>
    				<input type="tel" class="form-control" id="callerNumber" name="callerNumber" placeholder="(555) 123-1234" pattern="(\+?1-?)?(\(([2-9](?!00)\d{2}\) )|[2-9](?!00)\d{2} )-?[2-9]\d{2}-?\d{4}" required>
	    			<input type="hidden" name="lang" value="EN">
	    		</div>
	    		<div class="form-group">
	    			<div class="">
	    				<button type="submit" class="btn btn-default btn-lg btn-block">Call me</button>
	    			</div>
	    		</div>
	    	</form>
			<div class="hidden alert alert-success text-center" id="phoneRingingAlert"><strong>Great!</strong> Your phone is ringing...</div>
			<div class="hidden alert alert-danger text-center" id="errorAlert"><strong>Woops!</strong><br>Something went wrong on our end.<br>Why not send an email instead?</div>
	    </div>

    </div>

    <div class="hidden">
    	<button id="showAndroidKeyboard">Show Android keyboard</button>
    </div>

	<?php require 'includes/footer.php'; ?>

	<!-- form validation plugin -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.js"></script>
	<!-- custom phone number format definition for form validation plugin -->
	<script src="/js/jquery-validation/additional-methods-phoneUS.min.js"></script>


	<!-- jQuery form plugin for the ajaxSubmit() method -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.46/jquery.form.min.js"></script>
	<!-- custom jQuery includes -->
	<script src="/js/includes.js"></script>
	<!-- #callMeForm validation conditions -->
	<script src="/js/jquery-validation/validate-phone.js"></script>
	<script src="/js/jquery-validation/validate-email.js"></script>

	<!-- jQuery masked input plugin -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.3.1/jquery.maskedinput.min.js"></script>
	<!-- actual mask for #callerNumber -->
	<script src="/js/jquery-maskedinput/callerNumber-mask.js"></script>

	<!-- focus contact mode -->
	<script src="/js/focus.js"></script>


</body>
</html>