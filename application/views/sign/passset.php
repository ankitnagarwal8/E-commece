<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pass set</title>
</head>
<body>
	<h1>Set Password</h1>
	<form method="post" action="<?= base_url('sign_in/sign/Setpass');  ?>">
		<input type="Password" name="pass1" id="pass1" placeholder="Enter password">
		<input type="Password" name="pass2" id="pass2" placeholder="Enter password">
		<span></span>
		<input type="submit">
	</form>

	<script>
		var pass1 = getElementById('pass1');
		var pass2 = getElementById('pass2');

		if(pass1 === pass2){
			document.write('Please Enter Password Same');
		}

	</script>

</body>
</html>