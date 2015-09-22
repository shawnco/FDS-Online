<html>
	<head>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/foundation/bower_components/foundation/css/foundation.min.css?<?php print time(); ?>" />
		<link rel="stylesheet" href="/foundation/stylesheets/app.css?<?php print time(); ?>" />
		<script src="/foundation/bower_components/foundation/js/vendor/modernizr.js?<?php print time(); ?>"></script>
	</head>
	<body>
		<div class="row">
			<div id="main" class="small-12 columns">
				<div class="row">
					<img src="/images/100px_PyroSim_Logo.png"/>
					<div class="small-12 columns">
						<h1>Online Simulator</h1>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<p>Select a file to upload.  The server will run a simulation and you will be updated with its status.</p>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<form>
							<fieldset>
								<legend>FDS Upload</legend>
								<input type="file" name="file" />
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="footer" class="small-12 columns">
				<div class="row">
					<div class="small-12 columns">
						<p>Built with love by Alex Neises, Sean Pino, &amp; Shawn Contant.</p>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<!--	
							Versioning system:
							First number is current sprint
							Second number is day in sprint
							Third number is person who modified:
								1 is Alex Neises
								2 is Sean Pino
								3 is Shawn Contant
							Ex. Version 4.7.3 would be sprint 4, 7th day of sprint, last edited by Shawn.
						 -->
						<p>Version 1.5.1</p>
					</div>
				</div>
			</div>
		</div>

		<script src="/foundation/bower_components/foundation/js/vendor/jquery.js"></script>
		<script src="/foundation/bower_components/foundation/js/vendor/fastclick.js"></script>

		<script src="/foundation/bower_components/foundation/js/foundation.min.js"></script>

		<script>
			$(document).foundation();
		</script>
	</body>
</html>