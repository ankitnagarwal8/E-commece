    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                 <?php
                                 // echo "<pre>";print_r($this->session->userdata());die;

                                 // echo "<pre>";print_r($_SESSION['logged_in']);die;



                                 if(isset($_SESSION['logged_in']) && (isset($_SESSION['email']))){

                                    // if($_SESSION['logged_in'] == 1) {
                                            echo "<a href=".base_url('home/Profile_Dtails').">Hello, ".$_SESSION['email']."</a>"; 
                                        // }
                                        // else{
                                        //     echo "<a href=".base_url('sign_in/sign').">Sign in</a>";
                                        // }
                                    }else{
                                        echo "<a href=".base_url('sign_in/sign').">Sign in</a>";
                                    }
                                    ?> 
                                
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="index.php"><img src="http://localhost/ecommerce/Assets/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="<?= base_url(); ?>">Home</a></li>
                            <li><a href="<?= base_url('shoping_Details/shoping_Details'); ?>">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="<?= base_url('home/about'); ?>">About Us</a></li>
                                    <li><a href="<?= base_url('home/shop_details'); ?>">Shop Details</a></li>
                                    <li><a href="<?= base_url('home/shopping_cart'); ?>">Shopping Cart</a></li>
                                    <li><a href="<?= base_url('home/checkout'); ?>">Check Out</a></li>
                                    
                                    <li><a href="<?= base_url('home/blog_details'); ?>">Blog Details</a></li>
                                    <?php
                                    if(isset($_SESSION['logged_in']) && (isset($_SESSION['email']))){
                                        echo"
                                    <li><a href=".base_url('home/Profile_Dtails').">Profile Details</a></li>";
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('home/blog'); ?>">Blog</a></li>
                            <li><a href="<?= base_url('home/contact'); ?>">Contacts</a></li>


                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="http://localhost/ecommerce/Assets/img/icon/search.png" alt=""></a>
                        <a href="#"><img src="http://localhost/ecommerce/Assets/img/icon/heart.png" alt=""></a>
                        <a href="#"><img src="http://localhost/ecommerce/Assets/img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>