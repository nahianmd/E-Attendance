 <!DOCTYPE html>
 <html>
 <head>
 	<title>Registration Successful!</title>
 	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="sign.css">
 	<script type="text/javascript" src="sign.js"></script>
 </head>
 <body onload="setTimeout('successRedirect()',2000)">
	<div class="sign">
		<p id="title">Property</p><br>
		<div id="success-message">
			<p>Registration Successful!</p>
			<p id="wait">Please wait...</p>
			<div id="loading">
				<img src="background/loading.gif" style="display: block;" id="loadimage" align="center">
			</div>
		</div>
	</div>
 </body>
 </html>