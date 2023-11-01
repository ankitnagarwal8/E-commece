
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			font-family: 'Manrope', sans-serif;
  			background:#eee;

		}
		.head{
			text-align: center;
		}
		.product{
			padding: 5rem;
			color: gray;
		}
		.product_detals{
			width: 100%;
			height:300px;
			display: flex;
		}
		.product_detals img{
			width:80%;
		}
		.product_items{
			display: flex;
		}
		.product_items_part_2{
			width:100%;
			text-align: center;
			height:50%;
		}
		.payout{
			float: right;
			padding:5rem;
			display: flex;

		}
		.payout button{
			width:5rem;
			margin-left: 2rem;
			background-color: #000000;
			color:white;

		}
	</style>
</head>
<body>
	<div class="head">
		<h1>Billing Details</h1>
	</div>
	<?php $user =  $user_id; ?>

	<?php foreach ($results as $result):?>
		<form action="<?= base_url('billing/chackout/bill/'.$user); ?>">
	<div class="product">
		<div class="product_detals">
			<div class="product_image"	>
				<img src="<?php  echo $result['image1'];?>">
			</div>
			<div class="product_items">
				<div class="product_items_part">
					<div class="product_items_part_2">
						<h3><span>id:</span><span><?php  echo "       ".$result['id'];?></span></h3>
					</div>
					<div class="product_items_part_2">
						<h3><span>name</span><span><?php  echo "       ".$result['name'];?></span></h3>
					</div>
				</div>
				<div class="product_items_part">
					<div class="product_items_part_2">
						<h3><span>qty</span><span><?php  echo "       ".$result['qty'];?></span></h3>
					</div>
					<div class="product_items_part_2">
						<h3><span>price</span><span><?php  echo "       ".$result['price'];?></span></h3>
					</div>
				</div>
				<div class="product_items_part">
					<div class="product_items_part_2">
						<h3><span>subtotal price</span> <br><span><?php echo "          ".$result['price']*$result['qty'];  ?></span></h3>
					</div>
				</div>

			</div>

	
	</div>
	</div>
	<?php endforeach; ?>
	<?php $total = $this->cart->total();  ?>
		<div class="payout">
			<h2><?php echo '$'.$total.' USD'; ?></h2>
			<button name="payout" class="btn btn-success" id="rzp-button1">Pay</button>
		</div>

	</form>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "rzp_test_QKaA64n9F93cJo", // Enter the Key ID generated from the Dashboard
            "amount": "<?php echo $total * 100; ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "ankit",
            "description": "Transaction for ",
            "image": "https://example.com/your_logo",
            //"order_id": " //echo(rand(10,100));", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "callback_url": "<?=  base_url('billing/chackout/bill');  ?>",
            "prefill": {
                "name": "",
                "email": "",
                "contact": ""
            },
            "notes": {
                "address": ""
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        document.getElementById('rzp-button1').onclick = function(e) {
            rzp1.open();
            e.preventDefault();
        }
    </script> 	  

    <!-- <script>
        window.onload = function() {
            document.getElementById('rzp-button1').click();
        }
    </script> -->




</body>
</html>
