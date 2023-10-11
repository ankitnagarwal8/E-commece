<!-- https://dummyjson.com/products -->
<!-- https://jsonplaceholder.typicode.com/posts -->
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
	width:86%;
	padding: 10vh;
	box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
	float:left;
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
.container{
	padding: 8vh;
}
.container .button{
	height:6vh;
	width: 16vh;
	padding: 2vh 4vh;
	background-color: #feefef;
	border: none;
	border-radius: 10px;
	float:right;
}
.order_details{
	display: flex;
	border: 1px solid black;
	margin-top:7vh;

}
.order_head{
	width:20%;
	border: 1px solid black;
	
}
.order_record{
	width: 80%;
	float: left;

}
.order_record button{
	margin-left: 40vh;
	margin-top: 30vh;
	height: 8vh;
	width:16vh;
	background-color:#ff7744;
	border: none;


}
.AcountS_head{
	text-align: center;
}
.Account_Details{
	padding: 5vh;
	margin-left: 5vh;
}
.Account_Details input[type=text],input[type=number],input[type=date]{
	height:4vh;
	width: 40vh;
	margin-left: 5vh;
	margin-top: 2vh;
}
.Account_Details span{
	margin-left: 5vh;
	margin-top: 3vh;
}
.Account_Details input[type=file],input[type=submit]{
		margin-left: 5vh;
	margin-top: 3vh;
}
</style>
</head>
<body>
<?php 
foreach ($results as $result):
 ?>
<ul>
  <li>
  	<div class="user">
  		<div class="user_icon">
  			<!--  -->
  			<?php
  			$photo = $result['photo']; 

  			if(!empty($photo)){
  					echo "<img src=http://localhost/ecommerce/photos/".$result['photo']." height='60vh' width='60vh'>";
  			}else{
  				echo "<img src='http://localhost/ecommerce/Assets/img/user.png' height='60vh' width='60vh'>";
  			}

  			?>
  		</div>
  		<div class="user_name">
  			<h3><?php echo $result['Frist_Name']."&nbsp".$result['Last_Name']; ?></h3>
  		</div>
  	</div>
  </li>
  <br>
  <br>
  <br>
  <li><a href="#order_details">My Order</a></li>
  <li><a href="#AcountS">Accont Setting</a></li>
  <li><a>Payment</a></li>
  <li><a>MY STUFF</a></li>
  <li><a>Password</a></li>
  <li><a href="<?= base_url("sign_in/logout/index"); ?>">Logout</a></li>
</ul>

<div class="container" style="margin-left:30%;padding:1px 16px;height:auto;">
	<button class="button"><a href="<?= base_url(); ?>">Home</a></button>
  		<div class="order_details" id="order_details">
  			<div class="order_head">
  				<span><h1>Order status</h1></span>
  				<span><h5><input type="checkbox">On the way</h5></span>
  				<span><h5><input type="checkbox">Delivered</h5></span>
  				<span><h5><input type="checkbox">Canceled</h5></span>
  				<span><h5><input type="checkbox">Return</h5></span>
  				<span><h1>Order time</h1></span>
  				<span><h5><input type="checkbox">Last 30 days</h5></span>
  				<span><h5><input type="checkbox">2023</h5></span>
  				<span><h5><input type="checkbox">2022</h5></span>
  				<span><h5><input type="checkbox">2021</h5></span>
  				<span><h5><input type="checkbox">2020</h5></span>
  			</div>
  			<div class="order_record">
  					<button><a>Shopping Now</a></button>
  			</div>
  		</div>
  		<div class="AcountS" id="AcountS">
  			<div class="AcountS_head"><h1>Account Infomation</h1></div>
  			<div class="Account_Details">
  				<form action="<?= base_url('Profile/Profile'); ?>" method="post" enctype="multipart/form-data">
  					<input type="text" name="F_name" placeholder="Frist Name" value="<?php echo $result['Frist_Name']; ?>">
  					<input type="text" name="L_name" placeholder="Last Name" value="<?php echo $result['Last_Name']; ?>"><br>
  					<input type="number" name="m_num" placeholder="mobile Number" value="<?php echo $result['Mobile']; ?>"><input type="date" name="DOB" placeholder="DOB"value="<?php echo $result['DOB']; ?>"><br>
  					<span>Male<input type="radio" name="gender" <?php if($result['Gender'] === "male") echo "checked=checked"; ?> value="male"></span>

  					<span>Female<input type="radio" name="gender" <?php if($result['Gender'] === "female") echo "checked=checked"; ?> value="female"></span>

  					<span>other<input type="radio" name="gender" <?php if($result['Gender'] === "other") echo "checked=checked"; ?> value="other"></span><br>

  					<input type="text" name="address" placeholder="Address" value="<?php echo $result['Address']; ?>"><br>
  					<input type="text" name="pan_name" placeholder="Pan fullName" value="<?php echo $result['Pan_Full_Name']; ?>">
  					<input type="text" name="pan_number" placeholder="Pan Number"value="<?php echo $result['Pan_Number']; ?>"><br>
  					<input type="file" name="image"><br>
  					<input type="submit" name="">
  				</form>
  			</div>
  		</div>
  </div>
</div>
<?php endforeach;  ?>
</body>
</html>