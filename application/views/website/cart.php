
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title></title>
</head>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

body {
  font-family: 'Manrope', sans-serif;
  background:#eee;
  margin: 0;
  padding: 0;
}

.size span {
  font-size: 11px;
}

.color span {
  font-size: 11px;
}

.product-deta {
  margin-right: 70px;
}

.gift-card:focus {
  box-shadow: none;
}

.links {
  background-color: white;
  color: white;
  width:100%;
}
.links a{
  background-color: #000000;
  color: white;
  width:100%;
  text-align: center;
  margin: 3px;
  text-decoration: none;
  padding: 6px;
}


.text-grey {
  color: #a39f9f;
}

.qty i {
  font-size: 11px;
}
</style>
<body>

<div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="p-2">
                        <h4>Shopping cart</h4>
                        
                    </div>

                    <?php foreach($results as $result): ?>
                    <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                        <div class="mr-1"><img class="rounded" src="<?php echo $result['image1']; ?>" width="70"></div>
                        <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold"><?php echo $result['name']; ?></span>
                         
                        </div>
                        <div class="d-flex flex-row align-items-center qty">
                            <h5 class="text-grey mt-1 mr-1 ml-1"><?php echo $result['qty']; ?></h5>
                        </div>
                        <div>
                            <h5 class="text-grey"><?php echo $result['price']; ?></h5>
                        </div>
                        <div>
                            <h5 class="text-grey"><?php echo $result['price']*$result['qty'];  ?></h5>
                        </div>
                        <div class="d-flex align-items-center"><a href="<?= base_url('cart/cart/remove/'.$result['rowid']); ?>"><i class="fa fa-trash mb-1 text-danger"></i></a></div>
                    </div>
                    <?php endforeach; ?>
                    <div class="d-flex flex-row align-items-center mt-3 p-2 bg-black rounded links">
                    	<a href="<?= base_url('shoping_Details/shoping_Details');?>" >continue shopping</a>
                    	<a href="<?= base_url('billing/chackout/index');?>">billing process</a>
                    </div>
                </div>
            </div>
        </div>
































</body>
</html>