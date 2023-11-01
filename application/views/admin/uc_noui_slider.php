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
    <link rel="stylesheet" href="http://localhost/ecommerce/Assets/Admin/plugins/nouislider/nouislider.min.css">
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
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Basic slider</h4>
                                <div id="basic-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Stepping and snapping to values</h4>
                                <div class="stepping-slider">
                                    <div id="slider-step"></div>
                                    <span class="example-val" id="slider-step-value"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider margin</h4>
                                <div class="margin-slider">
                                    <div id="slider-margin"></div>
                                    <span class="example-val" id="slider-margin-value-min"></span>
                                    <span class="example-val" id="slider-margin-value-max"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider limit</h4>
                                <div class="limit-slider">
                                    <div id="slider-limit"></div>
                                    <span class="example-val" id="slider-limit-value-min"></span>
                                    <span class="example-val" id="slider-limit-value-max"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider padding</h4>
                                <div class="padding-slider">
                                    <div id="slider-padding"></div>
                                    <span class="example-val" id="slider-padding-value-min"></span>
                                    <span class="example-val" id="slider-padding-value-max"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider tooltip</h4>
                                <div class="slider-tooltip py-2">
                                    <div id="slider-tooltips"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider behaviour (Drag)</h4>
                                <div class="slider-behaviour">
                                    <div id="behaviour"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider behaviour (Tap)</h4>
                                <div class="slider-behaviour">
                                    <div id="tap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider behaviour (Fixed dragging)</h4>
                                <div class="slider-behaviour">
                                    <div id="drag-fixed"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider behaviour (Snap)</h4>
                                <div class="snap">
                                    <div id="snap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider behaviour (hover)</h4>
                                <div class="snap">
                                    <div id="hover"></div>
                                    <span class="example-val mt-4 d-inline-block" id="hover-val"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider behaviour (unconstrained)</h4>
                                <div class="unconstrained">
                                    <div id="unconstrained" class="mb-4"></div>
                                    <span class="example-val" id="unconstrained-values"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider behaviour (combined)</h4>
                                <div class="combined">
                                    <div id="combined"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider range (left to right)</h4>
                                <div class="slider-range py-5">
                                    <div id="pips-range"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider range (right to left)</h4>
                                <div class="slider-range py-5">
                                    <div id="pips-range-rtl"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider range Vertical (top to bottom)</h4>
                                <div class="slider-range py-5">
                                    <div id="pips-range-vertical" class="slider-vertical"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider range Vertical (bottom to top)</h4>
                                <div class="slider-range py-5">
                                    <div id="pips-range-vertical-rtl" class="slider-vertical"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Pip positions</h4>
                                <div class="pip-position py-5">
                                    <div id="pips-positions"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Pip position stepped</h4>
                                <div class="pip-position py-5">
                                    <div id="pips-positions-stepped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Pips count</h4>
                                <div class="pips-count py-5">
                                    <div id="pips-count"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Pips count (stepped)</h4>
                                <div class="pips-count py-5">
                                    <div id="pips-count-stepped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Pips value</h4>
                                <div class="pips-values py-5">
                                    <div id="pips-values"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Pips values (stepped)</h4>
                                <div class="pips-values py-5">
                                    <div id="pips-values-stepped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Disabling a slider</h4>
                                <div class="slider-disabled py-5">
                                    <div id="disable1" class="mb-4"></div>
                                    <label>
                                        <input class="ml-2" type="checkbox" id="checkbox1">
                                        Disable slider
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Disabling a slider</h4>
                                <div class="slider-disabled py-5">
                                    <div id="disable2"></div>
                                    <label>
                                        <input type="checkbox" id="checkbox2">
                                        Disable handle 1
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" id="checkbox3">
                                        Disable handle 2
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Updating a slider</h4>
                                <div class="slider-update py-5">
                                    <div id="slider-update"></div>
                                    <span class="example-val d-block my-4" id="slider-update-value"></span>
                                    <button class="update-button btn btn-info" id="update-1">Set range [20, 50]</button>
                                    <button class="update-button btn btn-info" id="update-2">Set range [10, 40]</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider step</h4>
                                <div class="slider-step py-5">
                                    <div id="pips-steps"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Keyboard slider</h4>
                                <div id="keyboardslider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Working with dates</h4>
                                <div class="date-slider">
                                    <div id="slider-date"></div>
                                    <div class="example-val my-4" id="event-start"></div>
                                    <div class="example-val" id="event-end"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Using HTML5 input elements</h4>
                                <div class="input-element">
                                    <div id="html5"></div>
                                    <div class="inputs mt-4">
                                        <select class="form-control my-4" id="input-select"></select>
                                        <input class="form-control" type="number" min="-20" max="40" step="1" id="input-number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Non linear slider</h4>
                                <div class="nonlinear-slider">
                                    <div id="nonlinear"></div>
                                    <div class="outputs mt-4">
                                        <span class="example-val" id="lower-value"></span>
                                        <span class="example-val" id="upper-value"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Snapping between steps</h4>
                                <div class="nonlinear-slider">
                                    <div id="slider-snap"></div>
                                    <span class="example-val" id="slider-snap-value-lower"></span>
                                    <span class="example-val" id="slider-snap-value-upper"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Stepping in non-linear sliders</h4>
                                <div class="nonlinear-slider">
                                    <div id="slider-non-linear-step"></div>
                                    <span class="example-val" id="slider-non-linear-step-value"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Number formatting</h4>
                                <div class="format-slider">
                                    <div id="slider-format"></div>
                                    <input class="mt-4 form-control" title="Formatted number" id="input-format">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Getting and setting slider values</h4>
                                <div class="getnset-slider">
                                    <div id="slider"></div>
                                    <div class="logger mt-4">
                                        <button class="btn btn-info" id="write-button">Set to 20</button>
                                        <button class="btn btn-info" id="read-button">Read slider value</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Locking sliders together</h4>
                                <div class="locked-slider">
                                    <div class="slider" id="slider1"></div>
                                    <span class="example-val" id="slider1-span"></span>
                                    <div class="slider mt-4" id="slider2"></div>
                                    <span class="example-val" id="slider2-span"></span>
                                    <button class="btn btn-info mt-4" id="lockbutton" style="float: right; margin: 20px 0 0;">Lock</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="extra-padding py-5">
                                    <h4 class="card-title mb-5">Moving the slider by clicking pips</h4>
                                    <div class="slider-pips">
                                        <div class="slider" id="slider-pips"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Colored Connect Elements</h4>
                                <div class="slider-color">
                                    <div class="slider" id="slider-color"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Changing the slider by key press</h4>
                                <div class="keypress-slider pt-5">
                                    <div id="keypress"></div>
                                    <input type="text" class="form-control my-4" id="input-with-keypress-1">
                                    <input type="text" class="form-control" id="input-with-keypress-0">                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Skipping steps</h4>
                                <div class="skipping-slider">
                                    <div id="skipstep"></div>
                                    <span class="example-val" id="skip-value-lower"></span>
                                    <span class="example-val" id="skip-value-upper"></span>               
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Using the slider with huge numbers</h4>
                                <div class="hugenumber-slider">
                                    <div id="slider-huge"></div>
                                    <span class="example-val" id="huge-value"></span>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Creating a toggle</h4>
                                <div class="toggle-slider">
                                    <div id="slider-toggle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="extra-padding py-5">
                                    <h4 class="card-title mb-5">Soft limits</h4>
                                    <div class="softlimit-slider">
                                        <div id="soft"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider direction</h4>
                                <div class="slider-direction">
                                    <div id="slider-direction"></div>
                                    <div class="example-val" id="field"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="extra-padding py-5">
                                    <h4 class="card-title mb-5">Color picker</h4>
                                    <div class="colorpicker-slider">
                                        <div class="sliders" id="red"></div>
                                        <div class="sliders" id="green"></div>
                                        <div class="sliders" id="blue"></div>
                            
                                        <div id="result"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider orientation</h4>
                                <div class="slider-orientation">
                                    <div id="slider-vertical" class="slider-vertical"></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
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

    <script src="http://localhost/ecommerce/Assets/Admin/plugins/nouislider/nouislider.min.js"></script>
    <script src="http://localhost/ecommerce/Assets/Admin/plugins/wnumb/wNumb.js"></script>
    <script src="http://localhost/ecommerce/Assets/Admin/js/plugins-init/nouislider-init.js"></script>

</body>

</html>