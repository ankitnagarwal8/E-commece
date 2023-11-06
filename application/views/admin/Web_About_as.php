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
                            <div class="card-body">
                                <h1>About As</h1>
                                <?php foreach($results1 as $result):  ?>
                                <form action="<?= base_url('admin/WEBABOUT'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Heading 1</label>
                                        <input type="text" name="head1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Heading 1" value="<?php echo $result['h1']; ?>">
    
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Paragraph 1</label>
                                        <input type="text" name="p1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Paragraph 1" value="<?php echo $result['p1']; ?>">
    
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Heading 2</label>
                                        <input type="text" name="head2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Heading 2" value="<?php echo $result['h2']; ?>">
    
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Paragraph 2</label>
                                        <input type="text" name="p2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Paragraph 2" value="<?php echo $result['p2']; ?>">
    
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Heading 3</label>
                                        <input type="text" name="head3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Heading 3" value="<?php echo $result['h3']; ?>">
    
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Paragraph 3</label>
                                        <input type="text" name="p3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Paragraph 3" value="<?php echo $result['p3']; ?>">
    
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <br>
                                    <?php echo "<p style='color:blue;'>".$this->session->flashdata('Web_About_as_data'),"</p>"; ?>
                            
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            <?php endforeach; ?>
                            <br>
                            <br>
                                <h1>About part 2 </h1>
                                <?php foreach($results2 as $result2): ?>
                                <form action="<?= base_url('admin/WEBABOUT/part2'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Heading 1</label>
                                        <input type="text" name="heading1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Heading 1" value="<?php echo $result2['paragraph']; ?>">
    
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <br>
                                    <?php echo "<p style='color:blue;'>".$this->session->flashdata('Web_About_as_data2'),"</p>"; ?>
                            
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            <?php endforeach; ?>
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