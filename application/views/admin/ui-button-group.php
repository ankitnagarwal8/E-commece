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

                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button group</h4>
                                <p class="text-muted">Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>
                                </p>
                                <div class="button-group">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Left</button>
                                        <button type="button" class="btn btn-primary">Middle</button>
                                        <button type="button" class="btn btn-primary">Right</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button toolbar</h4>
                                <p class="text-muted">Combine sets of button groups into button toolbars for more complex components</p>
                                <div class="button-group">
                                    <div class="btn-toolbar">
                                        <div class="btn-group mr-2 mb-2">
                                            <button type="button" class="btn btn-primary">1</button>
                                            <button type="button" class="btn btn-primary">2</button>
                                            <button type="button" class="btn btn-primary">3</button>
                                            <button type="button" class="btn btn-primary">4</button>
                                        </div>
                                        <div class="btn-group mr-2 mb-2">
                                            <button type="button" class="btn btn-primary">5</button>
                                            <button type="button" class="btn btn-primary">6</button>
                                            <button type="button" class="btn btn-primary">7</button>
                                        </div>
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-primary">8</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Sizing</h4>
                                <p class="text-muted">Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each <code>.btn-group</code>, including each one when nesting multiple groups.</p>
                                <div class="button-group">
                                    <div class="btn-group mb-2 btn-group-lg">
                                        <button class="btn btn-primary" type="button">Left</button>
                                        <button class="btn btn-primary" type="button">Middle</button>
                                        <button class="btn btn-primary" type="button">Right</button>
                                    </div>
                                    <div class="btn-group mb-2">
                                        <button class="btn btn-primary" type="button">Left</button>
                                        <button class="btn btn-primary" type="button">Middle</button>
                                        <button class="btn btn-primary" type="button">Right</button>
                                    </div>
                                    <div class="btn-group mb-2 btn-group-sm">
                                        <button class="btn btn-primary" type="button">Left</button>
                                        <button class="btn btn-primary" type="button">Middle</button>
                                        <button class="btn btn-primary" type="button">Right</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Nesting</h4>
                                <p class="text-muted">Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.</p>
                                <div class="button-group">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">1</button>
                                        <button type="button" class="btn btn-primary">2</button>
                                        <div class="btn-group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Vertical variation</h4>
                                <div class="button-group">
                                    <div class="btn-group-vertical">
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <button class="btn btn-primary" type="button">Button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Vertical dropdown variation</h4>
                                <div class="button-group">
                                    <div aria-label="Vertical button group" role="group" class="btn-group-vertical">
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <div role="group" class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Dropdown</button>
                                            <div class="dropdown-menu"><a href="#" class="dropdown-item">Dropdown link</a> <a href="#" class="dropdown-item">Dropdown link</a>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <div role="group" class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Dropdown</button>
                                            <div class="dropdown-menu"><a href="#" class="dropdown-item">Dropdown link</a> <a href="#" class="dropdown-item">Dropdown link</a>
                                            </div>
                                        </div>
                                        <div role="group" class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Dropdown</button>
                                            <div class="dropdown-menu"><a href="#" class="dropdown-item">Dropdown link</a> <a href="#" class="dropdown-item">Dropdown link</a>
                                            </div>
                                        </div>
                                        <div role="group" class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Dropdown</button>
                                            <div class="dropdown-menu"><a href="#" class="dropdown-item">Dropdown link</a> <a href="#" class="dropdown-item">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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