<!DOCTYPE HTML>
<html>
<head>
<title>.:: TASTE & NAKED Management ::.</title>

<link href="<?=base_url()?>assets/login.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!-- -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>
<!-- contact-form -->	
<div class="message warning">
<div class="inset">
	<div class="login-head">
		<span style="font-size:30px;color:white;">.:: TASTE & NAKED Management ::.</span>
	</div>
		<form action="<?=base_url()?>CONTROL/login" method="post">
			<li>
				<input type="text" class="text" name="username" placeholder="Username" required><i class="fa fa-user-secret" aria-hidden="true"></i>
			</li>
				<div class="clear"> </div>
			<li>
				<input type="password" name="password" placeholder="Password" required> <i class="fa fa-key" aria-hidden="true"></i>
			</li>
			<div class="clear"> </div>
			<div class="submit">
				<input type="submit" name="bt" value="Sign in" >
				<div class="clear">  </div>	
			</div>
				
		</form>
		</div>					
	</div>
	</div>
	<div class="clear"> </div>
</body>
</html>