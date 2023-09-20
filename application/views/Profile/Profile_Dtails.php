<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 8vh;
  width: 20%;
  background-color: #ffffff;
  position: fixed;
  height: 100%;
  overflow: auto;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.user{
	padding: 2vh;
	display: flex;
	box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

}
.user .user_name{
	margin-left: 2vh;
}
#myorder ul{
	position: absolute;
}
#myorder button{
	margin-left: 30vh;
	margin-top: 60vh;
	background-color: blue;
	color:white;
	padding: 2vh 4vh;
	font-size: 2vh;
	display: flex;
	justify-content: center;
}
#myorder ul li a{
	font-size: 2vh;
}
li a {
  display: block;
  color: #000;
  padding: 16px 32px;
  font-size: 5vh;
  text-decoration: none;

}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
#AcountS{
	box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
#AcountS .part_first{
	margin-top:80vh;
	text-align: center;
}
.form_frist{
	padding: 8vh 16vh;
}
.form_frist input{
	padding: 2vh 4vh;
	border-radius: 2vh;
	border:1px solid #f1f1f1;
	margin-left: 15vh;
}
</style>
</head>
<body>

<ul>
  <li>
  	<div class="user">
  		<div class="user_icon">
  			<img src="http://localhost/ecommerce/Assets/img/user.png" height="60vh" width="60vh">
  		</div>
  		<div class="user_name">
  			<h3><?php 
  			$email = $_SESSION['email'];
  				echo $email;
  			 ?></h3>
  		</div>
  	</div>
  </li>
  <br>
  <br>
  <br>
  <li><a href="#myorder">My Order</a></li>
  <li><a href="#AcountS">Accont Setting</a></li>
  <li><a>Payment</a></li>
  <li><a>MY STUFF</a></li>
  <li><a href="<?= base_url("sign_in/logout/index"); ?>">Logout</a></li>
</ul>

<div style="margin-left:30%;padding:1px 16px;height:auto;">
	<button><a href="<?= base_url(); ?>">Home</a></button>
  <div id="myorder">
  		<ul>
  			<li><a><h2>Order Status</h2></a></li>
			<li><a><input type="checkbox">On the Way</a></li>
			<li><a><input type="checkbox">Delivered	</a></li>
			<li><a><input type="checkbox">Canceled</a></li>
			<li><a><input type="checkbox">Returned</a></li>
			<li><a><h2>Order Time</h2></a></li>
			<li><a><input type="checkbox">Last 30 Days</a></li>
			<li><a><input type="checkbox">2023</a></li>
			<li><a><input type="checkbox">2022</a></li>
			</ul>

			<div style="margin-left:40%;padding:1px 16px;height: 50vh;" >
  				<div id="myorder">
  					<button>shopping now</button>	
  				</div>
			</div>
  </div>
  <br>
  <div id="AcountS">
  	<div class="part_first"><h1>Profile Information</h1></div>
  	<div class="form_frist">
  		<form action="">
  			<span for="male">Male:
            	<input type="radio" name="gender" id="male" value="male" checked>
            </span>
        	<span for="female">Female:
        		<input type="radio" name="gender" id="female" value="female">
        	</span>
        	<span for="female">other:
        		<input type="radio" name="gender" id="female" value="female">
        	</span>
  		</form>

  	</div>
  </div>

</div>

</body>
</html>