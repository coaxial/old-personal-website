<!doctype html>
<html lang="en">
<head>
	<?php require 'includes/head.php'; ?>
	<link rel="stylesheet" href="/css/portfolio.css">
	<title>Pierre-Yves Poujade, junior developer — Portfolio</title>
</head>
<body>
	<?php require 'includes/navbar.php'; ?>


    <div class="container">
    	<div class="page-header">
    		<h1>Programming portfolio</h1>
    	</div>
    	<div class="row">
    		<div class="portfolio-project col-sm-offset-1 col-sm-10">
		    	<h2>This website</h2>
		    	<p class="lead">A digital portfolio and online résumé.</p>
		    	<div class="row">
			    	<div class="portfolio-project-image thumbnail col-md-2 col-sm-3 col-xs-2">
			    		<img src="/images/thiswebsite_thumb.png" alt="a thumbnail showing source code lines" class="img-rounded">
			    	</div>
					<div class="portoflio-project-details col-md-10 col-sm-9 col-xs-10">
						<p><strong>When? </strong>2013 – Today</p>
						<p><strong>Lines of code: </strong>≈1000 (excluding third party libraries/frameworks)</p>
						<p><strong>Contribution: </strong>Sole developer, System administrator</p>
						<p><strong>Buzzwords: </strong>HTML, CSS, jQuery, PHP, JSON, AJAX, nginx and Debian.</p>
						<p><strong>What does it do?</strong> It showcases my résumé, my projects and allows visitors to get in touch with me by either receving an immediate callback on any phone number or sending me an email. The website is hosted on an unmanaged VPS.</p>
						<p><strong>Source code: </strong>Available <a href="https://github.com/Coaxial/personal-website" target="_blank">here</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
	    	<div class="portfolio-project col-sm-offset-1 col-sm-10">
		    	<h2>Oysterisk</h2>
		    	<p class="lead">A bespoke VoIP telephone system.</p>
		    	<div class="row">
			    	<div class="portfolio-project-image thumbnail col-md-2 col-sm-3 col-xs-2">
			    		<img src="/images/oysterisk_thumb.jpg" alt="a picture of Jerry Seinfield using a banana as a phone" class="img-rounded">
			    		<div class="caption">
			    			<p><small>Image credit: GQ magazine Nov. 2007.</small></p>
			    		</div>
			    	</div>
					<div class="portoflio-project-details col-md-10 col-sm-9 col-xs-10">
						<p><strong>When? </strong>2012 – Today</p>
						<p><strong>Lines of code: </strong>≈600 (excluding .conf files)</p>
						<p><strong>Contribution: </strong>Sole developer, System administrator.</p>
						<p><strong>Buzzwords: </strong>Asterisk, VoIP, SIP, Bash scripting, Regexes and Debian.</p>
						<p><strong>What does it do? </strong>Oysterisk is a contraption between Oyster (as in the world is your oyster) and Asterisk. It allows my partner and I to stay in touch with our families in Europe without paying over the head for calls. We can place calls from any PSTN phone (via a callback and authentication) or any SIP softphone and our families reach us using local numbers from their locations. The system can also record important calls and email them as MP3 files.</p>
						<p><strong>Source code: </strong>Available <a href="https://github.com/Coaxial/oysterisk" target="_blank">here</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
	    	<div class="portfolio-project col-sm-offset-1 col-sm-10">
		    	<h2>click2call</h2>
		    	<p class="lead">A backend to originate phone calls from a webpage.</p>
		    	<div class="row">
			    	<div class="portfolio-project-image thumbnail col-md-2 col-sm-3 col-xs-2">
			    		<img src="/images/click2call_thumb.png" alt="a thumbnail showing source code lines" class="img-rounded">
			    	</div>
					<div class="portoflio-project-details col-md-10 col-sm-9 col-xs-10">
						<p><strong>When? </strong>2014</p>
						<p><strong>Lines of code: </strong>155</p>
						<p><strong>Contribution: </strong>Sole developer</p>
						<p><strong>Buzzwords: </strong>Asterisk, VoIP, SIP, PHP, TCP sockets, JSON and AJAX.</p>
						<p><strong>What does it do? </strong>This script allows a user to receive a callback after entering her number on a webpage. It uses Asterisk's TCP socket to originate the call, it is non-blocking and returns a JSON object containing the result of the request.</p>
						<p><strong>Source code: </strong>Available <a href="https://github.com/Coaxial/click2call" target="_blank">here</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
	    	<div class="portfolio-project col-sm-offset-1 col-sm-10">
		    	<h2>Oycommit</h2>
		    	<p class="lead">A bash script to commit and push changes to Oysterisk’s git.</p>
		    	<div class="row">
			    	<div class="portfolio-project-image thumbnail col-md-2 col-sm-3 col-xs-2">
			    		<img src="/images/oycommit_thumb.png" alt="a thumbnail showing source code lines" class="img-rounded">
			    	</div>
					<div class="portoflio-project-details col-md-10 col-sm-9 col-xs-10">
						<p><strong>When? </strong>2013</p>
						<p><strong>Lines of code: </strong>76</p>
						<p><strong>Contribution: </strong>Sole developer</p>
						<p><strong>Buzzwords: </strong>Git and Bash scripting.</p>
						<p><strong>What does it do? </strong>This simple script provides an easy way to gather the relevant Oysterisk files, commit and push them to the git repository.</p>
						<p><strong>Source code: </strong>Available <a href="https://github.com/Coaxial/oycommit" target="_blank">here</a></p>
					</div>
				</div>
			</div>
		</div>
    </div>


	<?php require 'includes/footer.php'; ?>
</body>
</html>