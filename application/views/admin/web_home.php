
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
                <h1>Hero secation</h1>
               <?php foreach($results as $result): ?>
                <form action="<?= base_url('admin/WEBHOME'); ?>" method="post" enctype="multipart/form-data">
                          <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label" >Heading 6</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="heading_6" value="<?php echo $result['heading_6'] ?>">
                                </div>
                          </div>
                           <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Heading 2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="heading_2" value="<?php echo $result['heading_2']; ?>">
                                </div>
                          </div>
                          <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Paragraph</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="paragraph_1" value="<?php echo $result['paragraph_1']; ?>">
                                </div>
                          </div>
                          <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Instagram</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="insta" value="<?php echo $result['instagram']; ?>">
                                </div>
                          </div>
                          <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">FaceBook</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="face_book" value="<?php echo $result['face_book']; ?>">
                                </div>
                          </div>
                          <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="twitter" value="<?php echo $result['twitter']; ?>">
                                </div>
                          </div>
                          <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Pinterest</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="pinterest" value="<?php echo $result['pinterest']; ?>">
                                </div>
                          </div>
                          <div class="mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control" type="file" id="formFile" name="image">
                                <?php echo "<p style='color:blue;'>".$this->session->flashdata('web_home_data'),"</p>"; ?>
                          </div>
                          <div class="mb-3 row"><button type="submit" class="btn btn-primary btn-lg btn-block" onclick="myFunction()">Update</button>

                          </div>
                </form>
                <?php endforeach; ?>

                <h1>Catagary secation</h1>

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