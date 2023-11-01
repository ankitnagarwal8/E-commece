
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="<?= base_url('admin/ADMIN'); ?>">
                    <b class="logo-abbr"><img src="http://localhost/ecommerce/Assets/Admin/images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="http://localhost/ecommerce/Assets/Admin/images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="http://localhost/ecommerce/Assets/Admin/images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">3</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Adam Smith</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Barak Obama</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Hilari Clinton</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hello</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">5</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="<?= base_url('admin/ADMIN/app_profile'); ?>"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('admin/ADMIN/'); ?>">Home 1</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Layouts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('admin/ADMIN/Blank'); ?>">Blank</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/OneColumn'); ?>">One Column</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Twocolumn'); ?>">Two column</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/layout_compact_nav'); ?>">Compact Nav</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/layout_vertical'); ?>">Vertical</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Horizontal'); ?>">Horizontal</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Boxed'); ?>">Boxed</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Wide'); ?>">Wide</a></li>
                            
                            
                            <li><a href="<?= base_url('admin/ADMIN/layout_fixed_header'); ?>">Fixed Header</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/layout_fixed_sidebar'); ?>">Fixed Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Apps</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('admin/ADMIN/Inbox'); ?>">Inbox</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Read'); ?>">Read</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Compose'); ?>">Compose</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Order</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('admin/ADMIN/Order_Details'); ?>">ORDER DETAILS</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Calender'); ?>">Calender</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('admin/ADMIN/Flot'); ?>">Flot</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Morris'); ?>">Morris</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Chartjs'); ?>">Chartjs</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Chartist'); ?>">Chartist</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Sparkline'); ?>">Sparkline</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Peity'); ?>">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">UI Components</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">UI Components</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('admin/ADMIN/Accordion'); ?>">Accordion</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Alert'); ?>">Alert</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Badge'); ?>">Badge</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Button'); ?>">Button</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/ButtonGroup'); ?>">Button Group</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Cards'); ?>">Cards</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Carousel'); ?>">Carousel</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Dropdown'); ?>">Dropdown</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/ListGroup'); ?>">List Group</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/MediaObject'); ?>">Media Object</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Modal'); ?>">Modal</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Pagination'); ?>">Pagination</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Popover'); ?>">Popover</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Progressbar'); ?>">Progressbar</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Tab'); ?>">Tab</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Typography'); ?>">Typography</a></li>
                        <!-- </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                        </a>
                        <ul aria-expanded="false"> -->
                            <li><a href="<?= base_url('admin/ADMIN/Nestedable'); ?>">Nestedable</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/uc_NouiSlider'); ?>">Noui Slider</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/SweetAlert'); ?>">Sweet Alert</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Toastr'); ?>">Toastr</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/ADMIN/Widget'); ?>" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                        </a>
                    </li>
                    <li class="nav-label">Forms</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('admin/ADMIN/BasicForm'); ?>">Basic Form</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/FormValidation'); ?>">Form Validation</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/StepForm'); ?>">Step Form</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Editor'); ?>">Editor</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Picker'); ?>">Picker</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('admin/ADMIN/BasicTable'); ?>" aria-expanded="false">Basic Table</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/DataTable'); ?>" aria-expanded="false">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Pages</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('admin/ADMIN/Login'); ?>">Login</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/Register'); ?>">Register</a></li>
                            <li><a href="<?= base_url('admin/ADMIN/LockScreen'); ?>">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="<?= base_url('admin/ADMIN/Error404'); ?>">Error 404</a></li>
                                    <li><a href="<?= base_url('admin/ADMIN/Error403'); ?>">Error 403</a></li>
                                    <li><a href="<?= base_url('admin/ADMIN/Error400'); ?>">Error 400</a></li>
                                    <li><a href="<?= base_url('admin/ADMIN/Error500'); ?>">Error 500</a></li>
                                    <li><a href="<?= base_url('admin/ADMIN/Error503'); ?>">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/ADMIN_DATA/Logout'); ?>" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">logout</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
