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
<style>
    .Admin_Details input{
        width:40%;
        height: 3rem;
        margin: 2rem;
        border:none;
    }
</style>

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
                    <?php foreach ($results as $result): ?>
                    <div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                 <img src="<?= base_url();?>photos/<?php echo $result['image']; ?>" height="200rem" width="200rem" style="border-radius: 50%;">
                            </div>
                        </div>   
                    </div>
                    
                    <div class="col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <h1>Admin Details</h1>
                                <form action="<?= base_url('admin/ADMIN_DATA/index'); ?>" method="post" enctype="multipart/form-data">
                                <div class="Admin_Details">
                                    <div class="row">
                                        <input type="text" name="frist_name" placeholder="Frist Name" value="<?php echo $result['frist_name'];  ?>">
                                        <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $result['last_name'];  ?>">
                                    </div>
                                    <div class="row">
                                        <input type="mobile" name="mobile" placeholder="Mobile Number"
                                        value="<?php echo $result['mobile'];  ?>">
                                        <input type="email" name="email" placeholder="Email" value="<?php echo $result['email'];  ?>">
                                    </div>
                                    <div class="row">
                                        <input type="date" name="DOB" placeholder="Date of Birth" value="<?php echo $result['DOB'];?>">
                                        <input type="text" name="address" placeholder="address" value="<?php echo $result['address'];  ?>">
                                    </div>
                                    <div class="row">
                                        <input type="file" name="image" placeholder="image">
                                        <input type="submit">
                                    </div>
                                    

                                </div>
                            </form>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                    <div class="col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <h1>Change Password</h1>
                                <form action="<?= base_url('admin/ADMIN_DATA/changepass'); ?>" method="post">
                                <div class="Admin_Details">
                                    <div class="row">
                                        <input type="password" name="Old_password" placeholder="Old Password">
                                        <input type="password" name="N_password" placeholder="NEW Password">
                                        <input type="submit" name="">
                                    </div>
                                    <?php echo "<p style='color:red;'>".$this->session->flashdata('passwordchanger')."</p>"; ?>
                                </div>
                                </form>
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