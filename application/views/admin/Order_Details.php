<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/ecommerce/Assets/Admin/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="http://localhost/ecommerce/Assets/Admin/css/style.css" rel="stylesheet">

</head>

<body>

<?php include('header.php'); ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" >
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                         <th>order id</th>
                                         <th>userid</th>
                                         <th>product name</th>
                                         <th>product id</th>
                                         <th>qty</th>
                                         <th>product price</th>
                                         <th>product subtotal</th>
                                         <th>status</th>
                                         <th>order date</th>
                                         <th>product ordertime</th>
                                         <th>Acssept</th>
                                         <th>Reject</th>
                                     </tr>
                                    </thead>
                                     <?php foreach($results as $result): ?>
                                        <?php $id = $result['id']; ?>
                                    <tbody>
                                       <tr>
                                            <td><?php echo $result['id']; ?></td>
                                            <td><?php echo $result['user_ids']; ?></td>
                                            <td><?php echo $result['product_name']; ?></td>
                                            <td><?php echo $result['product_id']; ?></td>
                                            <td><?php echo $result['qty']; ?></td>
                                            <td><?php echo $result['product_price']; ?></td>
                                            <td><?php echo $result['product_sub_total']; ?></td>
                                            <td><?php
                                                if($result['status']==0){
                                                    echo "pending";
                                                }else{
                                                    echo "accept";
                                                } 
                                                ?>                                               
                                            </td>
                                            <td><?php echo $result['order_date']; ?></td>
                                            <td><?php echo $result['order_time']; ?></td>
                                            <td><a class="btn btn-primary" href="<?= base_url("admin/ORDER/AccseptOrder/".$id); ?>" role="button">accept</a></td>
                                            <td><a class="btn btn-danger" href="<?= base_url("admin/ORDER/RejectOrder/".$id); ?>" role="button">Reject</a></td>

                                        </tr>  
                                    </tbody>
                                    <?php endforeach; ?> 
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="http://localhost/ecommerce/Assets/Admin/plugins/common/common.min.js"></script>
    <script src="http://localhost/ecommerce/Assets/Admin/js/custom.min.js"></script>
    <script src="http://localhost/ecommerce/Assets/Admin/js/settings.js"></script>
    <script src="http://localhost/ecommerce/Assets/Admin/js/gleek.js"></script>
    <script src="http://localhost/ecommerce/Assets/Admin/js/styleSwitcher.js"></script>

</body>

</html>