<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login </title>
	<style>
		*{
			margin:0;
			padding: 0;
		}
		.form{
			background-color: red;
			border: none;
			border-radius: 20px;
			height:50vh;
			width:50vh;
			text-align: center;
			margin-left: 70vh;
			margin-top: 30vh;

		}
		.class_form{
				text-align: center;
		}
		.class_fields{
			margin-top: 10vh;
			text-align: center;
		}
		input{
			height: 6vh;
			width:80%;
			font-size: 4vh;
			margin-top: 2vh;
		}
	</style>
</head>
<body>
	<div class="form">
		<div class="class_from"><h1>Log in now</h1></div>
		<div class="class_fields">	
			<form method="post" action="<?= base_url('sign_in/login/logged'); ?>">
				<input type="email" name="email" placeholder="Enter Your Email" required><br>
				<input type="Password" name="Password" placeholder="Enter Your Password" required><br>
				<p style="Color:white;"><a href="<?= base_url('sign_in/sign'); ?>"><?php echo $this->session->flashdata('not_find_email'); ?></a></p>
				<input type="submit" name="">
			</form>
		</div>
	</div>
</body>
</html>