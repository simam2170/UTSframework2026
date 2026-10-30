<!-- main header -->
<header class="main-header header-style-one">
    <div class="header-lower">
        <div class="logo-box">
            <figure class="logo"><a href="{{ route('Home') }}"><img src="{{ asset('landing/images/logo.png') }}" alt=""></a></figure>
        </div>
        <div class="outer-box">
            <div class="menu-area">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="current dropdown"><a href="{{ route('Home') }}">Home</a>
                                <ul>
                                    <li><a href="{{ route('Home') }}">Home Page One</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{ route('Activities') }}">Activities</a>
                                <ul>
                                    <li><a href="{{ route('Activities') }}">Activities</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{ route('About') }}">Pages</a>
                                <ul>
                                    <li><a href="{{ route('About') }}">About Us</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{ route('Testimonial') }}">Elements</a>
                                <div class="megamenu">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 column">
                                            <ul>
                                                <li>
                                                    <h4>Elements</h4>
                                                </li>
                                                <li><a href="{{ route('Testimonial') }}">Testimonial Block</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown"><a href="{{ route('Blog') }}">Blog</a>
                                <ul>
                                    <li><a href="{{ route('Blog') }}">Our Blog</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('Contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="menu-right-content">
                <div class="support-box">
                    <div class="icon"><i class="flaticon-chat"></i></div>
                    <span>Call Anytime</span>
                    <h5><a href="tel:12463330079">+1- ( 246 ) 333 - 0079</a></h5>
                </div>
                <div class="search-box-outer">
                    <div class="dropdown">
                        <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-magnifying-glass"></i></button>
                        <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                            <div class="form-container">
                                <form method="get" action="{{ route('Blog') }}">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                        <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-box"><a href="{{ route('Home') }}"><i class="flaticon-shopping-cart"></i></a></div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-box">
            <div class="menu-area">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
            </div>
            <div class="menu-right-content">
                <div class="support-box">
                    <div class="icon"><i class="flaticon-chat"></i></div>
                    <span>Call Anytime</span>
                    <h5><a href="tel:12463330079">+1- ( 246 ) 333 - 0079</a></h5>
                </div>
                <div class="search-box-outer">
                    <div class="dropdown">
                        <button class="search-box-btn" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-magnifying-glass"></i></button>
                        <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                            <div class="form-container">
                                <form method="get" action="{{ route('Blog') }}">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                        <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-box"><a href="{{ route('Home') }}"><i class="flaticon-shopping-cart"></i></a></div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="{{ route('Home') }}"><img src="{{ asset('landing/images/logo-2.png') }}" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="{{ route('Home') }}"><span class="fab fa-twitter"></span></a></li>
                <li><a href="{{ route('Home') }}"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="{{ route('Home') }}"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="{{ route('Home') }}"><span class="fab fa-instagram"></span></a></li>
                <li><a href="{{ route('Home') }}"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->