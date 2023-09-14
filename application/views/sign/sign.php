<html>
	<head>
		<title>sign in</title>
	</head>
	<style>
		*{
			margin: 0;
			padding: 0;
			
		}
		.body{
			width:40%;
			height: 60vh;
			margin-top: 30vh;
			margin-left: 60vh;
			background-color: red;
			border-radius: 20px;
		}
		.heading{
			padding: 4vh;
			font-size: 6vh;
			text-align: center;
		}
		.contact_details{
			padding:8vh;
			margin-left: 10vh;
		}
		label{
			font-size: 3vh;
			color: white;
		}
		input[type=number]{
			width:80%;
			height:6vh;
			text-align: center;
			border-radius: 10px;
			border: none;
		}
		input[type=email]{
			width:80%;
			height:6vh;
			text-align: center;
			border-radius: 10px;
			border: none;
		}
		input[type=submit]{
			margin-top:6vh;
			margin-left: 2vh;
			padding:2vh;
			width:15vh;
			background-color: #4777c4;
			color:whitesmoke;
			font-size: 3vh;
			barder:none;
			border-radius: 10px;
		}
		input[type=reset]{
			margin-top:6vh;
			margin-left: 12vh;
			padding:2vh;
			width:15vh;
			background-color: #4777c4;
			color:whitesmoke;
			font-size: 3vh;
			barder:none;
			border-radius: 10px;
		}

		


	</style>

 <body>
   <div class="body">
   	   
   	   		<div class="heading">sign in</div>
   	   		<div class="contact_details">
   	        	<form onsubmit="event.preventDefault(); validate();" method="post" action="<?= base_url('sign_in/sign/registeration'); ?>">
   	        		<div class="dynamicElement">
   	        			<div id="phone">
	  					<label>Mobile Number: </label>
	  					<br>
	  					<input type="number" id="my-input" placeholder="91########" value="">
  					</div>
   	        		</div>
  					
  					<input type="submit" value="submit">
  					<input type="reset" value="reset">
  					<button id="toggle" type="button">Use Email</button>
				</form>
			</div>
	</div>	
	

<script>
  function validate() {
    const myInput = document.querySelector('#phone input');
    if(myInput){
	    if (myInput.value.length != 10) {
	      alert('10 digit mobile number is required');
	    }else{
	    	document.querySelector("form").submit();
    }
}
document.querySelector("form").submit();
  }

const toggle = document.querySelector("#toggle")
const phone = document.querySelector("#phone")
const email = document.querySelector("#email")
const dynamicElement = document.querySelector(".dynamicElement")
toggle.onclick = () => {
	if(document.querySelector("#phone") !== null){
		//Hide phone, show email
		dynamicElement.innerHTML = '<div id="email"><label>Email: </label><br><input type="email" id="my-input" placeholder="example123@gmail.com" value="" name="email"></div>';
		toggle.innerHTML = "Use Phone"
	}
	else{
		//Hide email, show phone
		dynamicElement.innerHTML = '<div id="phone"><label>Mobile Number: </label><br><input type="number" id="my-input" placeholder="91########" value=""></div>';
		toggle.innerHTML = "Use Email"	
	}
}
  
</script>
 
 </body>
</html>